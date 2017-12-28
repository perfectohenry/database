<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGetServiceTimesFunction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("

            CREATE FUNCTION getServiceTimes (@codigo nvarchar(6), @cts int, @fecha date)
            RETURNS @ServiceTime TABLE(
                id INT NOT NULL PRIMARY KEY IDENTITY(1,1),
                master_code nvarchar(6) NOT NULL,
                in_decrease INT,
                since DATE,
                until DATE,
                duration NVARCHAR(25),
                years INT,  
                months INT,
                days INT
            )
            AS
            BEGIN 
                
                IF (@cts = 1) /* universidad */
                    INSERT INTO @ServiceTime
                    SELECT [service_time].[master_code],[service_time].[in_decrease],[service_time].[since],[service_time].[until],[service_time].[duration],[service_time].[years],[service_time].[months],[service_time].[days] FROM [service_time] 
                    WHERE [service_time].[master_code] = @codigo and [service_time].[since] <= @fecha and ([service_time].[afect_id]='1' or [service_time].[afect_id]='4' or [service_time].[afect_id]='5' or [service_time].[afect_id]='7')
                    ORDER BY [service_time].[since] ASC
                ELSE
                    INSERT INTO @ServiceTime
                    SELECT [service_time].[master_code],[service_time].[in_decrease],[service_time].[since],[service_time].[until],[service_time].[duration],[service_time].[years],[service_time].[months],[service_time].[days] FROM [service_time] 
                    WHERE [service_time].[master_code] = @codigo and [service_time].[since] <= @fecha and ([service_time].[afect_id]='3' or [service_time].[afect_id]='5' or [service_time].[afect_id]='6' or [service_time].[afect_id]='7')
                    ORDER BY [service_time].[since] ASC
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
        $sql = "IF ( object_id(N'getServiceTimes', N'FN') IS NOT NULL ) DROP FUNCTION getServiceTimes";
        DB::connection()->getPdo()->exec($sql);
    }
}
