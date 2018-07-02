@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Add New Image</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                        <label class="control-label">Type ID</label>
                                        <select class="form-control" name="type_ID">
                                            @foreach($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Image Picture</label>
                                        <input type="file" name="image">
                                    </div>
                                </div>
                            </div>

                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('image.index') }}" class="btn btn-danger">Back</a>
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