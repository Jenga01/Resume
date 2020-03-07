<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Education;
use App\Experience;
use App\Languages;
use App\Person;
use App\Project;
use App\Skills;
use FontLib\Table\Type\name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PDF;


class pdfController extends Controller
{



    public function saveToPDF($id){



        $person = Person::where('id', $id->id)->get();
        $fileName = Person::where('id', $id->id)->pluck('name')->first();
        $experience= Person::find($id->id)->experience()->get();
        $education = Person::find($id->id)->education()->get();
        $courses = Person::find($id->id)->courses()->get();
        $skills = Person::find($id->id)->skills()->get();
        $languages = Person::find($id->id)->languages()->get();
        $projects = Person::find($id->id)->projects()->get();

        $pdf = PDF::loadView('pdf',compact('person', 'experience',  'education', 'courses', 'skills', 'languages', 'projects'));
        return $pdf->download($fileName .'_Resume.pdf');


    }
}
