<?php

namespace App\Http\Controllers;

use App\Models\posts;
use App\Models\search as ModelsSearch;
use Illuminate\Http\Request;

class search extends Controller
{
    //
    public function dosearch(){
        $posts = posts::orderBy('created_at','DESC');
        if(request()->has('searchbar')){
            request()->validate([
                'searchbar'=>'required|min:2|max:200',
            ]);
            $posts = $posts->where('job_title','like','%'.request()->get('searchbar').'%');
        }
        return view('/home',[
            'posts' => $posts->paginate(5)
        ]);
    }
}
