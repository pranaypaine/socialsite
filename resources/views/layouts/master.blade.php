<!DOCTYPE html>
<html>
    <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    @include('includes.header')
        <div class="container">
            @yield('content')            
        </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $(".tooltipped").tooltip({delay: 50}, 'rounded');
        $(".dropdown-button").dropdown();
        $(".button-collapse").sideNav();
        $('.parallax').parallax();
        //$('.modal-trigger').leanModal();
        $('.modal-trigger').leanModal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .8, // Opacity of modal background
            in_duration: 300, // Transition in duration
            out_duration: 200, // Transition out duration
            starting_top: '4%', // Starting top style attribute
            ending_top: '10%', // Ending top style attribute
            }
            );
      
        $('select').material_select();
        });
    </script>
    </body>
</html>
