<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGetDateDifferenceInYearsMonthsDaysFunction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("

            CREATE FUNCTION dbo.GetDateDifferenceInYearsMonthsDays
            (
                @FromDate DATETIME, @ToDate DATETIME
            )
            RETURNS
             @DateDifference TABLE (
             YEAR INT,  MONTH INT, DAYS INT)
            AS
            BEGIN
                DECLARE @Years INT, @Months INT, @Days INT, @tmpFromDate DATETIME
                SET @Years = DATEDIFF(YEAR, @FromDate, @ToDate)
                 - (CASE WHEN DATEADD(YEAR, DATEDIFF(YEAR, @FromDate, @ToDate),
                          @FromDate) > @ToDate THEN 1 ELSE 0 END) 
                
                SET @tmpFromDate = DATEADD(YEAR, @Years , @FromDate)
                SET @Months =  DATEDIFF(MONTH, @tmpFromDate, @ToDate)
                 - (CASE WHEN DATEADD(MONTH,DATEDIFF(MONTH, @tmpFromDate, @ToDate),
                          @tmpFromDate) > @ToDate THEN 1 ELSE 0 END) 
                
                SET @tmpFromDate = DATEADD(MONTH, @Months , @tmpFromDate)
                SET @Days =  DATEDIFF(DAY, @tmpFromDate, @ToDate)
                 - (CASE WHEN DATEADD(DAY, DATEDIFF(DAY, @tmpFromDate, @ToDate),
                          @tmpFromDate) > @ToDate THEN 1 ELSE 0 END) 
                
                INSERT INTO @DateDifference
                VALUES(@Years, @Months, @Days)
                
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
        $sql = "IF ( object_id(N'GetDateDifferenceInYearsMonthsDays', N'FN') IS NOT NULL ) DROP FUNCTION GetDateDifferenceInYearsMonthsDays";
        DB::connection()->getPdo()->exec($sql);
    }
}
