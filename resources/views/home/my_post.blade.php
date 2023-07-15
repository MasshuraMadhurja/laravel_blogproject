<!DOCTYPE html>
<html lang="en">
<base href="/public">

<head>

    @include('home.homecss')
</head>
<style type="text/css">
.img_deg {
    height: 20px00px;
    width: 300px;
    padding: 10px;
    text-align: center;
}
</style>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')
        <!-- banner section start -->
        @if(session()->has('message'))
        <div class="alert alert-success">
                <button type="button" class="close" data-dismiss='alert'>
                    x</button>
                {{session()->get('message')}}
            </div>

        @endif
        @foreach($data as $post)
<div style="background-color: black; width: 100%;" >
        <div class="col-md-12" style="text-align: center; background-color:black;width: 100%;">
            <img class="img_deg" src="PostImage/{{$post->image}}" style="display: block; margin: 0 auto;">
            <h3  style="color: white;"><b>{{$post->title}}</b></h3>
            <h4 style="color: white;">{{$post->description}}</h4>
            <p>Post by <b>{{$post->usertype}}</b></p>
            <h4 style="color: white;">{{$post->post_status}}</h4>
   <div style="padding:30px;">
            <div class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" ><a
                    href="{{url('delete_post',$post->id)}}">Delete</a></div>
      
        <div class="btn btn-success"
                        onclick="return confirm('Are you sure to update this?')">
                        <a href="{{url('update_post',$post->id )}}">Update</a></div>
</div>

        @endforeach
        </div>
     

    </div>
   

</body>

</html>