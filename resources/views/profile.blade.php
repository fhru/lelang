<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    {{-- icon --}}
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <style>
        * {
            font-family: 'Nunito', sans-serif;
            scroll-behavior: smooth;
        }

        .navbar-brand {
            font-family: 'Righteous', cursive;
        }

        .bold {
            font-weight: 800;
        }

        .semi-bold {
            font-weight: 600;
        }

        .lelang {
            margin-bottom: 70px;
        }

        /* .search {
            margin-top: 120px;
        } */

        .wrapper {
            background-color: #E9EAEB;
            padding-bottom: 100px;
        }

        .footer ul li a {
            color: black;
        }

        .btn-sm {
            width: 100% !important;
        }

        .footer-section {
            background-color: #E9EAEB;
        }

        .card {
            border: none !important;
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>
    {{-- navbar --}}
    <section class="shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand fs-3" href="/">Lelang</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item text-center">
                                <div class="nav-link">
                                    <a class="text-decoration-none text-reset me-1" href="/lelang">Home</a>
                                    <i class="fas fa-chevron-right me-1"></i>
                                    <span class="bold">Profile</span>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            @if (Auth::guest())
                            <li class="nav-item text-center">
                                <a class=" btn btn-red" href="/login">Login</a>
                            </li>
                            @else
                            <li class="nav-item text-center">
                                <div class="dropdown">
                                    <a class="text-decoration-none text-dark bold" href="#" role="button"
                                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user-circle"></i> {{auth()->user()->name}}
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="/profile"><i
                                                    class="fas fa-id-card-alt me-2"></i>Profile</a></li>
                                        <li><a class="dropdown-item" href="/logout"><i
                                                    class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    {{-- end navbar --}}
    {{-- banner --}}
    <section class="pt-2">
        <div class="container banner">
            <div class="row">
                <div class="col text-center">
                    <div class="d-flex justify-content-center">
                        <div class="img-overlay rounded-circle bg-dark m-5 align-items-center"
                            style="width: 200px; height: 200px; background-image: url('{{asset('img/profil.jpg')}}'); background-size: cover; background-position: center;">
                            <p><i class="fas fa-pen"></i></p>
                        </div>
                    </div>
                    {{-- <img src="{{asset('img/profile.svg')}}" alt="..." class="img-thumbnail p-5"
                    style="max-width: 200px; border: none;" data-aos="fade-down"> --}}
                    <p class="display-4 bold text-center">{{auth()->user()->name}}</p>
                    <p class="fs-4 bold text-center">{{auth()->user()->email}}</p>
                </div>
            </div>
        </div>
    </section>
    {{-- end banner --}}
    {{-- content --}}
    {{-- svg --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#E9EAEB" fill-opacity="1"
            d="M0,0L21.8,32C43.6,64,87,128,131,149.3C174.5,171,218,149,262,144C305.5,139,349,149,393,176C436.4,203,480,245,524,256C567.3,267,611,245,655,218.7C698.2,192,742,160,785,160C829.1,160,873,192,916,208C960,224,1004,224,1047,202.7C1090.9,181,1135,139,1178,149.3C1221.8,160,1265,224,1309,224C1352.7,224,1396,160,1418,128L1440,96L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z">
        </path>
    </svg>
    {{-- footer --}}
    <section class="footer-section pb-3">
        <div class="container footer">
            <div class="row">
                <div class="col-lg d-lg-block d-flex flex-column justify-content-center align-items-center">
                    <a href="#" class="navbar-brand text-dark fs-2">Lelang</a>
                    <div class="fontawesome mt-2">
                        <ul class="list-group list-group-horizontal" style="list-style-type: none">
                            <a href="">
                                <li class="me-3 fs-4"><i class="fab fa-twitter"></i></li>
                            </a>
                            <a href="">
                                <li class="me-3 fs-4"><i class="fab fa-instagram"></i></li>
                            </a>
                            <a href="">
                                <li class="me-3 fs-4"><i class="fab fa-facebook"></i></li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div
                    class="col-lg mt-3 mt-lg-0 d-lg-block d-flex flex-column justify-content-center align-items-center">
                    <div class="fs-4 semi-bold">Legal Stuff</div>
                    <ul class="list-group d-lg-block d-flex flex-column justify-content-center align-items-center"
                        style="list-style-type: none">
                        <li class="mt-3">
                            <a href="" class="text-decoration-none">About Us</a>
                        </li>
                        <li class="">
                            <a href="" class="text-decoration-none">Financing</a>
                        </li>
                        <li class="">
                            <a href="" class="text-decoration-none">Help Center</a>
                        </li>
                        <li class="">
                            <a href="" class="text-decoration-none">Terms</a>
                        </li>
                    </ul>
                </div>
                <div
                    class="col-lg mt-3 mt-lg-0 d-lg-block d-flex flex-column justify-content-center align-items-center">
                    <div class="fs-4 semi-bold">Products</div>
                    <ul class="list-group d-lg-block d-flex flex-column justify-content-center align-items-center"
                        style="list-style-type: none">
                        <li class="mt-3">
                            <a href="" class="text-decoration-none">Lelang</a>
                        </li>
                        <li class="">
                            <a href="" class="text-decoration-none">Financing</a>
                        </li>

                    </ul>
                </div>
                <div
                    class="col-lg mt-3 mt-lg-0 d-lg-block d-flex flex-column justify-content-center align-items-center">
                    <div class="fs-4 semi-bold">Office</div>
                    <ul class="list-group d-lg-block d-flex flex-column justify-content-center align-items-center"
                        style="list-style-type: none">
                        <li class="mt-3">
                            <a href="" class="text-decoration-none">office@lelang.com</a>
                        </li>
                        <li class="">
                            Jl. Bintara VI No 6
                        </li>
                        <li class="">
                            Bekasi, Indonesia
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <p class="text-center">Made With Love By <span class="bold">Lelang</span> All Right
                        Reserved</p>
                </div>
            </div>
        </div>
    </section>









    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bid Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Mr John"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="bid">Amount of Bid</label>
                            <input type="number" name="bid" id="bid" class="form-control" placeholder="10000" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script src="{{asset('js/all.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000
        });
    </script>
</body>

</html>