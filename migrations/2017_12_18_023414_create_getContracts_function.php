<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGetContractsFunction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            CREATE FUNCTION getContracts (@codigo nvarchar(6), @cts int, @fecha date)
            RETURNS @Contract TABLE(
                id INT NOT NULL PRIMARY KEY IDENTITY(1,1),
                master_code nvarchar(6) NOT NULL,
                since DATE,
                until DATE,
                duration NVARCHAR(25),
                years INT,
                months INT,
                days INT
            )
            AS
            BEGIN 
                DECLARE @fiu DATE, @fiu1 DATE, @fiu2 DATE, @date_validity DATE, @since DATE;
                        
                /* NO SE PUEDEN EJECUTAR EXEC'S EN UNA FUNCION */
                
                /*DECLARE @sql nvarchar(1000);
                DECLARE @params NVARCHAR(500)*/

                if ( @cts = 0 )  /* estado */
                BEGIN
                    SELECT @fiu = [since] FROM [contracts] WHERE [contracts].[master_code] = @codigo AND [contracts].[canceled] = '0'
                    AND [contracts].[fiufie] = '1' AND [contracts].[since] <= @fecha AND [contracts].[fundingsource_id] = '2';
                END
                ELSE
                BEGIN
                    SELECT @fiu1 = [since] FROM [contracts] WHERE [contracts].[master_code] = @codigo AND [contracts].[canceled] = '0'
                    AND [contracts].[fiufie] = '1' AND [contracts].[since] <= @fecha AND [contracts].[fundingsource_id] = '2' ;

                    SELECT @fiu2 = [since] FROM [contracts] WHERE [contracts].[master_code] = @codigo AND [contracts].[canceled] = '0'
                    AND [contracts].[fiufie] = '1' AND [contracts].[since] <= @fecha AND [contracts].[fundingsource_id] = '1';

                    IF (@fiu1 is null or @fiu1 = '')
                    BEGIN
                        Set @fiu = @fiu2;
                    END
                    ELSE
                    BEGIN
                        IF (@fiu2 is null or @fiu2 = '')
                        BEGIN
                            Set @fiu = @fiu1;
                        END
                        ELSE
                        BEGIN
                            if (@fiu1 > @fiu2)
                            begin
                                Set @fiu = @fiu2;
                            end
                            else
                            begin
                                Set @fiu = @fiu1;
                            end
                        END
                    END

                END

                /*SET @sql = 'SELECT id,master_code,since,until,duration,years,months,days FROM contracts where master_code=@codigo and canceled = 0 and since <= @fecha and since >= @fiu order by since asc';
                SET @params = '@codigo nvarchar(6), @fecha date, @fiu date';
                
                INSERT INTO @Contract
                EXEC sp_executesql @sql, @params, @codigo=@codigo, @fecha=@fecha, @fiu=@fiu;*/

                IF (@fiu is null or @fiu = '') /* solo se cuentan los contratos posteriores a un fiu o fie */
                BEGIN
                    /*SELECT * FROM [contracts]*/
                    SELECT @date_validity = [date_validity] FROM [appointment] WHERE [appointment].[fiufie] = '1' and [appointment].[master_code] = @codigo;
                    IF (@date_validity IS NOT NULL AND @date_validity != '')
                        IF (@cts = 0) /* ESTADO */
                            INSERT INTO @Contract
                            SELECT [contracts].[master_code],[contracts].[since],[contracts].[until],[contracts].[duration],[contracts].[years],[contracts].[months],[contracts].[days] FROM [contracts] 
                            WHERE [contracts].[master_code] = @codigo and [contracts].[canceled] = '0' and [contracts].[since] >= @date_validity and [contracts].[since] <= @fecha and [contracts].[fundingsource_id] = '2' 
                            ORDER BY [contracts].[since] ASC
                        ELSE
                            INSERT INTO @Contract
                            SELECT [contracts].[master_code],[contracts].[since],[contracts].[until],[contracts].[duration],[contracts].[years],[contracts].[months],[contracts].[days] FROM [contracts] 
                            WHERE [contracts].[master_code] = @codigo and [contracts].[canceled] = '0' and [contracts].[since] >= @date_validity and [contracts].[since] <= @fecha ORDER BY [contracts].[since] ASC
                    ELSE
                    BEGIN
                        IF (@cts = 0) /* ESTADO */
                        BEGIN 
                            SELECT @since = [since] FROM [work_exp] WHERE [work_exp].[fiufie] = '1' and [work_exp].[master_code] = @codigo;
                            IF (@since is null or @since = '')
                                INSERT INTO @Contract
                                SELECT [contracts].[master_code],[contracts].[since],[contracts].[until],[contracts].[duration],[contracts].[years],[contracts].[months],[contracts].[days] FROM [contracts] 
                                WHERE [contracts].[master_code] = @codigo and [contracts].[canceled] = '0' and [contracts].[since] >= @since and [contracts].[since] <= @fecha and [contracts].[fundingsource_id] = '2' 
                                ORDER BY [contracts].[since] ASC
                        END
                    END
                END
                ELSE
                BEGIN
                    IF (@cts = 0) /* ESTADO */
                        INSERT INTO @Contract
                        SELECT [contracts].[master_code],[contracts].[since],[contracts].[until],[contracts].[duration],[contracts].[years],[contracts].[months],[contracts].[days] FROM [contracts] 
                        WHERE [contracts].[master_code] = @codigo and [contracts].[canceled] = '0' and [contracts].[since] >= @fiu and [contracts].[since] <= @fecha and [contracts].[fundingsource_id] = '2' 
                        ORDER BY [contracts].[since] ASC
                    ELSE
                        INSERT INTO @Contract
                        SELECT [contracts].[master_code],[contracts].[since],[contracts].[until],[contracts].[duration],[contracts].[years],[contracts].[months],[contracts].[days] FROM [contracts] 
                        WHERE [contracts].[master_code] = @codigo and [contracts].[canceled] = '0' and [contracts].[since] >= @fiu and [contracts].[since] <= @fecha ORDER BY [contracts].[since] ASC
                END
                        
                RETURN
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
        $sql = "IF ( object_id(N'getContracts', N'FN') IS NOT NULL ) DROP FUNCTION getContracts";
        DB::connection()->getPdo()->exec($sql);
    }
}
