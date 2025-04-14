<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FIA Gilgit Baltistan</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* Header Section */
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
        padding-left: 0px;
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

 /* slider Section */
 .custom-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 20px;
    }

    .custom-card h5 {
      font-weight: bold;
    }

    .underline {
      height: 3px;
      background-color: red;
      margin-top: 5px;
      margin-bottom: 15px;
    }

    .read-more-btn {
      background-color: #1D2472;
      color: white;
      border-radius: 20px;
      padding: 5px 15px;
      text-decoration: none;
      font-weight: 500;
      display: inline-block;
      margin-top: 10px;
    }

    .read-more-btn:hover {
      background-color: #0d6efd;
      color: white;
    }

    .dg-img {
      width: 100%;
      border-radius: 10px;
      object-fit: cover;
      height: 300px;
    }
    
    .date-text {
      font-weight: 500;
      color: #333;
   
      text-align: right;
      padding-top: 15px;
    }

    /* Square indicators */
    .carousel-indicators [data-bs-target] {
      width: 12px;
      height: 12px;
      background-color: #ccc;
      border-radius: 0;
      margin: 0 4px;
      border: none;
    }

    .carousel-indicators .active {
      background-color: #1D2472;
    }

    .content-col {
      display: flex;
      flex-direction: column;
    }

    @media (min-width: 992px) {
      .dg-img {
        height: 100%;
        min-height: 350px;
      }
      
      .custom-card {
        height: 100%;
        margin-bottom: 0;
      }
      
      .message-card {
        padding-right: 30px;
      }
    }

    @media (max-width: 768px) {
      .dg-img {
        height: 250px;
        margin-bottom: 15px;
      }
      
      .carousel-indicators {
        margin-top: 10px;
      }
    }

 /* services section */
 * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .btn-complaint {
      background-color: #a00000;
      color: white;
      font-weight: bold;
      padding: 1.2rem;
      border: none;
      width: 100%;
    }
    /* Change only the text color to black on hover */
.btn-complaint:hover {
  color: black;  /* Change text color to black */
  background-color: #a00000;  /* Keep the background color the same */
}
    
    .green-box {
      background-color: #1d6935;
      color: white;
      padding: 1rem;
      text-align: center;
    }
    .bulletin-box {
      border: 1px solid #ccc;
      padding: 1rem;
      border-radius: 8px;
    }
    .blue-button {
      background-color: #007bff;
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 6px;
      font-weight: bold;
      /* display: inline-block; */
    }
/* slider */
    .slider-box-horizontal {
  overflow: hidden;
  white-space: nowrap;
  border-top: 1px solid #007bff;
  border-bottom: 1px solid #007bff;
  padding: 0.5rem 0;
  position: relative;
}

.slider-content-horizontal {
  display: inline-block;
  width: max-content;
}

.slider-track {
  display: inline-block;
  white-space: nowrap;
  animation: scrollLeft 80s linear infinite;
}

.slider-box-horizontal:hover .slider-track {
  animation-play-state: paused;
}

.slider-track p {
  display: inline-block;
  margin: 0 2rem;
  font-weight: bold;
  color: #1d1d1d;
}

