<?php

namespace App\Http\Controllers;

use App\Domain\Services\ProcesarCsvService;
use Illuminate\Http\Request;

class ProcesarCosechasController extends Controller
{
    private $procesarService;

    public function __construct(
        ProcesarCsvService $procesarService
    ){
        $this->procesarService = $procesarService;
    }


public function  upload( Request $request )
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt'
        ]);

        $count = $this->procesarService->procesar($request->file('file'));

    return response()->json([
        'status'=> 'success',
        'filas'=> $count
    ]);
    }
}
