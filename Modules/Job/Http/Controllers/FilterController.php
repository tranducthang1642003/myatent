<?php

namespace Modules\Job\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Cv\Entities\Cvs;
use Modules\Job\Entities\Jobs;
use Modules\Cv\Entities\Keyword;

class FilterController extends Controller
{
    public function showFilterForm()
    {
        $jobs = Jobs::all();
        return view('job::list1', compact('jobs'));
    }


  
    public function filterCv(Request $request)
    {
        $job_id = $request->input('job');
        $kinang = $request->input('kinang');
        $luong = $request->input('luong');
        $keyword = $request->input('keyword');
        $job = Jobs::find($job_id);
        if (!$job) {
            return redirect()->back()->with('error', 'Không tìm thấy công việc.');
        }
        $jobKeywords = $job->keywords->pluck('keyword');
        $cvKeywords = Keyword::whereHas('cv', function ($query) use ($kinang, $luong) {
            $query->where('Skills', 'like', '%' . $kinang . '%')
                  ->where('Currentsalary', '>=', $luong);
        })->pluck('keyword');
        // phần tử chung giữa hai mảng từ khóa
        $commonKeywordsCount = $cvKeywords->intersect($jobKeywords)->count();
        $totalKeywordsCount = $cvKeywords->count() + $jobKeywords->count();
        $averageMatchPercentage = $totalKeywordsCount ? ($commonKeywordsCount / $totalKeywordsCount) *100 : 0;
        $matchingCvs = Cvs::where('Skills', 'like', '%' . $kinang . '%')
        ->where('Currentsalary', '>=', $luong)
        ->get();
        return view('job::list1', compact('averageMatchPercentage', 'jobKeywords', 'cvKeywords','matchingCvs'));
    }
    
    
 public function search(Request $request){

}

}
