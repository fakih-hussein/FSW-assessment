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

    
}
