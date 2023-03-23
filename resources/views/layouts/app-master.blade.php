<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Fixed top navbar example · Bootstrap v5.1</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet"> --}}
    {{--
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .float-right {
        float: right;
      }
    </style>
     --}}
    {{-- Admin LTE --}}

    <!-- Custom styles for this template -->
    {{-- <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="{!! url('assets/plugins/fontawesome-free/css/all.min.css') !!}">

        <script src="{!! url('assets/plugins/jquery/jquery.min.js') !!}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{!! url('assets/plugins/jquery-ui/jquery-ui.min.js ') !!}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{!! url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') !!}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{!! url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{!! url('assets/plugins/jqvmap/jqvmap.min.css') !!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! url('assets/dist/css/adminlte.min.css') !!}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{!! url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') !!}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{!! url('assets/plugins/daterangepicker/daterangepicker.css') !!}">
    <!-- summernote -->
    <link rel="stylesheet" href="{!! url('assets/plugins/summernote/summernote-bs4.min.css') !!}">


</head>

<body class=" @guest sidebar-collapse @endguest hold-transition sidebar-mini layout-fixed
">
    @guest
        @include('layouts.partials.anonymousnavbar')

    @endguest

    @auth
        @include('layouts.partials.navbar')
        @include('layouts.partials.sidebar')
    @endauth
    <div>
        <main class="container mt-15">
            @yield('content')
        </main>
    </div>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script> --}}

    @section('scripts')

    @show

    {{-- ADMIN LTE  --}}

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{!! url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>



    <!-- daterangepicker -->
    <script src="{!! url('assets/plugins/moment/moment.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/daterangepicker/daterangepicker.js') !!}"></script>


    <!-- overlayScrollbars -->
    <script src="{!! url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}"></script>
    <!-- AdminLTE App -->
    <script src="{!! url('assets/dist/js/adminlte.js') !!}"></script>

    <script src="{!! url('assets/dist/js/pages/dashboard.js') !!}"></script>
    <script src="{!! url('assets/plugins/fullcalendar/main.js') !!}"></script>


    {{-- Calendar Code --}}

    <script>
        $(function () {

          /* initialize the external events
           -----------------------------------------------------------------*/
          function ini_events(ele) {
            ele.each(function () {

              // create an Event Object (https://fullcalendar.io/docs/event-object)
              // it doesn't need to have a start or end
              var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
              }

              // store the Event Object in the DOM element so we can get to it later
              $(this).data('eventObject', eventObject)

              // make the event draggable using jQuery UI
              $(this).draggable({
                zIndex        : 1070,
                revert        : true, // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
              })

            })
          }

          ini_events($('#external-events div.external-event'))

          /* initialize the calendar
           -----------------------------------------------------------------*/
          //Date for the calendar events (dummy data)
          var date = new Date()
          var d    = date.getDate(),
              m    = date.getMonth(),
              y    = date.getFullYear()

          var Calendar = FullCalendar.Calendar;
          var Draggable = FullCalendar.Draggable;

          var containerEl = document.getElementById('external-events');
          var checkbox = document.getElementById('drop-remove');
          var calendarEl = document.getElementById('calendar');

          // initialize the external events
          // -----------------------------------------------------------------

          new Draggable(containerEl, {
            itemSelector: '.external-event',
            eventData: function(eventEl) {
              return {
                title: eventEl.innerText,
                backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
                borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
                textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
              };
            }
          });

          var calendar = new Calendar(calendarEl, {
            headerToolbar: {
              left  : 'prev,next today',
              center: 'title',
              right : 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            themeSystem: 'bootstrap',
            //Random default events
            events: [
              {
                title          : 'All Day Event',
                start          : new Date(y, m, 1),
                backgroundColor: '#f56954', //red
                borderColor    : '#f56954', //red
                allDay         : true
              },
              {
                title          : 'Long Event',
                start          : new Date(y, m, d - 5),
                end            : new Date(y, m, d - 2),
                backgroundColor: '#f39c12', //yellow
                borderColor    : '#f39c12' //yellow
              },
              {
                title          : 'Meeting',
                start          : new Date(y, m, d, 10, 30),
                allDay         : false,
                backgroundColor: '#0073b7', //Blue
                borderColor    : '#0073b7' //Blue
              },
              {
                title          : 'Lunch',
                start          : new Date(y, m, d, 12, 0),
                end            : new Date(y, m, d, 14, 0),
                allDay         : false,
                backgroundColor: '#00c0ef', //Info (aqua)
                borderColor    : '#00c0ef' //Info (aqua)
              },
              {
                title          : 'Birthday Party',
                start          : new Date(y, m, d + 1, 19, 0),
                end            : new Date(y, m, d + 1, 22, 30),
                allDay         : false,
                backgroundColor: '#00a65a', //Success (green)
                borderColor    : '#00a65a' //Success (green)
              },
              {
                title          : 'Click for Google',
                start          : new Date(y, m, 28),
                end            : new Date(y, m, 29),
                url            : 'https://www.google.com/',
                backgroundColor: '#3c8dbc', //Primary (light-blue)
                borderColor    : '#3c8dbc' //Primary (light-blue)
              }
            ],
            editable  : true,
            droppable : true, // this allows things to be dropped onto the calendar !!!
            drop      : function(info) {
              // is the "remove after drop" checkbox checked?
              if (checkbox.checked) {
                // if so, remove the element from the "Draggable Events" list
                info.draggedEl.parentNode.removeChild(info.draggedEl);
              }
            }
          });

          calendar.render();
          // $('#calendar').fullCalendar()

          /* ADDING EVENTS */
          var currColor = '#3c8dbc' //Red by default
          // Color chooser button
          $('#color-chooser > li > a').click(function (e) {
            e.preventDefault()
            // Save color
            currColor = $(this).css('color')
            // Add color effect to button
            $('#add-new-event').css({
              'background-color': currColor,
              'border-color'    : currColor
            })
          })
          $('#add-new-event').click(function (e) {
            e.preventDefault()
            // Get value and make sure it is not null
            var val = $('#new-event').val()
            if (val.length == 0) {
              return
            }

            // Create events
            var event = $('<div />')
            event.css({
              'background-color': currColor,
              'border-color'    : currColor,
              'color'           : '#fff'
            }).addClass('external-event')
            event.text(val)
            $('#external-events').prepend(event)

            // Add draggable funtionality
            ini_events(event)

            // Remove event from text input
            $('#new-event').val('')
          })
        })
      </script>
    {{-- Calendar Code --}}
</body>

</html>
