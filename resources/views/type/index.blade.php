@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('type.create') }}" class="btn btn-primary">Add New</a>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4  style="text-align: center" class="title">All Type</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>Type ID</th>
                                <th>Type Name</th>
                                <th>Type Image</th>
                                
                                </thead>
                                <tbody>
                                    @foreach($types as $key=>$type)
                                        <tr>
                                            <td>{{($type->name)}}</td>
                                            <td> <img src="{{ asset('uploads/image/'.$type->image)}}" height="150" width="200"></td>
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


