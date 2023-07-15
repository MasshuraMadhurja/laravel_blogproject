<!DOCTYPE html>
<html lang="en">
<base href="/public">

<head>

    @include('home.homecss')
</head>
<style type="text/css">
.post_title {
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    padding: 30px;
    color: white;
}

.div_center {

    text-align: center;
    padding: 20px;
    color: white;
}

label {
    display: inline-block;
    width: 220px;
}

.img_deg {
    height: 200px;
    width: 250px;
    padding: 10px;
}
</style>

<body>
@include('sweetalert::alert')
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
        <div style="background-color: black; width: 100%;padding-top:10px" >
        <h1 class="post_title" style="color: white;padding-top: 10px;">Upadate Post</h1>

        <div class="container" align="center" style="padding-top:20px;">



            <form action="{{url('update_post_data',$post->id)}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="div_center">
                    <label>Post Title</label>
                    <input type="text" name="title" style="color: black;" value="{{$post->title}}" required="">
                </div>

                <div class="div_center">
                    <label>Post Description</label>
                    <textarea type="text" name="description" style="color: black;" required="">{{$post->description}}</textarea>
                </div>


                <div class="div_center">
                    <label>Current Image</label>
                    <img class="img_deg" src="PostImage/{{$post->image}}" style="display: block; margin: 0 auto;">
                </div>

                <div class="div_center">
                    <label>New Image</label>
                    <input style="color:grey;width:220px;" type="file" name="image">
                </div>

                <div class="div_center">
                    <input style="border: 1px solid white; color: white;" type="submit" class="btn btn-success">
                </div>
            </form>

        </div>
        </div>
    </div>


</body>

</html>