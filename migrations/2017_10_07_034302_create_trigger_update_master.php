<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerUpdateMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER trigger_update_master ON master 
            AFTER UPDATE
            AS
            BEGIN
                IF (SELECT location_id FROM INSERTED) = (SELECT location_id FROM DELETED) AND (SELECT level_id  FROM INSERTED) = (SELECT level_id FROM DELETED) AND (SELECT funcdir_id  FROM INSERTED) = (SELECT funcdir_id FROM DELETED) AND (SELECT fie  FROM INSERTED) = (SELECT fie FROM DELETED) AND (SELECT fiu  FROM INSERTED) = (SELECT fiu FROM DELETED) AND (SELECT employee_id  FROM INSERTED) = (SELECT employee_id FROM DELETED) 
                BEGIN 

                    INSERT INTO 
                    historymaster (
                        master_code,name,lastname1,lastname2,lvlstudy_id,profesion_id,ocupacion_id,estamento_id,location_id,level_id,funcdir_id,fie,fiu,employee_id,imgfile,docident_id,docident_nmb,lm,ruc,essalud,life_insurance,ent_id,seg_id,disability,discp_id,did,syndicated,sindicato_id,number_license,category_license,sex,civil_status,blood_type,birthdate,country_id,city,department_id,province_id,district_id,vivepd,namep,lastnamep,vivemd,namem,lastnamem,created_at,updated_at
                    ) 
                    SELECT 
                        codigo,name,lastname1,lastname2,lvlstudy_id,profesion_id,ocupacion_id,estamento_id,location_id,level_id,funcdir_id,fie,fiu,employee_id,imgfile,docident_id,docident_nmb,lm,ruc,essalud,life_insurance,ent_id,seg_id,disability,discp_id,did,syndicated,sindicato_id,number_license,category_license,sex,civil_status,blood_type,birthdate,country_id,city,department_id,province_id,district_id,vivepd,namep,lastnamep,vivemd,namem,lastnamem,CAST(GETDATE() AS DATE),CAST(GETDATE() AS DATE) 
                    FROM 
                        INSERTED 
                END
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
        DB::unprepared('DROP TRIGGER trigger_update_master');
    }
}
