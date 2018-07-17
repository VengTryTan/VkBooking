
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editing Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/editImage.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('js/imageIsLoad.js')}}"></script> -->
  </head>
  <body>
    <div class="container">
    <h2>Edit A Form</h2><br  />
        <form method="POST" action="{{ route('types.update', ['id'=> $img->type_ID]) }}" enctype="multipart/form-data">
        {{ @csrf_field() }}
        <div>
        	<input type="hidden" value="{{csrf_token()}}" name="_token" />
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="img">Description:</label><br>
              <input type="text" class="form-control" name="description" id="description" value="{{$img->description}}" placeholder="Edit Image">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="img">Image:</label><br>
              <img src="{{asset('uploads/image/'.$img->image)}}" id="img" height="150" width="200" alt="img">
              <input type="file" class=" form-control user-photo-action" name="image" id="edit-pic" value="" placeholder="Edit Image">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px" id="update">Update</button>
          </div>
        </div>
        </div>
      </form>
    </div>
  </body>
</html>