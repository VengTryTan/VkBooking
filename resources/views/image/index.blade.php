@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('image.create') }}" class="btn btn-primary">Add New</a>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 style="text-align: center" class="title">All Image</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>Type ID</th>
                                <th>Image Picture</th>
                                
                                </thead>
                                <tbody>
                                    @foreach($items as $key=>$link)
                                        <tr>
                                            <td>{{ $link->type_ID }}</td>
                                            <td> <img src="{{ asset('uploads/image/'.$link->image)}}" height="150" width="200"></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> 
                        <!-- <div class="row">
                            <div class="col-md-4">
                            <p>Type ID</p>

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


