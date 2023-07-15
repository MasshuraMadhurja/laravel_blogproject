<div class="services_section layout_padding" id="blog-section">
         <div class="container">
            <h1 class="services_taital">Blog Posts </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               <div class="row" >

                @foreach($post as $postss)
                  <div class="col-md-4" style="padding-bottom: 10px;">
                     <div><img style="margin-bottom:20px;height:250px" width="350px" src="PostImage/{{$postss->image}}" class="services_img"></div>
                     <h4>{{$postss->title}}</h4>
                     <p>Post by <b>{{$postss->name}}</b></p>
                     <div class="btn_main"><a href="{{url('post_details',$postss->id)}}">Read more</a></div>
                  </div>
                  @endforeach
                  
               </div>
            </div>
         </div>
      </div>