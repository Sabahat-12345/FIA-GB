@extends('layouts.app',['title' => 'FIA Law Wing'])
@section('main')
<style>
    .card {
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .btn-custom {
      background-color: #2c2e83;
      color: white;
      border-radius: 20px;
      padding: 5px 15px;
      font-size: 14px;
    }
    .btn-custom:hover {
      background-color: #1b1c61;
      color: white;
    }
    .card-title {
      font-weight: bold;
      font-size: 1.1rem;
    }
    .hover-zoom {
  transition: transform 0.3s ease;
  max-width: 100%; /* Makes image scale with container */
  height: auto;
  display: block;
  margin: 0 auto;
}

.hover-zoom:hover {
  transform: scale(1.05); /* Reduce the zoom a bit */
}
  </style>

<div class="container py-5 text-center">
    <h2 class="mb-3">LAW WING</h2>
    <p>FIA Law Wing was established under the Federal Investigation Agency (Appointment, Promotion and Transfer) Rules, 1975 after promulgation of the Federal Investigation Agency, 1974.</p>

    <div class="row mt-5 g-4">
      <!-- Our Achievements -->
      <div class="col-lg-4 col-md-12">
        <div class="card h-100 p-3 d-flex flex-column">
          <div class="card-body  d-flex flex-column">
            <h5 class="card-title">OUR ACHIEVEMENTS</h5>
            <ul class="text-start">
              <li>Imprisonment for 28 years in case FIR No.02 /2020 at FIA CBC Quetta.</li>
              <li>Imprisonment for 27 years and Fine of Rs. 55.5779 Million in case FIR No. 05/2014 FIA CBC Quetta.</li>
              <li>Imprisonment for 7 years and Fine of Rs. 39.983 Million in case FIR No. 399/2016 FIA ACC Gujranwala.</li>
            </ul>
            <div class="mt-auto">
                <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#achievementsModal">
                    Click to read more
                  </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Hierarchy -->
      <div class="col-lg-4 col-md-12">
        <div class="card h-100 p-3">
          <div class="card-body">
            <h5 class="card-title">HIERARCHY</h5>
            <p class="text-start">Click below image to see organogram of FIA</p>
            <a href="{{asset('asset/law_organo.png')}}" target="_blank">
                <img src="{{asset('asset/law_organo.png')}}" alt="Organogram" class="img-fluid hover-zoom " style="cursor: pointer;" >
              </a>
          </div>
        </div>
      </div>

      <!-- Mandate -->
      <div class="col-lg-4 col-md-12">
        <div class="card h-100 p-3 d-flex flex-column">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">MANDATE</h5>
            <p class="text-start">The FIA Law Wing has pivotal role in the Agency. It has been entrusted with the significant mandate as under:</p>
            <ul class="text-start">
              <li>To assist / provide guidance in the legal matters during proceeding to enquiry / investigation officers.</li>
              <li>To tender legal comments / opinions after scrutinizing the Confidential Final Reports (CFRs) and appended papers.</li>
            </ul>
            <div class="mt-auto">
                <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#mandateModal">
                    Click to read more
                  </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- OUR ACHIEVEMENTS MODAL -->
<div class="modal fade" id="achievementsModal" tabindex="-1" aria-labelledby="achievementsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="achievementsModalLabel">OUR ACHIEVEMENTS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Imprisonment for 28 years in case FIR No.02 /2020 at FIA CBC Quetta.</li>
            <li>Imprisonment for 27 years and Fine of Rs. 55.5779 Million in case FIR No. 05/2014 FIA CBC Quetta.</li>
            <li>Imprisonment for 7 years and Fine of Rs. 39.983 Million in case FIR No. 399/2016 FIA ACC Gujranwala.</li>
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
        <div class="modal-body">
          <p>The FIA Law Wing has pivotal role in the Agency. It has been entrusted with the significant mandate as under:</p>
          <ul>
            <li>To scrutinize the reports u/s 173 Cr. P.C. 1898 and institute before Trial Court, conduct the Trial proceedings in cases registered under offences specified in the schedule of FIA Act, 1974 sent up for trial by the Agency in Special Courts and the courts subordinate to the High Courts. (Ref- Section 5-A of FIA Act, 1974).</li>
            <li>To assist / provide guidance in the legal matters during proceeding to enquiry / investigation officers.</li>
            <li>To tender legal comments / opinions after scrutinizing the Confidential Final Reports (CFRs) and appended papers.</li>
            <li>To scrutinize Case Diaries and refer to Circle Incharge for further action.</li>
            <li>The DD Law Zone is responsible to prepare comments / reply in respective High Courts, assist the Director Zone in administrative issues.</li>
            <li>To assist and furnish views and comments in administrative / policy matters.</li>
            <li>To represent and appear on behalf of FIA before Supreme Court of Pakistan, all High Courts, judicial and Quasi-Judicial Tribunal in Pakistan.</li>
            <li>To assist the Director Zone and Circle Incharge in the administrative matters.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  

@endsection
 



