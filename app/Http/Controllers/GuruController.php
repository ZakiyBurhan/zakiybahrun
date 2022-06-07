<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index(){
        $data = Guru::all();
        return view('guru', compact('data'));
    }

    public function create(){
        return view('tambahguru');
    }

    public function store(Request $request){
        $this->validate($request, [
            'namaguru'=> 'required',
            'nik'=> 'required',
            'username'=> 'required',    
            'password'=> 'required'
        ]);
        $data = guru::create($request->all());
        return redirect()->route('home');
    }

    public function tampilan($id)
    {
        $data = guru::find ($id);
        return view('editdataguru', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = guru::find($id);
        $data->update ($request->all());
        return redirect()->route('guru');
    }

    public function destroy($id)
    {
        $data = guru::find($id);
        $data->delete();
        return redirect()->route('guru');
    }
}
