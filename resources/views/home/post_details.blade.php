<!DOCTYPE html>
<html lang="en">
<base href="/public">

<head>

    @include('home.homecss')
</head>


<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')
        <!-- banner section start -->

    </div>
    <!-- header section end -->


    <div class="col-md-8" style="text-align: center;padding-left:30%; ">
    <img style=" padding:20px;" src="PostImage/{{$post->image}}" class="services_img" style="display: block; margin: 0 auto;">
    <h3><b>{{$post->title}}</b></h3>
    <h4>{{$post->description}}</h4>
    <p>Post by <b>{{$post->usertype}}</b></p>
    
</div>


    @include('home.footer')
</body>

</html>