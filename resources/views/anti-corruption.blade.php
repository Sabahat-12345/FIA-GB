<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Anti Corruption Wing</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }
    .section-title {
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
    }
    .btn-read-more {
      background-color: #4b0082;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 5px;
      font-size: 0.9rem;
    }
    .card {
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }
    .btn-read-more:hover {
  background-color: #36005e; /* darker indigo on hover */
  color: white;
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


{{-- anti corruption wing --}}
  <div class="container py-5">

    <h2 class="section-title" >ANTI CORRUPTION WING</h2>
    <p class="text-justify mb-4 " style="text-align: justify;">
      At the time of independence, a department with the name of Special Police Establishment (SPE) was set up to fight against corruption in Pakistan. In the year 1974, this organization was merged in the newly created Multi Tasked Agency namely FIA and besides Anti-Corruption, a number of other responsibilities were also entrusted to it.
    </p>
    <p class="text-justify mb-5"style="text-align: justify;">
      FIA has been engaged in fighting against the menace of Corruption in Pakistan at all the times except for a short period (16.08.2004 to 24.10.2008), during which its powers to deal with the corruption cases were seized by NAB.
    </p>

    <!-- Achievements -->
    <div class="row mb-5 justify-content-center">
      <div class="col-lg-6">
        <div class="card p-3">
          <h5 class="fw-bold mb-3">OUR ACHIEVEMENTS</h5>
          <ul>
            <li>Anti Corruption Wing Challaned 3592 cases in the last three years. Whereas 2612 accused were convicted from different courts on corruption cases.</li>
            <li>Successfully conducted Forensic Audit of all housing Societies / Schemes of Pakistan in compliance of Supreme Court Order.</li>
            <li>ACW carried out operations against sale of Illegal smuggled DTH devices all over Pakistan on the direction of Honorable Supreme Court of Pakistan.</li>
          </ul>
          <button class="btn btn-read-more mt-2" data-bs-toggle="modal" data-bs-target="#achievementsModal">
            Click to read more
          </button>
        </div>
      </div>
    </div>

    <!-- Info Cards -->
    <div class="row g-4 justify-content-center">

      <div class="col-md-6 col-lg-6">
        <div class="card h-100 p-3">
          <h5 class="fw-bold">MANDATE</h5>
          <p>Anti Corruption Wing (ACW) is an integral part of FIA, which deals with the organized crimes other than terrorism and human trafficking at country level. It monitors the working of the FIA Zonal Directorates pertaining to Anti-Corruption Laws, Spurious Drugs, Theft of Electricity Gas & Oil (EGOA), violations of Human Organ Transplant Act.</p>
          <button class="btn btn-read-more" data-bs-toggle="modal" data-bs-target="#mandateModal">
            Click to read more
          </button>
        </div>
      </div>

      <div class="col-md-6 col-lg-6">
        <div class="card h-100 p-3">
          <h5 class="fw-bold">HIERARCHY</h5>
          <p>ACW is headed by a senior officer of BS-21 as Additional Director General at the HQ who is responsible for assisting the Director General and coordinating with the zonal directors for crime monitoring. Additional Director General is assisted by a Director, Additional Directors / Deputy Directors & Assistant Directors of BS-20, 19, 18 & 17 respectively.</p>
          <button class="btn btn-read-more" data-bs-toggle="modal" data-bs-target="#hierarchyModal">
            Click to read more
          </button>
        </div>
      </div>

      <div class="col-md-6 col-lg-6">
        <div class="card h-100 p-3">
          <h5 class="fw-bold">FIELD FORMATION</h5>
          <p>Presently there are 14 Anti Corruption Circles of FIA in different parts of the country. Their prime duty is to fight against corruption and corrupt practices concerning federal government public servants and funds. These circles work actively against officers / officials in public departments who are found misusing.</p>
          <button class="btn btn-read-more" data-bs-toggle="modal" data-bs-target="#fieldFormationModal">
            Click to read more
          </button>
        </div>
      </div>

      <div class="col-md-6 col-lg-6">
        <div class="card p-3 w-100 h-100">
          <h5 class="fw-bold">CCRO</h5>
          <p>It was established vide standing order no.4 of FIA, with the purpose to streamline the crime record by collecting, compiling, maintaining and updating information in crimes dealt by FIA.</p>
          <div class="mt-auto">
            <button class="btn btn-read-more w-100" data-bs-toggle="modal" data-bs-target="#ccroModal">
              Click to read more
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Achievements Modal -->
<div class="modal fade" id="achievementsModal" tabindex="-1" aria-labelledby="achievementsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="achievementsModalLabel">Our Achievements</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Anti Corruption Wing Challaned 3592 cases in the last three years. Whereas 2612 accused were convicted from different courts on corruption cases.</li>
            <li>Anti Corruption wing has successfully conducted Forensic Audit of all housing Societies / Schemes of Pakistan in compliance of Supreme Court Order.</li>
            <li>ACW carried out operations against sale of illegal smuggled DTH devices all over the Pakistan on the direction of Honorable Supreme Court of Pakistan.</li>
            <li>Annual Administration Report 2020</li>
            <li>1st Quarterly Bulletin Report 2020</li>
            <li>2nd Quarterly Bulletin Report 2020</li>
            <li>3rd Quarterly Bulletin Report 2020</li>
            <li>4th Quarterly Bulletin Report 2020</li>
            <li>1st Quarterly Bulletin Report 2021</li>
            <li>Prepared Annual Report on the Observance and Implementation of Policy (2019-2020).</li>
            <li>Prepared Year Book (2019-2020) under Rule 25 of the Rule of Business 1973 for Ministry of Interior & publication timely preparation of quarterly bulletins, financial reports & annual reports after collecting and compiling zonal data.</li>
            <li>Assisted COS Branch, ECW, Immigration Wing, Admin Wing and CMS team regarding data provision and preparation of reports, booklets/newsletters.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
<!-- Mandate Modal -->
<div class="modal fade" id="mandateModal" tabindex="-1" aria-labelledby="mandateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="mandateModalLabel">MANDATE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="text-align: justify;">
         <ul>
            <li>   Anti Corruption Wing (ACW) is an integral part of FIA, which deals with the organized crimes other than terrorism and human trafficking at country level. It monitors the working of the FIA Zonal Directorates pertaining to Anti-Corruption Laws, Spurious Drugs, Theft of Electricity Gas & Oil (EGOA), violations of Human Organ Transplant Act (HOTA), Intellectual Property Rights (IPR) & Counterfeit Currency Enquiries / Cases etc. through their monthly D.O Letters.</li>
         
       
          <li>  It oversees the receipt and disposal of complaints received from Ministries, National Assembly / Senate, Prime Minister / President Secretariat, Wafaqi Mohtasib etc. and updates the progress accordingly.</li>
            It oversees the receipt and disposal of complaints received from Ministries, National Assembly / Senate, Prime Minister / President Secretariat, Wafaqi Mohtasib etc. and updates the progress accordingly.
         
          <li>  ACW nominates FIA representatives to attend meetings / proceedings of Public Accounts Committees and standing Committees of the National Assembly and Senate on behalf of DG FIA.</li>
            ACW nominates FIA representatives to attend meetings / proceedings of Public Accounts Committees and standing Committees of the National Assembly and Senate on behalf of DG FIA.
     
         <li>  It also monitors the working of Case Management System (CMS) and ensures compilation / publication of FIA Quarterly as well as Annual Administration Reports through Central Crime Record Office (CCRO).</li>
          
    
         <li>  ACW is also mandated to conduct the Annual inspections of all the field circles of FIA Zonal Directorates throughout the country and disseminate analysis reports to field units for improvements.</li>
          
         
         <li> Besides supervision, ACW issues guidelines to the field for the expeditious disposal of enquiries/cases.</li>
           
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Hierarchy Modal -->
<div class="modal fade" id="hierarchyModal" tabindex="-1" aria-labelledby="hierarchyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="hierarchyModalLabel">HIERARCHY</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="text-align: justify;">
       <ul>
        <li> The Anti-Corruption Wing (ACW) of the Federal Investigation Agency (FIA) is headed by an Additional Director General (BS-21) stationed at FIA Headquarters. This senior officer is responsible for overseeing the overall functioning of the wing and reports directly to the Director General FIA.</li>
           
        
       <li>  Under the Additional Director General, the hierarchy consists of Directors (BS-20) who manage broader operational strategies, and are assisted by Additional Directors (BS-19), Deputy Directors (BS-18), and Assistant Directors (BS-17) in charge of supervising field operations and zonal activities.</li>
          
        
        <li>    Each zonal Anti-Corruption Circle is led by a Deputy Director or Assistant Director, depending on the scale of the region. These officers supervise Investigation Officers, Inspectors, and Sub-Inspectors who manage day-to-day inquiries, evidence collection, and legal coordination.</li>
        
        
         <li>  The hierarchy is designed to ensure efficient handling of corruption-related cases, proper reporting, and close coordination between FIA Headquarters and regional offices across Pakistan, including Gilgit Baltistan.</li>
          
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Field Formation Modal -->
<div class="modal fade" id="fieldFormationModal" tabindex="-1" aria-labelledby="fieldFormationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="fieldFormationModalLabel">FIELD FORMATION</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="text-align: justify;">
        <ul>
            <li>      Presently there are 14 Anti-Corruption Circles of FIA in different parts of the country. Their prime duty is to fight against corruption and corrupt practices concerning federal government public servants and misuse of public funds.</li>

      
         
      <li> These circles work actively against officers and officials in public departments who are found misusing and abusing their official positions for wrongful gains. They act as a frontline safeguard against financial losses to the federal exchequer.</li>
           
        
        <li> In addition to corruption-related inquiries, these circles also handle cases involving spurious drugs, Human Organ Transplant Act (HOTA), counterfeit currencies, violations of Special Laws, as well as crimes under the Pakistan Penal Code (PPC).</li>
           
       
        <li> The circles function under the command of Zonal Directors (BS-20), and are overseen by two Additional Director Generals (BS-21) for the North and South regions. Their performance and reports are submitted to the Anti-Corruption Wing (ACW) on a monthly basis through a structured reporting channel.</li>
           
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- CCRO Modal -->
<div class="modal fade" id="ccroModal" tabindex="-1" aria-labelledby="ccroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="ccroModalLabel">CCRO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="text-align: justify;">
     <ul><li>   The Central Crime Record Office (CCRO) was established under standing order no.4 of FIA, with the purpose of streamlining crime records by collecting, compiling, maintaining, and updating information related to crimes handled by FIA.</li>
         
        
        <li>  CCRO is headed by an Additional Director or Deputy Director and functions under the direct supervision of the Additional Director General of the Anti-Corruption Wing (ACW). Its core responsibility is to maintain records of all FIRs submitted by different zones and circles across the country.</li>
          
        </ul>
          <h6 class="fw-bold">Functions:</h6>
          <ul>
            <li>Maintain and record all FIRs registered across Pakistan on a daily basis.</li>
            <li>Manage and organize crime data records efficiently.</li>
            <li>Prepare Quarterly Bulletin Reports (QBR).</li>
            <li>Compile six-monthly performance reports.</li>
            <li>Create Annual Performance Reports and fulfill other assignments from higher authorities.</li>
            <li>Maintain crime data in a standardized format categorized by Circle, Zone, and Wing since 2008.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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

   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>