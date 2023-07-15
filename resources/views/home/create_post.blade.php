<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.homecss')
   </head>
   <style type="text/css">
.post_title {
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    padding: 30px;
  
}
.div_center{
   
    text-align: center;
    padding: 30px;
    color: black;
}
.div_deg{
   text-align: center;
}
label
{
    display:inline-block;
    width:220px;
}
</style>
   <body>
    @include('sweetalert::alert')
      <!-- header section start -->
      <div class="header_section">
      @include('home.header')
       
      </div>
 
    
        <!-- Sidebar Navigation-->
       
        <div class="div_deg">

        @if(session()->has('message'))

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss='alert'>
                        x</button>
                    {{session()->get('message')}}
                </div>

                @endif
            <h1 class="post_title" style="color: black;padding-top: 10px;">Add Post</h1>

            <div class="container" align="center" style="padding-top:50px;">

                

                <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">

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
                        <input style="border: 1px solid black; color: black;"  type="submit" class="btn btn-success">
                    </div>
                </form>

            </div>

        </div>
    
      
   
      @include('home.footer')
   </body>
</html>