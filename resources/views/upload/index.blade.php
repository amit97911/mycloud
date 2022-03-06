@extends('layouts.dashboard')
@section('content')
    <div class="container py-2">
        <p class="fs-6 text-danger do-not-leave">Please do not leave the page</p>
        <form class="fileUploadForm" action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <input name="upload_file[]" type="file" class="form-control" multiple required>
                <div id="error" class="text-danger"></div>
            </div>
            <div class="d-grid mb-3">
                <input type="submit" value="Submit" class="btn btn-primary" id="submit-upload">
            </div>
            <div class="form-group">
                <div class="progress upload-progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar"
                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                </div>
            </div>
        </form>
    </div>


    <script>
        
    </script>
@stop
