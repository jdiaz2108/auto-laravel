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
            'name' => 'CUNDINAMARCA',
            'order' => 13,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'ANTIOQUIA',
            'order' => 2,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'BOGOTA D.C.',
            'order' => 1,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'ATLANTICO',
            'order' => 4,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'BOLIVAR',
            'order' => 5,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'BOYACA',
            'order' => 6,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'CALDAS',
            'order' => 7,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'CAQUETA',
            'order' => 8,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'CASANARE',
            'order' => 9,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'CAUCA',
            'order' => 10,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'CESAR',
            'order' => 11,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'CORDOBA',
            'order' => 12,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'HUILA',
            'order' => 14,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'LA GUAJIRA',
            'order' => 15,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'MAGDALENA',
            'order' => 16,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'META',
            'order' => 17,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'NARINO',
            'order' => 18,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'NORTE DE SANTANDER',
            'order' => 19,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'QUINDIO',
            'order' => 20,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'RISARALDA',
            'order' => 21,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'SANTANDER',
            'order' => 22,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'SUCRE',
            'order' => 23,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'TOLIMA',
            'order' => 24,
            'active' => 0
            ]);
            
            DB::table('departments')->insert([
            'name' => 'VALLE DEL CAUCA',
            'order' => 25,
            'active' => 0
            ]);
    }
}
