@extends('layouts.app') @section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Please query your data</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('type') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codeame') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('offer') ? ' has-error' : '' }}">
                            <label for="offer" class="col-md-4 control-label">Offer</label>

                            <div class="col-md-6">
                                <input id="offer" type="text" class="form-control" name="offer" value="{{ old('offer') }}" required>

                                @if ($errors->has('offer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('offer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" required>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@foreach($allrooms as $key=>$room)
<div class="form-group">
<div class="row">
    <div class="col-md-3">
        <label for="name">Room Name:</label>
        <p>{{$room->name}}</p>
    </div>
    <div class="col-md-3">
        <label for="price">Price</label>
        <p>{{$room->price}}</p>
    </div>
    <div class="col-md-3">
        <label for="details">More details</label>
        <img src="{{ asset('uploads/image/'.$room->image)}}" height="75" width="100">
    </div>
    <div class="col-md-3">
        <button type="submit">Edit</button>
    </div>
</div>
</div>
@endforeach @endsection