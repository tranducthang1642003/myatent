<?php

namespace Modules\Job\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Cv\Entities\Cvs;
use Modules\Job\Entities\Jobs;
use Modules\Cv\Entities\keywords;

class FilterController extends Controller
{
    public function filterCv($id)
{
    $job = Job::findOrFail($id);
    return view('job::list1', compact('job'));
}

public function filter(Request $request)
{
    // Lấy id của công việc từ request
    $jobId = $request->input('job_id');
    
    // Lấy công việc tương ứng với id
    $job = Jobs::findOrFail($jobId);

    // Lọc CVs phù hợp với công việc đã chọn
    $filteredCVs = Cvs::where('locations', 'like', '%' . $job->locations . '%')
                    ->where('salary', $job->salary)
                    ->where('experience', 'like', '%' . $job->experience . '%')
                    ->where('skill', 'like', '%' . $job->skill . '%')
                    ->get();

    // Trả về view với danh sách CVs phù hợp
    return view('job::list1', compact('job', 'filteredCVs'));
}

}    