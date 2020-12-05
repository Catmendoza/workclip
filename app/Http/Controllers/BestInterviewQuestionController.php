<?php

namespace App\Http\Controllers;

use App\Habilidades;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BestInterviewQuestionController extends Controller
{
    public function pdfview(Request $request)
    {
        $usuario = Auth::user();
        $habilidades = Habilidades::all()->where('id_perfil','=',Auth::user()->id);

        return view('pdfview', ['usuario' => $usuario, 'habilidad' => $habilidades]);
    }
}
