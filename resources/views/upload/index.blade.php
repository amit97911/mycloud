@extends('layouts.dashboard')
@section('content')
    <div class="container py-2">
        <form id="fileUploadForm" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <form id="fileUploadForm"> --}}
            <div class="form-group mb-3">
                <input name="upload_file[]" type="file" class="form-control" multiple>
                <div class="text-danger" id="error_upload_file"></div>
            </div>
            <div class="d-grid mb-3">
                <input type="submit" value="Submit" class="btn btn-primary" id="submit-upload">
            </div>
            <div class="form-group d-none">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar"
                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                </div>
            </div>
        </form>

    </div>


    <script>
        // $("#submit-upload").click(function(e) {
        //     e.preventDefault;
        //     $.ajax({
        //         beforeSend: function() {
        //             var percentage = '0';
        //         },
        //         uploadProgress: function(event, position, total, percentComplete) {
        //             var percentage = percentComplete;
        //             $('.progress .progress-bar').css("width", percentage + '%', function() {
        //                 return $(this).attr("aria-valuenow", percentage) + "%";
        //             })
        //         }
        //     });
        // });

        // $(function() {
        //     $(document).ready(function() {
        //         $('#fileUploadForm').ajaxForm({
        //             beforeSend: function() {
        //                 var percentage = '0';
        //             },
        //             uploadProgress: function(event, position, total, percentComplete) {
        //                 var percentage = percentComplete;
        //                 $('.progress .progress-bar').css("width", percentage + '%', function() {
        //                     return $(this).attr("aria-valuenow", percentage) + "%";
        //                 })
        //             },
        //             complete: function(xhr) {
        //                 console.log('File has uploaded');
        //             }
        //         });
        //     });
        // });
    </script>

@stop
