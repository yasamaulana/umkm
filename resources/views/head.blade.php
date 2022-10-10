<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('css/home.css') }}">
    <link rel="stylesheet" href="{{ url('css/detail.css') }}">
    <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('fontawesome/js/all.css') }}"></script>
    <title>UMKM - {{ $title }}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white fixed-top shadow">
        <div class="container">
            <i class="fa-solid fa-shop logo"></i>
            <a class="navbar-brand" href="/">UMKM DESA BATEGEDE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                @auth
                    <img src="{{ url('img/profile-img.jpg') }}" alt="Profile" width="30px" class="rounded-circle">
                @else
                    <span <i class="fa-solid fa-ellipsis-vertical"></i></span>
                @endauth
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" aria-current="page"
                            href="/"><b>HOME</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'UMKM' ? 'active' : '' }}" href="/umkm"><b>UMKM</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Wisata' ? 'active' : '' }}" href="/wisata"><b>WISATA</b></a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Wisata' ? 'active' : '' }}" href="/wisata"><b>Di Ikuti</b></a>
                        </li>
                        <li class="nav-item dropdown pe-3">

                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                                data-bs-toggle="dropdown">
                                <img src="{{ url('img/profile-img.jpg') }}" alt="Profile" width="37px"
                                    style="margin-top: -8px" class="rounded-circle">
                            </a><!-- End Profile Iamge Icon -->

                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <h6>{{ auth()->user()->nama }}</h6>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="/profile">
                                        <i class="bi bi-person"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="/setting-akun">
                                        <i class="bi bi-gear"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="dropdown-item d-flex align-items-center">
                                            <i class="bi bi-box-arrow-right"></i>
                                            <span>Sign Out</span>
                                        </button>
                                    </form>
                                </li>

                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Daftar' ? 'active' : '' }}" href="/daftar"><b>DAFTAR</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Login' ? 'active' : '' }}" href="/login"><b>LOGIN</b></a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    @yield('isi')
</body>

</html>
