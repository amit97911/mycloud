@extends('layouts.dashboard')
@section('content')
    <div class="container py-2">
        <form id="fileUploadForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <input name="upload_file[]" type="file" class="form-control" multiple required>
                <div id="error" class="text-danger"></div>
            </div>
            <div class="d-grid mb-3">
                <input type="submit" value="Submit" class="btn btn-primary" id="submit-upload">
            </div>
            <div class="form-group">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar"
                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                </div>
            </div>
        </form>

    </div>


    <script>
        $(document).ready(function() {
            $('.progress').hide();
        });

        $('#fileUploadForm').ajaxForm({
            beforeSend: function() {
                var percentage = '0';
                $('.progress').show();
                $('.progress .progress-bar').css("width", percentage + '%', function() {
                    return $(this).attr("aria-valuenow", percentage) + "%";
                });
            },
            uploadProgress: function(event, position, total, percentComplete) {
                var percentage = percentComplete;
                $('.progress .progress-bar').css("width", percentage + '%', function() {
                    return $(this).attr("aria-valuenow", percentage) + "%";
                });
            },
            complete: function(xhr) {
                if (xhr.status == 422) {
                    $('.progress').hide();
                    $('#error').html("Error : " + xhr.responseJSON.message);
                }
            }
        });


        // $('#submit-upload').click(function() {
        //     $('#fileUploadForm').ajaxForm({
        //         beforeSend: function() {
        //             var percentage = '0';
        //             $('.progress').show();
        //             $('.progress .progress-bar').css("width", percentage + '%', function() {
        //                 return $(this).attr("aria-valuenow", percentage) + "%";
        //             })
        //             $('.progress .progress-bar').html(percentage + '%');
        //         },
        //         uploadProgress: function(event, position, total, percentComplete) {
        //             var percentage = percentComplete;
        //             $('.progress .progress-bar').css("width", percentage + '%', function() {
        //                 return $(this).attr("aria-valuenow", percentage) + "%";
        //             })
        //             $('.progress .progress-bar').html(percentage + '%');
        //         },
        //         complete: function(xhr) {
        //             if (xhr.status == 422) {
        //                 $('.progress').hide();
        //                 $('#error').html("Error : " + xhr.responseJSON.message);
        //             }
        //         }
        //     });
        // });

        // $(function() {
        //     $(document).ready(function() {
        //         $('#progress').hide();
        //         $('#fileUploadForm').ajaxForm({
        //             beforeSend: function() {
        //                 var percentage = '0';
        //             },
        //             uploadProgress: function(event, position, total, percentComplete) {
        //                 $('#progress').show();
        //                 var percentage = percentComplete;
        //                 $('.progress .progress-bar').css("width", percentage + '%', function() {
        //                     return $(this).attr("aria-valuenow", percentage) + "%";
        //                 })
        //                 $('.progress .progress-bar').html(percentage + '%');
        //             },
        //             complete: function(xhr) {
        //                 console.log('File has uploaded');
        //             }
        //         });
        //     });
        // });
    </script>
@stop
