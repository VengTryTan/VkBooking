@extends('voyager::master')

@section('page_title', 'Viewing Rates')

@section('page_header')
@endsection

@section('content')
    <div class="container">
     <div id="calendar"></div>
    </div>

    <!-- Modal form to add a new price -->
    <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Add New Price</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" role="form">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Price:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="price" autofocus>
                                <p class="errorTitle text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Hotel:</label>
                            <div class="col-sm-10">
                                <select class="form-control form-white" id="hotels_id">
                                      @foreach($hotels as $hotel)
                                          <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                                      @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success add" data-dismiss="modal">
                            <span id="" class='glyphicon glyphicon-check'></span> Add
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal form to add a new price -->

@endsection

@section('css')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
@stop

@section('javascript')
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script>
     
      $(document).ready(function() {
       var calendar = $('#calendar').fullCalendar({
        eventLimit: 3,
        header:{
         left:'prev,next today',
         center:'title',
         right:'month,agendaWeek,agendaDay'
        },
        events : [
            @foreach($rates as $rate)
            {
                title : '{{ $rate->hotel['name'] }} ${{ $rate->price }}',
                start : '{{ $rate->start }}',
                start : '{{ $rate->end }}',
            },
            @endforeach
        ],
        selectable:true,
        selectHelper:true,
        editable:true,

        select: function(start, end, allDay)
        {
         $("#addModal").modal('show');
          var hotels_id = $('#hotels_id').val();
          var price = $('#price').val();

          var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
          var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
          $('.modal-footer').on('click', '.add', function(){
            $.ajax({
             url:"{{ URL::route('events.add') }}",
             type:"POST",
             data:{
                token: '{{csrf_field()}}',
                hotels_id: hotels_id,
                price: price,
                start: start, 
                end: end
              },
             success:function() {
              calendar.fullCalendar('refetchEvents');
              alert("Added Successfully");
             }
            });
          });
        },










        eventResize:function(event)
        {
         var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
         var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
         var title = event.title;
         var id = event.id;
         $.ajax({
          url:"update.php",
          type:"POST",
          data:{title:title, start:start, end:end, id:id},
          success:function(){
           calendar.fullCalendar('refetchEvents');
           alert('Event Update');
          }
         })
        },

        eventDrop:function(event)
        {
         var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
         var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
         var title = event.title;
         var id = event.id;
         $.ajax({
          url:"update.php",
          type:"POST",
          data:{title:title, start:start, end:end, id:id},
          success:function()
          {
           calendar.fullCalendar('refetchEvents');
           alert("Event Updated");
          }
         });
        },

        eventClick:function(event)
        {
         if(confirm("Are you sure you want to remove it?"))
         {
          var id = event.id;
          $.ajax({
           url:"delete.php",
           type:"POST",
           data:{id:id},
           success:function()
           {
            calendar.fullCalendar('refetchEvents');
            alert("Event Removed");
           }
          })
         }
        },

       });
      });
     
     // add a new post
        $(document).on('click', '.add-modal', function() {
            $('.modal-title').text('Add');
            $('#addModal').modal('show');
        });
        
    </script>
@stop

