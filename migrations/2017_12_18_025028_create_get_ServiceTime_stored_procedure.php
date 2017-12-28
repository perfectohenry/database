<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGetServiceTimeStoredProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("

CREATE PROCEDURE get_ServiceTime(
    @codigo nvarchar(6),
    @fecha date,
    @cts int/*,
    @date date output*/
    /*,
    @fiuccontracts int output,
    @fieccontracts int output*/
)
AS
BEGIN
    /* RESULTADO */

    DECLARE @RESULTADO AS TABLE(
        /*ID INT NOT NULL PRIMARY KEY IDENTITY(1,1),*/
        CODIGO NVARCHAR(6),
        APPYEARS INT,
        APPMONTHS INT,
        APPDAYS INT,
        AUMYEARS INT,
        AUMMONTHS INT,
        AUMDAYS INT,
        DISYEARS INT,
        DISMONTHS INT,
        DISDAYS INT,
        YEARS INT,
        MONTHS INT,
        DAYS  INT
    )

    DECLARE @APPRES AS TABLE(
        ID INT NOT NULL PRIMARY KEY IDENTITY(1,1),
        CODIGO NVARCHAR(6),
        APPYEARS INT,
        APPMONTHS INT,
        APPDAYS INT
    )
    DECLARE @AUMRES AS TABLE(
        ID INT NOT NULL PRIMARY KEY IDENTITY(1,1),
        CODIGO NVARCHAR(6),
        AUMYEARS INT,
        AUMMONTHS INT,
        AUMDAYS INT
    )
    DECLARE @DISRES AS TABLE(
        ID INT NOT NULL PRIMARY KEY IDENTITY(1,1),
        CODIGO NVARCHAR(6),
        DISYEARS INT,
        DISMONTHS INT,
        DISDAYS INT
    )
    DECLARE @RES AS TABLE(
        ID INT NOT NULL PRIMARY KEY IDENTITY(1,1),
        CODIGO NVARCHAR(6),
        YEARS INT,
        MONTHS INT,
        DAYS INT
    )


    DECLARE @FINTER DATE, @FNOMB DATE
    DECLARE @DIFFFNOMB AS TABLE(
        ID INT NOT NULL PRIMARY KEY IDENTITY(1,1),
        DIFFFNOMBYEARS INT,
        DIFFFNOMBMONTHS INT,
        DIFFFNOMBDAYS INT
    )
    DECLARE @INI DATE, @FIN DATE, @FINAUX DATE
    DECLARE @YEARS INT, @MONTHS INT, @DAYS INT
    DECLARE @DIFFF AS TABLE(
        ID INT NOT NULL PRIMARY KEY IDENTITY(1,1),
        DIFFFYEARS INT,
        DIFFFMONTHS INT,
        DIFFFDAYS INT
    )
    DECLARE @DIFFF2 AS TABLE(
        ID INT NOT NULL PRIMARY KEY IDENTITY(1,1),
        DIFFF2YEARS INT,
        DIFFF2MONTHS INT,
        DIFFF2DAYS INT
    )
    DECLARE @INIAPP DATE, @FINAPP DATE
    DECLARE @AUXADD INT
    SET @AUXADD = 0



    /*DECLARE @fiucontracts AS TABLE(
        id INT NOT NULL PRIMARY KEY NONCLUSTERED,
        master_code nvarchar(6) NOT NULL,
        since DATE,
        until DATE,
        duration nvarchar(25),
        years nvarchar(2),
        months nvarchar(2),
        days nvarchar(2)
    )*/
    /*SELECT * FROM master WHERE codigo = @codigo*/
    /* CONTRATOS */

    SELECT * INTO #Contract from dbo.getContracts(@codigo, @cts, @fecha);
    SELECT * INTO #Appointment from dbo.getAppointments(@codigo, @cts, @fecha);
    SELECT * INTO #ServiceTime from dbo.getServiceTimes(@codigo, @cts, @fecha);
    SELECT * INTO #WorkExp from dbo.getWorkExps(@codigo, @cts, @fecha);

    /*SELECT * FROM #Contract;
    SELECT * FROM #Appointment;
    SELECT * FROM #ServiceTime;
    SELECT * FROM #WorkExp;*/


    SELECT @FNOMB = [date_validity] FROM [appointment] WHERE [appointment].[master_code] = @codigo and [appointment].[canceled] = '0' and [appointment].[date_validity] <= @fecha;
    /*SET @date = @FNOMB;*/

    IF (@FNOMB IS NOT NULL)
    BEGIN
        SET @FINTER = @fecha;
        SET @fecha = @FNOMB;
        INSERT INTO @DIFFFNOMB
            SELECT * FROM dbo.GetDateDifferenceInYearsMonthsDays(@fecha,@FINTER);
        SET @AUXADD = 1;
    END

    /* SE ASUME QUE TANTO EN NOMBRAMIENTOS Y/O CONTRATOS HAY REGISTROS, PERO NUNCA EN NINGUNA */

    DECLARE @COUNT1 INT;
    SELECT @COUNT1 = COUNT(*) FROM #Appointment;

    IF ( (SELECT COUNT(*) FROM #Contract) > 0 )
    BEGIN
        SELECT TOP 1 @INI = since FROM #Contract;
        SELECT TOP 1 @FIN = until FROM #Contract ORDER BY since DESC;

        IF (@fecha < @FIN)
        BEGIN
            SET @FIN = @fecha;
            IF (@AUXADD != 1)
            BEGIN
                SELECT @FIN = DATEADD(DAY, 1, @FIN);
            END
        END

        DECLARE @i INT = 1, @COUNT INT;
        SELECT @COUNT = COUNT(*) FROM #Contract;
        /*SELECT * FROM #Contract;*/

        /* si la fecha actual se ubica entre las fechas de dos contratos (until-since) */
        WHILE @i <= @COUNT
        BEGIN
            IF( @i + 1 <= @COUNT )
            BEGIN
                IF ( ( @fecha > ( SELECT until FROM #Contract where id = @i ) ) AND ( @fecha < ( SELECT since FROM #Contract where id = ( @i + 1 ) ) ) )
                BEGIN
                    SELECT @FIN = until FROM #Contract where id = @i;
                    SELECT @FINAUX = until FROM #Contract where id = @i;
                    SET @i = @COUNT;
                END
            END

            SET @i = @i + 1;
        END

        SET @i = 1;

        /* duraciones entre contratos */
        WHILE @i <= @COUNT
        BEGIN
            IF ( ( @fecha >= ( SELECT since FROM #Contract where id = @i ) ) AND ( @fecha <= ( SELECT until FROM #Contract where id = @i ) ) )
                SET @i = @COUNT;
            ELSE
            BEGIN
                IF ( @FINAUX IS NOT NULL AND ( @FINAUX = ( SELECT until FROM #Contract where id = @i ) ) )
                    SET @i = @COUNT;
                ELSE
                BEGIN
                    IF ( @i <= ( @COUNT - 1 ) )
                    BEGIN
                        INSERT INTO @DIFFF2
                        SELECT * FROM dbo.GetDateDifferenceInYearsMonthsDays(( SELECT until FROM #Contract where id = @i ),( SELECT since FROM #Contract where id = ( @i + 1 ) ));
                        IF ( ( SELECT DIFFF2YEARS FROM @DIFFF2 WHERE ID = @i ) != 0  )
                            SELECT @FIN = DATEADD(YEAR, -( SELECT DIFFF2YEARS FROM @DIFFF2 WHERE ID = @i), @FIN);
                        IF ( ( SELECT DIFFF2MONTHS FROM @DIFFF2 WHERE ID = @i ) != 0  )
                            SELECT @FIN = DATEADD(MONTH, -( SELECT DIFFF2MONTHS FROM @DIFFF2 WHERE ID = @i ), @FIN);
                        IF ( ( SELECT DIFFF2DAYS FROM @DIFFF2 WHERE ID = @i ) > 1  )
                        BEGIN
                            SELECT @FIN = DATEADD(DAY, -( SELECT DIFFF2DAYS FROM @DIFFF2 WHERE ID = @i ), @FIN);
                            SELECT @FIN = DATEADD(DAY, 1, @FIN);
                        END
                    END
                END
            END

            SET @i = @i + 1;
        END

        SET @i = 1;
        DECLARE @j INT = 1, @top INT;
        /* @COUNT1 se define antes del if #Contract */

        /* reducir la duracion de los solapamientos de los nombramientos anulados con los contratos */
        WHILE @i <= @COUNT
        BEGIN
            WHILE @j <= @COUNT1
            BEGIN
                IF ( ( ( SELECT date_validity FROM #Appointment where id = @j ) >= ( SELECT since FROM #Contract where id = @i ) ) AND ( ( SELECT date_validity FROM #Appointment where id = @j ) <= ( SELECT until FROM #Contract where id = @i ) ) )
                BEGIN
                    INSERT INTO @DIFFF2
                    SELECT * FROM dbo.GetDateDifferenceInYearsMonthsDays(( SELECT until FROM #Contract where id = @i ),( SELECT since FROM #Contract where id = ( @i + 1 ) ));
                    
                    SELECT TOP 1 @top = ID FROM @DIFFF2 ORDER BY ID DESC;   /* SELECCIONA EL ULTIMO REGISTRO INSERTADO */

                    IF ( ( SELECT DIFFF2YEARS FROM @DIFFF2 WHERE ID = @top ) != 0  )
                        SELECT @FIN = DATEADD(YEAR, -( SELECT DIFFF2YEARS FROM @DIFFF2 WHERE ID = @top), @FIN);
                    IF ( ( SELECT DIFFF2MONTHS FROM @DIFFF2 WHERE ID = @top ) != 0  )
                        SELECT @FIN = DATEADD(MONTH, -( SELECT DIFFF2MONTHS FROM @DIFFF2 WHERE ID = @top ), @FIN);
                    IF ( ( SELECT DIFFF2DAYS FROM @DIFFF2 WHERE ID = @top ) > 1  )
                    BEGIN
                        SELECT @FIN = DATEADD(DAY, -( SELECT DIFFF2DAYS FROM @DIFFF2 WHERE ID = @top ), @FIN);
                        SELECT @FIN = DATEADD(DAY, 1, @FIN);
                    END
                END
                SET @j = @j + 1;
            END
            SET @i = @i + 1;
        END

    END
    ELSE
    BEGIN
        
        /* SI NO EXISTE NINGUN CONTRATO */

        /* @COUNT1 se define antes del if #Contract */

        IF ( @COUNT1 > 0 )
        BEGIN
            SELECT TOP 1 @INI = date_validity FROM #Appointment;
            SELECT TOP 1 @FIN = date_validity FROM #Appointment;
        END
        ELSE
        BEGIN
            IF ( @FNOMB IS NOT NULL )
            BEGIN
                SET @INI = @fecha;
                SET @FIN = @fecha;
            END
        END

    END

    /* la duracion de los nombramientos no depende de los contratos (es exclusivo de los nombramientos) */
    /* @COUNT1 se define antes del if #Contract */
    IF ( @COUNT1 > 0 )
    BEGIN
        SELECT TOP 1 @INIAPP = date_validity FROM #Appointment;
        SELECT TOP 1 @FINAPP = date_validity FROM #Appointment;
    END
    ELSE
    BEGIN
        IF ( @FNOMB IS NOT NULL )
        BEGIN
            SET @INIAPP = @fecha;
            SET @FINAPP = @fecha;
        END
    END

    /*
        // al menos un registro de NOMBRAMIENTOS CANCELADOS (se agregan las duraciones)
        // agrega al cts haya o no nombramiento siempre q el array no este vacio
        // el listado de estos nombramientos tienen un inicio y un fin
    */
    /* @COUNT1 se define antes del if #Contract */
    IF ( @COUNT1 > 0 )
    BEGIN
        SELECT TOP 1 @INIAPP = date_validity FROM #Appointment;
        SELECT TOP 1 @FINAPP = date_validity FROM #Appointment;

        SET @i = 1;
        WHILE @i <= @COUNT1
        BEGIN
            IF ( ( SELECT years FROM #Appointment WHERE id = @i ) != 0  )
            BEGIN
                SELECT @FIN = DATEADD(YEAR, ( SELECT years FROM #Appointment WHERE id = @i ), @FIN);
                SELECT @FINAPP = DATEADD(YEAR, ( SELECT years FROM #Appointment WHERE id = @i ), @FINAPP);
            END
            IF ( ( SELECT months FROM #Appointment WHERE id = @i ) != 0  )
            BEGIN
                SELECT @FIN = DATEADD(MONTH, ( SELECT months FROM #Appointment WHERE id = @i ), @FIN);
                SELECT @FINAPP = DATEADD(MONTH, ( SELECT months FROM #Appointment WHERE id = @i ), @FINAPP);
            END
            IF ( ( SELECT days FROM #Appointment WHERE id = @i ) > 1  )
            BEGIN
                SELECT @FIN = DATEADD(DAY, ( SELECT days FROM #Appointment WHERE id = @i ), @FIN);
                SELECT @FINAPP = DATEADD(DAY, ( SELECT days FROM #Appointment WHERE id = @i ), @FINAPP);
            END

            SET @i = @i + 1;
        END

    END

    /* agregar diferencia de NOMBRAMIENTO VALIDO (es unico y ultimo)  */
    IF ( @FNOMB IS NOT NULL )
    BEGIN
        IF ( ( SELECT TOP 1 DIFFFNOMBYEARS FROM @DIFFFNOMB ) != 0  )
        BEGIN
            SELECT @FIN = DATEADD(YEAR, ( SELECT TOP 1 DIFFFNOMBYEARS FROM @DIFFFNOMB ), @FIN);
            SELECT @FINAPP = DATEADD(YEAR, ( SELECT TOP 1 DIFFFNOMBYEARS FROM @DIFFFNOMB ), @FINAPP);
        END
        IF ( ( SELECT TOP 1 DIFFFNOMBMONTHS FROM @DIFFFNOMB ) != 0  )
        BEGIN
            SELECT @FIN = DATEADD(MONTH, ( SELECT TOP 1 DIFFFNOMBMONTHS FROM @DIFFFNOMB ), @FIN);
            SELECT @FINAPP = DATEADD(MONTH, ( SELECT TOP 1 DIFFFNOMBMONTHS FROM @DIFFFNOMB ), @FINAPP);
        END
        IF ( ( SELECT TOP 1 DIFFFNOMBDAYS FROM @DIFFFNOMB ) > 1  )
        BEGIN
            SELECT @FIN = DATEADD(DAY, ( SELECT TOP 1 DIFFFNOMBDAYS FROM @DIFFFNOMB ), @FIN);
            SELECT @FINAPP = DATEADD(DAY, ( SELECT TOP 1 DIFFFNOMBDAYS FROM @DIFFFNOMB ), @FINAPP);
        END
        SELECT @FIN = DATEADD(DAY, 1, @FIN);
        SELECT @FINAPP = DATEADD(DAY, 1, @FINAPP);
    END

    /* solo para acumulado de nombramiento */
    /* INSERTA EN UNA TABLA VARIABLE Q CONTENDRA TODOS LOS RESULTADOS */
    IF( @INIAPP IS NOT NULL AND @FINAPP IS NOT NULL )
    BEGIN
        INSERT INTO @APPRES
            SELECT @codigo,* FROM dbo.GetDateDifferenceInYearsMonthsDays( @INIAPP, @FINAPP);
    END
    ELSE
    BEGIN
        INSERT INTO @APPRES
            SELECT @codigo,0,0,0;
    END
    


    /* COMPUTO TIEMPO DE SERVICIO */

    DECLARE @COUNT2 INT;
    SELECT @COUNT2 = COUNT(*) FROM #ServiceTime;

    DECLARE @FINIAUM DATE, @FINIDIS DATE, @FFINAUM DATE, @FFINDIS DATE;
    DECLARE @FCOMP DATE;
    DECLARE @DIFFCTS AS TABLE(
        ID INT NOT NULL PRIMARY KEY IDENTITY(1,1),
        DIFFCTSYEARS INT,
        DIFFCTSMONTHS INT,
        DIFFCTSDAYS INT
    )

    IF ( @FNOMB IS NOT NULL )
        SET @FCOMP = @FINTER;
    ELSE
        SET @FCOMP = @fecha;

    SET @i = 1;
    WHILE @i <= @COUNT2
    BEGIN
        IF ( ( SELECT in_decrease FROM #ServiceTime WHERE id = @i ) = 1 ) /* AUMENTO */
        BEGIN
            SELECT @FINIAUM = since FROM #ServiceTime WHERE id = @i;
            SELECT @FFINAUM = since FROM #ServiceTime WHERE id = @i;
            SET @i = @COUNT2;
        END
        
        SET @i = @i + 1;
    END

    SET @i = 1;
    WHILE @i <= @COUNT2
    BEGIN
        IF ( ( SELECT in_decrease FROM #ServiceTime WHERE id = @i ) = 0 ) /* DISMINUCION */
        BEGIN
            SELECT @FINIDIS = since FROM #ServiceTime WHERE id = @i;
            SELECT @FFINDIS = since FROM #ServiceTime WHERE id = @i;
            SET @i = @COUNT2;
        END
        
        SET @i = @i + 1;
    END
    
    /*SELECT * 
    FROM tempdb.sys.columns 
    WHERE [object_id] = OBJECT_ID(N'tempdb..#ServiceTime');*/

    SET @i = 1;
    WHILE @i <= @COUNT2
    BEGIN
                
        IF ( ( SELECT in_decrease FROM #ServiceTime WHERE id = @i ) = 1 ) /* AUMENTO */
        BEGIN
            IF ( ( SELECT years FROM #ServiceTime where id = @i ) != 0 )
            BEGIN
                SELECT @FIN = DATEADD(YEAR, ( SELECT years FROM #ServiceTime where id = @i ), @FIN);
                SELECT @FFINAUM = DATEADD(YEAR, ( SELECT years FROM #ServiceTime where id = @i ), @FFINAUM);
            END
            IF ( ( SELECT months FROM #ServiceTime where id = @i ) != 0 )
            BEGIN
                SELECT @FIN = DATEADD(MONTH, ( SELECT months FROM #ServiceTime where id = @i ), @FIN);
                SELECT @FFINAUM = DATEADD(MONTH, ( SELECT months FROM #ServiceTime where id = @i ), @FFINAUM);
            END
            IF ( ( SELECT days FROM #ServiceTime where id = @i ) > 1 )
            BEGIN
                SELECT @FIN = DATEADD(DAY, ( SELECT days FROM #ServiceTime where id = @i ), @FIN);
                SELECT @FFINAUM = DATEADD(DAY, ( SELECT days FROM #ServiceTime where id = @i ), @FFINAUM);
            END

            IF ( ( @FCOMP >= ( SELECT since FROM #ServiceTime where id = @i ) ) AND ( @FCOMP <= ( SELECT until FROM #ServiceTime where id = @i ) ) )
            BEGIN
                INSERT INTO @DIFFCTS
                SELECT * FROM dbo.GetDateDifferenceInYearsMonthsDays( @FCOMP, ( SELECT until FROM #ServiceTime where id = @i ) );

                SELECT TOP 1 @top = ID FROM @DIFFCTS ORDER BY ID DESC;                                                      /* SELECCIONA EL ULTIMO REGISTRO INSERTADO */
                
                IF ( ( SELECT DIFFCTSYEARS FROM @DIFFCTS where id = @top ) != 0 )
                BEGIN
                    SELECT @FIN = DATEADD(YEAR, -( SELECT DIFFCTSYEARS FROM @DIFFCTS where id = @top ), @FIN);
                    SELECT @FFINAUM = DATEADD(YEAR, -( SELECT DIFFCTSYEARS FROM @DIFFCTS where id = @top ), @FFINAUM);
                END
                IF ( ( SELECT DIFFCTSMONTHS FROM @DIFFCTS where id = @top ) != 0 )
                BEGIN
                    SELECT @FIN = DATEADD(MONTH, -( SELECT DIFFCTSMONTHS FROM @DIFFCTS where id = @top ), @FIN);
                    SELECT @FFINAUM = DATEADD(MONTH, -( SELECT DIFFCTSMONTHS FROM @DIFFCTS where id = @top ), @FFINAUM);
                END
                IF ( ( SELECT DIFFCTSDAYS FROM @DIFFCTS where id = @top ) > 1 )
                BEGIN
                    SELECT @FIN = DATEADD(DAY, -( SELECT DIFFCTSDAYS FROM @DIFFCTS where id = @top ), @FIN);
                    SELECT @FFINAUM = DATEADD(DAY, -( SELECT DIFFCTSDAYS FROM @DIFFCTS where id = @top ), @FFINAUM);
                    SELECT @FFINAUM = DATEADD(DAY, -1, @FFINAUM);                                                           
                    /* PUEDE GENERAR ERROR -- DEBERIA IR DEBAJO DEL 'END' */
                END 
                SELECT @FIN = DATEADD(DAY, -1, @FIN);

            END
        END
        ELSE                                                            /* DISMINUCION */
        BEGIN
            IF ( ( SELECT years FROM #ServiceTime where id = @i ) != 0 )
            BEGIN
                SELECT @FIN = DATEADD(YEAR, -( SELECT years FROM #ServiceTime where id = @i ), @FIN);
                SELECT @FFINDIS = DATEADD(YEAR, ( SELECT years FROM #ServiceTime where id = @i ), @FFINDIS);
            END
            IF ( ( SELECT months FROM #ServiceTime where id = @i ) != 0 )
            BEGIN
                SELECT @FIN = DATEADD(MONTH, -( SELECT months FROM #ServiceTime where id = @i ), @FIN);
                SELECT @FFINDIS = DATEADD(MONTH, ( SELECT months FROM #ServiceTime where id = @i ), @FFINDIS);
            END
            IF ( ( SELECT days FROM #ServiceTime where id = @i ) > 1 )
            BEGIN
                SELECT @FIN = DATEADD(DAY, -( SELECT days FROM #ServiceTime where id = @i ), @FIN);
                SELECT @FFINDIS = DATEADD(DAY, ( SELECT days FROM #ServiceTime where id = @i ), @FFINDIS);
            END

            IF ( ( @FCOMP >= ( SELECT since FROM #ServiceTime where id = @i ) ) AND ( @FCOMP <= ( SELECT until FROM #ServiceTime where id = @i ) ) )
            BEGIN
                INSERT INTO @DIFFCTS
                SELECT * FROM dbo.GetDateDifferenceInYearsMonthsDays( @FCOMP, ( SELECT until FROM #ServiceTime where id = @i ) );

                SELECT TOP 1 @top = ID FROM @DIFFCTS ORDER BY ID DESC;                                                      /* SELECCIONA EL ULTIMO REGISTRO INSERTADO */
                
                IF ( ( SELECT DIFFCTSYEARS FROM @DIFFCTS where id = @top ) != 0 )
                BEGIN
                    SELECT @FIN = DATEADD(YEAR, ( SELECT DIFFCTSYEARS FROM @DIFFCTS where id = @top ), @FIN);
                    SELECT @FFINDIS = DATEADD(YEAR, -( SELECT DIFFCTSYEARS FROM @DIFFCTS where id = @top ), @FFINDIS);
                END
                IF ( ( SELECT DIFFCTSMONTHS FROM @DIFFCTS where id = @top ) != 0 )
                BEGIN
                    SELECT @FIN = DATEADD(MONTH, ( SELECT DIFFCTSMONTHS FROM @DIFFCTS where id = @top ), @FIN);
                    SELECT @FFINDIS = DATEADD(MONTH, -( SELECT DIFFCTSMONTHS FROM @DIFFCTS where id = @top ), @FFINDIS);
                END
                IF ( ( SELECT DIFFCTSDAYS FROM @DIFFCTS where id = @top ) > 1 )
                BEGIN
                    SELECT @FIN = DATEADD(DAY, ( SELECT DIFFCTSDAYS FROM @DIFFCTS where id = @top ), @FIN);
                    SELECT @FFINDIS = DATEADD(DAY, -( SELECT DIFFCTSDAYS FROM @DIFFCTS where id = @top ), @FFINDIS);
                    SELECT @FFINDIS = DATEADD(DAY, -1, @FFINDIS);                                                          
                    /* PUEDE GENERAR ERROR -- DEBERIA IR DEBAJO DEL 'END' */
                END 
                SELECT @FIN = DATEADD(DAY, 1, @FIN);

            END
        END

        SET @i = @i + 1;
    END
    
    /* GUARDAR LOS RESULTADOS EN LAS RESPECTIVAS TABLAS */
    IF ( @FINIAUM IS NOT NULL AND @FFINAUM IS NOT NULL ) 
        INSERT INTO @AUMRES
            SELECT @codigo,* FROM dbo.GetDateDifferenceInYearsMonthsDays( @FINIAUM, @FFINAUM);
    ELSE
        INSERT INTO @AUMRES
            SELECT @codigo,0,0,0;

    IF ( @FINIDIS IS NOT NULL AND @FFINDIS IS NOT NULL ) 
        INSERT INTO @DISRES
            SELECT @codigo,* FROM dbo.GetDateDifferenceInYearsMonthsDays( @FINIDIS, @FFINDIS);
    ELSE
        INSERT INTO @DISRES
            SELECT @codigo,0,0,0;




    /* EXPERIENCIA LABORAL */

    DECLARE @COUNT3 INT;
    SELECT @COUNT3 = COUNT(*) FROM #WorkExp;

    SET @i = 1;
    WHILE @i <= @COUNT3
    BEGIN
        
        IF ( ( SELECT years FROM #WorkExp where id = @i ) != 0 )
        BEGIN
            SELECT @FIN = DATEADD(YEAR, ( SELECT years FROM #WorkExp where id = @i ), @FIN);
        END
        IF ( ( SELECT months FROM #WorkExp where id = @i ) != 0 )
        BEGIN
            SELECT @FIN = DATEADD(MONTH, ( SELECT months FROM #WorkExp where id = @i ), @FIN);
        END
        IF ( ( SELECT days FROM #WorkExp where id = @i ) > 1 )
        BEGIN
            SELECT @FIN = DATEADD(DAY, ( SELECT days FROM #WorkExp where id = @i ), @FIN);
        END

        SET @i = @i + 1;        
    END

    /* GUARDAR EL RESULTADO FINAL */
    IF (@INI IS NOT NULL AND @FIN IS NOT NULL)
    BEGIN
        INSERT INTO @RES
            SELECT @codigo,* FROM dbo.GetDateDifferenceInYearsMonthsDays( @INI, @FIN);
    END
    ELSE
    BEGIN
        INSERT INTO @RES
            SELECT @codigo,0,0,0;
    END
    
    
    /*SELECT @INI AS INI, @FIN AS FIN, @INIAPP AS INIAPP, @FINAPP AS FINAPP, @fecha AS FECHA, @COUNT AS COUNT;
    SELECT @FINIAUM AS FINIAUM, @FFINAUM AS FFINAUM, @FINIDIS AS FINIDIS, @FFINDIS AS FFINDIS;
    SELECT * FROM @DIFFF2;
    SELECT * FROM @DIFFFNOMB;*/

    /* RESULTADO GENERAL */
    IF ( ( SELECT count(*) FROM resultado WHERE codigo = @codigo AND cts = @cts) > 0 )
    BEGIN
        UPDATE [dbo].[resultado] SET appyears=(SELECT APPYEARS FROM @APPRES), appmonths=(SELECT APPMONTHS FROM @APPRES),appdays=(SELECT APPDAYS FROM @APPRES),
        aumyears=(SELECT AUMYEARS FROM @AUMRES),aummonths=(SELECT AUMMONTHS FROM @AUMRES),aumdays=(SELECT AUMDAYS FROM @AUMRES),disyears=(SELECT DISYEARS FROM @DISRES),
        dismonths=(SELECT DISMONTHS FROM @DISRES),disdays=(SELECT DISDAYS FROM @DISRES),years=(SELECT YEARS FROM @RES),months=(SELECT MONTHS FROM @RES),
        days=(SELECT DAYS FROM @RES), cts = @cts
        WHERE codigo = @codigo AND id = ( SELECT id from resultado WHERE codigo = @codigo AND cts = @cts )
    END
    ELSE
    BEGIN
        INSERT INTO [dbo].[resultado]
        SELECT AUMRES.CODIGO,APPYEARS,APPMONTHS,APPDAYS,AUMYEARS,AUMMONTHS,AUMDAYS,DISYEARS,DISMONTHS,DISDAYS,YEARS,MONTHS,DAYS,@cts FROM @APPRES AS APPRES 
            INNER JOIN @AUMRES AS AUMRES ON AUMRES.CODIGO=APPRES.CODIGO
            INNER JOIN @DISRES AS DISRES ON DISRES.CODIGO=APPRES.CODIGO
            INNER JOIN @RES AS RES ON RES.CODIGO=APPRES.CODIGO;
    END

    /*SELECT * FROM @RESULTADO;*/

    /*SELECT * FROM @APPRES;
    SELECT * FROM @AUMRES;
    SELECT * FROM @DISRES;
    SELECT * FROM @RES;*/

    /*SELECT * FROM #ServiceTime;*/
    
END

        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = "DROP PROCEDURE IF EXISTS get_ServiceTime";
        DB::connection()->getPdo()->exec($sql);
    }
}
