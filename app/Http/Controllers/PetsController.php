<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index(){
        //isso é uma simulação de banco de dados:
        /*$pets = [
            'Lili',
            'Lucinha',
            'Sandy',
            'Marlon',
            'Totó',
        ];*/
        $pets = \App\pet::all();
        return view(petsIndex, compact('pets'));
        //return view('petsIndex',['pets'=>$pets]);
    }
}
