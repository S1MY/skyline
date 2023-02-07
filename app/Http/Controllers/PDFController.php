<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{

    public function preview()
    {
        $operations = Operation::leftJoin('user_infos', 'user_infos.user_id', '=', 'operations.user_id')
                      ->select('operations.id', 'operations.created_at', 'operations.value', 'operations.type', 'user_infos.name', 'user_infos.surname', 'user_infos.user_show_id')
                      ->where('operations.user_id', '=', Auth::user()->id)
                      ->where('operations.status', '=', 1)
                      ->orderBy('operations.id', 'desc')
                      ->get();
        return view('preview',compact('operations'));
    }

    public function generatePDF(Request $request)
    {
        $operations = Operation::leftJoin('user_infos', 'user_infos.user_id', '=', 'operations.user_id')
                      ->select('operations.id', 'operations.created_at', 'operations.value', 'operations.type', 'user_infos.name', 'user_infos.surname', 'user_infos.user_show_id')
                      ->where('operations.user_id', '=', Auth::user()->id)
                      ->where('operations.status', '=', 1)
                      ->orderBy('operations.id', 'desc')
                      ->get();

        $pdf = PDF::loadView('preview', compact('operations'));

        $path = public_path('pdf/');
        $fileName =  time().'.'. 'pdf' ;
        $pdf->save($path . '/' . $fileName);

        $pdf = '/pdf/'.$fileName;
        return $pdf;
    }
}
