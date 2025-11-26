<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return Job::with(['employer', 'tags'])->get();
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return response()->json(['message' => 'Job deleted successfully']);
    }
}
