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

        .lelang-section {
            margin-top: -20px;
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
                                    <a class="text-decoration-none text-reset me-1"
                                        href="/lelang#categories">Categories</a>
                                    <i class="fas fa-chevron-right me-1"></i>
                                    <span class="bold">Fashion</span>
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
                                        <li><a class="dropdown-item" href="/logout"><i
                                                    class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
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
                    <img src="{{asset('img/fashion.svg')}}" alt="..." class="img-thumbnail p-5"
                        style="max-width: 200px; border: none;" data-aos="fade-down">
                    <p class="display-4 bold text-center">Fashion</p>
                </div>
            </div>
        </div>
        {{-- search --}}
        <section class="search-section">
            <div class="container search" id="search">
                <div class="row d-flex justify-content-center">
                    <div class="col-6">
                        <form action="/lelang/fashion" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control rounded shadow-sm" placeholder="Search"
                                    aria-label="Search" aria-describedby="search-addon" name="q" />
                                <button type="submit" class="btn btn-dark shadow-sm"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col d-flex justify-content-center align-items-center mt-2">
                        <a href="#items" class="btn btn-light">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    {{-- end banner --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#273036" fill-opacity="0.1"
            d="M0,224L40,234.7C80,245,160,267,240,229.3C320,192,400,96,480,64C560,32,640,64,720,117.3C800,171,880,245,960,250.7C1040,256,1120,192,1200,165.3C1280,139,1360,149,1400,154.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>
    <div class="wrapper pt-5" id="items">
        {{-- content --}}
        <section class="lelang-section">
            <div class="container lelang">
                <div class="row d-flex justify-content-center align-items-center">
                    @foreach ($barang as $item)
                    <div class="col-6 my-3" data-aos="fade-up">
                        <div class="card mb-3 shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset('img/'.$item->img)}}" alt="..." class="img-thumbnail">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title bold">{{$item->nama}}</h5>
                                        <p class="card-text">{{$item->desc}}</p>
                                        <p class="card-text bold">IDR {{number_format($item->price,0,",",".")}}</p>
                                        @php
                                        $parameter = $item->id;
                                        $parameter = Crypt::encrypt($parameter);
                                        @endphp
                                        <a href="/lelang/{{$parameter}}/detail" class="btn btn-sm btn-dark">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if ($barang->isEmpty())
                <div class="row">
                    <div class="col">
                        <div class="alert alert-danger text-center">Maaf,Pencarian Tidak Ditemukan</div>
                    </div>
                </div>
                @endif
            </div>
            <div class="pagination d-flex justify-content-center">
                {{$barang->links()}}
            </div>
        </section>
    </div>
    {{-- svg --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#E9EAEB" fill-opacity="1"
            d="M0,96L34.3,101.3C68.6,107,137,117,206,117.3C274.3,117,343,107,411,90.7C480,75,549,53,617,85.3C685.7,117,754,203,823,208C891.4,213,960,139,1029,128C1097.1,117,1166,171,1234,192C1302.9,213,1371,203,1406,197.3L1440,192L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
        </path>
    </svg>
    {{-- footer --}}
    <section class="footer-section mb-3">
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