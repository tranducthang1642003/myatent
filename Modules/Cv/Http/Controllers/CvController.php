<?php

namespace Modules\Cv\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Cv\Entities\Cvs;
use Modules\Cv\Entities\Keyword;
class CvController extends Controller
{
    public function showAddCv()
    {
        $css = 'public/css/cv.css';
        return view('cv::index', compact('css'));
    }
    
    public function addCv(Request $request)
    {
        $location = serialize($request->input('location'));
        $school = serialize($request->input('school'));
        $encodedLocation = htmlspecialchars($location);

        $cv = Cvs::create([
            'name' => $request->name,
            'sex' => $request->sex,
            'phone' => $request->phone,
            'email' => $request->email,
            'date' => $request->date,
            'address' => $request->address,
            'education' => $request->education,
            'school' => $school,
            'language' => $request->language,
            'certificate' => $request->certificate,
            'location' => $location,
            'career' => $request->career,
            'skills' => $request->skills,
            'currentsalary' => $request->currentsalary,
            'desiredsalary' => $request->desiredsalary,
            'image' => $request->image,
            'feight' => $request->feight,
            'weight' => $request->weight,
            'maritalstatus' => $request->maritalstatus,
            'hometown' => $request->hometown,
            'checkock' => $request->input('checkock'),
        ]);

        // Attach keywords
        $keywords = explode(',', $request->keywords);
        foreach ($keywords as $keyword) {
            // Use 'keyword' column for firstOrCreate
            $keywordModel = Keyword::firstOrCreate(['keyword' => trim($keyword)]);
            $cv->keywords()->attach($keywordModel->id);
        }

        return redirect()->route('cv::showCv')->with('success', 'CV added successfully');
    }


    public function showCv()
    {
        $cvs = Cvs::all();

        return view('cv::showCv', compact('cvs'));
    }

    public function destroyCv($id)
    {
        $cv = Cvs::findOrFail($id);
        $cv->delete();

        return redirect('cv/showCv')->with('success', 'CV has been deleted successfully.');
    }
    public function edit($id)
    {
        $cv = Cvs::find($id);
        return view('cv::editCv', compact('cv'));
    }

    public function update(Request $request, $id)
    {
        $cv = Cvs::findOrFail($id);
        $cv->name = $request->input('name');
        $cv->sex = $request->input('sex');
        $cv->phone = $request->input('phone');
        $cv->email = $request->input('email');
        $cv->date = $request->input('date');
        $cv->address = $request->input('address');
        $cv->education = $request->input('education');
        $cv->school = serialize($request->input('school'));
        $cv->language = $request->input('language');
        $cv->certificate = $request->input('certificate');
        $cv->location = serialize($request->input('location'));
        $cv->career = $request->input('career');
        $cv->skills = $request->input('skills');
        $cv->currentsalary = $request->input('currentsalary');
        $cv->desiredsalary = $request->input('desiredsalary');
        $cv->image = $request->input('image');
        $cv->feight = $request->input('feight');
        $cv->weight = $request->input('weight');
        $cv->maritalstatus = $request->input('maritalstatus');
        $cv->hometown = $request->input('hometown');
        $cv->checkock = $request->input('checkock');
        $cv->save();
        return redirect()->route('cv_job')->with('success', 'CV updated successfully.');
    }

}
