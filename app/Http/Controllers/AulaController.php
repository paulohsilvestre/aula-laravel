<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Aula;

class AulaController extends Controller
{
    public function index(Request $request){
        $aulas = Aula::all();
        return view('aula.aula')->with(
            array('aulas' => $aulas)
        );
    }

    public function save(Request $request){
        $aula = new Aula();
        $aula->turma = "3 Serie";
        $aula->valor = 23.90;
        $aula->status = true;
        $aula->turno = "M";
        $aula->save();
    }

    public function update(){
        $aula = Aula::find(1);
        $aula->status = false;
        $aula->save();
    }

}
