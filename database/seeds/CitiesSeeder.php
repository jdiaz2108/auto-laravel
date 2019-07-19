<?php

use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->truncate();
        
        DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Medellin',
            'order' => 16,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 4,
            'name' => 'BOGOTA',
            'order' => 4,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Barbosa',
            'order' => 3,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Bello',
            'order' => 5,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Caldas',
            'order' => 6,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Caucasia',
            'order' => 7,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Copacabana',
            'order' => 8,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'El Retiro',
            'order' => 9,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Envigado',
            'order' => 10,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Girardota',
            'order' => 11,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Guarne',
            'order' => 12,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Itagui',
            'order' => 13,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'La Ceja',
            'order' => 14,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'La Estrella',
            'order' => 15,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Rionegro',
            'order' => 17,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Sabaneta',
            'order' => 18,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'San Andres de Cuerquia',
            'order' => 19,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Barranquilla',
            'order' => 20,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Baranoa',
            'order' => 21,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Campo de la Cruz',
            'order' => 22,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Candelaria',
            'order' => 23,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Galapa',
            'order' => 24,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Juan de Acosta',
            'order' => 25,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Luruaco',
            'order' => 26,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Malambo',
            'order' => 27,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Manati',
            'order' => 28,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Palmar de Varela',
            'order' => 29,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Acevedo',
            'order' => 31,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Agrado',
            'order' => 32,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Aipe',
            'order' => 33,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Algeciras',
            'order' => 34,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Altamira',
            'order' => 35,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Baraya',
            'order' => 36,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Campoalegre',
            'order' => 37,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Colombia',
            'order' => 38,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Elias',
            'order' => 39,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Garzon',
            'order' => 40,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Gigante',
            'order' => 41,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Guadalupe',
            'order' => 42,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Hobo',
            'order' => 43,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Iquira',
            'order' => 44,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Isnos',
            'order' => 45,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'La Argentina',
            'order' => 46,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'La Plata',
            'order' => 47,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Nataga',
            'order' => 48,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Oporapa',
            'order' => 49,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Paicol',
            'order' => 50,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Palermo',
            'order' => 51,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Palestina',
            'order' => 52,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Pital',
            'order' => 53,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Pitalito',
            'order' => 54,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Rivera',
            'order' => 55,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Saladoblanco',
            'order' => 56,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'San Agustin',
            'order' => 57,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Santa Maria',
            'order' => 58,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Suaza',
            'order' => 59,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Tarqui',
            'order' => 60,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Tesalia',
            'order' => 61,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Tello',
            'order' => 62,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Teruel',
            'order' => 63,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Timana',
            'order' => 64,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Villavieja',
            'order' => 65,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Yaguara',
            'order' => 1022,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Abejorral',
            'order' => 66,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Abriaqui',
            'order' => 67,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Alejandria',
            'order' => 68,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Amaga',
            'order' => 69,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Amalfi',
            'order' => 70,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Andes',
            'order' => 71,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Angelopolis',
            'order' => 72,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Angostura',
            'order' => 73,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Anori',
            'order' => 74,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Anza',
            'order' => 75,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Apartado',
            'order' => 76,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Arboletes',
            'order' => 77,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Argelia',
            'order' => 78,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Armenia',
            'order' => 79,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Belmira',
            'order' => 80,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Betania',
            'order' => 81,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Betulia',
            'order' => 82,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Briceño',
            'order' => 83,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Buritica',
            'order' => 84,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Caceres',
            'order' => 85,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Caicedo',
            'order' => 86,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Campamento',
            'order' => 87,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Cañasgordas',
            'order' => 88,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Caracoli',
            'order' => 89,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Caramanta',
            'order' => 90,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Carepa',
            'order' => 91,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Carolina del Principe',
            'order' => 92,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Chigorodo',
            'order' => 93,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Cisneros',
            'order' => 94,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Ciudad Bolivar',
            'order' => 95,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Cocorna',
            'order' => 96,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Concepcion',
            'order' => 97,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Concordia',
            'order' => 98,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Dabeiba',
            'order' => 99,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Donmatias',
            'order' => 100,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Ebejico',
            'order' => 101,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'El Bagre',
            'order' => 102,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'El Carmen de Viboral',
            'order' => 103,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'El Penol',
            'order' => 104,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'El Santuario',
            'order' => 105,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Entrerrios',
            'order' => 106,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Fredonia',
            'order' => 107,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Frontino',
            'order' => 108,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Giraldo',
            'order' => 109,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Gomez Plata',
            'order' => 110,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Granada',
            'order' => 111,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Guatape',
            'order' => 112,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Guadalupe',
            'order' => 113,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Heliconia',
            'order' => 114,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Hispania',
            'order' => 115,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Ituango',
            'order' => 116,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Jardin',
            'order' => 117,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Jerico',
            'order' => 118,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'La PIntada',
            'order' => 119,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'La Union',
            'order' => 120,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Livorina',
            'order' => 121,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Maceo',
            'order' => 122,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Marinilla',
            'order' => 123,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Montebello',
            'order' => 124,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Murindo',
            'order' => 125,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Mutata',
            'order' => 126,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Nariño',
            'order' => 127,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Nechi',
            'order' => 128,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Necocli',
            'order' => 129,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Olaya',
            'order' => 130,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Peque',
            'order' => 131,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Pueblorrico',
            'order' => 132,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Puerto Berrio',
            'order' => 133,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Puerto Nare',
            'order' => 134,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Puerto Triunfo',
            'order' => 135,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Remedios',
            'order' => 136,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Sabanalarga',
            'order' => 137,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Salgar',
            'order' => 138,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Sonson',
            'order' => 139,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Sopetran',
            'order' => 140,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Tamesis',
            'order' => 141,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Taraza',
            'order' => 142,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Tarzo',
            'order' => 143,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Titiribi',
            'order' => 144,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Toledo',
            'order' => 145,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Turbo',
            'order' => 146,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Uramita',
            'order' => 147,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Urrao',
            'order' => 148,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Valdivia',
            'order' => 149,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Valparaiso',
            'order' => 150,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Vegachi',
            'order' => 151,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Venecia',
            'order' => 152,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Vigia del Fuerte',
            'order' => 153,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Yali',
            'order' => 154,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Yarumal',
            'order' => 155,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Yolombo',
            'order' => 156,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Yondo',
            'order' => 157,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 3,
            'name' => 'Zaragoza',
            'order' => 158,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Piojo',
            'order' => 159,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Polo Nuevo',
            'order' => 160,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Ponedera',
            'order' => 161,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Puerto Colombia',
            'order' => 162,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Repelon',
            'order' => 163,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Sabanagrande',
            'order' => 164,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Sabanalarga',
            'order' => 165,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Santa Lucia',
            'order' => 166,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Santo Tomas',
            'order' => 167,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Soledad',
            'order' => 168,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Suan',
            'order' => 169,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Tubara',
            'order' => 170,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 5,
            'name' => 'Usiacuri',
            'order' => 171,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Achi',
            'order' => 173,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Altos del Rosario',
            'order' => 174,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Arenal',
            'order' => 175,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Arjona',
            'order' => 176,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Arroyohondo',
            'order' => 177,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Barranco de Loba',
            'order' => 178,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Calamar',
            'order' => 179,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Cantagallo',
            'order' => 180,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Cartagena',
            'order' => 172,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Cicuco',
            'order' => 181,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Clemencia',
            'order' => 182,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Cordoba',
            'order' => 183,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'El Carmen de Bolivar',
            'order' => 184,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'El Guamo',
            'order' => 185,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'El Peñon',
            'order' => 186,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Hatillo de Loba',
            'order' => 187,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Magangue',
            'order' => 188,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Mahates',
            'order' => 189,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Margarita',
            'order' => 190,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Maria la Baja',
            'order' => 191,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Mompos',
            'order' => 192,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Montecristo',
            'order' => 193,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Morales',
            'order' => 194,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Pinillos',
            'order' => 195,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Re]);or',
            'order' => 196,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Rio Viejo',
            'order' => 197,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'San Cristobal',
            'order' => 198,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'San Estanislao',
            'order' => 199,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'San Fernando',
            'order' => 200,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'San Jacinto',
            'order' => 201,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'San Jacinto del Cauca',
            'order' => 202,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'San Juan Nepomuceno',
            'order' => 203,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'San Martin de Loba',
            'order' => 204,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'San Pablo',
            'order' => 205,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Santa Catalina',
            'order' => 206,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Santa Rosa',
            'order' => 207,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Santa Rosa del Sur',
            'order' => 208,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Simiti',
            'order' => 209,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Soplaviento',
            'order' => 210,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Talaigua Nuevo',
            'order' => 211,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Tiquisio',
            'order' => 212,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Turbaco',
            'order' => 213,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Turbana',
            'order' => 214,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Villanueva',
            'order' => 215,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 6,
            'name' => 'Zambrano',
            'order' => 216,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Tunja',
            'order' => 217,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Berbeo',
            'order' => 218,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Buenavista',
            'order' => 219,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Chinavita',
            'order' => 220,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Chivata',
            'order' => 221,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Covarachia',
            'order' => 222,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Chivor',
            'order' => 223,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Floresta',
            'order' => 224,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Guateque',
            'order' => 225,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Jerico',
            'order' => 226,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Leiva',
            'order' => 227,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Mongui',
            'order' => 228,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Nuevo Colon',
            'order' => 229,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Paipa',
            'order' => 230,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Paz del Rio',
            'order' => 231,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Ramiriqui',
            'order' => 232,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Samaca',
            'order' => 233,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'San Miguel de Sema',
            'order' => 234,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Santa Sofia',
            'order' => 235,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Socota',
            'order' => 236,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Sotaquira',
            'order' => 237,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Tasco',
            'order' => 238,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Tipacoque',
            'order' => 239,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Tunungua',
            'order' => 240,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Ventaquemada',
            'order' => 241,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Almeida',
            'order' => 242,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Beteitiva',
            'order' => 243,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Busbanza',
            'order' => 244,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Chiquinquira',
            'order' => 245,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Cienega',
            'order' => 246,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Cubara',
            'order' => 247,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Duitama',
            'order' => 248,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Gachantiva',
            'order' => 249,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Guayata',
            'order' => 250,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Labranzagrande',
            'order' => 251,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Macanal',
            'order' => 252,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Moniquira',
            'order' => 253,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Oicata',
            'order' => 254,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Pajarito',
            'order' => 255,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Pesca',
            'order' => 256,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Raquira',
            'order' => 257,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'San Eduardo',
            'order' => 258,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'San Pablo Borbur',
            'order' => 259,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Sativanorte',
            'order' => 260,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Socha',
            'order' => 261,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Soraca',
            'order' => 262,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Tenza',
            'order' => 263,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Toca',
            'order' => 264,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Turmeque',
            'order' => 265,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Viracacha',
            'order' => 266,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Aquitania',
            'order' => 267,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Boavita',
            'order' => 268,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Caldas',
            'order' => 269,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Chiscas',
            'order' => 270,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Combita',
            'order' => 271,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Cucaita',
            'order' => 272,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'El Cocuy',
            'order' => 273,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Gameza',
            'order' => 274,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Guican',
            'order' => 275,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'La Capilla',
            'order' => 276,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Maripi',
            'order' => 277,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Motavita',
            'order' => 278,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Otanche',
            'order' => 279,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Panqueba',
            'order' => 280,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Pisba',
            'order' => 281,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Rondon',
            'order' => 282,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Santana',
            'order' => 283,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'San Jose de Pare',
            'order' => 284,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Sativasur',
            'order' => 285,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Sogamoso',
            'order' => 286,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Susacon',
            'order' => 287,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Tibana',
            'order' => 288,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Togui',
            'order' => 289,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Tuta',
            'order' => 290,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Zetaquira',
            'order' => 291,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Arcabuco',
            'order' => 292,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Boyaca',
            'order' => 293,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Campohermoso',
            'order' => 294,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Chita',
            'order' => 295,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Coper',
            'order' => 296,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Cuitiva',
            'order' => 297,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Garagoa',
            'order' => 298,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Iza',
            'order' => 299,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'La Victoria',
            'order' => 300,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Miraflores',
            'order' => 301,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Muzo',
            'order' => 302,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Pachavita',
            'order' => 303,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Pauna',
            'order' => 304,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Puerto Boyaca',
            'order' => 305,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Saboya',
            'order' => 306,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Santa Maria',
            'order' => 307,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'San Luis de Gaceno',
            'order' => 308,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Siachoque',
            'order' => 309,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Somondoco',
            'order' => 310,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Sutamarchan',
            'order' => 311,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Tibasosa',
            'order' => 312,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Topaga',
            'order' => 313,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Tutasa',
            'order' => 314,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Belen',
            'order' => 315,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Briceño',
            'order' => 316,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Cerinza',
            'order' => 317,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Chitaraque',
            'order' => 318,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Corrales',
            'order' => 319,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Chuiquiza',
            'order' => 320,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Firavitoba',
            'order' => 321,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Guacamayas',
            'order' => 322,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Jenesano',
            'order' => 323,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'La Uvita',
            'order' => 324,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Monga',
            'order' => 325,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Nobsa',
            'order' => 326,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Paez',
            'order' => 327,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Paya',
            'order' => 328,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Quipama',
            'order' => 329,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Sachica',
            'order' => 330,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'San Mateo',
            'order' => 331,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Santa Rosa de Viterbo',
            'order' => 332,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Soata',
            'order' => 333,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Sora',
            'order' => 334,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Sutatenza',
            'order' => 335,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Tinjaca',
            'order' => 336,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Tota',
            'order' => 337,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'Umbita',
            'order' => 338,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 7,
            'name' => 'El Espino',
            'order' => 339,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Pasto',
            'order' => 340,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Alban',
            'order' => 341,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Aldana',
            'order' => 342,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Ancuya',
            'order' => 343,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Arboleda',
            'order' => 344,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Barbacoas',
            'order' => 345,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Belen',
            'order' => 346,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Buesaco',
            'order' => 347,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Chachagui',
            'order' => 348,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Colon',
            'order' => 349,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Consaca',
            'order' => 350,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Contadero',
            'order' => 351,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Cordoba',
            'order' => 352,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Cuaspud',
            'order' => 353,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Cumbal',
            'order' => 354,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Cumbitara',
            'order' => 355,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'El Charco',
            'order' => 356,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'El Penol',
            'order' => 357,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'El Rosario',
            'order' => 358,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'El Tablon de Gomez',
            'order' => 359,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'El Tambo',
            'order' => 360,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Francisco Pizarro',
            'order' => 361,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Funes',
            'order' => 362,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Guachucal',
            'order' => 363,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Guaitarilla',
            'order' => 364,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Gualmatan',
            'order' => 365,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Iles',
            'order' => 366,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Imues',
            'order' => 367,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Ipiales',
            'order' => 368,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'La Cruz',
            'order' => 369,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'La Florida',
            'order' => 370,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'La Llanada',
            'order' => 371,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'La Tola',
            'order' => 372,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'La Unión',
            'order' => 373,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Leyva',
            'order' => 374,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Linares',
            'order' => 375,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Los Andes',
            'order' => 376,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Magui',
            'order' => 377,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Mallama',
            'order' => 378,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Mosquera',
            'order' => 379,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Olaya Herrera',
            'order' => 380,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Ospina',
            'order' => 381,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Policarpa',
            'order' => 382,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Potosi',
            'order' => 383,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Providencia',
            'order' => 384,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Puerres',
            'order' => 385,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Pupiales',
            'order' => 386,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Ricaurte',
            'order' => 387,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Roberto Payan',
            'order' => 388,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Samaniego',
            'order' => 389,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'San Bernardo',
            'order' => 390,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'San Lorenzo',
            'order' => 391,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'San Pablo',
            'order' => 392,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'San Pedro de Cartago',
            'order' => 393,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Sandona',
            'order' => 394,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Santa Barbara',
            'order' => 395,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Santacruz',
            'order' => 396,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Sapuyes',
            'order' => 397,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Taminango',
            'order' => 398,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Tangua',
            'order' => 399,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Tumaco',
            'order' => 400,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Tuquerres',
            'order' => 401,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 18,
            'name' => 'Yacuanquer',
            'order' => 402,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Manizales',
            'order' => 403,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Aguadas',
            'order' => 404,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Anserma',
            'order' => 405,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Aranzazu',
            'order' => 406,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Belalcazar',
            'order' => 407,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Chinchina',
            'order' => 408,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Filadelfia',
            'order' => 409,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'La Dorada',
            'order' => 410,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'La Merced',
            'order' => 411,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Manzanares',
            'order' => 412,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Marmato',
            'order' => 413,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Marquetalia',
            'order' => 414,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Marulanda',
            'order' => 415,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Neira',
            'order' => 416,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Norcasia',
            'order' => 417,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Pacora',
            'order' => 418,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Palestina',
            'order' => 419,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Pensilvania',
            'order' => 420,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Riosucio',
            'order' => 421,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Risaralda',
            'order' => 422,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Salamina',
            'order' => 423,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Samana',
            'order' => 424,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'San Jose',
            'order' => 425,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Supia',
            'order' => 426,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Victoria',
            'order' => 427,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Villamaria',
            'order' => 428,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 8,
            'name' => 'Viterbo',
            'order' => 429,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'Florencia',
            'order' => 430,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'Albania',
            'order' => 431,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'Belen de los Andaquies',
            'order' => 432,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'Cartagena del Chaira',
            'order' => 433,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'Curillo',
            'order' => 434,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'El Doncello',
            'order' => 435,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'El Paujil',
            'order' => 436,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'La Montanita',
            'order' => 437,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'Morelia',
            'order' => 438,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'Puerto Milan',
            'order' => 439,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'Puerto Rico',
            'order' => 440,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'San Jose del Fragua',
            'order' => 441,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'San Vicente del Caguan',
            'order' => 442,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'Solano',
            'order' => 443,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'Solita',
            'order' => 444,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 9,
            'name' => 'Valparaiso',
            'order' => 445,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Yopal',
            'order' => 446,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Aguazul',
            'order' => 447,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Chameza',
            'order' => 448,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Hato Corozal',
            'order' => 449,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'La Salina',
            'order' => 450,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Mani',
            'order' => 451,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Monterrey',
            'order' => 452,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Nunchia',
            'order' => 453,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Orocue',
            'order' => 454,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Paz de Ariporo',
            'order' => 455,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Pore',
            'order' => 456,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Recetor',
            'order' => 457,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Sabanalarga',
            'order' => 458,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Sacama',
            'order' => 459,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'San Luis de Palenque',
            'order' => 460,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Tamara',
            'order' => 461,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Tauramena',
            'order' => 462,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Trinidad',
            'order' => 463,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 10,
            'name' => 'Villanueva',
            'order' => 464,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Popayan',
            'order' => 465,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Almaguer',
            'order' => 466,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Argelia',
            'order' => 467,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Balboa',
            'order' => 468,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Bolivar',
            'order' => 469,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Buenos Aires ',
            'order' => 470,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Cajibio',
            'order' => 471,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Caldono',
            'order' => 472,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Caloto',
            'order' => 473,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Corinto',
            'order' => 474,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'el Tambo',
            'order' => 475,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Florencia',
            'order' => 476,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Guapi',
            'order' => 477,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Guachene',
            'order' => 478,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Inza',
            'order' => 479,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Jambalo',
            'order' => 480,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'La Sierra',
            'order' => 481,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'La Vega',
            'order' => 482,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Lopez',
            'order' => 483,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Mercaderes',
            'order' => 484,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Miranda',
            'order' => 485,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Morales',
            'order' => 486,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Padilla',
            'order' => 487,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Paez',
            'order' => 488,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Patia',
            'order' => 489,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Piamonte',
            'order' => 490,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Piendamo',
            'order' => 491,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Puerto Tejada',
            'order' => 492,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Purace',
            'order' => 493,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Rosas',
            'order' => 494,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'San Sebastian',
            'order' => 495,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Santander de Quilichao',
            'order' => 496,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Santa Rosa',
            'order' => 497,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Silvia',
            'order' => 498,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Sotara',
            'order' => 499,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Suarez',
            'order' => 500,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Sucre',
            'order' => 501,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Timbio',
            'order' => 502,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Timbiqui',
            'order' => 503,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Toribio',
            'order' => 504,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Totoro',
            'order' => 505,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 11,
            'name' => 'Villa Rica',
            'order' => 506,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Valledupar',
            'order' => 507,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Aguachica',
            'order' => 508,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Agustin Codazi',
            'order' => 509,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Astrea',
            'order' => 510,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Becerril',
            'order' => 511,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Bosconia',
            'order' => 512,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Chimichagua',
            'order' => 513,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Chiriguana',
            'order' => 514,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Curumani',
            'order' => 515,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'El Copey',
            'order' => 516,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'El Paso',
            'order' => 517,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Gamarra',
            'order' => 518,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Gonzalez',
            'order' => 519,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'La Gloria',
            'order' => 520,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'La Jagua de Ibirico',
            'order' => 521,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Manaure Balcon del Cesar',
            'order' => 522,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Pailitas',
            'order' => 523,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Pelaya',
            'order' => 524,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Pueblo Bello',
            'order' => 525,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Rio de Oro',
            'order' => 526,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Robles La Paz',
            'order' => 527,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'San Alberto',
            'order' => 528,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'San Diego',
            'order' => 529,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'San Martin',
            'order' => 530,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 12,
            'name' => 'Tamalameque',
            'order' => 531,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Monteria',
            'order' => 532,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Ayapel',
            'order' => 533,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Buena Vista',
            'order' => 534,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Canalete',
            'order' => 535,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Cerete',
            'order' => 536,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Chima',
            'order' => 537,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Chinu',
            'order' => 538,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Cienaga de Oro',
            'order' => 539,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Cotorra',
            'order' => 540,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'La Apartada',
            'order' => 541,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Lorica',
            'order' => 542,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Los Cordobas',
            'order' => 543,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Momil',
            'order' => 544,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Montelibano',
            'order' => 545,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Monitos',
            'order' => 546,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Planeta  Rica',
            'order' => 547,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Pueblo Nuevo',
            'order' => 548,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Puerto Escondido',
            'order' => 549,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Puerto Libertador',
            'order' => 550,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Purisima',
            'order' => 551,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Sahagun',
            'order' => 552,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'San Andres de Sotavento',
            'order' => 553,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'San Antero',
            'order' => 554,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'San Bernardo del Viento',
            'order' => 555,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'San Carlos',
            'order' => 556,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'San Jose de Ure',
            'order' => 557,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'San Pelayo',
            'order' => 558,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Tierra Alta',
            'order' => 559,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Tuchin',
            'order' => 560,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 13,
            'name' => 'Valencia',
            'order' => 561,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Agua de Dios',
            'order' => 562,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Alban',
            'order' => 563,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Anapoima',
            'order' => 564,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Anolaima',
            'order' => 565,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Arbelaez',
            'order' => 566,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Beltran',
            'order' => 567,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Bituima',
            'order' => 568,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Bojaca',
            'order' => 569,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Cabrera',
            'order' => 570,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Cachipay',
            'order' => 571,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Cajica',
            'order' => 572,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Caparrapi',
            'order' => 573,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Caqueza',
            'order' => 574,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Carmen de Carupa',
            'order' => 575,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Chaguani',
            'order' => 576,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Chia',
            'order' => 577,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Chipaque',
            'order' => 578,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Choachi',
            'order' => 579,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Choconta',
            'order' => 580,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'cogua',
            'order' => 581,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Cota',
            'order' => 582,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Cucunuba',
            'order' => 583,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'El Colegio',
            'order' => 584,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'El Peñon',
            'order' => 585,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'El Rosal',
            'order' => 586,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Facatativa',
            'order' => 587,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Fomeque',
            'order' => 588,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Fosca',
            'order' => 589,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Funza',
            'order' => 590,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Fuquene',
            'order' => 591,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Fusagasuga',
            'order' => 592,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Gachala',
            'order' => 593,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Gachancipa',
            'order' => 594,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Gacheta',
            'order' => 595,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Gama',
            'order' => 596,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Girardot',
            'order' => 597,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Granada',
            'order' => 598,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Guacheta',
            'order' => 599,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Guaduas',
            'order' => 600,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Guasca',
            'order' => 601,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Guataqui',
            'order' => 603,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Guatavita',
            'order' => 604,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Guayabal de Siquima',
            'order' => 605,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Guayabetal',
            'order' => 606,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Gutierrez',
            'order' => 607,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Jerusalen',
            'order' => 608,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Junin',
            'order' => 609,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'La Calera',
            'order' => 610,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'La Mesa',
            'order' => 611,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'La Palma',
            'order' => 612,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'La Peña',
            'order' => 613,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'La Vega',
            'order' => 614,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Lenguazaque ',
            'order' => 616,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Macheta',
            'order' => 617,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Madrid',
            'order' => 618,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Manta',
            'order' => 619,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Medina',
            'order' => 620,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Mosquera',
            'order' => 621,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Nariño',
            'order' => 622,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Nemocon',
            'order' => 623,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Nilo',
            'order' => 624,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Nimaima',
            'order' => 625,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Nocaima',
            'order' => 626,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Ospina Pérez',
            'order' => 627,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Pacho',
            'order' => 628,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Paime',
            'order' => 629,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Pandi',
            'order' => 630,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Paratebueno',
            'order' => 631,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Pasca',
            'order' => 632,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Puerto Salgar',
            'order' => 633,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Puli',
            'order' => 634,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Quebradanegra',
            'order' => 635,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Quetame',
            'order' => 636,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Quipile',
            'order' => 637,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Rafael Reyes',
            'order' => 638,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Ricaurte',
            'order' => 639,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'San Antonio del Tequendama',
            'order' => 640,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'San Bernardo',
            'order' => 641,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'San Cayetano',
            'order' => 642,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'San Juan de Rioseco',
            'order' => 643,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'San Francisco',
            'order' => 644,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Sasaima',
            'order' => 645,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Sesquile',
            'order' => 646,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Sibate',
            'order' => 647,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Silvania',
            'order' => 648,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Simijaca',
            'order' => 649,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Soacha',
            'order' => 650,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'sopo',
            'order' => 651,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Subachoque',
            'order' => 652,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Suesca',
            'order' => 653,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Supatá',
            'order' => 654,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Susa',
            'order' => 655,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Sutatausa',
            'order' => 656,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Tabio',
            'order' => 657,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Tausa',
            'order' => 658,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Tena',
            'order' => 659,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Tenjo ',
            'order' => 660,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Tibacuy',
            'order' => 661,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Tibirita',
            'order' => 662,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Tocaima',
            'order' => 663,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Tocancipa',
            'order' => 664,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Topaipi',
            'order' => 665,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Ubala',
            'order' => 666,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Ubaque',
            'order' => 667,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Ubate',
            'order' => 668,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Une ',
            'order' => 669,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Utica',
            'order' => 670,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Vergara',
            'order' => 671,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Viani',
            'order' => 672,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Villagomez',
            'order' => 673,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Villa Pinzon',
            'order' => 674,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Villeta',
            'order' => 675,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Viota',
            'order' => 676,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Yacopi',
            'order' => 677,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Zipacon',
            'order' => 678,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 1,
            'name' => 'Zipaquira',
            'order' => 679,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'Rioacha',
            'order' => 680,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'Albania',
            'order' => 681,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'Barrancas',
            'order' => 682,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'Dibulla',
            'order' => 683,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'Distraccion',
            'order' => 684,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'El Molino',
            'order' => 685,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'Foseca',
            'order' => 686,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'HatoNuevo',
            'order' => 687,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'La Jagua del Pilar',
            'order' => 688,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'Maicao ',
            'order' => 689,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'Manaure',
            'order' => 690,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'San Juan del Cesar',
            'order' => 691,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'Uribia',
            'order' => 692,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'Urumita',
            'order' => 693,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 15,
            'name' => 'Villanueva',
            'order' => 694,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Santa Marta',
            'order' => 695,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Algarrobo',
            'order' => 696,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Aracataca',
            'order' => 697,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Ariguani',
            'order' => 698,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Cerro San Antonio',
            'order' => 699,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Chivolo',
            'order' => 700,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Cienaga',
            'order' => 701,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Concordia',
            'order' => 702,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'El Banco',
            'order' => 703,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'El Pinon',
            'order' => 704,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'El Reten',
            'order' => 705,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Fundacion',
            'order' => 706,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Guamal',
            'order' => 707,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Nueva Granada',
            'order' => 708,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Pedraza',
            'order' => 709,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Pijino del Carmen',
            'order' => 710,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Pivijay',
            'order' => 711,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Plato',
            'order' => 712,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Pueblo Viejo',
            'order' => 713,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Remolino',
            'order' => 714,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Sabanas de San Angel',
            'order' => 715,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Santa Barbara de Pinto',
            'order' => 716,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'San Sebastian de Buena Vista',
            'order' => 717,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'San Zenon',
            'order' => 718,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Santa Ana',
            'order' => 719,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Salamina',
            'order' => 720,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Sitio Nuevo',
            'order' => 721,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Tenerife',
            'order' => 722,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Zapayan',
            'order' => 723,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 16,
            'name' => 'Zona Bananera',
            'order' => 724,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Villavicencio',
            'order' => 725,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Acacias',
            'order' => 726,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Barranca de Upia',
            'order' => 727,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Cabuyaro',
            'order' => 728,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Castilla La Nueva',
            'order' => 729,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Cubarral',
            'order' => 730,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Cumaral',
            'order' => 731,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'El Calvario',
            'order' => 732,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'El Castillo',
            'order' => 733,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'El Dorado',
            'order' => 734,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Fuente de Oro',
            'order' => 735,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Granada',
            'order' => 736,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Guamanl',
            'order' => 737,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Mapiripan',
            'order' => 738,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Mesetas',
            'order' => 739,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'La Macarena',
            'order' => 740,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'La Uribe',
            'order' => 741,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Lejanias',
            'order' => 742,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Puerto Concordia',
            'order' => 743,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Puerto Gaitan',
            'order' => 744,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Puerto Lopez',
            'order' => 745,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Puerto Lleras',
            'order' => 746,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Puerto Rico',
            'order' => 747,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Restrepo',
            'order' => 748,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'San Carlos Guaroa',
            'order' => 749,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'San Juan de Arama',
            'order' => 750,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'San Juanito',
            'order' => 751,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'San Martin',
            'order' => 752,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 17,
            'name' => 'Vista Hermosa',
            'order' => 753,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Cucuta',
            'order' => 754,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Abrego',
            'order' => 755,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Arboledas',
            'order' => 756,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Bochalema',
            'order' => 757,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Bucarasica',
            'order' => 758,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Cacota',
            'order' => 759,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Cachira',
            'order' => 760,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Chinacota',
            'order' => 761,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Chitaga',
            'order' => 762,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Convencion',
            'order' => 763,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Cucutilla',
            'order' => 764,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Durania',
            'order' => 765,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'El Carmen',
            'order' => 766,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'El Tarra',
            'order' => 767,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'El Zulia',
            'order' => 768,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Gramalote',
            'order' => 769,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Hacari',
            'order' => 770,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Herran',
            'order' => 771,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Labateca',
            'order' => 772,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'La Esperanza',
            'order' => 773,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'La Playa',
            'order' => 774,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Los Patios',
            'order' => 775,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Lourdes',
            'order' => 776,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Mutiscua',
            'order' => 777,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Ocaña',
            'order' => 778,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Pamplona',
            'order' => 779,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Pamplonita',
            'order' => 780,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Puerto Santander',
            'order' => 781,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Ragonvalia',
            'order' => 782,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Salazar',
            'order' => 783,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'San Calixto',
            'order' => 784,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'San Cayetano',
            'order' => 785,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Santiago',
            'order' => 786,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Sardinata',
            'order' => 787,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Silos',
            'order' => 788,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Teorama',
            'order' => 789,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Tibu',
            'order' => 790,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Toledo',
            'order' => 791,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Villacaro',
            'order' => 792,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 19,
            'name' => 'Villa del Rosario',
            'order' => 793,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 20,
            'name' => 'Armenia',
            'order' => 794,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 20,
            'name' => 'Buenavista',
            'order' => 795,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 20,
            'name' => 'Calarca',
            'order' => 796,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 20,
            'name' => 'Circasia',
            'order' => 797,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 20,
            'name' => 'Cordoba',
            'order' => 798,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 20,
            'name' => 'Filandia',
            'order' => 799,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 20,
            'name' => 'Genova',
            'order' => 800,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 20,
            'name' => 'La Tebaida',
            'order' => 801,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 20,
            'name' => 'Montenegro',
            'order' => 802,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 20,
            'name' => 'Pijao',
            'order' => 803,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 20,
            'name' => 'Quimbaya',
            'order' => 804,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 20,
            'name' => 'Salento',
            'order' => 805,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'Pereira',
            'order' => 806,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'Apia',
            'order' => 807,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'Balboa',
            'order' => 808,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'Belen de Ungria',
            'order' => 809,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'Dosquebradas',
            'order' => 810,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'Guatica',
            'order' => 811,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'La Celia ',
            'order' => 812,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'La Virginia',
            'order' => 813,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'Marsella',
            'order' => 814,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'Mistrato',
            'order' => 815,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'Pueblo Rico',
            'order' => 816,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'Quinchilla',
            'order' => 817,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'Santa Rosa de Cabal',
            'order' => 818,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 21,
            'name' => 'Santuario',
            'order' => 819,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Bucaramanga',
            'order' => 820,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Aguada',
            'order' => 821,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Albania',
            'order' => 822,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Aratoca',
            'order' => 823,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Barbosa',
            'order' => 824,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Barichara',
            'order' => 825,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Barrancabermeja',
            'order' => 826,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Betulia',
            'order' => 827,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Bolivar',
            'order' => 828,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Cabrera',
            'order' => 829,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'California',
            'order' => 830,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Capitanejo',
            'order' => 831,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Carcasi',
            'order' => 832,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Cepita',
            'order' => 833,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Cerrito',
            'order' => 834,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Charala',
            'order' => 835,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Charta',
            'order' => 836,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Chima',
            'order' => 837,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Chipata',
            'order' => 838,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Cimitarra',
            'order' => 839,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Concepcion',
            'order' => 840,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Confines',
            'order' => 841,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Contratacion',
            'order' => 842,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Coromoro',
            'order' => 843,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Curiti',
            'order' => 844,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'El Carmen',
            'order' => 845,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'El Guacamayo',
            'order' => 846,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'El Peñon',
            'order' => 847,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'El Playon',
            'order' => 848,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Encino',
            'order' => 849,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Enciso',
            'order' => 850,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Florian',
            'order' => 851,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Floridablanca',
            'order' => 852,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Galan',
            'order' => 853,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Gambita',
            'order' => 854,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Giron',
            'order' => 855,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Guaca',
            'order' => 856,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Guadalupe',
            'order' => 857,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Guapota',
            'order' => 858,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Guavata',
            'order' => 859,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Guepsa',
            'order' => 860,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Hato',
            'order' => 861,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Jesus Maria',
            'order' => 862,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Jordan',
            'order' => 863,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'La Belleza',
            'order' => 864,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Landazuri',
            'order' => 865,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'La Paz',
            'order' => 866,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Lebrija',
            'order' => 867,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Los Santos',
            'order' => 868,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Macaravita',
            'order' => 869,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Malaga',
            'order' => 870,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Matanza',
            'order' => 871,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Mogotes',
            'order' => 872,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Molagabita',
            'order' => 873,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Ocamonte',
            'order' => 874,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Oiba',
            'order' => 875,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Onzaga',
            'order' => 876,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Palmar',
            'order' => 877,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Palmas del Socorro',
            'order' => 878,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Paramo',
            'order' => 879,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Piedecuesta',
            'order' => 880,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Pinchote',
            'order' => 881,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Puente Nacional',
            'order' => 882,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Puerto  Parra',
            'order' => 883,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Puerto Wilches',
            'order' => 884,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Rionegro',
            'order' => 885,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Sabana de Torres',
            'order' => 886,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'San Andres',
            'order' => 887,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'San Benito',
            'order' => 888,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'San Gil',
            'order' => 889,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'San Joaquin',
            'order' => 890,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'San Jose de Miranda',
            'order' => 891,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'San Miguel',
            'order' => 892,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'San Vicente de Chucuri',
            'order' => 893,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Santa Barbara',
            'order' => 894,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Santa Helena',
            'order' => 895,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Simacota',
            'order' => 896,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Socorro',
            'order' => 897,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Suaita',
            'order' => 898,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Sucre',
            'order' => 899,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Surata',
            'order' => 900,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Tona',
            'order' => 901,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Valle de San Jose',
            'order' => 902,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Velez',
            'order' => 903,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Vetas',
            'order' => 904,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Villanueva',
            'order' => 905,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 22,
            'name' => 'Zapatoca',
            'order' => 906,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Sincelejo',
            'order' => 907,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Buenavista',
            'order' => 908,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Caimito',
            'order' => 909,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Coloso',
            'order' => 910,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Corozal',
            'order' => 911,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Chalan',
            'order' => 912,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Covenas',
            'order' => 913,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'El Roble',
            'order' => 914,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Galeras',
            'order' => 915,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Guaranda',
            'order' => 916,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'La Union',
            'order' => 917,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Los Palmitos',
            'order' => 918,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Majagual',
            'order' => 919,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Morroa',
            'order' => 920,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Ovejas',
            'order' => 921,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Palmito',
            'order' => 922,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Sampues',
            'order' => 923,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'San Benito Abad',
            'order' => 924,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'San Juan de Betulia',
            'order' => 925,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'San Marcos ',
            'order' => 926,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'San Onofre',
            'order' => 927,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'San Pedro',
            'order' => 928,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Since',
            'order' => 929,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Sucre',
            'order' => 930,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Tolu',
            'order' => 931,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 23,
            'name' => 'Tolu Nuevo',
            'order' => 932,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Ibague',
            'order' => 933,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Alpujarra',
            'order' => 934,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Alvarado',
            'order' => 935,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Ambalema',
            'order' => 936,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Anzoategui',
            'order' => 937,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Armero-Guayabal',
            'order' => 938,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Ataco',
            'order' => 939,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Cajamarca',
            'order' => 940,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Carmen de Apicala',
            'order' => 941,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Casabianca',
            'order' => 942,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Chaparral',
            'order' => 943,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Coello',
            'order' => 944,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Coyaima',
            'order' => 945,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Cunday',
            'order' => 946,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Dolores',
            'order' => 947,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Espinal',
            'order' => 948,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Falan',
            'order' => 949,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Flandes',
            'order' => 950,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Fresno',
            'order' => 951,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Guamo',
            'order' => 952,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Herveo',
            'order' => 953,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Honda',
            'order' => 954,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Icononzo',
            'order' => 955,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Lerida',
            'order' => 956,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Libano',
            'order' => 957,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Mariquita',
            'order' => 958,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Melgar',
            'order' => 959,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Murillo',
            'order' => 960,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Natagaima',
            'order' => 961,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Ortega',
            'order' => 962,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Palocabildo',
            'order' => 963,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Piedras',
            'order' => 964,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Planadas',
            'order' => 965,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Prado',
            'order' => 966,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Purificacion',
            'order' => 967,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Rioblanco',
            'order' => 968,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Roncesvalles',
            'order' => 969,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Rovira',
            'order' => 970,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Saldaña',
            'order' => 971,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'San Antonio',
            'order' => 972,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'San Luis',
            'order' => 973,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Santa Isabel',
            'order' => 974,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Suarez',
            'order' => 975,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Valle de San Juan',
            'order' => 976,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Venadillo',
            'order' => 977,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Villahermosa',
            'order' => 978,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 24,
            'name' => 'Villarrica',
            'order' => 979,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Cali',
            'order' => 980,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Alcala',
            'order' => 981,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Andalucia',
            'order' => 982,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Ansermanuevo',
            'order' => 983,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Argelia',
            'order' => 984,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Bolivar',
            'order' => 985,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Buenaventura',
            'order' => 986,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Buga',
            'order' => 987,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Bugalagrande',
            'order' => 988,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Caicedonia',
            'order' => 989,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Candelaria',
            'order' => 990,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Cartago',
            'order' => 991,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Dagua',
            'order' => 992,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Calima El Darien',
            'order' => 993,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'El Aguila',
            'order' => 994,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'El Cairo',
            'order' => 995,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'El Cerrito',
            'order' => 996,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'El Dovio',
            'order' => 997,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Florida',
            'order' => 998,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Ginebra',
            'order' => 999,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Guacari',
            'order' => 1000,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Jamundi',
            'order' => 1001,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'La Cumbre',
            'order' => 1002,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'La Union',
            'order' => 1003,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'La Victoria',
            'order' => 1004,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Obando',
            'order' => 1005,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Palmira',
            'order' => 1006,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Pradera',
            'order' => 1007,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Restrepo',
            'order' => 1008,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Riofrio',
            'order' => 1009,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Roldanillo',
            'order' => 1010,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'San Pedro',
            'order' => 1011,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Sevilla',
            'order' => 1012,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Toro',
            'order' => 1013,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Trujillo',
            'order' => 1014,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Tulua',
            'order' => 1015,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Ulloa',
            'order' => 1016,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Versalles',
            'order' => 1017,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Vijes',
            'order' => 1018,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Yotoco',
            'order' => 1019,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Yumbo',
            'order' => 1020,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 25,
            'name' => 'Zarzal',
            'order' => 1021,
            'active' => 0,
            ]);
            
            DB::table('cities')->insert([
            'department_id' => 14,
            'name' => 'Neiva',
            'order' => 30,
            'active' => 0,
            ]);
    }
}
