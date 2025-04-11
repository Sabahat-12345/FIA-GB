<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Federal Investigation Agency</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .agency-header {
            background: #ffffff;
            padding: 1rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            min-height: 100px;
            overflow: hidden;
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
            margin-left: 15px;
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
                margin-left: 10px;
                max-height: 110px;
            }
        }

        @media (max-width: 992px) {
            .agency-header {
                flex-wrap: wrap;
                height: auto;
                padding: 15px 0;
            }

            .logo-section {
                order: 1;
                width: 100%;
                text-align: center;
                margin-bottom: 15px;
            }

            .d-flex.align-items-center.flex-wrap {
                order: 3;
                width: 100%;
                justify-content: center !important;
                margin: 15px 0;
            }

            .map-image {
                order: 2;
                margin-left: 0;
                max-height: 100px;
                text-align: center;
            }

            .social-icons {
                position: static;
                order: 4;
                width: 100%;
                text-align: center;
                margin-top: 15px;
            }

            .vertical-line {
                height: 60px;
                margin: 0 10px;
            }

            .title-line, .tagline {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 768px) {
            .title-line, .tagline {
                font-size: 1rem;
            }

            .vertical-line {
                height: 50px;
            }

            .map-image {
                max-height: 80px;
            }

            .nav-link-custom {
                padding: 0.5rem 0.8rem !important;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 576px) {
            .d-flex.align-items-center.flex-wrap {
                flex-direction: column;
            }

            .vertical-line {
                display: none;
            }

            .agency-title, .tagline {
                text-align: center;
                margin-bottom: 10px;
            }

            .map-image {
                max-height: 70px;
            }
        }
    </style>
</head>
<body>
    <!-- Agency Header -->
    <header class="agency-header">
        <div class="container d-flex align-items-center flex-wrap text-white">
            <!-- Logo -->
            <div class="logo-section me-3">
                <img src="{{asset('asset/logo.png')}}" alt="Agency Logo" class="agency-logo">
            </div>

            <!-- Title & Tagline Section -->
            <div class="d-flex align-items-center flex-wrap">
                <!-- Agency Title -->
                <div class="text-center agency-title me-4">
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
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav w-100 justify-content-between flex-wrap">
                    <li class="nav-item"><a class="nav-link-custom nav-link" href="#">HOME</a></li>
                    <li class="nav-item"><a class="nav-link-custom nav-link" href="#">ABOUT US</a></li>
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

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>