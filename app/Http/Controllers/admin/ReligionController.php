<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReligionController extends Controller 
{
    public function index(){
        return view('admin.form_religion');
    }
}
