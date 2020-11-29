<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class BestInterviewQuestionController extends Controller
{
    public function pdfview(Request $request)
    {
        $usuario = Auth::user();
        //$perfiles = Perfil::user();

        if ($request->has('download')) {
            $pdf = PDF::loadView('pdfview', ['usuario' => $usuario]);
            return $pdf->download('pdfview.pdf');
        }

        return view('pdfview', ['usuario' => $usuario]);
    }
}
