<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/assets/css/icofont.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/bundle.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <title>Capture</title>

        
</head>
<body>
   <header>
   <div class="menu-style-3 menu-hover text-center" style="
background-color: rgba(10,10,10,.7)!important;    position: fixed;
    width: 100%;
    top: 0;
">            @include('_navbar')
    </div> 
    <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
    <div class="logo-3">
        <a href="{{route('home')}}">
            <img src="/assets/img/logo/logo capture.png" style="width:10%" alt="">
        </a>
    </div>    
    <div class="mobile-menu">
        <nav id="mobile-menu-active">
            <ul class="menu-overflow">
                <li>
                    <a href="{{url('/')}}">home</a>
                </li>
                <li>
                    <a href="{{url('/products/search')}}">Shop</a>
                </li>
                <li>
                    <a href="{{url('/events')}}">Events </a>
                </li>
                <li>
                    <a href="{{url('/blog')}}">blog</a>
                </li>
                <li>
                    <a href="{{url('/contact')}}">contact</a>
                </li>
                <li class="same-style-text">
                    <a href="{{ route('cart.index') }}">My Cart
                        @auth
                        {{Cart::session(auth()->id())->getContent()->count()}}
                        @else
                        0
                        @endauth
                        Item</a>
                </li>
                 @auth
                <li>
                    <form action=" {{ url('/logout') }} " method="POST">
                        @csrf
                        <input type="submit" value="Logout" />
                    </form>
                </li>
                    @else
                    <li>
                        <a href="{{url('/login')}}">Login</a>
                    </li>
                    <li>
                        <a href="{{url('/register')}}">Sign Up</a>
                    </li>
                @endauth
                            </ul>
                        </nav>
                    </div>
                </div>
    </header>
    
    <div class="breadcrumb-area pt-205 breadcrumb-padding pb-210"
    style="background-image: url(/assets/img/event/event.png)">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
            <h2> shop grid</h2>
            <ul>
                <li><a href="#">home</a></li>
                <li>shop grid</li>
            </ul>
            </div>
        </div>
    </div>  


    <div class="container">
        @if(Auth::check() && Auth::user()->role_id == 1)
        <div class="mb-5 mt-5">
            <button id="addEventButton" class="btn btn-danger">
                Add Event
            </button>    
        </div>
        @endif
        <div id='calendar' class="mb-5 mt-5"></div>
        </div>
        <div id="dialog">
        <div id="dialog-body">
            <form id="dayClick" action="{{route('eventStore')}}" method="post">
@csrf
<div class="form-group">
    <label> Event Title</label>
    <input type="text" id="title" name="title" class="form-control" placeholder="event title">
</div>
<div class="form-group">
    <label> Event description </label>
    <input type="text" id="description" name="description" class="form-control" placeholder="event description">
</div>
<div class="form-group">
    <label> Event Start date</label>
    <input type="text" id="start" name="start" class="form-control" placeholder="event start date ">
</div>
<div class="form-group">
    <label> Event End date</label>
    <input type="text" id="end" name="end" class="form-control" placeholder="event end date ">
</div>

@if(Auth::check() && Auth::user()->role_id == 1)

<div class="form-group">
    <label> All the day Event</label>
    <input type="checkbox" value=1 name="allday" checked>All Day

</div>
<div class="form-group">
    <label> Backgroud Color</label>
    <input type="color" id="color" name="color" class="form-control" >
</div>
<div class="form-group">
    <label> Text Color</label>
    <input type="color" id="textColor" name="textColor" class="form-control" >
</div>
<input type="hidden" id="eventId" name="event_id">

<div class="form-group">
<button type="submit" class="btn btn-success" id="update" >Add Event</button>
</div>

<div class="form-group">
<a onclick="return confirm('Are you sure to delete')" class="btn btn-danger" id="deleteEvent">Delete</a>

@endif
</form>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
         <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>

         <link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}" >
        <script src="{{asset('js/fullcalendar.js')}}"></script>
        <style>
        #dialog{
            display:none;
        }
        </style>

<script>
$(document).ready(function() {

    function convert(str){
        const d= new Date(str);
        let month='' + (d.getMonth()+1);
        let day=''+d.getDate();
        let year=d.getFullYear();
        if(month.length<2) month='0'+month;
        if(day.length<2)day='0'+day;
        let hour=''+d.getUTCHours();
        let minutes=''+d.getUTCMinutes();
        let seconds=''+d.getUTCSeconds();
        if(hour.length<2) hour='0'+hour;
        if(minutes.length<2) minutes='0'+minutes;
        if(seconds.length<2) seconds='0'+seconds;
        return [year,month,day].join('-')+' '+[hour,minutes,seconds].join(':');

    };   

// page is now ready, initialize the calendar...
$('#addEventButton').on('click',function(){
    $('#dialog').dialog({
    title:'Add Event',
    width:600,
    height:600,
    model:true,
    show:{effect:'clip', duration:350},
    hide:{effect:'clip', duration:250}

   })
})
var calendar = $('#calendar').fullCalendar({
  // put your options and callbacks here
  header: {
    left: 'prev,next today',
    center: 'title',
    right: 'year,month,basicWeek,basicDay'

  },
  showNowCurrentDates: false,
  timezone: 'local',
  height: "600",
  selectable: true,
  //dragabble: true,
  editable:false,
  defaultView: 'month',
  yearColumns: 3,
  events:"{{route('allEvent')}}",

  @if(Auth::check() && Auth::user()->role_id == 1)

  dayClick:function(date,event,view){
   $('#start').val(convert(date));
   $('#dialog').dialog({
    title:'Add Event',
    width:600,
    height:600,
    model:true,
    show:{effect:'clip', duration:350},
    hide:{effect:'clip', duration:250}

   })
  },
   
  select:function(start,end){
      $('#start').val(convert(start));
      $('#end').val(convert(end));
      $('#dialog').dialog({
    title:'Add Event',
    width:600,
    height:600,
    model:true,
    show:{effect:'clip', duration:350},
    hide:{effect:'clip', duration:250}

   })
  },@endif
  eventClick:function(event){
    $('#title').val(event.title);
    $('#description').val(event.description);
    $('#start').val(convert(event.start));
    $('#end').val(convert(event.end));
    $('#color').val(event.color);
    $('#textColor').val(event.textColor);
    $('#eventId').val(event.id);
    $('#update').html('Update');
    $('#dialog').dialog({
    title:'Edit Event',
    width:600,
    height:600,
    model:true,
    show:{effect:'clip', duration:350},
    hide:{effect:'clip', duration:250}

   })
  }

 


}) 

});
    </script>
    @include('sweetalert::alert')

</body>
</html>

<!-- Section: Event v.1 -->






