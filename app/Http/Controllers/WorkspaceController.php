<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workspace;

class WorkspaceController extends Controller
{
    public function create()
    {
        return view('admin.workspace.add',[
            
        ]);
    }

    public function manage()
    {
        return view('admin.workspace.manage',[
            'workspaces' => Workspace::all()
        ]);
    }

    public function index(Request $request)
    {
        $workspace = new Workspace();
        $workspace->name = $request->name;
        $workspace->description = $request->description;
        $workspace->status = $request->status;
        $workspace->save();

        return redirect()->back()->with('message','Workspace Create Succesfully');
     }

     public function edit($id)
     {
        $workspace = Workspace:: find($id);
        return view('admin.workspace.edit',[
            'workspace' => $workspace
        ]);
     }
     public function update( Request $request)
    {
       $workspace = Workspace::find($request->id);
       $workspace->name = $request->name;
       $workspace->description = $request->description;
       $workspace->status = $request->status;
       $workspace->save();


        return redirect('/manage-workspace')->with('message', 'Workspace Info Update  Succesfully');
    }

    public function delete($id)
    {
        $workspace = Workspace::find($id);
        $workspace->delete();

        return redirect('/manage-workspace')->with('message', 'Workspace Deleted Succesfully');

    }
}







