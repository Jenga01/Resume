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



        $person = Person::where('id', 'LIKE', "%$id->id%")->get();
        $fileName = Person::where('id', 'LIKE', "%$id->id%")->pluck('name')->first();
        $experience = Experience::where('person_id', 'LIKE', "%$id->id%")->get();
        $education = Education::where('person_id', 'LIKE', "%$id->id%")->get();
        $courses = Courses::where('person_id', 'LIKE', "%$id->id%")->get();
        $skills = Skills::where('person_id', 'LIKE', "%$id->id%")->get();
        $languages = Languages::where('person_id', 'LIKE', "%$id->id%")->get();
        $projects = Project::where('person_id', 'LIKE', "%$id->id%")->get();

        $pdf = PDF::loadView('pdf',compact('person', 'experience',  'education', 'courses', 'skills', 'languages', 'projects'));
        return $pdf->download($fileName .'_Resume.pdf');


    }
}
