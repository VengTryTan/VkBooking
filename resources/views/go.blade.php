@include('header.header')
@foreach($items as $key=>$item)
<div class="container">
<div class="row">
    <div class="col-50">
        <label for="name">Type Name:</label>
        <p>{{$item->name}}</p>
    </div>
    <div class="col-50">
        <label for="description">Description</label>
        <p>{{$item->description}}</p>
    </div>
    <div class="col-50">
        <label for="details">More details</label>
        <img src="{{asset('uploads/image/'.$item->image)}}" height="75" width="100">
    </div>
</div>
</div>
@endforeach
@include('footer.footer')