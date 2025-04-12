<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pakistan Citizen Portal</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
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


  </style>
</head>
<body>
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
  
  
  
</body>
</html>