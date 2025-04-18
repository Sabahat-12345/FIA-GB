
@extends('layouts.app',['title'=>'Economic Crime Wing'])
@section('main')
<style>
  .section-card {
    height: 100%;
    padding: 20px;
    border-radius: 8px;
    background-color: #f8f9fa;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }
  .main-title {
    text-align: center;
    margin-bottom: 30px;
    font-weight: bold;
  }
  .section-title {
    text-align: center;
    margin-bottom: 20px;
    font-weight: bold;
  }
  .read-more-btn {
    background-color: #343a40;
    color: white;
    border-radius: 20px;
    padding: 5px 15px;
    display: block;
    margin: 0 auto;
    text-align: center;
    text-decoration: none;
  }
  .read-more-btn:hover {
    background-color: #23272b;
    color: white;
  }
  .initiatives-section {
    margin-top: 40px;
    border-top: 1px solid #dee2e6;
    padding-top: 20px;
  }
  .initiatives-title {
    position: relative;
    margin-bottom: 20px;
  }
  .nav-buttons {
    text-align: center;
  }
  .nav-btn {
      background-color: transparent;
border: 2px solid #007bff;
color: #007bff;
padding: 6px 12px;
border-radius: 4px;
font-size: 18px;
font-weight: bold;
transition: all 0.3s ease;
  }
  .nav-btn:hover {
background-color: #007bff;
color: #fff;
cursor: pointer;
box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
}
  .initiative-card {
background-color: #f8f9fa;
border: 1px solid #ddd;
border-radius: 10px;
min-height: 200px;
display: flex;
align-items: center;
justify-content: center;
text-align: center;
}
.bordered-box {
border: 2px solid #007bff; /* You can change the color */
border-radius: 10px;
padding: 20px;
background-color: #f9f9f9; /* optional light background */
box-shadow: 0 0 10px rgba(0, 123, 255, 0.1); /* optional shadow */
}

</style>


<div class="container py-5">
  <!-- Main Title -->
  <h1 class="main-title">ECONOMIC CRIME WING</h1>
  
  <!-- Description and Achievements Section -->
  <div class="row mb-4">
    <div class="col-lg-7 mb-3">
      <div class="section-card">
        <p>Economic Crime Wing deals with investigation of the offences related to Financial Crimes: (Money Laundering, Hundi/ Hawala, Illegal Money or Value Transfer Services (MVTs), STRs/FIRs (Financial Intelligence Reports) & fraud committed in relation with banking business, wilful default matters etc.)</p>
      </div>
    </div>
    <div class="col-lg-5 mb-3">
      <div class="section-card">
        <h2 class="section-title">OUR ACHIEVEMENTS</h2>
        <ul>
          <li>Recovered Rs. 15313819 form Sindh of BISP</li>
          <li>Recovered Rs. 6909998 form Punjab of BISP</li>
          <li>Recovered Rs. 21,796,017 form KPK of BISP</li>
        </ul>
        <button type="button" class="btn btn-primary read-more-btn" data-bs-toggle="modal" data-bs-target="#achievementsModal">
          Click to read more
        </button>
      </div>
    </div>
  </div>
  
  <!-- Main Functions Section -->
  <div class="row mb-4  bordered-box">
    <div class="col-lg-4 mb-3">
      <div class="section-card">
        <h2 class="section-title">MANDATE</h2>
        <ul>
          <li>Foreign Exchange Regulation Act-1947</li>
          <li>Anti Money Laundering Act-2010</li>
          <li>Banking Companies Ordinance-1962</li>
          <li>Financial Institutions Recovery Ordinance</li>
          <li>Offences of Pakistan Penal Code-1860 on the schedule of</li>
          <li>Certain offences of Pakistan Penal Code-1860 on the schedule regarding offences related to banking business</li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4 mb-3">
      <div class="section-card">
        <h2 class="section-title">MAIN FUNCTION</h2>
        <ul>
          <li>To analyze laws relating to Economic Crimes and to suggest amendments, if required;</li>
          <li>Data Collection and analysis</li>
          <li>Analysis of daily progress reports</li>
          <li>Collection of data on seizures, confiscation and attachment</li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4 mb-3">
      <div class="section-card">
        <h2 class="section-title">FATF</h2>
        <p>ECW compiled, presented and defended the report on IO-7 Money Laundering in the mutual evaluation of Pakistan in May, 2021 which resulted in 06 out of 07 recommended actions being largely complied.</p>
        <button type="button" class="btn btn-primary read-more-btn" data-bs-toggle="modal" data-bs-target="#fatfModal">
          Click to read more
        </button>
      </div>
    </div>
  </div>
  
  <!-- New Initiatives Section -->
  <div class="initiatives-section">
    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-between align-items-center initiatives-title">
          <h2>New Initiatives</h2>
         
          <div class="nav-buttons">
              <button class="nav-btn" data-bs-target="#initiativeCarousel" data-bs-slide="prev">&lt;</button>
            
              <button class="nav-btn" data-bs-target="#initiativeCarousel" data-bs-slide="next">&gt;</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container my-5">
      <div id="initiativeCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="hover">


        <div class="carousel-inner">
    
          <div class="carousel-item active">
            <div class="initiative-card p-4">
              <p>AML Desk working (collects information and data from SECP, FBR, FMU & SBP and provides to field units of FIA)</p>
            </div>
          </div>
    
          <div class="carousel-item">
            <div class="initiative-card p-4">
              <p>Risk Based Approach on Money Laundering: FIA is adopting risk-based strategies to prioritize high-risk cases and channels.</p>
            </div>
          </div>
    
          <div class="carousel-item">
            <div class="initiative-card p-4">
              <p>Capacity Building: FIA conducts regular training workshops for investigators on financial crime investigation and AML compliance.</p>
            </div>
          </div>
    
          <div class="carousel-item">
            <div class="initiative-card p-4">
              <p>Collaboration with International Agencies: FIA coordinates with Interpol, FATF, and other global agencies on financial crime intelligence.</p>
            </div>
          </div>
    
          <div class="carousel-item">
            <div class="initiative-card p-4">
              <p>Technological Integration: Implementation of digital tools and analytics software to track suspicious transactions and trace funds flow efficiently.</p>
            </div>
          </div>
    
        </div>
    
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#initiativeCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#initiativeCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="fatfModal" tabindex="-1" aria-labelledby="fatfModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="fatfModalLabel">FATF Related Progress</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <ul><li>       <strong>Illegal MVTs:</strong> ECW compiled, presented, and defended the report on illegal MVTs before FATF plenary in September 2020. This action item was declared “Largely Complied” by FATF.</li>
<li>   <strong>IO-7 (Money Laundering):</strong> ECW compiled, presented, and defended the report on IO-7 Money Laundering in the mutual evaluation of Pakistan in May 2021, which resulted in 06 out of 07 recommended actions being largely complied with.</li>
   <li> <strong>IO-8 (Asset Recovery & Management):</strong> ECW compiled, presented, and defended the report on IO-8 asset recovery and management in the mutual evaluation of Pakistan in May 2021, which resulted in 07 out of 08 recommended actions being largely complied with.</li>
  <li>  <strong>FIA Appreciation:</strong> FATF Secretariat, Pakistan appreciated FIA’s performance against Money Laundering as well as Illegal MVTs / Hundi Hawala operators.</li>
 </ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="achievementsModal" tabindex="-1" aria-labelledby="achievementsModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="achievementsModalLabel">Our Achievements</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <ul>
        <li>Recovered <strong>RS. 15,313,819</strong> from Sindh of BISP</li>
        <li>Recovered <strong>RS. 6,909,998</strong> from Punjab of BISP</li>
        <li>Recovered <strong>RS. 21,796,017</strong> from KPK of BISP</li>
        <li>Recovered <strong>RS. 6,820,758</strong> from Islamabad of BISP</li>
        <li>Recovered <strong>RS. 45,891,430</strong> from Baluchistan of BISP</li>
      </ul>
     <ul><li> <strong>Money Laundering:</strong> ECW has registered <strong>840 cases</strong> against Money Laundering, where <strong>3298.48 million
    </strong> amount/property has been seized/attached. Additionally, ECW has obtained <strong>18 convictions</strong> against Money Laundering.</li>
     <li> <strong>Illegal MVTs / Hundi Hawala:</strong> ECW has registered <strong>1819 cases</strong> against Illegal MVTs / Hundi Hawala operators, where <strong>5094.30 million</strong> amount has been seized. Moreover, ECW has obtained <strong>732 convictions</strong> against Hundi / Hawala operators.</li>
    </ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

@endsection



