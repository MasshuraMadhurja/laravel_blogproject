<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>
<style type="text/css">
.title_deg {
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    padding: 30px;
    color: white;
}

.table_deg {
    border: 1px solid white;
    width: 80%;
    text-align: center;
    margin-left: 70px
}

.th_deg {
    color: #22252a;
    background-color: skyblue;
}

.img_deg
{
  height:100px;
   width:150px;
   padding:10px;
}
</style>


<body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <div class="page-content">

        @if(session()->has('message'))

<div class="alert alert-success">
    <button type="button" class="close" data-dismiss='alert'>
        x</button>
    {{session()->get('message')}}
</div>



@endif
            <h1 class="title_deg">All Posts</h1>
            <table class="table_deg">
                <tr class="th_deg">
                    <th>Post Title</th>
                    <th>Description</th>
                    <th>Post by</th>
                    <th>Post Status</th>
                    <th>Usertype</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Update</th>
                    <th>Reject</th>
                    <th>Approve</th>
                </tr>

                @foreach($data as $post)
                <tr >
                    <td >{{$post->title}}</td>
                    <td >{{$post->description}}</td>
                    <td >{{$post->name}}</td>
                    <td >{{$post->post_status}}</td>
                    <td >{{$post->usertype}}</td>
                    <td class="img_deg"><img  src="PostImage/{{$post->image}}"></td>
                    <td> <a class="btn btn-danger"
                onclick="return confirm('Are you sure to delete this?')"
                        href="{{url('delete_post',$post->id )}}">Delete</a></td>

                    <td> <a class="btn btn-success"
                        onclick="return confirm('Are you sure to update this?')"
                        href="{{url('update_post_admin',$post->id )}}">Update</a></td>


                        <td> <a class="btn btn-danger"
                        onclick="return confirm('Are you sure to reject this?')"
                        href="{{url('reject',$post->id )}}">Reject</a></td>
               
                        <td> <a class="btn btn-success"
                        onclick="return confirm('Are you sure to approve this?')"
                        href="{{url('approve',$post->id )}}">Approve</a></td>
                      
                       



                </tr>
                @endforeach

            </table>
        </div>



        @include('admin.footer')

</body>

</html>