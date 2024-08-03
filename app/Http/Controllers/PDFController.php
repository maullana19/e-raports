<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{

    public function generatePDF($id)
    {
        $siswa = Siswa::find($id);

        $data = [
            'title' => 'Paud Athaya Raport',
            'date' => now()->format('m/d/Y'),
            'siswa' => $siswa,
        ];

        $pdf = Pdf::loadView('pdf.myPDF', $data);

        return $pdf->stream('cover_raport.pdf');
    }
}
