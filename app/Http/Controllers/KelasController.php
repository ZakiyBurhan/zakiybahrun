<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index(){
        $data = Kelas::all();
        return view('kelas', compact('data'));
    }}


        
