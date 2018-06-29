<!-- <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Room
    <span class="caret"></span></button>
    
    <ul class="dropdown-menu">
    @foreach($rooms as $key=>$room)
      <li><a href="">{{$room->name}}</a></li>
    @endforeach
    </ul>
</div>
<div>
<label for="image" name="image">Image</label>
<input type="file" accept=".png,.jpg">
</div>

</body> -->
<form method="POST" action="{{route('upload')}}">
<div class="col-md-10 col-md-offset-4">
<label for="name" name="name">Name</label>
<input type="text">
</div>

<div class="col-md-10 col-md-offset-4">
<label for="room_type" name="room_type">Room type</label>
<input type="number">
</div>

<div class="col-md-10 col-md-offset-4">
<label for="offer" name="offer">Offer</label>
<input type="text">
</div>

<div class="col-md-10 col-md-offset-4">
<label for="description" name="description">Description</label>
<input type="text">
</div>

<div class="col-md-10 col-md-offset-4">
<label for="price" name="price">Price</label>
<input type="number">
</div>

<div class="col-md-10 col-md-offset-4">
<label for="image" name="image">Image</label>
<input type="file" accept=".png,.jpg">
</div>

<div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
</div>
</form>

