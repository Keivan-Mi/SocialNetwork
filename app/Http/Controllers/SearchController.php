<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        //Check that user write sth or not
        if($request->has('q')){
            $search = $request->q;
            if ($search == "")
                $search = "";
            else
                $search = "$search%";

            //Find users according to the following specifications
            $user =User::select("id", "username")
                ->where('username', 'LIKE', $search )
                ->get();
        }
        return response()->json($user);
    }
}
