<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <div class="row">
     <div class="col-md-2">
       <div class="page-wrap">
       <a href="{{route('/home')}}"><img src="{{asset('uploads/image/logo.png')}}"></a>
         
         <ul>
           <li><a href="#">Accommodation</a></li>
           <li><a href="#">Rate </a></li>
           <li><a href="#">Billing</a></li>
         </ul>
       </div>
     </div>
     <div class="col-md-10">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th colspan="1">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($images as $image)
      <tr>

        <td>{{$image['type_ID']}}</td>
        <td>{{$image['type_ID']}}</td>
        <td>{{$image['type_ID']}}</td>
        
    
        <!-- <td>{{$image['image']}}</td>
        <td>{{$image['type_ID']['name']}}</td>
        <td>{{$image['type_ID']['description']}}</td>
     -->
        <td><a href="{{action('SuperadminController@edit', $image['id'])}}" class="btn btn-warning">Edit</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </div>
  </div>
  </body>
</html>