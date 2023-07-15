<!DOCTYPE html>
<html>

<head>
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
    padding: 30px;
    color: black;
}

label {
    display: inline-block;
    width: 220px;
}
.img_deg
{
  height:100px;
   width:150px;
   padding:10px;
}
</style>

<base href="/public">
    @include('admin.css')

</head>


<body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')

        <div class="page-content">

            @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss='alert'>
                    x</button>
                {{session()->get('message')}}
            </div>

            @endif
            <h1 class="post_title">Update Post</h1>

            <div class="row" align="center" style="padding-top:50px;">



                <form action="{{url('edit_post',$posts->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="div_center">
                        <label>Post Title</label>
                        <input type="varchar" name="title" value="{{$posts->title}}">
                    </div>

                    <div class="div_center">
                        <label>Post Description</label>
                        <input type="longtext" name="description" value="{{$posts->description}}">
                    </div>




                    <div style="width:220px;">
                        <label>Old Image</label>
                        <img style="width:220px;"  src="PostImage/{{$posts->image}}">
                    </div>
                    <div class="div_center">
                        <label>Change Image</label>
                        <input style="color: white;width:220px;" type="file" name="image" value="{{$posts->file}}">
                    </div>

                    <div class="div_center">
                        <input type="submit" class="btn btn-success" >
                    </div>
                </form>

            </div>

        </div>
    </div>

    @include('admin.footer')

</body>

</html>