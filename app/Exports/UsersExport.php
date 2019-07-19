<?php

namespace App\Exports;

use App\User;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Apellido',
            'Email',
            'Celular',
            'Departamento',
            'Ciudad',
            'Slug',
        ];
    }
    public function collection()
    {
         $users = DB::table('Users')->select('id','name', 'lastName', 'email', 'cellphone', 'department', 'city', 'slug')->get();
         return $users;
    }
}