<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editing Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Form</h2><br  />
      
        <form method="POST" action="{{action('SuperadminController@update', $type_ID)}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{ @csrf_field() }}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">ID:</label>
            <input type="text" class="form-control" name="name" value="{{$img->type_ID}}">	
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4 label label-floating">
              <label class="control-label" for="img">Image</label>
              <img src="{{ asset('uploads/image/'.$img->image)}}" height="150" width="200">
              <input type="file" class="form-control" name="email" value="">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>