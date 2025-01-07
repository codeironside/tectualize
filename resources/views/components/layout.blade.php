<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/Component 1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Tectualize</title>
    {{-- <style>
        body {
            font-family: 'Merriweather', serif;
        }


        .gradient-text {
            background: linear-gradient(0deg, #000000 0%, #E63946 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: 'Merriweather', serif;
        }
    </style> --}}
</head>

<nav class="navbar navbar-expand-sm py-3 fixed-top">
    <div class="container-fluid">
        <!-- Navbar Brand -->
        <a class="navbar-brand d-flex align-items-center">
            <!-- Default Image -->
            <img src="{{ asset('img/Component 1.png') }}" alt="Brand Logo" class="d-none d-md-block"
                style="width: 150px;">
            <!-- Small Screen Image -->
            <img src="{{ asset('img/Component.png') }}" alt="Brand Logo Small" class="d-block d-md-none"
                style="width: 70px;">
        </a>

        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon .icon-gradient"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <p class="gradient-color">About Us</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{ $slot }}

<footer class="fixed-bottom bg-light">
    <div class="container d-flex justify-content-between align-items-center p-3">
        <!-- Social Media Section -->
        <section class="d-flex">
            <a class="icon-gradient m-1" href="#!" role="button">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="icon-gradient m-1" href="#!" role="button">
                <i class="fab fa-twitter"></i>
            </a>

            <a class="icon-gradient m-1" href="#!" role="button">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="icon-gradient m-1" href="#!" role="button">
                <i class="fab fa-linkedin-in"></i>
            </a>

        </section>

        <!-- Copyright Section -->
        <div class="gradient-text">
            &copy; {{ date('Y') }} by Tectualize
        </div>
    </div>
</footer>

<style>
    .icon-gradient {
        display: inline-block;
        font-size: 1.5rem;
        /* Smaller size for icons */
        background: linear-gradient(0deg, #000000 0%, #e63946 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-decoration: none;
    }

    .icon-gradient:hover {
        opacity: 0.8;
        /* Add a hover effect */
    }


    /* Navbar styling */
    .navbar-brand img {
        max-height: 50px;
        /* Adjust as needed */
    }

    .navbar {
        background-color: #f8f9fa;
        /* Light background for the navbar */
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        /* Subtle shadow for the navbar */
    }

    footer {
        background-color: #f8f9fa;
        /* Light background for the footer */
        box-shadow: 0px -2px 5px rgba(0, 0, 0, 0.1);
        /* Subtle shadow for the footer */
    }
</style>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
