<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PDF;

class pdfController extends Controller
{

    public function saveToPDF($id){


        $jb = Person::find($id);
        $experience = Experience::all();
        $pdf = PDF::loadView('pdf', compact('jb', 'experience'));

        return $pdf->download('JB_CV.pdf');


    }
}
