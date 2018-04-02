<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PDF extends Controller
{
    public function upload(Request $request) {
        $upload_dir = 'pdf_folder/';
        $request->file('pdfFile')->move($upload_dir, 'File_1.pdf');
        return redirect()->route('pdf_file');
    }

    public function openPdf() {
        return view('pdf');
    }
}