@keyframes scrollLeft {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-50%);
  }
}

 /* key functional Section */
 .card-section {
      border: 2px solid #dee2e6;
      border-radius: 15px;
      padding: 30px 20px;
    }
    .unit-card {
      text-align: center;
      padding: 20px;
      border: none;
      background-color: transparent;
      box-shadow: none;
      height: 100%;
     
    }
    .unit-icon {
      height: 70px;
      margin-bottom: 15px;
      transition: transform 0.3s ease;
      
    }
    .unit-icon:hover {
  transform: scale(1.1);
}
    .section-title {
      font-weight: bold;
      margin-bottom: 40px;
      text-align: center;
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
{{-- Header Section --}}
<div class="container-fluid p-0">
  <div class="d-flex fia-bar">
    <div class="welcome-link">WELCOME TO FIA</div>

    <div class="scrolling-wrapper w-100">
      <div class="scrolling-content">
        {{-- Repeat content for smooth infinite scroll --}}
        @for ($i = 0; $i < 2; $i++)
          <a href="{{ asset('asset/pdfs/FIA_SPECTRUM_JULY_SEPTEMBER.PDF') }}" target="_blank" class="nav-link">FIA SPECTRUM (July - September 2024)</a>
          <a href="{{ asset('asset/pdfs/FIA_SPECTRUM_january_june.pdf') }}" target="_blank" class="nav-link">FIA SPECTRUM (January - June 2024)</a>
          <a href="{{ asset('asset/pdfs/FIA PERFORMANCE.pdf') }}" target="_blank" class="nav-link">FIA Performance 2024</a>
        @endfor
      </div>
    </div>
  </div>
</div>

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

{{-- Slider Section --}}
<div class="container my-5">
    <div class="row">
      <!-- Director General's Message -->
      <div class="col-lg-4 col-md-12 message-card">
        <div class="custom-card">
          <h5>Director General's Message</h5>
          <div class="underline"></div>
          <p>
            I am honored to assume the role of Director General of the Federal Investigation Agency (FIA), entrusted with the responsibility of upholding the values of justice, equity and rule of law for our great nation. FIA has a rich legacy of safeguarding the interests of Pakistan, and I am committed to advancing and upholding this legacy ...
          </p>
          <a href="#" class="read-more-btn">Click to Read More</a>
        </div>
      </div>

      <!-- Assumes Office Section --> 
      <div class="col-lg-8 col-md-12">
        <div class="custom-card">
          <div class="row">
            <!-- Slider Section -->
            <div class="col-lg-6 col-md-12">
              <div id="dgSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('asset/fia.png')}}" class="dg-img w-100" alt="Slide 1">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('asset/fia2.png')}}" class="dg-img w-100" alt="Slide 2">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('asset/fia3.png')}}" class="dg-img w-100" alt="Slide 3">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('asset/fia4.png')}}" class="dg-img w-100" alt="Slide 4">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('asset/fia5.png')}}" class="dg-img w-100" alt="Slide 4">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('asset/fia6.png')}}" class="dg-img w-100" alt="Slide 4">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('asset/fia6.png')}}" class="dg-img w-100" alt="Slide 4">
                  </div>
                </div>

                <!-- Indicators -->
                <div class="carousel-indicators position-static mt-3 justify-content-center">
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="2"></button>
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="3"></button>
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="4"></button>
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="5"></button>
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="6"></button>
                </div>
              </div>
            </div>
            
            <!-- Content Section -->
            <div class="col-lg-6 col-md-12 content-col ps-lg-3 ps-md-0 mt-3 mt-lg-0">
              <h5>Director General FIA, Mr. Riffat Mukhtar, Assumes Charge of Office</h5>
              <div class="underline"></div>
              <p>
                Mr. Riffat Mukhtar, a seasoned officer from the 24th Common of the Police Service of Pakistan, has assumed charge as the Director General of the Federal Investigation Agency (FIA)
              </p>
              <div class="date-text">Dated: 07-Apr-2025</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 {{-- services section --}}
 <div class="container py-4">
    <div class="row g-4 align-items-center">
      <!-- Left Column -->
      <div class="col-lg-3">
        {{-- {{ route('fia.complaint') }} --}}
        <a href="#" class="w-100">
          <button class="btn-complaint mb-3">
            FIA COMPLAINT PORTAL <br />
            CLICK HERE TO LODGE A COMPLAINT NOW.
          </button>
        </a>
        {{-- {{ route('cybercrime.complaint') }} --}}
        <a href="{{route('complain')}}" class="w-100">
          <button class="btn-complaint">
            CYBER CRIME COMPLAINT PORTAL <br />
            CLICK HERE TO LODGE A COMPLAINT NOW.
          </button>
        </a>
      </div>
      

      <!-- Center Image -->
      <div class="col-lg-6 text-center">
        <img src="{{asset('asset/pakistan.png')}}" alt="Pakistan Citizen Portal" class="img-fluid" />
       
      </div>

      <!-- Right Column -->
      <div class="col-lg-3">
        <div class="bulletin-box text-center">
          <h5><strong>BULLETIN</strong></h5>
          <div class="blue-button my-4">ANNUAL ADMINISTRATION REPORT 2023</div>
        <!-- Slider Section -->
          <div class="d-flex justify-content-center  align-items-center gap-2 mb-2">
            <p class="m-0"><strong>Important</strong></p>
            <button onclick="scrollSlider(-1)" id="prevBtn" class="btn btn-sm btn-outline-secondary rounded-circle circle-btn">&lt;</button>
            <button onclick="scrollSlider(1)" id="nextBtn" class="btn btn-sm btn-outline-secondary rounded-circle circle-btn">&gt;</button>
          </div>
          
    <!-- Horizontal blue line -->
    <hr class="blue-line " />
    <!-- Slider box -->
    <div class="slider-box-horizontal" id="sliderScroll">
      <div class="slider-content-horizontal" id="sliderContent">
        <div class="slider-track">
          <p><a href="{{ asset('asset/ccrc_islamabad.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Islamabad</a></p>
          <p><a href="{{ asset('asset/ccrc_quetta.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Quetta</a></p>
          <p><a href="{{ asset('asset/ccrc_rawalpindi.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Rawalpindi</a></p>
          <p><a href="{{ asset('asset/ccrc_karachi.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Karachi</a></p>
          <p><a href="{{ asset('asset/ccrc_peshawar.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Peshawar</a></p>
          <p><a href="{{ asset('asset/ccrc_abbottabad.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Abbottabad</a></p>
          <p><a href="{{ asset('asset/ccrc_di_khan.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre D.I Khan</a></p>
          <p><a href="{{ asset('asset/ccrc_gujranwala.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Gujranwala</a></p>
          <p><a href="{{ asset('asset/ccrc_multan.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Multan</a></p>
          <p><a href="{{ asset('asset/ccrc_lahore.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Lahore</a></p>
          <p><a href="{{ asset('asset/annual_report_2023.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Annual Administration Report 2023</a></p>
          <p><a href="{{ asset('asset/quarterly_report_q3_2023.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">3rd Quarterly Bulletin Report 2023</a></p>
          <p><a href="{{ asset('asset/quarterly_report_q2_2023.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">2nd Quarterly Bulletin Report 2023</a></p>
          <p><a href="{{ asset('asset/quarterly_report_q1_2023.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">1st Quarterly Bulletin Report 2023</a></p>
          <p><a href="{{ asset('asset/annual_report_2022.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Annual Administration Report 2022</a></p>
          <p><a href="{{ asset('asset/annual_report_2021.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Annual Administration Report 2021</a></p>
          <p><a href="{{ asset('asset/annual_report_2020.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Annual Administration Report 2020</a></p>
          <p><a href="{{ asset('asset/ccrc_Fasalabad.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Fasalabad</a></p>
          <p><a href="{{ asset('asset/ccrc_hq_islamabad.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime HQ Centre Islamabad</a></p>
          
    
          <!-- Duplicate for infinite scroll -->
