@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Add New Type</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('type.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group label-floating">
                                        <label class="control-label">Type Image</label>
                                        <select class="form-control" name="image_id">
                                            @foreach($images as $image)
                                                <option value="{{ $image->id }}">{{ $image->id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                        <label class="control-label">Type Name</label>
                                        <input type="text" name="name">
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Description</label>
                                        <input type="text" name="discription">
                                    </div>
                                </div>
                            </div> -->
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('type.index') }}" class="btn btn-danger">Back</a>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection