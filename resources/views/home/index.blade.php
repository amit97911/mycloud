@extends('layouts.dashboard')
@section('content')

    <div class="row user-select-none">

        @php
            $files = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23'];
        @endphp
        @foreach ($files as $file)
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card float-start m-1 w-100">
                    <div class="card-header p-0 m-0">
                        <div class="float-start align-middle">
                            <div class="input-group m-1">
                                {{-- use id for id-html --}}
                                <input class="form-check-input checkbox" id="checkbox{{ $file }}" type="checkbox"
                                    name="file_checkbox[]" value="">
                                <label for="checkbox{{ $file }}" class="ms-1 filename">filename 2024-04-14
                                    14:30:27</label>
                                <label for="checkbox{{ $file }}">.mp345</label>
                            </div>
                        </div>
                        <div class="float-end">
                            <div class="dropdown">
                                <button class="btn bi bi-three-dots-vertical" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <img src="{{ asset('thumbnail/train-1645281525237-484 (8th copy).jpg') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body container d-none d-md-block">
                        <small class="file-accessed text-muted float-start">22.21mb</small>
                        <small class="file-accessed text-muted float-end">05 may 2024</small>
                    </div>
                </div>
            </div>
        @endforeach

















































        {{-- <div class="card float-start m-1">
    <div class="card-header p-0 m-0">
        <div class="float-start align-middle">
            <div class="input-group m-1">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <p class="mx-1 text overflow-wrap">Fildamddddddddddddddddddddddddddddddddde.txt</p>
            </div>
        </div>
        <div class="float-end">
            <div class="dropdown">
                <button class="btn bi bi-three-dots-vertical" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>

        </div>
    </div>
    <img src="{{ asset('thumbnail/train-1645281525237-484 (8th copy).jpg') }}" class="card-img-top" alt="...">
    <div class="card-body container d-none d-md-block">
        <div class="row overflow-hidden">
            <div class="col-md-6 text card-text mb-0">
                32.2mb
            </div>
            <div class="col-md-6 text card-text mb-0">
                05 may 2024
            </div>
        </div>
        <small class="file-accessed text-muted">Last accessed: 2 months ago</small>
    </div>
</div> --}}




        <script>
            //check on page load
            $(".checkbox").click(function() {
                if ($('.checkbox').is(':checked')) {
                    $('.menu-icons').show();
                } else {
                    $('.menu-icons').hide();
                }
            });
        </script>
    @stop
