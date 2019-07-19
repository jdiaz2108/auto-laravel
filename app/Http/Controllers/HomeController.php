<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::inRandomOrder()->get();
        if (count($users) > 4) {
            $user = $users->first();
            return view('winner', compact('user'));
        } else {
            $user = false;
            return view('winner', compact('user'));
        }

    }

    public function export(){
        return Excel::download(new UsersExport, 'usuarios.xlsx');
    }
}
