
@extends('layouts.app',['title' => 'FIA Gilgit Baltistan'])
@section('main')
<style>
   

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
 
       
   </style>
 

 
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


   



@endsection



  

