<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGetWorkExpsFunction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            
            CREATE FUNCTION getWorkExps (@codigo nvarchar(6), @cts int, @fecha date)
            RETURNS @WorkExp TABLE(
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
                
                DECLARE @fie DATE;

                IF (@cts = 0) /* ESTADO */
                BEGIN
                    
                    SELECT @fie = [since] FROM [work_exp] WHERE [work_exp].[master_code] = @codigo and [work_exp].[fiufie] = '1' and [work_exp].[since] <= @fecha;
                    IF (@fie is not null or @fie != '')
                        INSERT INTO @WorkExp
                        SELECT [work_exp].[master_code],[work_exp].[since],[work_exp].[until],[work_exp].[duration],[work_exp].[years],[work_exp].[months],[work_exp].[days] FROM [work_exp] 
                        WHERE [work_exp].[master_code] = @codigo and [work_exp].[until] <= @fecha and [work_exp].[since] >= @fie and [work_exp].[recognized]='1'
                        ORDER BY [work_exp].[since] ASC

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
        $sql = "IF ( object_id(N'getWorkExps', N'FN') IS NOT NULL ) DROP FUNCTION getWorkExps";
        DB::connection()->getPdo()->exec($sql);
    }
}
