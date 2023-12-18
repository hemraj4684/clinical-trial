<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Subject;
use App\Models\Cohort;
use Exception;

class SubjectController extends Controller
{
   /**
    * Store a new blog post.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $age = Subject::calculateAge($request->dob);
        
        if($age < 0) {
            throw new Exception("Age must greater than zero");
        }

        $validator = Validator::make($request->all(), [
            'firstName' => 'required|max:255',
            'dob' => 'required|date',
            'frequency'=> ['required', Rule::in(['monthly', 'weekly', 'daily'])],
            'dailyFrequencyCat' => Rule::requiredIf($request->frequency === 'daily')
        ]);

        $errors = $validator->errors();
        
        if ($validator->fails()) {
            return view('subject', compact('errors'));
        }

        
        $subjetObj = new Subject();
        $subLastId = $subjetObj->saveSubject($request->all());

        if($age > 18) {
            $cohortObj = new Cohort();
            $cohortName = $cohortObj->cohortName($age, $request->frequency);
            $cohortObj->saveCohort($subLastId, $cohortName);
            $message = sprintf("Participant '%s' is assigned to Cohort '%s'",$request->firstName, $cohortName);
        } else if($age < 18) {
            $message = "Participants must be over 18 years of age";
        } else {
            $message = "Something went wrong!!!";
        }
        
        return view('message', compact('message'));
        
    }
}
