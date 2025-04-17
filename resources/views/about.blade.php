<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FIA Info Page</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    
    .section-box {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 25px;
      background-color: #fff;
    }
    .section-title {
      font-weight: bold;
      margin-bottom: 15px;
    }
    .blue-box {
      background-color: #007bff;
      color: white;
      padding: 15px;
      border-radius: 10px;
      margin-bottom: 20px;
    }
    .org-image {
      max-width: 100%;
      height: auto;
      border: 1px solid #ddd;
      border-radius: 10px;
      margin-top: 10px;
    }
    body {
      background-color: #f9f9f9;
    }

        /* header section */
        .fia-bar {
      background-color: #1d2472;
      display: flex;
      overflow: hidden;
      position: relative;
      align-items: center;
      /* padding: 0.5rem 1rem; */
      flex-wrap: nowrap;
      padding-left: 80px;
    }

    .fia-bar .nav-link {
      color: white;
      text-align: center;
      padding: 10px 15px;
      white-space: nowrap;
      font-size: 1rem;
    }

    .fia-bar .active {
      background-color: #0099ff;
      font-weight: bold;
    }

    .welcome-link {
      background-color: #0099ff;
      font-weight: bold;
      flex-shrink: 0;
      z-index: 2;
   padding: 10px 15px; 
      /* border-radius: 5px; */ */
      white-space: nowrap;
      
    }

    .scrolling-wrapper {
      overflow: hidden;
      flex-grow: 1;
      margin-left: 20px;
      mask-image: linear-gradient(to right, transparent, white 5%, white 95%, transparent);
      -webkit-mask-image: linear-gradient(to right, transparent, white 5%, white 95%, transparent);
    }

    .scrolling-content {
      display: flex;
      width: max-content;
      animation: scroll-left 10s linear infinite;
    }

    .scrolling-wrapper:hover .scrolling-content {
      animation-play-state: paused;
    }

    .scrolling-content .nav-link {
      margin-right: 50px;
      font-size: 1rem;
    }

    @keyframes scroll-left {
      0% {
        transform: translateX(0%);
      }
      100% {
        transform: translateX(-50%);
      }
    }

    /* ✅ Only responsive improvements — design unchanged */
    @media (max-width: 768px) {
      .fia-bar {
        flex-wrap: wrap;
        flex-direction: column;
        align-items: stretch;
        padding-left: 0px !important;
      }

      .welcome-link {
        margin-bottom: 10px;
        width: 100%;
        text-align: center;
      }

      .scrolling-wrapper {
        margin-left: 0;
        width: 100%;
      }

      .scrolling-content .nav-link {
        font-size: 0.95rem;
        margin-right: 30px;
      }
    }

    @media (max-width: 480px) {
      .scrolling-content .nav-link {
        font-size: 0.85rem;
        margin-right: 20px;
      }
    }

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

        @media (max-width: 500px) {
            .nav-title{
                width:  100%;
                text-align: start;
            }
            .title-line {
                /* display: block;
                width: 100%; */
                text-align: start;
            }
            .div-title{
                /* display: block;
                width: 100%; */
                text-align: start;
            }
            .vertical-line{
                display: none;
            }
            .nav-title-2{
                display: block;
                width: 100%;
                text-align: start;
                
            }
            
        }

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

 /* footer section  */
 .bg-primary-custom {
            background-color: #0275d8;
        }
        .bg-dark-blue {
            background-color: #1a237e;
        }
        .section-heading {
            background-color: #343a40;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 20px;
        }
        .link-light-hover:hover {
            text-decoration: underline;
        }
        .footer {
            padding: 5px 0;
        }
        .map-container {
            position: relative;
            height: 200px;
            border-radius: 5px;
            overflow: hidden;
        }
        .map-container iframe {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .subscribe-form .btn {
            background-color: white;
            color: #0275d8;
        }
        @media (max-width: 576px) {
            .subscribe-form .input-group {
              
            }
          
             
          
        }

  </style>
</head>
<body>
{{-- header Section --}}
<div class="container-fluid p-0">
    <div class="d-flex fia-bar">
      <div class="welcome-link">WELCOME TO FIA</div>
  
      <div class="scrolling-wrapper w-100">
        <div class="scrolling-content">
          {{-- Repeat content for smooth infinite scroll --}}
          @for ($i = 0; $i < 2; $i++)
            <a href="{{ asset('pdfs/FIA_SPECTRUM_JULY_SEPTEMBER.PDF') }}" target="_blank" class="nav-link">FIA SPECTRUM (July - September 2024)</a>
            <a href="{{ asset('pdfs/FIA_SPECTRUM_january_june.pdf') }}" target="_blank" class="nav-link">FIA SPECTRUM (January - June 2024)</a>
            <a href="{{ asset('pdfs/FIA PERFORMANCE.pdf') }}" target="_blank" class="nav-link">FIA Performance 2024</a>
          @endfor
        </div>
      </div>
    </div>
  </div>
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
                <div class="text-center agency-title me-4  nav-title">
                    <div class="title-line">GILGIT BALTISTAN</div>
                    <div class="title-line">INVESTIGATION</div>
                    <div class="title-line">AGENCY</div>
                </div>

                <div class="vertical-line me-4 "></div>

                <div class="tagline text-center nav-title-2">
                    <div class="div-title">HONESTY</div>
                    <div class="div-title">&</div>
                    <div class="div-title">INTEGRITY</div>
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
                            <li><a class="dropdown-item" href="{{route('important_links')}}">Important Links</a></li>
                            <li><a class="dropdown-item" href="#">Overseas Pakistanis Foundation</a></li>
                            <li><a class="dropdown-item" href="{{route('travel_instructions')}}">Travel Guide</a></li>
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


{{-- about section --}}
<div class="container py-5">

  <div class="row g-4">

    <!-- Left Content -->
    <div class="col-lg-8">

      <!-- Mandate -->
      <div class="section-box mb-4">
        <h5 class="section-title">MANDATE</h5>
        <ol>
          <li>Investigation into specialized and organized crime</li>
          <li>Immigration and Anti Smuggling</li>
          <li>Personal Identification Secure Comparison and Evaluation System (PISCES)</li>
          <li>Anti-Human Smuggling and Trafficking</li>
          <li>Counter Terrorism (Special Investigation Group)</li>
          <li>Money Laundering (Excluding narcotics and anti-corruption proceed)</li>
          <li>Automated Finger Print Identification System (AFIS)</li>
          <li>Cyber Crime and Plastic Money Fraud</li>
          <li>Intellectual Property Rights (IPR)</li>
          <li>Interpol (National Central Bureau)</li>
          <li>National Criminal Database (NCDB)</li>
          <li>Forensic and Technical Support</li>
          <li>Training and Capacity Building</li>
        </ol>
      </div>

      <!-- Origin & History -->
      <div class="section-box mb-4">
        <h5 class="section-title">ORIGIN & HISTORY</h5>
        <p>
          The Pakistan Special Police Establishment (PSPE) department from investigation of the offences of bribery,
          and corruption against central government employees, was given powers to investigate cases relating to the
          offences. In report of "Police Reform", submitted to cabinet on 07-04-1972, recommended establishment of
          Federal Police Organization to deal with smuggling, narcotics, currency offences, enforcement of laws relating
          to foreigners, immigration and passports offences having inter-provincial ramifications. Consequently FIA Act, 1974.
          (Act VIII-4 of 1975) was promulgated on 13-01-1975, bringing Federal Investigation Agency (FIA) into existence.
        </p>
      </div>

      <!-- About the FIA -->
      <div class="section-box mb-4">
        <h5 class="section-title">ABOUT THE FIA</h5>
        <p>
          The Federal Investigation Agency (Urdu: وفاقی تحقیقاتی ادارہ reporting name: FIA) is a border control,
          criminal investigation, counter-intelligence and security agency under the control of the Interior Secretary of Pakistan,
          tasked with investigative jurisdiction on undertaking operations against terrorism, espionage, federal crimes,
          smuggling as well as infringement and other specific crimes.
        </p>
        <a href="{{route('act')}}" class="btn btn-primary mt-2">ACT, 1974 (VIII OF 1975)</a>
      </div>

    </div>

    <!-- Right Content -->
    <div class="col-lg-4">

      <!-- Image & Description -->
      <div class="section-box mb-4 text-center">
        <img src="{{ asset('asset/fia_building.png') }}" alt="FIA Building" class="img-fluid mb-3">
        <p class="mb-0">
          A federally controlled police establishment first came into existence in 1942 during WWII, named as Special Police
          Establishment, to take up investigation of corruption, rampant in Supplies and Procurement Department.
        </p>
      </div>

      <!-- Mission -->
      <div class="blue-box">
        <h6 class="mb-2">MISSION</h6>
        <p class="mb-0">
          To achieve excellence in FIA by promoting culture of merit, providing continuous professional training,
          ensuring effective internal accountability, encouraging use of technology and having a meaningful feedback mechanism.
        </p>
      </div>

      <!-- Vision -->
      <div class="blue-box">
        <h6 class="mb-2">VISION</h6>
        <p class="mb-0">
          A law enforcement agency which not only enjoys the respect of the society, for its integrity, professional
          competence, and impartiality but also serves as a role model for provincial police forces.
        </p>
      </div>

      <!-- Organizational Structure -->
      <div class="blue-box text-center">
        <h6>ORGANIZATIONAL STRUCTURE</h6>
        <p>Click below image to see organogram of FIA</p>
        <a href="{{ asset('asset/organogram.png') }}" >
          <img src="{{ asset('asset/organogram.png') }}" alt="Organogram" class="org-image">
        </a>
      </div>

    </div>
  </div>
</div>


    {{-- footer section --}}
    <div class="container-fluid bg-primary-custom text-white py-3">
        <div class="container">
            <div class="row ">
                <!-- Investigation Links -->
                <div class=" col-md-4 mb-4">
                    <div class="section-heading mb-4">
                        <h6 class="mb-0">WHAT WE INVESTIGATE</h6>
                    </div>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Anti-Corruption</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Anti Human Trafficking and Smuggling</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Counter Terrorism</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Cyber Crime</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Economic Crime</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Immigration</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Interpol</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Intellectual Property Rights</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Integrated Border Management System</a></li>
                    </ul>
                </div>

                <!-- Important Links + Newsletter -->
                <div class="col-md-4 mb-4">
                    <div class="section-heading mb-4">
                        <h6 class="mb-0">IMPORTANT LINKS</h6>
                    </div>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">About Us</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Wings</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Press Release</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Services</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">FIA Staff Welfare</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Contact Us</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">FAQs</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Privacy Policy</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Sitemap</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Special Investment Facilitation Council (SIFC)</a></li>
                    </ul>

                    <div class="mt-4">
                        <div class="section-heading mb-3">
                            <h6 class="mb-0">SUBSCRIBE TO OUR NEWSLETTER</h6>
                        </div>
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{route('subscribe')}}" method="POST" class="subscribe-form" >
                            @csrf
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Enter your email here" aria-label="Email ">
                                <button class="btn btn-primary" type="submit" aria-label="Subscribe"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Info + Map -->
                <div class="col-md-4 mb-4">
                    <div class="section-heading mb-4">
                        <h6 class="mb-0">CONTACT US</h6>
                    </div>
                    <p><strong>Email:</strong> <a href="mailto:complaints@fia.gov.pk" class="text-white">complaints@fia.gov.pk</a></p>
                    <p><strong>Helpline:</strong> 051-111-345-786</p>
                    <p><strong>Address:</strong> FIA CYBERCRIME OFFICE NEAR GDA OFFICE RIVER ROAD CHINARBAGH GILGIT, PK</p>

                    <div class="map-container mb-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103388.79512005721!2d74.16974969726559!3d35.924951400000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e637b3c947eca3%3A0xf75e60a3376aef6e!2sFIA%20Cyber%20Crime%20Reporting%20Center!5e0!3m2!1sen!2s!4v1744403607082!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="FIA Location Map"></iframe>
                    </div>
                    <div class="text-center">
                        <small>Federal Investigation Agency, Head Office</small><br>
                        <a href="https://www.google.com/maps?q=FIA+Cyber+Crime+Reporting+Center" target="_blank" class="text-white link-light-hover">
                            <small>View larger map</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="container-fluid bg-dark-blue text-white footer">
        <div class="container py-2">
            <div class="row">
                <div class="col-md-6">
                    <small>DISCLAIMER: The information on this site is for official use only and may be subject to change.</small>
                </div>
                <div class="col-md-6 text-md-end">
                    <small>&copy; 2025 Federal Investigation Agency. All Rights Reserved.</small>
                </div>
            </div>
        </div>
    </footer>
  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
