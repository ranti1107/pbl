<!DOCTYPE html>
<html>
<head>
    <title>SI BAKET</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <link href="{{url('public')}}/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="background-color: #2A3F54">

<div class="container" >
    <br />
    <h1 class="text-center" style="color: #fff">Kegiatan BAPPEDA</h1>
    <a href="{{url('Admin/event')}}">
      <div class="btn btn-primary mb-2"><i class="fa fa-home"></i> Kembali</div>
    </a>
    <br />

    <div id="calendar" style="margin-bottom: 20px; color: #000"></div>

</div>
   
<script>

$(document).ready(function () {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calendar').fullCalendar({
        editable:true,
        header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
        },
        events:'kalender-user',
        selectable:true,
        selectHelper: true,
        
        
    });

});
  
</script>
  
</body>
</html>