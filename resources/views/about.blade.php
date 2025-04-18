

  @extends('layouts.app' , ['title' => 'FIA Info Page'])
@section('main' )

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

      

</style>
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
@endsection
