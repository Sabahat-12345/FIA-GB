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
            margin: auto;
            background-color: #ffffff;
        }

        .agency-header {
            background: #ffffff;
            padding: 1rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100px;
            position: relative;
            overflow: hidden;
        }

        .agency-header .container,
        .nav-section .container {
            padding: 0 40px;
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
            border: 3px solid #1d2472;
            margin: 0 0 30px 0;
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
                padding: 0 25px;
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
            }
        }

        /* @media (max-width: 770px) and (min-width: 300px) {
            .map-image {
                position: absolute;
            }
        } */

        /* Custom Dropdown Styling */
        .custom-dropdown {
            background-color: #007bff;
            border: none;
        }

        .custom-dropdown .dropdown-item {
            color: white;
            padding: 10px 20px;
            font-weight: 500;
        }

        .custom-dropdown .dropdown-item:hover {
            background-color: #0056b3;
        }

        .dropdown-toggle::after {
            display: none;
        }

        @media (min-width: 992px) {
            .navbar .dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
            }
        }

        .dropdown-menu {
            transition: all 0.3s ease;
        }
        @media (max-width: 796px) {
    .map-image {
        display: none !important;
    }
}

    </style>
</head>
<body>
    <!-- Navbar Section -->
    <div class="main-wrapper">
        <!-- Agency Header -->
        <header class="agency-header">
            <div class="container d-flex align-items-center">
                <!-- Logo -->
                <div class="logo-section me-3">
                    <img src="{{ asset('asset/logo.png') }}" alt="Agency Logo" class="agency-logo">
                </div>

                <!-- Title & Tagline Section -->
                <div class="d-flex align-items-center flex-wrap">
                    <div class="text-center agency-title me-4">
                        <div class="title-line">GILGIT BALTISTAN</div>
                        <div class="title-line">INVESTIGATION</div>
                        <div class="title-line">AGENCY</div>
                    </div>

                    <div class="vertical-line me-4 "></div>

                    <div class="tagline text-center">
                        <div>HONESTY</div>
                        <div>&</div>
                        <div>INTEGRITY</div>
                    </div>
                </div>

                <!-- Google Map Image -->
                <div>
                    <img src="{{ asset('asset/google.png') }}" alt="Google Map" class="map-image">
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
                        <li class="nav-item"><a class="nav-link-custom nav-link" href="{{ route('home') }}">HOME</a></li>
                        <li class="nav-item"><a class="nav-link-custom nav-link" href="{{ route('about') }}">ABOUT US</a></li>

                        <!-- WINGS Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link-custom nav-link dropdown-toggle" href="{{route('wings')}}" role="button" data-bs-toggle="dropdown">WINGS</a>
                            <ul class="dropdown-menu custom-dropdown">
                                <li><a class="dropdown-item" href="{{route('anti-corruption')}}">Anti Corruption</a></li>
                                <li><a class="dropdown-item" href="#">Anti Human Trafficking and Smuggling</a></li>
                                <li><a class="dropdown-item" href="#">Counter Terrorism</a></li>
                                <li><a class="dropdown-item" href="#">Cyber Crime</a></li>
                                <li><a class="dropdown-item" href="#">Economic Crime</a></li>
                                <li><a class="dropdown-item" href="#">FIA Academy</a></li>
                                <li><a class="dropdown-item" href="#">Law</a></li>
                                <li><a class="dropdown-item" href="#">Technical</a></li>
                                <li><a class="dropdown-item" href="#">Immigration</a></li>
                                <li><a class="dropdown-item" href="#">Interpol</a></li>
                                <li><a class="dropdown-item" href="#">Intellectual Property Rights</a></li>
                                <li><a class="dropdown-item" href="#">Integrated Border Management System</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link-custom nav-link" href="#">SERVICES</a></li>

                        <!-- Complaint Cell Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link-custom nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">COMPLAINT CELL</a>
                            <ul class="dropdown-menu custom-dropdown">
                                <li><a class="dropdown-item" href="#">Complaint Cell</a></li>
                                <li><a class="dropdown-item" href="#">Cyber Crime Complaint Cell</a></li>
                                <li><a class="dropdown-item" href="#">Overseas Pakistanis Complaint Cell</a></li>
                            </ul>
                        </li>

                        <!-- Public Information Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link-custom nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">PUBLIC INFORMATION</a>
                            <ul class="dropdown-menu custom-dropdown">
                                <li><a class="dropdown-item" href="#">Gallery</a></li>
                                <li><a class="dropdown-item" href="#">News</a></li>
                                <li><a class="dropdown-item" href="#">Information (RTI Act 2017)</a></li>
                                <li><a class="dropdown-item" href="#">Press Release and Publication</a></li>
                                <li><a class="dropdown-item" href="#">Laws</a></li>
                                <li><a class="dropdown-item" href="#">SOP & Rules</a></li>
                                <li><a class="dropdown-item" href="#">Tenders</a></li>
                            </ul>
                        </li>

                        <!-- Related Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link-custom nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">RELATED</a>
                            <ul class="dropdown-menu custom-dropdown">
                                <li><a class="dropdown-item" href="#">Important Links</a></li>
                                <li><a class="dropdown-item" href="#">Overseas Pakistanis Foundation</a></li>
                                <li><a class="dropdown-item" href="#">Travel Guide</a></li>
                                <li><a class="dropdown-item" href="#">Pensioners Guide</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link-custom nav-link" href="#">CAREERS</a></li>
                        <li class="nav-item"><a class="nav-link-custom nav-link" href="#">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
