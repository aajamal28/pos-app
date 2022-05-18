<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('pegawai.list');
    }
    
    public function detail()
    {
        return view('pegawai.detail');
    }
    
    public function register()
    {
        return view('pegawai.register');
    }
}
