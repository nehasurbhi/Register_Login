<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class DomPdfController extends Controller
{
    public function getpdf(Request $request)
    {
        $data = [
            'title' => 'Welcome pdf generator',
            'date' => date('m/d/y')
        ];
        $pdf = PDF::loadView('Invpdf', $data);

        return $pdf->download('Invoicepdf.pdf');
    }
}
