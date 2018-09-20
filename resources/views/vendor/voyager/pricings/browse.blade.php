@extends('voyager::master')

@section('page_title', 'Viewing Pricings'))

@section('page_header')
@endsection

@section('content')
    <div class="container">
     <div id="calendar"></div>
    </div>
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
        events: '../../../../../load.php',
        selectable:true,
        selectHelper:true,
        editable:true,

        select: function(start, end, allDay)
        {
         var event_name = prompt("Enter Type");
         var price = prompt("Enter Price");
         if(event_name)
         {
          var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
          var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
          $.ajax({
           url:"events.add",
           type:"POST",
           data:{event_name:event_name, price:price, start:start, end:end},
           success:function()
           {
            calendar.fullCalendar('refetchEvents');
            alert("Added Successfully");
           }
          })
         }
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
     
    </script>
@stop

