<div class="header_main">
    <div class="mobile_menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('home')}}">Home</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('register')}}">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
        <div class="menu_main">
            <ul>
                <li class="active"><a href="{{url('home')}}">Home</a></li>
                <li><a href="#about">About</a></li>
               
                <li><a href="#blog-section">Blog</a></li>
           
                @if(Route::has('login'))

                @auth
              
                <li><a href="{{url('create_post')}}">Create Post</a></li>
                <li><a href="{{url('my_post')}}">My Post</a></li>

                <x-app-layout>
                </x-app-layout>
                
                
                
                @else
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
                @endauth
            @endif
            </ul>
        </div>
    </div>
</div>