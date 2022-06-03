<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index(){
        $data = Agenda::all();
        return view('agenda', compact('data'));
    }
}