<p><a href="{{ asset('asset/ccrc_islamabad.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Islamabad</a></p>
<p><a href="{{ asset('asset/ccrc_quetta.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Quetta</a></p>
<p><a href="{{ asset('asset/ccrc_rawalpindi.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Rawalpindi</a></p>
<p><a href="{{ asset('asset/ccrc_karachi.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Karachi</a></p>
<p><a href="{{ asset('asset/ccrc_peshawar.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Peshawar</a></p>
<p><a href="{{ asset('asset/ccrc_abbottabad.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Abbottabad</a></p>
<p><a href="{{ asset('asset/ccrc_di_khan.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre D.I Khan</a></p>
<p><a href="{{ asset('asset/ccrc_gujranwala.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Gujranwala</a></p>
<p><a href="{{ asset('asset/ccrc_multan.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Multan</a></p>
<p><a href="{{ asset('asset/ccrc_lahore.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Lahore</a></p>
<p><a href="{{ asset('asset/annual_report_2023.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Annual Administration Report 2023</a></p>
<p><a href="{{ asset('asset/quarterly_report_q3_2023.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">3rd Quarterly Bulletin Report 2023</a></p>
<p><a href="{{ asset('asset/quarterly_report_q2_2023.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">2nd Quarterly Bulletin Report 2023</a></p>
<p><a href="{{ asset('asset/quarterly_report_q1_2023.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">1st Quarterly Bulletin Report 2023</a></p>
<p><a href="{{ asset('asset/annual_report_2022.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Annual Administration Report 2022</a></p>
<p><a href="{{ asset('asset/annual_report_2021.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Annual Administration Report 2021</a></p>
<p><a href="{{ asset('asset/annual_report_2020.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Annual Administration Report 2020</a></p>
<p><a href="{{ asset('asset/ccrc_Fasalabad.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime Reporting Centre Fasalabad</a></p>
<p><a href="{{ asset('asset/ccrc_hq_islamabad.pdf') }}" target="_blank" style="text-decoration: none; color: inherit;">Cyber Crime HQ Centre Islamabad</a></p>

        </div>
      </div>
    </div>
    
    
        </div>
        
      </div>
    </div>
  </div>
  <script>
    const slider = document.getElementById("sliderScroll");
  
    function scrollSlider(direction) {
      const scrollAmount = 200; // Change this for faster/slower scroll
      const maxScrollLeft = slider.scrollWidth / 2; // Because we duplicated
  
      slider.scrollLeft += direction * scrollAmount;
  
      // If scroll reaches end, reset to start
      if (slider.scrollLeft >= maxScrollLeft) {
        slider.scrollLeft = 0;
      }
      if (slider.scrollLeft <= 0 && direction === -1) {
        slider.scrollLeft = maxScrollLeft;
      }
    }
  </script>
  
   {{-- key functional Section --}}
