<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tugas;
class TugasController extends Controller
{
    public function index(){
    	return view('tugas.index');
    }
    public function create(){
    	return view('tugas.create');
    }
    public function simpan(Request $request){
    	Tugas::create($request->all());
    	return redirect('tugas');
    }
}
