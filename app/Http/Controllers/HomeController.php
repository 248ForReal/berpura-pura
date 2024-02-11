<?php

namespace App\Http\Controllers;
use App\Models\Daftar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $daftarList = Daftar::all();
        return view('admin.dashboard',['daftarList' => $daftarList]);
    }

    public function create()
    {
        return view('daftar.create');
    }


}



