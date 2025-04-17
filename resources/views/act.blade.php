<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FIA Act 1974</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* act section */
    body {
      background-color: #f9f9f9;
      font-size: 0.95rem;
    }
    .act-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
      margin-bottom: 30px;
    }
    .act-title {
      text-align: center;
      font-weight: bold;
      font-size: 1.25rem;
      margin-bottom: 20px;
    }
    .section-title {
      font-weight: 600;
      margin-top: 20px;
    }
    .offence-list {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      background-color: #f8f9fa;
      padding: 15px;
      border-radius: 8px;
      position: relative;
    }
    .pc-section {
      margin-bottom: 1.5rem;
      padding-left: 1rem;
      border-left: 3px solid #dee2e6;
    }
    .pc-section-title {
      font-weight: bold;
      cursor: pointer;
      transition: color 0.3s ease;
    }
    .pc-section-title:hover {
      color: #337ab7;
      text-decoration: underline;
    }
    .pc-section-title a {
      color: #337ab7;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .offence-item {
      background-color: #fff;
      border: 1px solid #dee2e6;
      padding: 8px 12px;
      border-radius: 6px;
      font-size: 0.95rem;
      white-space: nowrap;
    }
    ol, ul {
      padding-left: 1.2rem;
    }
    .authority-container {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-top: 40px;
      margin-bottom: 30px;
    }
    .authority-title {
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
      background-color: #e9ecef;
      padding: 10px;
      border-radius: 8px;
    }
    .authority-list li {
      margin-bottom: 10px;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .act-title {
        font-size: 1.1rem;
      }
      .act-container {
        padding: 20px;
      }
      .pc-section {
        padding-left: 0.75rem;
      }
      .offence-item {
        white-space: normal;
        padding: 6px 10px;
        font-size: 0.9rem;
      }
      .authority-title {
        font-size: 1.5rem;
      }
      .authority-container {
        padding: 20px;
      }
    }
    
    @media (max-width: 576px) {
      .act-title {
        font-size: 1rem;
      }
      .act-container {
        padding: 15px;
      }
      .pc-section {
        padding-left: 0.5rem;
      }
      .offence-list {
        padding: 10px;
      }
      .authority-title {
        font-size: 1.3rem;
        padding: 8px;
      }
      .authority-container {
        padding: 15px;
      }
      .offence-item {
        font-size: 0.85rem;
      }
    }
    @media (max-width: 576px) {
    .total-offences-card {
      min-width: 100px;
      max-width: 110px;
      font-size: 0.7rem;
      position: static !important;
    }
    .total-offences-card h6 {
      font-size: 0.65rem;
    }
    .total-offences-card .count {
      font-size: 1rem;
    }
  }

  @media (min-width: 577px) {
    .total-offences-card {
      min-width: 120px;
      max-width: 130px;
    }
    .total-offences-card h6 {
      font-size: 0.75rem;
    }
    .total-offences-card .count {
      font-size: 1.2rem;
    }
  }
  @media (max-width: 992px) and (min-width: 792px) {
    .total-offences-card {
      position: static !important;
      margin-top: 10px;
    }
  }
  .pakistan-penal-code-text {
  word-wrap: break-word;
  overflow-wrap: break-word;
  font-size: 0.85rem;
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


  {{-- act section --}}
<div class="container my-3 my-md-5">
  <div class="act-container">

    <div class="act-title">
      FEDERAL INVESTIGATION AGENCY <br>
      ACT, 1974 (VIII OF 1975) <br>
      <small>An Act to provide for the constitution of a <br> FEDERAL INVESTIGATION AGENCY</small> <br>
      <em>(Gazette of Pakistan, Extra-ordinary, Part-I, 17th January, 1975)</em>
    </div>

    <p>Whereas it is expedient to provide for the constitution of a Federal Investigation Agency for the investigation of certain offences committed in connection with matters concerning the Federal Government, and for matters connected therewith; It is hereby enacted as follows:</p>

    <p class="section-title">1. Short title, extent and commencement:</p>
    <ol>
      <li>This Act may be called the Federal Investigation Agency Act, 1974.</li>
      <li>It extends to the whole of Pakistan.</li>
      <li>It shall come into force at once.</li>
    </ol>

    <p class="section-title">2. Definitions:</p>
    <p>In this Act, unless there is anything repugnant in the subject or context:</p>
    <ul>
      <li>"Agency" means the Federal Investigation Agency constituted under this Act;</li>
      <li>"Code" means the Code of Criminal Procedure, 1898;</li>
      <li>“DIRECTOR GENERAL” means the Director General of Agency;</li>
      <li>“PROVINCIAL POLICE” means the Police constituted by Provincial Government under the Police Act, 1861 (V of 1861)</li>
      <li>“PUBLIC SERVANT” means a public servant as defined in Section 21 of the Pakistan Penal Code (Act XL V of 1860), and includes an employee of any corporation or other body or organization set up controlled or administered by or under the authority of the Federal Government</li>
      <li>“SPECIAL POLICE” means the Pakistan Special Police Establishment constitution under the Pakistan Special Police Establishment Ordinance 1948, (VII of 1948);</li>
      <li>“SPECIFIED PERSONS” mean the persons who were appointed to posts in or under a Provincial Police in pursuance of Article 3 of the Special Police and Provincial Police (Amalgamation) Order, 1962 (P.O. No. 1 of 1962);</li>
      <li>“RULES” means rules made under this Act.</li>
    </ul>

    <p class="section-title">3. Constitution of the Agency:</p>
    <p>
      The Federal Government may constitute an Agency to be called the Federal Investigation Agency for the investigation of offences specified in the Schedule, and to perform such other functions as may be assigned to it by the Federal Government.
    </p>

    <p class="section-title">4. Superintendence and administration of the Agency:</p>
    <ul>
      <li>The superintendence of the Agency shall vest in the Federal Government.</li>
      <li>The administration of the Agency shall vest in the Director General who shall exercise in respect of the Agency such of the powers of an Inspector General of Police under the Police Act, 1861 (V of 1861), as may be prescribed by rules.</li>
    </ul>

    <p class="section-title">5. Powers of the members of the Agency:</p>
    <ul>
      <li>Subject to any order which the Federal Government may make in this behalf, the members of the Agency shall, for the purpose of an inquiry or investigation under this Act, have throughout Pakistan such powers, including powers relating to search, arrest of persons and seizure of property, and such duties, privileges and liabilities as the officers of a Provincial Police have in relation to the investigation of offences under the Code or any other law for the time being in force.</li>
      <li>Subject to rules, if any, a member of the Agency not below the rank of a Sub-Inspector may, for the purposes of any inquiry or investigation under this Act, exercise any of the powers of an officer-in-charge of a Police Station in any area in which he is for the time being and, when so exercising such powers, shall be deemed to be an officer-in-charge of a Police Station discharging his functions as such within the limits of his station.</li>
      <li>Without prejudice to the generality of the provisions of the sub-section (1) and sub-section (2), any member of the Agency not below the rank of Sub-Inspector authorized by the Director General in this behalf may arrest without warrant any person who has committed, or against whom a reasonable suspicion exists that he has committed, any of the offences referred to sub-section (1) of Section 3.</li>
      <li>For the purpose of the exercise by the members of the Agency of the powers of an officer-in-charge of a Police Station," Police Station" includes any place declared, generally or specially, by the Federal Government to be a Police Station within the meaning of the Code.</li>
      <li>If, in the opinion of a member of the Agency conducting an investigation, any property which is the subject-matter of the investigation is likely to be removed, transferred or otherwise disposed of before an order of the appropriate authority for its seizure is obtained, such member may, by order in writing, direct the owner or any person who is, for the time being, possession thereof not to remove, transfer or otherwise dispose of such property in any manner except with the previous permission of that member and such order shall be subject to any order made by the Court having jurisdiction in the matte</li>
      <li>Any contravention of an order made under sub-section (5) shall be punishable with rigorous imprisonment for a term which may be extend to one year, or with fine, or with both.</li>
    </ul>

    <p class="section-title">6. Certain officers deemed to be public servants:</p>
    <ul><li>Notwithstanding anything contained in any order law for the time being in force the Assistant Directors (Legal) and the Deputy Directors (Law) of the Agency shall be deemed to be Public Prosecutors and shall be competent to institute and conduct any proceedings in cases sent up for trial by the Agency in the Special Courts constituted under any law and the courts subordinate to the High Court. (Added through FIA (Amendment) Ordinance 2002).</li></ul>
    
    <p class="section-title">7. Power to amend the Schedule:</p>
    <ul>
      <li>The Federal Government may, by notification in the official Gazette, amend the Schedule so as to add any entry thereto or modify or omit any entry therein.</li>
    </ul>

    <p class="section-title">8. Delegation of Powers:</p>
    <ul><li>The Director-General may by order in writing, direct that all or any of his powers under this Act or the rules shall, subject to such conditions, if any, as may be specified in the order, be exercisable also by any member of the Agency so specified.</li></ul>

    <p class="section-title">9. Power to make rules:</p>
    <ul>
      <li>The Federal Government may, by notification in the official Gazette, make rules for carrying out the purposes of this Act.</li>
      <li>In particular and without prejudice to the generality of the fore-going power, such rules may provide for all or any of the following matters, namely:</li>
      <ul>
        <li>The terms and conditions of service of the Director General and other members of the Agency and the qualifications for recruitment to various posts.</li>
        <li>The powers and functions of the members of the Agency in relation to the conduct of inquiries and investigations;</li>
        <li>The nature and extent of the assistance with the Agency may provide to Provincial investigating agencies;</li>
        <li>The powers of the Inspector General of Police under the Police Act, 1861 (V of 1861), which shall be exercisable by the Director General and The manner in which rewards may be given to the members of the Agency or of the public for rendering commendable services.</li>
      </ul>
    </ul>

    <p class="section-title">10. Repeal:</p>
    <ul>
      <li>The Pakistan Special Police Establishment, 1948 (VII of 1948), and the Special Police and Provincial Police (Amalgamation) Order, 1962 (P.O. No.1 of 1962), hereinafter referred to respectively as the said Ordinance and the said Order, are hereby repealed.</li>
      <li>Upon the repeal of the said Ordinance:</li>
      <ul>
        <li>All persons who were members of the Special Police immediately before such repeal, including the specified persons shall stand transferred to the Agency and shall, subject to sub-section (5), be entitled to the same terms and conditions to which they were entitled immediately before such repeal; and</li>
        <li>Any inquiry or investigation pending with the Special Police immediately before such repeal shall continue to be conducted by the Agency.</li>
      </ul>
      <li>Notwithstanding the repeal of the said order, but subject to sub-section (4), every specified person shall continue to be appointed in or under the Provincial Police in or under which he was holding a post immediately before the commencement of this Act.</li>
      <li>On the recommendation of the Director General and with the concurrence of the Provincial Government concerned, the Federal Government, may direct that such of the specified persons referred to sub-section (3) as may, within thirty days of the commencement of this Act, express their willingness to serve in or under the Agency shall be appointed to posts in or under the Agency.</li>
      <li>A specified person referred to in clause (a) of sub-section (2) and a person in respect of whom a direction is issued under sub-section (4) shall, upon the repeal of the said ordinance or, as the case may be, the issue of such direction, cease to hold a post in or under the Provincial Police concerned and shall be entitled to the same terms and conditions of service to which he was entitled immediately before such repeal or the issue of such directions.</li>
    </ul>
  </div>

  <div class="act-container">
    <h3 class="text-center mb-4">SCHEDULE OF FIA ACT, 1974</h3>
    
    <div class="pc-section">
        <div class="pc-section-title">[1] Offences punishable under sections:</div>
        
        <div class="offence-list">
        
            <div class="offence-item"><sup>a</sup>[120-B, 121, 122, 123, 123-A, 124, 124-A]</div>
            <div class="offence-item"><sup>g</sup>[161, 162, 163, 164, 165, 165-A, 168, 169]</div>
            <div class="offence-item"><sup>d</sup>[175, 182, 183, 186, 187, 188, 189]</div>
            <div class="offence-item"><sup>c</sup>[201]</div>
            <div class="offence-item"><sup>e</sup>[216]</div>
            <div class="offence-item"><sup>b</sup>[217, 218]</div>
            <div class="offence-item"><sup>e</sup>[223]</div>
            <div class="offence-item"><sup>d</sup>[224, 225]</div>
            <div class="offence-item"><sup>e</sup>[225-A]</div>
            <div class="offence-item"><sup>e</sup>[245]</div>
            <div class="offence-item"><sup>b</sup>[255, 256, 257, 258, 259, 260, 261, 263]</div>
            <div class="offence-item"><sup>f</sup>[295-A]</div>
            <div class="offence-item"><sup>x</sup>[295-B]</div>
            <div class="offence-item"><sup>f</sup>[295-C, 298, 298-A]</div>
            <div class="offence-item"><sup>a</sup>[300, 301, 302, 324, 332, 333, 334, 335, 336, 337, 337-A, 337-B, 337-C, 337-D, 337-E, 337-F]</div>
            <div class="offence-item"><sup>d</sup>[342, 348]</div>
            <div class="offence-item"><sup>b</sup>[353]</div>
            <div class="offence-item"><sup>a</sup>[365-A]</div>
            <div class="offence-item"><sup>b</sup>[366-B]</div>
            <div class="offence-item"><sup>d</sup>[383]</div>
            <div class="offence-item"><sup>b</sup>[402-A, 402-B, 402-C, 403, 404]</div>
            <div class="offence-item"><sup>i</sup>[406]</div>
            <div class="offence-item"><sup>c</sup>[407, 408]</div>
            <div class="offence-item"><sup>h</sup>[409]</div>
            <div class="offence-item"><sup>c</sup>[411, 418, 419]</div>
            <div class="offence-item"><sup>i</sup>[420]</div>
            <div class="offence-item"><sup>a</sup>[435, 436, 440]</div>
            <div class="offence-item"><sup>k</sup>[462A, 462B, 462C, 462D, 462E, 462F]</div>
            <div class="offence-item"><sup>1</sup>[462H, 462I, 462J, 462K, 462L, 462M]</div>
            <div class="offence-item"><sup>d</sup>[466]</div>
            <div class="offence-item"><sup>c</sup>[467]</div>
            <div class="offence-item"><sup>i</sup>[468, 471]</div>
            <div class="offence-item"><sup>c</sup>[472]</div>
            <div class="offence-item"><sup>d</sup>[473, 474, 475, 476]</div>
            <div class="offence-item"><sup>b</sup>[477-A, 489-A, 489-B, 489-C, 489-D, 489-E]</div>
            <div class="offence-item"><sup>j</sup>[489-F]</div>
            <div class="offence-item"><sup>d</sup>[499, 500, 501, 502]</div>
            <div class="offence-item"><sup>x</sup>[505]</div>
            <div class="offence-item"><sup>d</sup>[506, 507]</div>
          
            <div class="mt-2  pakistan-penal-code-text">,of the Pakistan Penal Code(Act XLV of 1860).</div>
            <div class="card shadow-sm p-1 mt-3 position-absolute total-offences-card" style="bottom: 0px; right: 10px;">
              <h6 class="mb-1">Total Offences</h6>
              <div class="fw-bold text-primary count">117</div>
            </div>
        </div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/1.pdf')}}" target="_blank"><sup>m</sup>[1-A] Section 25-D and Section 29 of Telegraphic Act, 1885</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/2.pdf')}}" target="_blank"><sup>b</sup>[2] Offences punishable under the Explosive Substance Act, 1908 (VI of 1908).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/3.pdf')}}" target="_blank"><sup>b</sup>[3] Offences punishable under the Official Secret Act, 1923 (XIX of 1923).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/4.pdf')}}" target="_blank"><sup>b</sup>[4] Offences punishable under the Foreigners Act, 1946 (XXXI of 1946).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/5.pdf')}}" target="_blank"><sup>b</sup>[5] Offences punishable under the Prevention of Corruption Act, 1947 (II of 1947).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/6.pdf')}}" target="_blank"><sup>b</sup>[6] Offences punishable under the Foreign Exchange Regulation Act, 1947.</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/7.pdf')}}" target="_blank"><sup>b</sup>[7] Offences punishable under the Import and Export (Control) Act, 1950 (XXXIX of 1950).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/8.pdf')}}" target="_blank"><sup>b</sup>[8] Offences punishable under Banking Companies Ordinance, 1962 (LVII of 1962).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/9.pdf')}}" target="_blank"><sup>b</sup>[9] Offences punishable under the Pakistan Arms Ordinance, 1965 (W.P. Ord XX of 1965).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/10.pdf')}}" target="_blank"><sup>b</sup>[10] Offences punishable under section 156 of the Customs Act, 1969 (IV of 1969).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/11.pdf')}}" target="_blank"><sup>b</sup>[11] Offences punishable under the Foreign Exchange Repatriation Regulation, 1972.</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/12.pdf')}}" target="_blank"><sup>b</sup>[12] Offences punishable under the Foreign Assets (Declaration) Regulation, 1972.</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/13.pdf')}}" target="_blank"><sup>b</sup>[13] Offences punishable under the National Registration Act, 1973 (LVI of 1973). (Omitted)</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/14.pdf')}}" target="_blank"><sup>b</sup>[14] Offences punishable under the High Treason (Punishment) Act, 1973 (LXVIII of 1973).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/15.pdf')}}" target="_blank"><sup>b</sup>[15] Offences punishable under the Prevention of Anti-National Activities Act, 1974 (VII of 1974).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/16.pdf')}}" target="_blank"><sup>b</sup>[16] Offences punishable under the Banks (Nationalization) Act, 1974 (XIX of 1974).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/17.pdf')}}" target="_blank"><sup>b</sup>[17] Offences punishable under the Passport Act, 1974 (XX of 1974).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/18.pdf')}}" target="_blank"><sup>b</sup>[18] Offences punishable under the Drugs Act, 1976 (XXXI of 1976).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/19.pdf')}}" target="_blank"><sup>b</sup>[19] Offences punishable under Emigration Ordinance, 1979 (XVIII of 1979).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/20.pdf')}}" target="_blank"><sup>b</sup>[20] Offences punishable under the Exit from Pakistan (Control) Ordinance, 1981 (XLVI of 1981).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/21.pdf')}}" target="_blank"><sup>n</sup>[21] Offences punishable under the Anti-Terrorism Act, 1997 (XXVII of 1997) to the extent of dealing with cases which:</a></div>
      <div class="offence-list">
        <ul style="margin-left: 20px;">
          <li>[1] have Inter-provincial scope, or</li>
          <li>[2] are entrusted to the Agency by the Federal Government</li>
        </ul>
      </div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/22.pdf')}}" target="_blank"><sup>o</sup>[22] Offences punishable under the Prevention & Control of Human Trafficking Ordinance, 2002.</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/23.pdf')}}" target="_blank"><sup>p</sup>[23] Offences punishable under the Pakistan Telecommunication (Re-organization) Act, 1996 (XVII of 1996).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/24.pdf')}}" target="_blank"><sup>q</sup>[24] Offences punishable under the National Database and Registration Authority Ordinance, 2002.</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/25.pdf')}}" target="_blank"><sup>r</sup>[25] Offences punishable under Section 36 & 37 of the Electronic Transmission Ordinance, 2002 (LI of 2002).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/26.pdf')}}" target="_blank"><sup>s</sup>[26] Offences punishable under the Copyright Ordinance, 1962 (XXXIV of 1962).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/27.pdf')}}" target="_blank"><sup>t</sup>[27] Offences punishable under the Prevention of Electronic Crime Ordinance, 2007.</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/28.pdf')}}" target="_blank"><sup>u</sup>[28] Offences punishable under the Anti-Money Laundering Ordinance, 2007 (XLV of 2007).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/29.pdf')}}" target="_blank"><sup>v</sup>[29] Offences punishable under the Electricity Act, 1910 (IX of 1910).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/30.pdf')}}" target="_blank"><sup>w</sup>[30] Offences punishable under the Protection of Pakistan Act, 2014 (X of 2014).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/31.pdf')}}" target="_blank"><sup>x</sup>[31] Offences punishable under the Anti-Money Laundering Act, 2010 (VII of 2010).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/32.pdf')}}" target="_blank"><sup>I</sup>[32] Offences punishable under the Prevention of Electronic Crime Act, 2016.</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/33.pdf')}}" target="_blank"><sup>y</sup>[33] Offences punishable under the Transplantation of Human Organs and Tissues Act, 2010.</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/34.pdf')}}" target="_blank"><sup>z</sup>[34] Offences punishable under the Prevention of Smuggling of Migrants Act, 2018 (XXVIII of 2018).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/35.pdf')}}" target="_blank"><sup>z</sup>[35] Offences punishable under the Prevention of Trafficking in Persons Act, 2018 (XXXIV of 2018).</a></div>
    </div>
    
    <div class="pc-section">
      <div class="pc-section-title"><a href="{{asset('pdfs/36.pdf')}}" target="_blank"><sup>z/1</sup>[36] Offences punishable under Public Properties (Removal of Encroachment) Ordinance, 2021 (Ord No. XVI of 2021).</a></div>
    </div>
  </div>

  <div class="authority-container">
    <div class="authority-title">AUTHORITY</div>
    <ol class="authority-list">
      <li>S. R. O. 704 (I)/2004. dated 18 August 2004, [693 (2004)/Ex. Gaz.] [F. No. 4/14/2003-POLL (2)]</li>
      <li>S. R. O. 826(I)/97 dated 20 September 1997, [No. 1/18/97-FIA.]</li>
      <li>S. R. O. 113(I)/2002 dated 18 February 2002,[Ex. Gaz.]</li>
      <li>S. R. O. 381(I)/2012 dated 18 April 2012, [2428/2012/Ex. Gaz.] [No. 7/13/2012-FIA.]</li>
      <li>S. R. O. 31(KE)/15, dated 22 December 2014, [No. 1/12/2014-FIA]</li>
      <li>S. R. O. 620(I)/2018, dated 18 May 2018, [5925/2018/Ex. Gaz.] [No. 1/2/2017-FIA]</li>
      <li>[Entry 161, 162, 163, 164, 165, 165-A, 168, 169 omitted by SRO 702(1) 2004 dated 16.08.2004 PLD 2004 Cent. St. Sup. 649 Inst. By SRO 1097(I)/2008, dated 24.10.2008, PLD 2004-2009 Supp. Fed. St. 125]</li>
      <li>Section 409 omitted by 702(1) 2004 dated 16.08.2004, PLD 2004 Cent. St. Sup. 649 Inst. By S.R.O 1097(I)/2008, dated 24.10.2008, PLD 2004-2009 Supp. Fed. St. 125.</li>
      <li>S. R. O. 237(I)/98 dated 10 April 1998, [No. 1/18/97-FIA]</li>
      <li>S. R. O. 977(I)/2003 dated 9 October 2003, [Ex. Gaz.] [F. No. 1/18/97-FIA.]</li>
      <li>S. R. O. 67(KE)/2013 dated 03 September 2013, [F. No. 1/4/2013-FIA]</li>
      <li>S. R. O. 1047(I)/2016 dated 10 November 2016,[2/2016–(FIA.)]</li>
      <li>S. R. O. 1231(I)/2012 dated 1 October 2012, [3038/2012/Ex. Gaz.] [F. No. 7/13/2012-FIA.]</li>
      <li>S. R. O. 157(I)/2002 dated 19 March 2002 , [215(2002)/Ex. Gaz.]</li>
      <li>S. R. O. 741(I)/2002 dated 26 October 2002,[Ex. Gaz.] [F. No. 1/18/97-FIA.]</li>
      <li>S. R. O. 853(I)/2002 dated 28 November 2002, [1411/2002/Ex. Gaz.] [F. No. 1/12/2000-FIA.]</li>
      <li>S. R. O. 549(I)/2003 dated 18 June 2003, [4897/2003/Ex. Gaz. [F. No. 1/11/2002-FIA.]</li>
      <li>S. R. O. 1050(I)/2003 dated 15 November 2003 [F. No. 1/18/97-FIA.]</li>
      <li>S. R. O. 321(I)/2005 dated 19 April 2005, [2800/2005/Ex. Gaz.] [F. No. 1(1)/2005-FIA.]</li>
      <li>S. R. O. 206(I)/2008 dated 04 March 2008, [Ex. Gaz.]</li>
      <li>S. R. O. 1097(I)/2008 dated 21 October 2008, [3120/2008/Ex. Gaz.] [F. No. 1/15/4/2001/FIA]</li>
      <li>S. R. O. 1/4/2013-FIA dated 24 July 2013 [F. No. 1/3/2013-FIA, dated 16 July 2013]</li>
      <li>S. R. O. 5(KE)/2016 dated 7 January 2016, [No. 1/5/2015-(FIA)]</li>
      <li>MOI Notification No. [F.No. 4/242/2022-FIA, dated 3rd November 2022]</li>
      <li>S. R. O. 353(I)/2017 dated 20 May 2017 [706(2017)/Ex. Gaz.], [No. 1/2017-FIA]</li>
      <li>MOI Notification No. [F.No. 1/4/2018-FIA dated 23 August, 2021]</li>
      <li>MOI Notification No. [F.No. 1/4/2018-FIA dated 29th October, 2021]</li>
    </ol>
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