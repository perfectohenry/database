<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// Laravel 5.3, How to configure microsoft sql server in laravel 5.3 Part 1
// https://www.youtube.com/watch?v=28dc3edU2Uc

class CreateTriggerInsertMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER trigger_insert_master ON master 
            AFTER INSERT 
            AS 
            BEGIN 
                INSERT INTO 
                historymaster (
                    master_code,name,lastname1,lastname2,lvlstudy_id,profesion_id,ocupacion_id,estamento_id,location_id,level_id,funcdir_id,fie,fiu,employee_id,imgfile,docident_id,docident_nmb,lm,ruc,essalud,banco_id,account_id,account_nmb,cci,life_insurance,ent_id,seg_id,disability,discp_id,did,syndicated,sindicato_id,regpen_id,cuspp,since,until,number_license,category_license,sex,civil_status,blood_type,birthdate,country_id,city,department_id,province_id,district_id,vivepd,namep,lastnamep,vivemd,namem,lastnamem,created_at,updated_at
                ) 
                SELECT 
                    codigo,name,lastname1,lastname2,lvlstudy_id,profesion_id,ocupacion_id,estamento_id,location_id,level_id,funcdir_id,fie,fiu,employee_id,imgfile,docident_id,docident_nmb,lm,ruc,essalud,banco_id,account_id,account_nmb,cci,life_insurance,ent_id,seg_id,disability,discp_id,did,syndicated,sindicato_id,regpen_id,cuspp,since,until,number_license,category_license,sex,civil_status,blood_type,birthdate,country_id,city,department_id,province_id,district_id,vivepd,namep,lastnamep,vivemd,namem,lastnamem,CAST(GETDATE() AS DATE),CAST(GETDATE() AS DATE) 
                FROM 
                    INSERTED 
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER trigger_insert_master');
    }
}
