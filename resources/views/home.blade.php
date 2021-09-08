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

        .btn-red {
            background-color: #FF6363 !important;
            color: white;
        }

        .btn-red:hover {
            background-color: #ce5151 !important;
            color: rgba(255, 255, 255, 0.733);
        }

        .bg-dark {
            background-color: #3F3D56 !important;
        }

        .navbar-brand,
        .display-1 {
            font-family: 'Righteous', cursive;
        }

        .bold {
            font-weight: 800;
        }

        .semi-bold {
            font-weight: 600;
        }

        .banner {
            margin-top: 30px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>
    {{-- banner --}}
    <section class="p-5">
        <div class="container banner">
            <div class="row">
                <div class="col-lg mb-5" data-aos="fade-up">
                    <img src="{{asset('img/music2.svg')}}" alt="" class="img-fluid" style="max-width: 500px">
                </div>
                <div class="col-lg mb-5 order-lg-first d-flex flex-column justify-content-center" data-aos="fade-down">
                    <p class="display-1 text-center text-lg-start">Lelang.com</p>
                    <p class="h4 text-center text-lg-start">Lorem ipsum dolor sit amet consectetur.</p>
                    <div class="mt-2 text-center text-lg-start" data-aos="fade-right" data-aos-delay="300">
                        <a href="/lelang" class="btn btn-lg semi-bold btn-red">Start<i class="fas fa-play ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end banner --}}
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('js/all.js')}}"></script>
    <script>
        AOS.init({
            duration: 1000
        });
    </script>
</body>

</html>