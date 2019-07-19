<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->truncate();

        DB::table('departments')->insert([
            'id' => '1',
            'name' => 'CUNDINAMARCA',
            'order' => 13,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'id' => '3',
            'name' => 'ANTIOQUIA',
            'order' => 2,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '4',
            'name' => 'BOGOTA D.C.',
            'order' => 1,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '5',
            'name' => 'ATLANTICO',
            'order' => 4,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '6',
            'name' => 'BOLIVAR',
            'order' => 5,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '7',
            'name' => 'BOYACA',
            'order' => 6,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '8',
            'name' => 'CALDAS',
            'order' => 7,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '9',
            'name' => 'CAQUETA',
            'order' => 8,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '10',
            'name' => 'CASANARE',
            'order' => 9,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '11',
            'name' => 'CAUCA',
            'order' => 10,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '12',
            'name' => 'CESAR',
            'order' => 11,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '13',
            'name' => 'CORDOBA',
            'order' => 12,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '14',
            'name' => 'HUILA',
            'order' => 14,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '15',
            'name' => 'LA GUAJIRA',
            'order' => 15,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '16',
            'name' => 'MAGDALENA',
            'order' => 16,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '17',
            'name' => 'META',
            'order' => 17,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '18',
            'name' => 'NARINO',
            'order' => 18,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '19',
            'name' => 'NORTE DE SANTANDER',
            'order' => 19,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '20',
            'name' => 'QUINDIO',
            'order' => 20,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '21',
            'name' => 'RISARALDA',
            'order' => 21,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '22',
            'name' => 'SANTANDER',
            'order' => 22,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '23',
            'name' => 'SUCRE',
            'order' => 23,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '24',
            'name' => 'TOLIMA',
            'order' => 24,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
                'id' => '25',
            'name' => 'VALLE DEL CAUCA',
            'order' => 25,
            'active' => 0
            ]);
    }
}