<div class="container my-5">

    <!-- Outer border starts here -->
    <div class="card-section">
  
      <!-- Heading moved inside -->
      <h2 class="section-title">KEY FUNCTIONAL UNITS</h2>
  
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
  
        <div class="col">
          <div class="unit-card">
            <img src="{{asset('asset/Cybercrime Wing.png')}}" alt="Cybercrime Wing" class="unit-icon">
            <h5 class="fw-bold">Cybercrime Wing</h5>
            <p>Crime through Technological devices or Internet, which includes Social Harassment..</p>
          </div>
        </div>
  
        <div class="col">
          <div class="unit-card">
            <img src="{{asset('asset/Immigration Wing.png')}}" alt="Immigration Wing" class="unit-icon">
            <h5 class="fw-bold">Immigration Wing</h5>
            <p>Immigration, Exit Control List, Black List, Provisional National Identification List (PNIL),Travelling Record (IBMS), Anti Human Trafficking and Smuggling..</p>
          </div>
        </div>
  
        <div class="col">
          <div class="unit-card">
            <img src="{{asset('asset/Economic Crime Wing.png')}}" alt="Economic Crime Wing" class="unit-icon">
            <h5 class="fw-bold">Economic Crime Wing</h5>
            <p>Money Laundering, Hundi/ Hawala, Illegal Money or Value Transfer Services (MVTs), STRs/FIRs (Financial Intelligence Reports) & fraud committed in relation with banking business, wilful default matters etc.).</p>
          </div>
        </div>
  
        <div class="col">
          <div class="unit-card">
            <img src="{{asset('asset/Counter Terrorism Wing.png')}}" alt="Counter Terrorism Wing" class="unit-icon">
            <h5 class="fw-bold">Counter Terrorism Wing</h5>
            <p>High Profile Cases with Transnational element, Terrorism and Terrorist Financing, Cyber Terrorism and Blaspheming.</p>
          </div>
        </div>
  
        <div class="col">
          <div class="unit-card">
            <img src="{{asset('asset/Anti Corruption Wing.png')}}" alt="Anti Corruption Wing" class="unit-icon">
            <h5 class="fw-bold">Anti Corruption Wing</h5>
            <p>Related to organizational crimes (CDA, NADRA, all Federal organizations), Spurious Drugs, Theft of Electricity ,Gas and Oil.</p>
          </div>
        </div>
  
        <div class="col">
          <div class="unit-card">
            <img src="{{asset('asset/NCB INTERPOL.png')}}" alt="NCB Interpol" class="unit-icon">
            <h5 class="fw-bold">NCB INTERPOL</h5>
            <p>Co-ordination and operation with (Custom, ANF, NAB and Provincial Police) of Pakistan. Linked with INTERPOL at Lyon France.</p>
          </div>
        </div>
  
      </div>
    </div> <!-- card-section end -->
  
  </div> <!-- container end -->
  

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