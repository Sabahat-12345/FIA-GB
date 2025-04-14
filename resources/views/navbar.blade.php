<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gilgit Baltistan Investigation Agency</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Navbar section */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }   
        body {
            background-color: #f8f9fa;

        }
        .nav-item {
    position: relative;

}



.nav-item:not(:last-child)::after {
    content: '';
    position: absolute;
    right: -10px;
    top: 10%;
    width: 2px;
    height: 80%;
    background-color: #212529;
}

        .main-wrapper {
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto;
            background-color: #ffffff;
            /* min-width: 778px; */
        }

        .agency-header {
            background: #ffffff;
            padding: 1rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            height: 100px;
            overflow: hidden;
        }

        .agency-header .container,
        .nav-section .container {
            padding-left: 40px;
            padding-right: 40px;
        }

        .agency-logo {
            max-height: 90px;
            width: auto;
        }

        .title-line {
            font-size: 1.3rem;
            color: black;
            font-weight: bold;
        }

        .tagline {
            color: black;
            font-size: 1.3rem;
            font-weight: bold;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            margin-top: 0.2rem;
            white-space: nowrap;
        }

        .vertical-line {
            width: 2px;
            height: 80px;
            background-color: #1D2472;
        }

        .nav-section {
            background: #0099ff;
            padding: 0.5rem 0;
        }

        .nav-link-custom {
            color: #ffffff !important;
            font-weight: 500;
            padding: 0.8rem 1.2rem !important;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .nav-link-custom:hover {
            color: #d4af37 !important;
        }

        hr {
            color: #212529;
            border: 3px solid #1d2472;
            margin-top: 0px;
            margin-bottom: 30px;
        }

        .map-image {
            max-height: 130px;
            width: auto;
            margin-left: 200px;
        }

        .social-icons {
            position: absolute;
            right: 20px;
            bottom: 5px;
        }

        .social-icons a {
            color: #1D2472;
            font-size: 20px;
            margin-left: 10px;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #007bff;
        }

        /* Responsive Adjustments */
        @media (max-width: 1200px) {
            .map-image {
                margin-left: 100px;
            }
        }

        @media (max-width: 992px) {
            .agency-header {
                height: auto;
                padding: 15px 0;
            }
            

            .agency-header .container,
            .nav-section .container {
                padding-left: 25px;
                padding-right: 25px;
            }

            .map-image {
                margin-left: 50px;
                max-height: 110px;
            }

            .title-line, .tagline {
                font-size: 1rem;
            }

            .vertical-line {
                height: 60px;
            }
           
        }
        @media (max-width: 1196px) and (min-width: 992px) {
    .navbar-nav {
        flex-wrap: nowrap !important;
    }

    .nav-link-custom {
        padding: 0.5rem 0.8rem !important;
        font-size: 0.8rem;
    }
    
}
@media (max-width: 991.98px) {
    .nav-item:not(:last-child)::after {
        content: none !important;
        display: none !important;
        width: 0 !important;
        height: 0 !important;
        background: transparent !important;
        position: static !important;
    }
}





     
    </style>
</head>
<body>
    {{-- Navbar Section --}}
    <div class="main-wrapper">
        <!-- Agency Header -->
        <header class="agency-header">
            <div class="container d-flex align-items-center  text-white">
                <!-- Logo -->
                <div class="logo-section me-3">
                    <img src="{{asset('asset/logo.png')}}" alt="Agency Logo" class="agency-logo">
                </div>

                <!-- Title & Tagline Section -->
                <div class="d-flex align-items-center flex wrap ">
                    <!-- Agency Title -->
                    <div class="text-center agency-title me-4 ">
                        <div class="title-line">GILGIT BALTISTAN</div>
                        <div class="title-line">INVESTIGATION</div>
                        <div class="title-line">AGENCY</div>
                    </div>

                    <!-- Vertical Line -->
                    <div class="vertical-line me-4"></div>

                    <!-- Tagline -->
                    <div class="tagline align-self-center text-center">
                        <div>HONESTY</div>
                        <div>&</div>
                        <div>INTEGRITY</div>
                    </div>
                </div>

                <!-- Google Map Image -->
                <div>
                    <img src="{{asset('asset/google.png')}}" alt="Google Map" class="map-image">
                </div>

                <!-- Social Media Icons -->
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </header>

        <hr>

        <!-- Navigation Section -->
        <nav class="nav-section navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav w-100 justify-content-between">
                        <li class="nav-item"><a class="nav-link-custom nav-link" href="{{route('home')}}">HOME</a></li>
                        <li class="nav-item"><a class="nav-link-custom nav-link" href="{{route('about')}}">ABOUT US</a></li>
                        <li class="nav-item"><a class="nav-link-custom nav-link" href="#">WINGS</a></li>
                        <li class="nav-item"><a class="nav-link-custom nav-link" href="#">SERVICES</a></li>
                        <li class="nav-item"><a class="nav-link-custom nav-link" href="#">COMPLAINT CELL</a></li>
                        <li class="nav-item"><a class="nav-link-custom nav-link" href="#">PUBLIC INFORMATION</a></li>
                        <li class="nav-item"><a class="nav-link-custom nav-link" href="#">RELATED</a></li>
                        <li class="nav-item"><a class="nav-link-custom nav-link" href="#">CAREERS</a></li>
                        <li class="nav-item"><a class="nav-link-custom nav-link" href="#">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
