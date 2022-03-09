<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top p-0 m-0">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @isset($active)
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if ($active == 'home') active @endif"
                            href="{{ route('home-index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if ($active == 'upload') active @endif"
                            href="{{ route('upload-index') }}">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if ($active == 'shared') active @endif"
                            href="{{ route('shared-index') }}">Shared</a>
                    </li>
                </ul>
            @endisset
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex">
                <li class="nav-item menu-icons">
                    <a class="nav-link text-dark" href="#"  data-bs-toggle="tooltip"  data-bs-placement="bottom" title="Delete selected">
                        <i class="bi bi-trash-fill" style="font-size: 2rem; color: rgb(211, 0, 28);"></i>
                    </a>
                </li>
                <li class="nav-item menu-icons">
                    <a class="nav-link text-dark" href="#" data-bs-toggle="tooltip"  data-bs-placement="bottom" title="Download selected">
                        <i class="bi bi-cloud-arrow-down-fill" style="font-size: 2rem; color: rgb(0, 0, 0);"></i>
                    </a>
                </li>
                <li class="nav-item menu-icons">
                    <a class="nav-link text-dark" href="#" data-bs-toggle="tooltip"  data-bs-placement="bottom" title="Share selected">
                        <i class="bi bi-person-plus-fill" style="font-size: 2rem; color: rgb(0, 0, 0);"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person-circle" style="font-size: 2rem; color: cornflowerblue;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
