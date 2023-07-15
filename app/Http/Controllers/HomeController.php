<?php

namespace App\Http\Controllers;
use App\Models\Post;
use app\Models\user;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Alert;
class HomeController extends Controller
{
    Public function welcome()
    {    if(Auth::id())
        {
            if(Auth::user()->usertype=='user')
            {
                $post=Post::all();

                return view('home.homepage',compact('post'));}
            elseif(Auth::user()->usertype=='admin')
            {return view('admin.adminhome');}
        }
        else{return redirect()->back();}

    //return view('home.homepage');

      //  return view('home.homepage');
    }
    

    Public function index()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='user')
            {
                $post=Post::where('post_status','=','active')->get();

                return view('home.homepage',compact('post'));}
            elseif(Auth::user()->usertype=='admin')
            {return view('admin.adminhome');}
        }
        else{return redirect()->back();}
    }
    Public function homepage()
    {if(Auth::id())
        {
            if(Auth::user()->usertype=='user')
            {
                $post=Post::where('post_status','=','active')->get();

                return view('home.homepage',compact('post'));}
            elseif(Auth::user()->usertype=='admin')
            {return view('admin.adminhome');}
        }
        else{

        $post=Post::where('post_status','=','active')->get();

    return view('home.homepage',compact('post'));}
    }


  


    Public function post_details($id)
    { $post=Post::find($id);

        return view('home.post_details',compact('post'));
        
    }

    Public function create_post()
    {
        return view('home.create_post');
    }
    Public function user_post(Request $request)
    {  $user=Auth()->user();
        $userid=$user->id;
        $username=$user->name;
        $usertype=$user->usertype;
    

        $post= new post;  
        $post->user_id= $userid;
        $post->name=$username;
        $post->usertype=$usertype;


        $post->title=$request->title;
        $post->post_status='pending';
        $post->description=$request->description;
        $image=$request->image;
        if($image)
            {
                $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('PostImage',$imagename);
                $post->image=$imagename;
        
            }
       
        $post->save();
        Alert::success('Congrats','you have added the data successfully');
        return redirect()->back();
    
    }
    Public function my_post1()
    {$user=Auth()->user();
        $userid=$user->id;
        $data=Post::where('user_id','=',$userid)->get();
        return view('home.my_post',compact('data'));
        //return view('admin.update_post')->with(compact('post'))->with('message', 'Post Updated Successfully!');
    } 
    public function delete_post($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect()->back()->with('message','Post Deleted Successfully!');
    }
    Public function my_post()
    { $user=Auth()->user();
        $userid=$user->id;
        $data=Post::where('user_id','=',$userid)->get();
        return view('home.my_post',compact('data'));
    }
    public function update_post($id)
    {
        $post=Post::find($id);
        return view('home.update_post',compact('post'));
    }
    public function update_post_data(Request $request,$id)
    { $post=Post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $image=$request->image;
        if($image)
            {
                $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('PostImage',$imagename);
                $post->image=$imagename;
        
            }
       
        $post->save();
        Alert::success('Congrats','you have updated the data successfully');
        return redirect()->back();
    }
    public function aboutusmore()
    {
       
        return view('home.aboutusmore');
    }
}

