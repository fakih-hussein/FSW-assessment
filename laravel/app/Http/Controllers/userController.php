<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller{

    function getUsers(){
        $users=User::All();

        return response()->json([
            "users"=>$users,
        ]);
    }

     function getUser($id){
        $user=User::find($id);

        return response()->json([
            "user"=>$user,
        ]);
    }

    function createUser(Request $request){
        $user=User::create([
            "name"=>$request->title,
            "requests_num"=>$request->description,
        ]);

        return response()->json([
            "user"=>$user,
        ]);
    }

    function updateUser($id,Request $request){
        $user=User::find($id)->update([
            "name"=>$request->title,
            "requests_num"=>$request->description,
        ]);

        return response()->json([
            "user"=>$user,
        ]);
    }

    function deleteUser($id){
        $user=User::find($id)->delete();

        return response()->json([
            "user"=>$user,
        ]);
    }
    
}
