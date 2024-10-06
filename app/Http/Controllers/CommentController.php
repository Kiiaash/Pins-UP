<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\posts;
use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
    
    public function store(posts $comid){
        
        request()->validate([
            'comment'=>'required|min:5|max:800',
        ]);
        // $comment = Comment::create([
        //     'job_id'=>$posts->id,
        //     'comment'=>request()->get('comment'),
        // ]);
        $comment = new Comment();
        $comment -> job_id = $comid->id;
        $comment ->user_id = Auth::id();
        $comment -> comment = request()->get('comment'); 
        $comment->save();
        return redirect()->route('show.show',$comid->id)->with('comseccessful','comment posted successfully');
    }
}
