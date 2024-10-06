<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\posts;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class posterController extends Controller
{
    public function insertform(){
       
        // $userid = request()->userid;
        request()->validate([
            'jobtitle'=>'required|min:5|max:30',
            'jobdes'=>'required|min:2|max:750',
            'jobposter'=>'required|min:5|max:30',
            'requirments'=>'required|min:10|max:1000',
        ]);
        /* 
        $modelname = model::create()
                     model::update()
                     model::delete()
        there are of course some other more then just that
        you pass in the inputs and their values in an 
        associativ array,
        e.g. 
        $var = model:;create([
            'itable_field_name' => request()->get('inputNmae')/'manual input',
            (you can use the request function to get info 
            or you can insert the data manually)
        ]);
        */
    
        $post = posts::create([
            'job_title' => request()->get('jobtitle'),
            'user_id'=>request()->userid,
            'job_poster' => request()->get('jobposter'),
            'description' => request()->get('jobdes'),
            'requirments' => request()->get('requirments'),
            'likes' => '0',
            'pinned' => '0',
        ]);
        $post->save();
        return redirect('/dashbored')->with('post','post created successfully');
       }


    public function destroy(posts $id){
        $id->delete();
        // $delete = posts::where('id',$id)->firstOrFail();
        // $delete -> delete();
        return redirect('/dashbored')->with('del','recored deleted successfully');
    }   

    public function show(posts $idd){
        //dump($idd->id);
        return view('jobs',compact('idd'));
    }

    public function edit(posts $eid){
        return view('/editsec',compact('eid'));
    }

    public function saveedit(posts $eidd){
        request()->validate([
            'jobtitle1'=>'required|min:5|max:30',
            'jobdes1'=>'required|min:2|max:750',
            'jobposter1'=>'required|min:5|max:30',
            'requirments1'=>'required|min:10|max:1000',
        ]);
        $eidd ->job_title=request()->get('jobtitle1');
        $eidd ->job_poster=request()->get('jobposter1');
        $eidd ->description=request()->get('jobdes1');
        $eidd ->requirments=request()->get('requirments1');
        // $eidd=posts::updateOrCreate([
        //     'job_title'=>request()->get('jobtitle1'),
        //     'job_poster'=>request()->get('jobposter1'),
        //     'description'=>request()->get('jobdes1'),
        //     'requirments'=>request()->get('requirments1'),
        //     'likes'=>'0',
        //     'pinned'=>'0',
        // ]);
        //IMPORTANT NOTE : that doesn't work here, or atleast i don't know it yet.
        /* 
        IMPORTANT NOTE: if you want to insert your data like this, you just need to pay attention that you 
        did not insert or updated some data of your table so you need to define them here or you just have to
        change their default in your database.
        */
        
        $eidd->save();
        return redirect()->route('show.show',$eidd->id)->with('edit','you edit your record successfully');
    }
    public function showcreate(){
        return view('create');
    }
}
