@extends('layouts.app',['title' => 'FIA Academy'])
@section('main')
<style>
    .card {
      height: 100%;
    }
    .btn-custom {
      background-color: #1f1f99;
      color: white;
      border: none;
    }
    .btn-custom:hover {
      background-color: #6e6e82;
      color: white
    }
    .hover-zoom:hover {
  transform: scale(1.1);
  /* box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); */
  /* border: 2px solid #007bff; */
}
  </style>
  <div class="container my-5">
    <h2 class="text-center fw-bold">FIA ACADEMY</h2>
    <p class="text-center">
      With the passage of time, FIA has been assigned greater role under the Government’s initiatives towards transparency,
      accountability, rule of law and good governance. With the inclusion and amendment of number of laws in schedule of FIA
      under national and international perspectives like FATF, TIP and accountability, a stringent need has emerged for
      advanced capacity building programs. Under the vision of worthy Director General FIA for introducing reforms in existing
      training programs in line with national and global needs, responsibilities of FIA Academy has been increased manifolds.
    </p>

    <div class="row text-center mt-5 g-4">
      <div class="col-md-12 col-lg-4">
        <div class="card p-3">
          <h5 class="fw-bold">OUR ACHIEVEMENTS</h5>
          <ul class="text-start">
            <li>Short Term International Capacity Building Courses during 2020-2021. 02 Officers have gone through International capacity building training.</li>
            <li>Long Term Courses during 2020-2021. During the period, FIA Academy has trained a total of 907 Officers/Officials.</li>
            <li>Short Term National Capacity Building Courses during 2020-2021, a total of 1316 Officers/Officials have gone through capacity building training.</li>
          </ul>
          <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#achievementsModal">
            Click to read more
          </button>
        </div>
      </div>

      <div class="col-md-12 col-lg-4">
        <div class="card p-3">
          <h5 class="fw-bold">HIERARCHY</h5>
          <p>Click below image to see organogram of FIA Academy</p>
          <a href="{{asset('asset/academy_organo.png')}}" target="_blank">
            <img src="{{asset('asset/academy_organo.png')}}" alt="Organogram" class="img-fluid hover-zoom mx-auto d-block" style="max-width: 200px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal">
          </a>
        </div>
      </div>

      <div class="col-md-12 col-lg-4">
        <div class="card p-3">
          <h5 class="fw-bold">MANDATE</h5>
          <p>
            In order to develop FIA’s capacity for effective contribution towards responsibilities assigned to the Agency, FIA Academy has been assigned the mandate to impart training to its newly recruited officers through long term refresher and induction trainings to its executive staff responsible to carry out investigation and prosecution of the crimes falling in its schedule. In addition, FIA Academy is also responsible to conduct refresher courses for its existing officers and officials.
          </p>
        </div>
      </div>
    </div>


    <div class="border border-dark border-2 rounded p-4 shadow-sm mt-4">
    <h4 class="text-center fw-bold my-4">TRAINING PROGRAMS AT FIA ACADEMY</h4>

    <div class="row g-4 p-5">
      <div class="col-md-12 col-lg-4">
        <div class="card p-3 h-100 ">
          <h6 class="fw-bold">LONG TERM INDUCTION TRAINING COURSES</h6>
          <p>
            Newly recruited officers/officials from Constable to Assistant Director are trained through four to six month courses including basic investigation, prosecution and induction training programs.
          </p>
          <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#longTermModal">
            Click to read more
          </button>
        </div>
      </div>

      <div class="col-md-12 col-lg-4">
        <div class="card p-3 h-100 d-flex flex-column">
          <div class="flex-grow-1">
          <h6 class="fw-bold">SHORT TERM CAPACITY BUILDING COURSES</h6>
          <p>
            These are specialized training courses conducted through in-person or online classes for capacity building of FIA officers/officials to meet the needs of the Agency in line with modern techniques.
          </p>
          </div>
          <div class="mt-auto">
          <button type="button" class="btn btn-primary mt-3 w-100" data-bs-toggle="modal" data-bs-target="#shortTermModal">
            Click to read more
          </button>
          </div>
        </div>
      </div>

      <div class="col-md-12 col-lg-4">
        <div class="card p-3 h-100">
          <h6 class="fw-bold">INTERNATIONAL CAPACITY BUILDING COURSES</h6>
          <p>
            These are highly specialized and training courses offered, conducted and funded by different partner countries. FIA Academy is responsible for arranging, scrutinizing and finalizing nominations for international capacity building courses.
          </p>
        </div>
      </div>

      <div class="col-md-12 col-sm-12">
        <div class="card p-3 h-100 p-4">
          <h6 class="fw-bold">PROMOTIONAL COURSES FOR MINISTERIAL STAFF</h6>
          <p>
            These are short term promotional courses required for ministerial staff under the government instructions. These courses are arranged by FIA Academy through STI (Secretariat Training Institute), and NTB (National Information Technology Board) conducted by Virtual University.
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Achievement Modal -->
<div class="modal fade" id="achievementsModal" tabindex="-1" aria-labelledby="achievementsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="achievementsModalLabel">Our Achievements</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="list-group list-group-flush">
            
            <li class="list-group-item">Recovered RS. 15,313,819 from Sindh of BISP</li>
            <li class="list-group-item">Recovered RS. 6,909,998 from Punjab of BISP</li>
            <li class="list-group-item">Recovered RS. 21,796,017 from KPK of BISP</li>
            <li class="list-group-item">Recovered RS. 6,820,758 from Islamabad of BISP</li>
            <li class="list-group-item">Recovered RS. 45,891,430 from Baluchistan of BISP</li>
            <li class="list-group-item">ECW registered 840 cases against Money Laundering with 3,298.48 million amount/property seized. 18 convictions obtained.</li>
            <li class="list-group-item">ECW registered 1819 cases against Illegal MVTs/Hundi Hawala operators, 5,094.30 million amount seized, 732 convictions obtained.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
{{-- long --}}
  <div class="modal fade" id="longTermModal" tabindex="-1" aria-labelledby="longTermModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="longTermModalLabel">Long Term Induction Training Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    <ul><li>  Newly recruited officers/officials from Constable to Assistant Director are trained through four to six month courses including basic investigation, prosecution and induction training programs.</li>
          
         <li>  These courses also include promotional courses like lower school course, intermediate school course and investigation courses for promoted investigation officers.</li>
          
         <li>       FIA Academy also liaise with other training schools to conduct trainings for FIA officers/officials.</li>
     
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  

  {{-- short --}}
  <div class="modal fade" id="shortTermModal" tabindex="-1" aria-labelledby="shortTermModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="shortTermModalLabel">Short Term Capacity Building Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
      <ul><li>  These are specialized training courses conducted through in-person or online classes for capacity building of FIA officers/officials to meet the needs of the Agency in line with modern techniques and knowledge.</li>
          
         <li>   These programs are mostly conducted by FIA Academy through its own resources. Many International partners like:</li></ul>
         
     
          <ul>
            <li>UNODC (United Nations Office on Drugs and Crimes)</li>
            <li>ICMPD (International Center for Migration Policy Development)</li>
            <li>ICITAP (International Criminal Investigative Training Assistance Program)</li>
            <li>USDOJ (United States Department of Justice)</li>
            <li>Other resource persons from different foreign missions</li>
          </ul>
       <ul><li>      Also contribute to conduct these courses.</li></ul>
     
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
 
@endsection
  

  