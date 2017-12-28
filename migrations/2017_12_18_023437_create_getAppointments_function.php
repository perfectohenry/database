<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGetAppointmentsFunction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            
            CREATE FUNCTION getAppointments (@codigo nvarchar(6), @cts int, @fecha date)
            RETURNS @Appointment TABLE(
                id INT NOT NULL PRIMARY KEY IDENTITY(1,1),
                master_code nvarchar(6) NOT NULL,
                date_validity DATE,
                date_canceled DATE,
                duration NVARCHAR(25),
                years INT,
                months INT,
                days INT
            )
            AS
            BEGIN 
                DECLARE @date DATE;
                
                /* no se puede retornar un valor escalar cuando se retorna un @table o viceversa*/
                SELECT @date = [date_validity] FROM [appointment] WHERE [appointment].[master_code] = @codigo and [appointment].[canceled] = '0' and [appointment].[date_validity] <= @fecha;

                IF (@date is null or @date = '')
                BEGIN
                    INSERT INTO @Appointment
                    SELECT [appointment].[master_code],[appointment].[date_validity],[appointment].[date_canceled],[appointment].[duration],[appointment].[years],[appointment].[months],[appointment].[days] FROM [appointment] 
                    WHERE [appointment].[master_code] = @codigo and [appointment].[canceled] = '1' and [appointment].[date_canceled] <= @fecha ORDER BY [appointment].[date_validity] ASC
                END
                ELSE
                BEGIN
                    INSERT INTO @Appointment
                    SELECT [appointment].[master_code],[appointment].[date_validity],[appointment].[date_canceled],[appointment].[duration],[appointment].[years],[appointment].[months],[appointment].[days] FROM [appointment] 
                    WHERE [appointment].[master_code] = @codigo and [appointment].[canceled] = '1' and [appointment].[date_canceled] <= @date ORDER BY [appointment].[date_validity] ASC
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
        $sql = "IF ( object_id(N'getAppointments', N'FN') IS NOT NULL ) DROP FUNCTION getAppointments";
        DB::connection()->getPdo()->exec($sql);
    }
}
