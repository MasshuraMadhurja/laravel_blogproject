<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>
<style type="text/css">
.post_title {
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    padding: 30px;
    color: white;
}
.div_center{
   
    text-align: center;
    padding: 30px;
    color: black;
}
label
{
    display:inline-block;
    width:220px;
}
</style>

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
            <h1 class="post_title">Add Post</h1>

            <div class="container" align="center" style="padding-top:50px;">

                

                <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="div_center">
                        <label>Post Title</label>
                        <input  type="text" name="title" required="">
                    </div>

                    <div class="div_center">
                        <label>Post Description</label>
                        <textarea type="text" name="description" required=""></textarea>
                    </div>




                    <div class="div_center">
                        <label>Image</label>
                        <input style="color:grey;width:220px;"  type="file" name="image">
                    </div>

                    <div class="div_center">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>

            </div>

        </div>
    </div>

    @include('admin.footer')

</body>

</html>