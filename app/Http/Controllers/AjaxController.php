<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class AjaxController extends Controller
{

    public function addExperience(Request $request) {
        $rules = array (
            'position' => 'required',
            'workplace' => 'required',
            'period' => 'required',
            'responsibilities' => 'required'
        );
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails ())
            return response()->json(['status' => $validator->errors()->all()], 400);

        else {
            $data = new Experience();
            $data->position = $request -> position;
            $data->workplace = $request -> workplace;
            $data->period = $request -> period;
            $data->responsibilities = $request -> responsibilities;
            $data->stack = $request -> stack;
            $data->person_id = $request -> invisible;
            $data->save ();

            return response()->json([
                'status' => 'Work experience successfully added',

            ]);
        }
    }

    public function editExperience(Request $request) {
        $experience = Experience::find($request->id);

        //$experience = Experience::findOrFail($id);
        $experience->position = $request -> position;
        $experience->workplace = $request -> workplace;
        $experience->period = $request -> period;
        $experience->responsibilities = $request -> responsibilities;
        $experience->stack = $request -> stack;

        $experience->save();
        return response ()->json([
            'status' => 'Work experience successfully edited',
        ]);
    }




    public function deleteWorkExp(Request $request) {
        Experience::find ($request->id)->delete();

        return response ()->json([
            'status' => 'Work experience has been successfully deleted',
        ]);
    }



}
