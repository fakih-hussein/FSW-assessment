<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class projectsController extends Controller
{
     function getProjects(){
        $projects=Project::All();

        return response()->json([
            "projects"=>$projects,
        ]);
    }

     function getProject($id){
        $project=Project::find($id);

        return response()->json([
            "project"=>$project,
        ]);
    }

    function createProject(Request $request){
        $project=Project::create([
            "title"=>$request->title,
            "description"=>$request->description,
        ]);

        return response()->json([
            "project"=>$project,
        ]);
    }

    function updateProject($id,Request $request){
        $project=Project::find($id)->update([
            "title"=>$request->title,
            "description"=>$request->description,
        ]);

        return response()->json([
            "project"=>$project,
        ]);
    }
    
}
