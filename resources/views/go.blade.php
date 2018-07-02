@include('header.header')
@foreach($items as $key=>$room)
<div class="container">
<div class="row">
    <div class="col-50">
        <label for="name">Type ID:</label>
        <p>{{$room->type_ID}}</p>
    </div>
    <div class="col-50">
        <label for="price">Price</label>
        <p>{{$room->price}}</p>
    </div>
    <div class="col-50">
        <label for="details">More details</label>
        <img src="{{asset('uploads/image/'.$room->image)}}" height="75" width="100">
    </div>
</div>
</div>
@endforeach

@include('footer.footer')