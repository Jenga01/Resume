<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Person;
use FontLib\Table\Type\name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PDF;


class pdfController extends Controller
{



    public function saveToPDF($id){



        $person = Person::findOrFail($id);
        $fileName = Person::where('id', 'LIKE', "%$id->id%")->pluck('name')->first();
        $experience = Experience::where('person_id', 'LIKE', "%$id->id%")->get();


        $pdf = PDF::loadView('pdf', compact('person', 'experience'));

        return $pdf->download($fileName .'_CV.pdf');


    }
}
