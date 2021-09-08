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

        body {
            background-color: rgba(0, 0, 0, .1)
        }

        .bold {
            font-weight: 800;
        }

        .logo {
            font-family: 'Righteous', cursive;
            font-weight: bold;
        }

        .text-red {
            color: #FF6363;
        }

        .text-red:hover {
            color: #ce5151;
        }

        .btn-red {
            background-color: #FF6363 !important;
            color: white;
        }

        .btn-red:hover {
            background-color: #ce5151 !important;
            color: rgba(255, 255, 255, 0.733);
        }
    </style>

    <title>Hello, world!</title>
</head>

<body>
    <div class="wrapper">
        <div class="container bg-light shadow rounded p-5 mt-lg-5">
            <div class="row">
                <div class="col-lg py-5 d-none d-lg-block offset-lg-1" data-aos="fade-down">
                    <img src="{{asset('img/register.svg')}}" alt="" class="img-fluid" style="max-width: 300px">
                </div>
                <div class="col-lg py-5 d-flex flex-column justify-content-center" data-aos="fade-down"
                    data-aos-delay="300">
                    <div class="mb-3">
                        <a href="/" class="h1 logo text-red text-decoration-none">Lelang</a>
                    </div>

                    <form action="/postregister" method="POST">
                        @csrf
                        <div class="mb-3 input-group-sm">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name"
                                required>
                        </div>
                        <div class="mb-3 input-group-sm">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                name="email">
                        </div>
                        <div class="mb-3 input-group-sm">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <p class="small text-muted">Already Have An Account? <a href="/login"
                                class="text-decoration-none">Sign
                                In</a></p>
                        <button type="submit" class="btn btn-red">Sign Up</button>
                    </form>
                </div>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
                    duration: 1000
                });
    </script>
</body>

</html>