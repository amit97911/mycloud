<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="_token" content="{{csrf_token()}}" /> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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

        $(document).ready(function() {
            $('.upload-progress').hide();
            $('.do-not-leave').hide();
            if ($('.checkbox').is(':checked')) {
                $('.menu-icons').show();
            } else {
                $('.menu-icons').hide();
            }
        });
    </script>

    <style>
        #bottom-upload-button {
            position: fixed;
            bottom: 5%;
            right: 3%;
            z-index: 3;
        }

        .filename {
            width: 100px;
            height: 25px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        /* .text {
            display: block;
            width: 100px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        } */

    </style>
</head>

<body>
    <button type="button" class="btn btn-danger btn-floating btn-l" data-bs-toggle="modal" id="bottom-upload-button"
        data-bs-target="#UploadModal">
        <i class="bi bi-upload"></i>
    </button>

    <!-- Upload Modal -->
    <div class="modal fade" id="UploadModal" tabindex="-1" aria-labelledby="UploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="fs-6 text-danger do-not-leave">Please do not leave the page</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="fileUploadForm" action="{{ url('upload') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <input name="upload_file[]" type="file" class="form-control" multiple required>
                            <div id="error" class="text-danger"></div>
                        </div>
                        <div class="form-group mb-3">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                        <div class="form-group">
                            <div class="progress upload-progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                    role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
