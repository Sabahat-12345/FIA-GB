<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Complaint Registration Form</title>
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
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



.info-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 30px;
      text-align: center;
      transition: box-shadow 0.3s ease-in-out;
    }

    .info-card:hover {
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .info-card img {
      width: 90px;
      margin-bottom: 30px;
    }

    .info-title {
      font-weight: 600;
      font-size: 1.2rem;
    }

    .info-subtitle {
      font-weight: 500;
    }

    .info-text {
      font-size: 1rem;
      color: #333;
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
                    <li class="nav-item"><a class="nav-link-custom nav-link" href="{{rout('about')}}">ABOUT US</a></li>
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

        
 {{-- complain   --}}
<div class="container py-5">
  <h2 class="mb-4">Complaint Registration Form</h2>
  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
  <p>All fields marked with <span class="text-danger">*</span> are mandatory.</p>
  <form action="{{ route('complaint.store') }}" method="POST">
    @csrf

    <div class="row g-3">
      <div class="col-md-4">
        <label class="form-label">Full Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="full_name" placeholder="Enter your full name here" required>
        @error('full_name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-4">
        <label class="form-label">Father Name</label>
        <input type="text" class="form-control" name="father_name" placeholder="Enter your father name here">
        @error('father_name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-4">
        <label class="form-label">CNIC <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="cnic" placeholder="Enter your CNIC 1234512345671" required>
        @error('cnic')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-4">
        <label class="form-label">Gender <span class="text-danger">*</span></label>
        <select class="form-select" name="gender" required>
          <option selected disabled>Select Option</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
        @error('gender')
        <div class="text-danger">{{ $message }}</div>      
        @enderror
      </div>
      <div class="col-md-4">
        <label class="form-label">Mobile Number <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="mobile_number" placeholder="Enter your mobile number here" required>
        @error('mobile_number')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-4">
        <label class="form-label">Phone Number</label>
        <input type="text" class="form-control" name="phone_number" placeholder="Enter your phone number here">
        @error('phone_number')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-4">
        <label class="form-label">WhatsApp Number</label>
        <input type="text" class="form-control" name="whatsapp_number" placeholder="Enter your WhatsApp number here">
        @error('whatsapp_number')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-4">
        <label class="form-label">Email Address</label>
        <input type="email" class="form-control"  name="email" placeholder="Enter your email address here">
        @error('email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-4">
        <label class="form-label">Occupation</label>
        <select class="form-select" name="occupation">
          <option selected disabled>Select Option</option>
          <option value="student">Student</option>
          <option value="government">Government Employee</option>
          <option value="private">Private Sector</option>
          <option value="self">Self-Employed</option>
          <option value="other">Other</option>
        </select>
        @error('occupation')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-6">
        <label class="form-label">Postal Address</label>
        <input type="text" class="form-control" name="postal_address" placeholder="Enter your postal address here">
        @error('postal_address')
        <div class="text-danger">{{ $message }}</div>

        @enderror
      </div>
      <div class="col-md-6">
        <label class="form-label">City <span class="text-danger">*</span></label>
        <select class="form-select" name="city" required>
          <option selected disabled>Select Option</option>
          <option value="gilgit">Gilgit</option>
          <option value="skardu">Skardu</option>
          <option value="hunza">Hunza</option>
          <option value="diamer">Diamer</option>
          <option value="other">Other</option>
        </select>
        @error('city')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-12">
        <label class="form-label">Crime Category <span class="text-danger">*</span></label>
        <select class="form-select" name="crime_category" required>
          <option selected disabled>Select Option</option>
          <option value="theft">Theft</option>
          <option value="fraud">Fraud</option>
          <option value="violence">Violence</option>
          <option value="cyber">Cyber Crime</option>
          <option value="other">Other</option>
        </select>
        @error('crime_category')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-12">
        <label class="form-label">Crime Details <span class="text-danger">*</span></label>
        <textarea class="form-control" rows="4" name="crime_details" placeholder="Brief Crime Details and Involved Person(s) Details. (Not More Than 3400 Characters)" required></textarea>
        @error('crime_details')
        <div class="text-danger">{{ $message }}</div>

        @enderror
      </div>

      {{-- <div class="col-md-6 d-flex align-items-end">
        <img src="captcha-placeholder.jpg" alt="Captcha" class="img-fluid">
        <button type="button" class="btn btn-outline-secondary ms-2">↻</button>
      </div>
      <div class="col-md-6">
        <label class="form-label">Enter Captcha</label>
        <input type="text" class="form-control" placeholder="Enter Captcha">
      </div> --}}

      <div class="col-12">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="declaration" name="declaration" required>
            @error('declaration')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          <label class="form-check-label" for="declaration">
            I affirm that all the information I have provided on this form is correct to the best of my knowledge. <span class="text-danger">*</span>
          </label>
        </div>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit Complaint</button>
      </div>
    </div>
  </form>
</div>


<div class="container py-5">
  <div class="row justify-content-center align-items-stretch g-4">
    
    <!-- Phone Number Card -->
    <div class="col-md-6 col-lg-4 d-flex">
      <div class="info-card h-100 w-100">
        <a href="{{ route('complain') }}">
        <img src="{{asset('asset/cell_phone.png')}}" alt="Phone Icon" class="mt-4"  >
    </a>
        <div class="info-title mt-3">PHONE NUMBER</div>
        <div class="info-subtitle mt-2">FIA HeadQuarter:</div>
        <div class="info-text">051-111-345-786</div>
      </div>
    </div>

    <!-- Address Card -->
    <div class="col-md-6 col-lg-4  d-flex">
      <div class="info-card  h-100 w-100">
        <a href="{{ route('complain') }}">
        <img src="{{asset('asset/address.png')}}" alt="Address Icon">
    </a>
        <div class="info-title">ADDRESS</div>
        <div class="info-subtitle mt-2">FIA HeadQuarter:</div>
        <div class="info-text">
          FIA Headquarters,<br>
          NEAR GDA OFFICE RIVER ROAD CHINARBAGH<br>
       Gilgit, PK
        </div>
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
