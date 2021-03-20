<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workspace;
use App\Models\Project;

class ProjectController extends Controller
{
    public function create()
    {
        return view('admin.project.add',[
            'workspaces' => Workspace::all(),
        ]);
    }

    public function manage()
    {
        return view('admin.project.manage');
    }

    public function index(Request $request)
    {
        $project = new Project();
        $project->workspace_id = $request->workspace_id	;
        $project->create = $request->create;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->project_name = $request->project_name;
        $project->description = $request->description;
        $project->status = $request->status;
        $project->save();

        return redirect()->back()->with('message','Project Create Succesfully');
    }
}
