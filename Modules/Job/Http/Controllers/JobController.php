<?php

namespace Modules\Job\Http\Controllers;

use Modules\Job\Entities\Jobs;
use Modules\Cv\Entities\Keyword;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JobController extends Controller
{
    public function index()
    {
        return view('job::index');
    }

    public function addJob(Request $request)
    {
        $job = Jobs::create([
            'locations' => $request->locations,
            'company' => $request->company,
            'quantity' => $request->quantity,
            'work' => $request->work,
            'address' => $request->address,
            'contract' => $request->contract,
            'skill' => $request->skill,
            'experience' => $request->experience,
            'career' => $request->career,
            'wage' => $request->wage,
            'salary' => $request->has('salary'),
            'jobdescription' => $request->jobdescription,
            'link' => $request->link,
        ]);
    
        $keywords = explode(',', $request->keyword);
        foreach ($keywords as $keyword) {
            $keywordModel = Keyword::firstOrCreate(['keyword' => trim($keyword)]);
            $job->keywords()->attach($keywordModel->id);
        }
    
        return view('job.list', ['jobs' => Jobs::all()]);
    }

    public function showJob()
    {
        $job = Jobs::all();

        return view('job::showJob', compact('job'));
    }

    public function destroyJob($id)
    {
        $job = Jobs::findOrFail($id);
        $job->delete();

        return redirect('job/show')->with('success', 'Job has been deleted successfully.');
    }

    public function edit($id)
    {
        $job = Jobs::find($id);
        return view('job::editJob', compact('job'));
    }
    public function jobUpdate(Request $request, $id)
    {
        $job = Jobs::findOrFail($id);
        $job->locations = $request->input('locations');
        $job->company = $request->input('company');
        $job->quantity = $request->input('quantity');
        $job->work = $request->input('work');
        $job->address = $request->input('address');
        $job->contract = $request->input('contract');
        $job->skill = $request->input('skill');
        $job->experience = $request->input('experience');
        $job->career = $request->input('career');
        $job->wage = $request->input('wage');
        $job->salaryform = $request->input('salaryform');
        $job->link = $request->input('link');
        $job->trangthai = $request->input('trangthai');
        $job->save();
        return redirect('job/show')->with('success', 'Job has been deleted successfully.');
    }
}
