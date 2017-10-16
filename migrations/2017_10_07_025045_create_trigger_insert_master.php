<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
        CREATE TRIGGER trigger_insert_master AFTER INSERT ON `master` FOR EACH ROW
            BEGIN
                INSERT INTO `historymaster` (`id`,`master_code`,`name`,`lastname`,`lvlstudy_id`,`profesion_id`,`ocupacion_id`,`estamento_id`,`location_id`,`level_id`,`funcdir_id`,`employee_id`,`file`,`docident_id`,`docident_nmb`,`lm`,`ruc`,`essalud`,`banco_id`,`account_id`,`account_nmb`,`cci`,`life_insurance`,`ent_id`,`seg_id`,`disability`,`discp_id`,`did`,`syndicated`,`sindicato_id`,`regpen_id`,`cuspp`,`since`,`until`,`number_license`,`category_license`,`sex`,`civil_status`,`blood_type`,`birthdate`,`country_id`,`city`,`department_id`,`province_id`,`district_id`,`vivepd`,`namep`,`lastnamep`,`vivemd`,`namem`,`lastnamem`,`created_at`,`updated_at`)
                VALUES (NULL,NEW.codigo,NEW.name,NEW.lastname,NEW.lvlstudy_id,NEW.profesion_id,NEW.ocupacion_id,NEW.estamento_id,NEW.location_id,NEW.level_id,NEW.funcdir_id,NEW.employee_id,NEW.file,NEW.docident_id,NEW.docident_nmb,NEW.lm,NEW.ruc,NEW.essalud,NEW.banco_id,NEW.account_id,NEW.account_nmb,NEW.cci,NEW.life_insurance,NEW.ent_id,NEW.seg_id,NEW.disability,NEW.discp_id,NEW.did,NEW.syndicated,NEW.sindicato_id,NEW.regpen_id,NEW.cuspp,NEW.since,NEW.until,NEW.number_license,NEW.category_license,NEW.sex,NEW.civil_status,NEW.blood_type,NEW.birthdate,NEW.country_id,NEW.city,NEW.department_id,NEW.province_id,NEW.district_id,NEW.vivepd,NEW.namep,NEW.lastnamep,NEW.vivemd,NEW.namem,NEW.lastnamem,now(),now());
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
        DB::unprepared('DROP TRIGGER `trigger_insert_master`');
    }
}
