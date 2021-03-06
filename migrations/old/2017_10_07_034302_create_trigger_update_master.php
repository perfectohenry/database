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
        CREATE TRIGGER trigger_update_master AFTER UPDATE ON `master` FOR EACH ROW
            BEGIN
                if NEW.location_id = OLD.location_id AND NEW.level_id = OLD.level_id AND NEW.funcdir_id = OLD.funcdir_id AND NEW.fie = OLD.fie AND NEW.fiu = OLD.fiu AND NEW.employee_id = OLD.employee_id THEN
                    INSERT INTO `historymaster` (`id`,`master_code`,`name`,`lastname1`,`lastname2`,`lvlstudy_id`,`profesion_id`,`ocupacion_id`,`estamento_id`,`location_id`,`level_id`,`funcdir_id`,`employee_id`,`imgfile`,`docident_id`,`docident_nmb`,`lm`,`ruc`,`essalud`,`banco_id`,`account_id`,`account_nmb`,`cci`,`life_insurance`,`ent_id`,`seg_id`,`disability`,`discp_id`,`did`,`syndicated`,`sindicato_id`,`regpen_id`,`cuspp`,`since`,`until`,`number_license`,`category_license`,`sex`,`civil_status`,`blood_type`,`birthdate`,`country_id`,`city`,`department_id`,`province_id`,`district_id`,`vivepd`,`namep`,`lastnamep`,`vivemd`,`namem`,`lastnamem`,`created_at`,`updated_at`)
                    VALUES (NULL,NEW.codigo,NEW.name,NEW.lastname1,NEW.lastname2,NEW.lvlstudy_id,NEW.profesion_id,NEW.ocupacion_id,NEW.estamento_id,NEW.location_id,NEW.level_id,NEW.funcdir_id,NEW.employee_id,NEW.imgfile,NEW.docident_id,NEW.docident_nmb,NEW.lm,NEW.ruc,NEW.essalud,NEW.banco_id,NEW.account_id,NEW.account_nmb,NEW.cci,NEW.life_insurance,NEW.ent_id,NEW.seg_id,NEW.disability,NEW.discp_id,NEW.did,NEW.syndicated,NEW.sindicato_id,NEW.regpen_id,NEW.cuspp,NEW.since,NEW.until,NEW.number_license,NEW.category_license,NEW.sex,NEW.civil_status,NEW.blood_type,NEW.birthdate,NEW.country_id,NEW.city,NEW.department_id,NEW.province_id,NEW.district_id,NEW.vivepd,NEW.namep,NEW.lastnamep,NEW.vivemd,NEW.namem,NEW.lastnamem,now(),now());
                END IF;
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
        DB::unprepared('DROP TRIGGER `trigger_update_master`');
    }
}
