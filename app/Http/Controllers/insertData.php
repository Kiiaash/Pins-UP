<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class insertData extends Controller
{
    public function insert(){
        /* 
            -- this is the better form --

            $post = posts::create([
                'job_title'=>"lacho bo kakt",
                'job_poster'=>"lach123",
                ..
                .
            ]);
        */
        // $post = new posts();
        // $post->job_title = "lacho bo kakt";
        // $post->job_poster = "lach123";
        // $post->description="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, ut? Modi amet maiores similique quos rerum ut dicta. Quam totam sapiente nulla possimus beatae doloremque optio ratione necessitatibus ad similique.";
        // $post->requirments="this ati a test job";
        // $post->pinned = "1";
        // $post->likes="15";
        // $post->save();

        
        return view('home',[
            'posts'=> posts::orderby('id','DESC')->paginate(5), // make an array out of all those data in the posts object 
                                    //with the key name of posts.
        ]);
        
    }
}
