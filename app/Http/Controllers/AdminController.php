<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    Public function adminhome()
    {
    return view('admin.adminhome');
    }
    Public function post_page()
    {
    return view('admin.post_page');
    }
    Public function add_post(Request $request)
    {
        $user=Auth()->user();
        $userid=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;
       

        $post=new Post;
        $post->title=$request->title;
        $post->description=$request->description;
        $post->post_status='active';
        

        $post->user_id=$userid;
        $post->name=$name;
        $post->usertype=$usertype;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('PostImage',$imagename);
            $post->image=$imagename;
    
        }
      
      
         
         $post->save();
        return redirect()->back()->with('message','Post Added Successfully!');
    }
    public function show_post()
{
    $data=Post::all();
        return view('admin.show_post',compact('data'));
}

public function delete_post($id)
{
    $post=Post::find($id);
    $post->delete();
    return redirect()->back()->with('message','Post Deleted Successfully!');
} 
public function update_post_admin(Request $request,$id)
{
    $posts=Post::find($id);
   
    return view('admin.update_post_admin',compact('posts'));
}
public function edit_post(Request $request,$id)
{
    $posts=Post::find($id);
    $posts->title=$request->title;
    $posts->description=$request->description;
    $image=$request->image;
    if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('PostImage',$imagename);
            $posts->image=$imagename;
    
        }
   
    $posts->save();
    return redirect()->back()->with('message','Post Updated Successfully!');
    //return view('admin.update_post')->with(compact('post'))->with('message', 'Post Updated Successfully!');
} 



public function approve($id)
{
    $data=Post::find($id);
    $data->post_status='active';
    $data->save();
    return redirect()->back()->with('message','Post approved Successfully!');

}
public function reject($id)
{
    $data=Post::find($id);
    $data->post_status='rejected';
    $data->save();
    return redirect()->back()->with('message','Post Rejected Successfully!');
}
}
