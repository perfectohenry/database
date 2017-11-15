<?php

use Illuminate\Database\Seeder;

class TuniversidaddataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tuniversidaddata')->delete();
        
        \DB::table('tuniversidaddata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'universidad' => 'Universidad Nacional Mayor de San Marcos',
                'tipo' => 1,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                // 'id' => 2,
                'universidad' => 'Universidad Nacional de San Cristóbal de Huamanga',
                'tipo' => 1,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                // 'id' => 3,
                'universidad' => 'Universidad Nacional de San Antonio Abad del Cusco',
                'tipo' => 1,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                // 'id' => 4,
                'universidad' => 'Universidad Nacional de Trujillo',
                'tipo' => 1,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                // 'id' => 5,
                'universidad' => 'Universidad Nacional de San Agustín',
                'tipo' => 1,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                // 'id' => 6,
                'universidad' => 'Universidad Nacional de Ingeniería',
                'tipo' => 1,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                // 'id' => 7,
                'universidad' => 'Universidad Nacional Agraria La Molina',
                'tipo' => 1,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                // 'id' => 8,
                'universidad' => 'Universidad Nacional San Luis Gonzaga',
                'tipo' => 1,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                // 'id' => 9,
                'universidad' => 'Universidad Nacional del Centro del Perú',
                'tipo' => 1,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                // 'id' => 10,
                'universidad' => 'Universidad Nacional de la Amazonía Peruana',
                'tipo' => 1,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                // 'id' => 11,
                'universidad' => 'Universidad Nacional del Altiplano',
                'tipo' => 1,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                // 'id' => 12,
                'universidad' => 'Universidad Nacional de Piura',
                'tipo' => 1,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                // 'id' => 13,
                'universidad' => 'Universidad Nacional de Cajamarca',
                'tipo' => 1,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                // 'id' => 14,
                'universidad' => 'Universidad Nacional Federico Villarreal',
                'tipo' => 1,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                // 'id' => 15,
                'universidad' => 'Universidad Nacional Agraria de la Selva',
                'tipo' => 1,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                // 'id' => 16,
                'universidad' => 'Universidad Nacional Hermilio Valdizán',
                'tipo' => 1,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                // 'id' => 17,
                'universidad' => 'Universidad Nacional de Educación Enrique Guzmán y Valle',
                'tipo' => 1,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                // 'id' => 18,
                'universidad' => 'Universidad Nacional Daniel Alcides Carrión',
                'tipo' => 1,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                // 'id' => 19,
                'universidad' => 'Universidad Nacional del Callao',
                'tipo' => 1,
                'department_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                // 'id' => 20,
                'universidad' => 'Universidad Nacional José Faustino Sánchez Carrión',
                'tipo' => 1,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                // 'id' => 21,
                'universidad' => 'Universidad Nacional Pedro Ruiz Gallo',
                'tipo' => 1,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                // 'id' => 22,
                'universidad' => 'Universidad Nacional Jorge Basadre Grohmann',
                'tipo' => 1,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                // 'id' => 23,
                'universidad' => 'Universidad Nacional Santiago Antúnez de Mayolo',
                'tipo' => 1,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                // 'id' => 24,
                'universidad' => 'Universidad Nacional de San Martín',
                'tipo' => 1,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                // 'id' => 25,
                'universidad' => 'Universidad Nacional de Ucayali',
                'tipo' => 1,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                // 'id' => 26,
                'universidad' => 'Universidad Nacional de Tumbes',
                'tipo' => 1,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                // 'id' => 27,
                'universidad' => 'Universidad Nacional del Santa',
                'tipo' => 1,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                // 'id' => 28,
                'universidad' => 'Universidad Nacional de Huancavelica',
                'tipo' => 1,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                // 'id' => 29,
                'universidad' => 'Universidad Nacional Amazónica de Madre de Dios',
                'tipo' => 1,
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                // 'id' => 30,
                'universidad' => 'Universidad Nacional Toribio Rodríguez de Mendoza de Amazonas',
                'tipo' => 1,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                // 'id' => 31,
                'universidad' => 'Universidad Nacional Micaela Bastidas de Apurímac',
                'tipo' => 1,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                // 'id' => 32,
                'universidad' => 'Universidad Nacional Intercultural de la Amazonía',
                'tipo' => 1,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                // 'id' => 33,
                'universidad' => 'Universidad Nacional Tecnológica de Lima Sur',
                'tipo' => 1,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                // 'id' => 34,
                'universidad' => 'Universidad Nacional José María Arguedas',
                'tipo' => 1,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                // 'id' => 35,
                'universidad' => 'Universidad Nacional de Moquegua',
                'tipo' => 1,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                // 'id' => 36,
                'universidad' => 'Universidad Nacional de Juliaca',
                'tipo' => 1,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                // 'id' => 37,
                'universidad' => 'Universidad Nacional de Jaén',
                'tipo' => 1,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                // 'id' => 38,
                'universidad' => 'Universidad Nacional de Frontera',
                'tipo' => 1,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                // 'id' => 39,
                'universidad' => 'Universidad Nacional Autónoma de Chota',
                'tipo' => 1,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                // 'id' => 40,
                'universidad' => 'Universidad Nacional de Barranca',
                'tipo' => 1,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                // 'id' => 41,
                'universidad' => 'Universidad Nacional de Cañete',
                'tipo' => 1,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                // 'id' => 42,
                'universidad' => 'Universidad Nacional Intercultural "Fabiola Salazar Legua" de Bagua',
                'tipo' => 1,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                // 'id' => 43,
                'universidad' => 'Universidad Nacional Intercultural de la Selva Central Juan Santos Atahualpa',
                'tipo' => 1,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                // 'id' => 44,
                'universidad' => 'Universidad Nacional Intercultural de Quillabamba',
                'tipo' => 1,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                // 'id' => 45,
                'universidad' => 'Universidad Nacional Autónoma de Alto Amazonas',
                'tipo' => 1,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                // 'id' => 46,
                'universidad' => 'Universidad Nacional Autónoma Altoandina de Tarma',
                'tipo' => 1,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                // 'id' => 47,
                'universidad' => 'Universidad Nacional Autónoma de Huanta',
                'tipo' => 1,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                // 'id' => 48,
                'universidad' => 'Universidad Nacional Tecnológica de San Juan de Lurigancho',
                'tipo' => 1,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                // 'id' => 49,
                'universidad' => 'Universidad Autónoma Municipal de Los Olivos',
                'tipo' => 1,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                // 'id' => 50,
                'universidad' => 'Universidad Nacional Autónoma de Tayacaja Daniel Hernández Morillo',
                'tipo' => 1,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                // 'id' => 51,
                'universidad' => 'Universidad Nacional Ciro Alegría',
                'tipo' => 1,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                // 'id' => 52,
                'universidad' => 'Pontificia Universidad Católica del Perú',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                // 'id' => 53,
                'universidad' => 'Universidad Peruana Cayetano Heredia',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                // 'id' => 54,
                'universidad' => 'Universidad Católica de Santa María',
                'tipo' => 0,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                // 'id' => 55,
                'universidad' => 'Universidad del Pacífico',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                // 'id' => 56,
                'universidad' => 'Universidad de Lima',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                // 'id' => 57,
                'universidad' => 'Universidad de San Martín de Porres',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                // 'id' => 58,
                'universidad' => 'Universidad Femenina del Sagrado Corazón',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                // 'id' => 59,
                'universidad' => 'Universidad Inca Garcilaso de la Vega',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                // 'id' => 60,
                'universidad' => 'Universidad de Piura',
                'tipo' => 0,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                // 'id' => 61,
                'universidad' => 'Universidad Ricardo Palma',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                // 'id' => 62,
                'universidad' => 'Universidad Andina Néstor Cáceres Velásquez',
                'tipo' => 0,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                // 'id' => 63,
                'universidad' => 'Universidad Peruana Los Andes',
                'tipo' => 0,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                // 'id' => 64,
                'universidad' => 'Universidad Peruana Unión',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                // 'id' => 65,
                'universidad' => 'Universidad Andina del Cusco',
                'tipo' => 0,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                // 'id' => 66,
                'universidad' => 'Universidad Tecnológica de los Andes',
                'tipo' => 0,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                // 'id' => 67,
                'universidad' => 'Universidad Privada de Tacna',
                'tipo' => 0,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                // 'id' => 68,
                'universidad' => 'Universidad Particular de Chiclayo',
                'tipo' => 0,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                // 'id' => 69,
                'universidad' => 'Universidad Católica Los Ángeles de Chimbote',
                'tipo' => 0,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                // 'id' => 70,
                'universidad' => 'Universidad San Pedro',
                'tipo' => 0,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                // 'id' => 71,
                'universidad' => 'Universidad Privada Antenor Orrego',
                'tipo' => 0,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                // 'id' => 72,
                'universidad' => 'Universidad de Huánuco',
                'tipo' => 0,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                // 'id' => 73,
                'universidad' => 'Universidad José Carlos Mariátegui',
                'tipo' => 0,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                // 'id' => 74,
                'universidad' => 'Universidad Privada Marcelino Champagnat',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                // 'id' => 75,
                'universidad' => 'Universidad Cientfica del Perú',
                'tipo' => 0,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                // 'id' => 76,
                'universidad' => 'Universidad Privada César Vallejo',
                'tipo' => 0,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                // 'id' => 77,
                'universidad' => 'Universidad Peruana de Ciencias Aplicadas',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                // 'id' => 78,
                'universidad' => 'Universidad Privada del Norte',
                'tipo' => 0,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                // 'id' => 79,
                'universidad' => 'Universidad San Ignacio de Loyola',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                // 'id' => 80,
                'universidad' => 'Universidad Alas Peruanas',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                // 'id' => 81,
                'universidad' => 'Universidad Privada Norbert Wiener',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                // 'id' => 82,
                'universidad' => 'Universidad Católica San Pablo',
                'tipo' => 0,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                // 'id' => 83,
                'universidad' => 'Universidad Privada de Ica S.A.',
                'tipo' => 0,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                // 'id' => 84,
                'universidad' => 'Universidad Privada San Juan Bautista SAC',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                // 'id' => 85,
                'universidad' => 'Universidad Tecnológica del Perú',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                // 'id' => 86,
                'universidad' => 'Universidad Continental',
                'tipo' => 0,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                // 'id' => 87,
                'universidad' => 'Universidad Científica del Sur',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                // 'id' => 88,
                'universidad' => 'Universidad Católica Santo Toribio de Mogrovejo',
                'tipo' => 0,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                // 'id' => 89,
                'universidad' => 'Universidad Privada Antonio Guillermo Urrelo',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                // 'id' => 90,
                'universidad' => 'Universidad Católica Sedes Sapientiae',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                // 'id' => 91,
                'universidad' => 'Universidad Señor de Sipán',
                'tipo' => 0,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                // 'id' => 92,
                'universidad' => 'Universidad Católica de Trujillo Benedicto XVI',
                'tipo' => 0,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                // 'id' => 93,
                'universidad' => 'Universidad para el Desarrollo Andino',
                'tipo' => 0,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                // 'id' => 94,
                'universidad' => 'Universidad Peruana de Ciencias e Informática',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                // 'id' => 95,
                'universidad' => 'Universidad Sergio Bernales S.A.C.',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                // 'id' => 96,
                'universidad' => 'Universidad Peruana de las Américas',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                // 'id' => 97,
                'universidad' => 'Universidad ESAN',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                // 'id' => 98,
                'universidad' => 'Universidad Antonio Ruiz de Montoya',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                // 'id' => 99,
                'universidad' => 'Universidad Privada Telesup',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                // 'id' => 100,
                'universidad' => 'Universidad Privada de Pucallpa',
                'tipo' => 0,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                // 'id' => 101,
                'universidad' => 'Universidad Autónoma de Ica SAC',
                'tipo' => 0,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                // 'id' => 102,
                'universidad' => 'Universidad Privada San Carlos',
                'tipo' => 0,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                // 'id' => 103,
                'universidad' => 'Universidad Peruana Simón Bolivar',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                // 'id' => 104,
                'universidad' => 'Universidad Peruana del Oriente S.A.C.',
                'tipo' => 0,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                // 'id' => 105,
                'universidad' => 'Universidad de Ciencias y Humanidades',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                // 'id' => 106,
                'universidad' => 'Universidad Peruana de Integración Global',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                // 'id' => 107,
                'universidad' => 'Universidad Autónoma del Perú',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                // 'id' => 108,
                'universidad' => 'Universidad Privada Juan Meja Baca',
                'tipo' => 0,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                // 'id' => 109,
                'universidad' => 'Universidad Jaime Bausate y Meza',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                // 'id' => 110,
                'universidad' => 'Universidad Peruana del Centro',
                'tipo' => 0,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                // 'id' => 111,
                'universidad' => 'Universidad Privada Arzobispo Loayza',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                // 'id' => 112,
                'universidad' => 'Universidad Le Cordon Bleu',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                // 'id' => 113,
                'universidad' => 'Universidad Privada de Huancayo "Franklin Roosevelt"',
                'tipo' => 0,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                // 'id' => 114,
                'universidad' => 'Universidad de Lambayeque',
                'tipo' => 0,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                // 'id' => 115,
                'universidad' => 'Universidad de Ciencias y Artes de América Latina',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                // 'id' => 116,
                'universidad' => 'Universidad Peruana de Arte Orval',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                // 'id' => 117,
                'universidad' => 'Universidad Privada de la Selva Peruana',
                'tipo' => 0,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                // 'id' => 118,
                'universidad' => 'Universidad Ciencias de la Salud',
                'tipo' => 0,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                // 'id' => 119,
                'universidad' => 'Universidad de Ayacucho Federico Froebel',
                'tipo' => 0,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                // 'id' => 120,
                'universidad' => 'Universidad Peruana de Investigación y Negocios',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                // 'id' => 121,
                'universidad' => 'Universidad Peruana Austral del Cusco',
                'tipo' => 0,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                // 'id' => 122,
                'universidad' => 'Universidad Autónoma San Francisco',
                'tipo' => 0,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                // 'id' => 123,
                'universidad' => 'Universidad San Andrés',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                // 'id' => 124,
                'universidad' => 'Universidad Interamericana para el Desarrollo',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                // 'id' => 125,
                'universidad' => 'Universidad Privada Juan Pablo II',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                // 'id' => 126,
                'universidad' => 'Universidad Privada Leonardo Da Vinci SAC',
                'tipo' => 0,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                // 'id' => 127,
                'universidad' => 'Universidad de Ingeniería y Tecnología',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                // 'id' => 128,
                'universidad' => 'Universidad La Salle',
                'tipo' => 0,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                // 'id' => 129,
                'universidad' => 'Universidad Latinoamericana CIMA',
                'tipo' => 0,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                // 'id' => 130,
                'universidad' => 'Universidad Privada de Trujillo',
                'tipo' => 0,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                // 'id' => 131,
                'universidad' => 'Universidad Privada Autónoma del Sur',
                'tipo' => 0,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                // 'id' => 132,
                'universidad' => 'Universidad María Auxiliadora',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                // 'id' => 133,
                'universidad' => 'Universidad Politécnica Amazónica S.A.C.',
                'tipo' => 0,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                // 'id' => 134,
                'universidad' => 'Universidad Santo Domingo de Guzmán',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                // 'id' => 135,
                'universidad' => 'Universidad Marítima del Perú',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                // 'id' => 136,
                'universidad' => 'Universidad Privada Líder Peruana',
                'tipo' => 0,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                // 'id' => 137,
                'universidad' => 'Universidad Privada Peruano Alemana S.AC.',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                // 'id' => 138,
                'universidad' => 'Universidad Global del Cusco',
                'tipo' => 0,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                // 'id' => 139,
                'universidad' => 'Universidad Santo Tomás de Aquino de Ciencia e Integración',
                'tipo' => 0,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                // 'id' => 140,
                'universidad' => 'Universidad Privada SISE',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                // 'id' => 141,
                'universidad' => 'Universidad Seminario Evangélico de Lima',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                // 'id' => 142,
                'universidad' => 'Universidad Seminario Bíblico Andino',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                // 'id' => 143,
                'universidad' => 'Facultad de Teología Pontificia y Civil de Lima',
                'tipo' => 0,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
