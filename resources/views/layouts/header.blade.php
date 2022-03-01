<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="_token" content="{{csrf_token()}}" /> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>


    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        Pusher.logToConsole = false;

        var pusher = new Pusher('5d9c55e2b2aa9a7aa9fb', {
            cluster: 'ap2'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            toastr.info(JSON.stringify(data.message));
        });
    </script>

    <style>
        #bottom-upload-button {
            position: fixed;
            bottom: 5%;
            right: 3%;
        }
    </style>
</head>

<body>
    <a type="button" class="btn btn-danger btn-floating btn-lg" id="bottom-upload-button" href="{{url('upload')}}">
        <i class="bi bi-upload"></i>
    </a>
