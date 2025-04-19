@extends('layouts.app',['title' => 'INTERPOL'])
@section('main')
<style>
    .notice-card {
        transition: transform 0.3s;
        height: 100%;
    }
    .notice-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .notice-img {
        max-width: 120px;
        margin: 0 auto;
        display: block;
    }
    .card-footer {
        background-color: transparent;
        border-top: none;
    }
    .section-title {
        text-align: center;
        margin: 40px 0 30px;
        font-weight: bold;
    }
    .info-card {
        height: 100%;
    }
    .org-chart img {
        max-width: 100%;
        height: auto;
    }
    .btn-read-more {
        background-color: #1a3668;
        color: white;
    }
    .btn-read-more:hover {
        background-color: #0d1d3a;
        color: white;
    }
    .org-chart a:hover {
    border: 2px solid #2c2e83;
    padding: 5px;
    border-radius: 10px;
    display: inline-block;
    transition: 0.3s ease-in-out;
    box-shadow: 0 0 10px rgba(44, 46, 131, 0.5);
}
.btn-read-more{
      border-radius: 5px;
    padding: 5px 10px;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
}
</style>

<section>
<div class="container mt-4">
    <!-- Header -->
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="fw-bold">INTERPOL</h1>
        </div>
    </div>

    <!-- History Section -->
    <div class="row mb-5">
        <div class="col-md-8">
            <p>The idea of INTERPOL was born in 1914 at the first International Criminal Police Congress, held in Monaco. This meeting brought together police officers and judicial representatives from 24 countries to find ways to cooperate on solving crimes, harmonizing arrest procedures across borders, and centralizing criminal records.</p>
            
            <p>Over the past 100 years, cooperation among police forces internationally has become firmly grounded in practice as crimes and criminals have moved increasingly beyond national borders.</p>
            
            <p>Officially created in 1923, INTERPOL has witnessed significant changes over the years, seen its membership grow steadily over the years. Today, 194 member countries work together on a daily basis, using the databases, tools and secure communications systems that the Organization provides.</p>
            
            <p>While its vision and mission remain in line with the original goals of the meeting in 1914, the Organization continues to evolve in response to the needs of its member countries, the emergence of new crime trends, and innovations in technology.</p>
        </div>
        <div class="col-md-4">
            <div class="card h-100  d-flex flex-column">
                <div class="card-header bg-white border-bottom-0">
                    <h5 class="card-title text-center">OUR ACHIEVEMENTS</h5>
                </div>
                <div class="card-body d-flex flex-column">
                    <ul>
                        <li>Red Notices issued Up to 2019=463 and Extraditions=70</li>
                        <li>Red Notices issued in 2018 =129 and Extraditions=35</li>
                        <li>Red Notices issued in 2019 =142 and Extraditions=86</li>
                    </ul>
                    <div class="text-center mt-auto">
                        <button class=" btn-read-more" data-bs-toggle="modal" data-bs-target="#achievementsModal">
                            Click to read more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision, Hierarchy, Mission Section -->
    <div class="row mb-5">
        <div class="col-md-12 col-lg-4 mb-4">
            <div class="card info-card">
                <div class="card-header text-center bg-white">
                    <h4>VISION</h4>
                </div>
                <div class="card-body">
                    <p>Our vision is that of a world where each and every law enforcement professional will be able, through INTERPOL, to securely communicate, share and access vital police information when and wherever needed, ensuring the safety of the world's citizens. We constantly provide and promote innovative and cutting-edge solutions to global challenges in policing and security.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-12 col-lg-4 mb-4">
            <div class="card info-card">
                <div class="card-header text-center bg-white">
                    <h4>HIERARCHY</h4>
                </div>
                <div class="card-body">
                    <p>Click below image to see full organogram of Interpol</p>
                    <div class="org-chart text-center">
                        <a href="{{asset('asset/interpol_organo.png')}}" target="_blank">
                        <img src="{{asset('asset/interpol_organo.png')}}" alt="Interpol Hierarchy Chart" class="img-fluid">
                    </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-12 col-lg-4 mb-4">
            <div class="card info-card">
                <div class="card-header text-center bg-white">
                    <h4>MISSION</h4>
                </div>
                <div class="card-body">
                    <p>We facilitate the widest possible mutual assistance between all criminal law enforcement authorities. We ensure that police can communicate securely with each other around the world. We enable global access to police data and information. We provide operational support on specific priority crime areas. We foster continuous improvement in the capacity of police to prevent and fight crime and the development of knowledge and skills necessary for effective international policing. We strive for innovation at all times, in the areas of police and security matters.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Notices Section -->
    <div class="border border-2 rounded-lg p-5 pt-0 m-4  ">
    <h2 class="section-title  ">INTERPOL NOTICES & PROCEDURES</h2>
    
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5">
        <!-- Red Notice -->
        <div class="col">
            <div class="card notice-card">
                <div class="card-body text-center">
                    <img src="{{asset('asset/red.png')}}" alt="Red Notice" class="notice-img mb-3" style="background-color: #d9221c;">
                    <h5 class="card-title">RED NOTICE</h5>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class=" btn-read-more" data-bs-toggle="modal" data-bs-target="#redNoticeModal">
                        Click to read more
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Yellow Notice -->
        <div class="col">
            <div class="card notice-card">
                <div class="card-body text-center">
                    <img src="{{asset('asset/yellow.jpg')}}" alt="Yellow Notice" class="notice-img mb-3" style="background-color: #ffd700;">
                    <h5 class="card-title">YELLOW NOTICE</h5>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class=" btn-read-more" data-bs-toggle="modal" data-bs-target="#yellowNoticeModal">
                        Click to read more
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Blue Notice -->
        <div class="col">
            <div class="card notice-card">
                <div class="card-body text-center">
                    <img src="{{asset('asset/blue.png')}}" alt="Blue Notice" class="notice-img mb-3" style="background-color: #0078d7;">
                    <h5 class="card-title">BLUE NOTICE</h5>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class=" btn-read-more" data-bs-toggle="modal" data-bs-target="#blueNoticeModal">
                        Click to read more
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Green Notice -->
        <div class="col">
            <div class="card notice-card">
                <div class="card-body text-center">
                    <img src="{{asset('asset/green.png')}}" alt="Green Notice" class="notice-img mb-3" style="background-color: #00a651;">
                    <h5 class="card-title">GREEN NOTICE</h5>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class=" btn-read-more" data-bs-toggle="modal" data-bs-target="#greenNoticeModal">
                        Click to read more
                    </button>
                </div>
              
            </div>
        </div>
        
        <!-- Black Notice -->
        <div class="col">
            <div class="card notice-card">
                <div class="card-body text-center">
                    <img src="{{asset('asset/black.png')}}" alt="Black Notice" class="notice-img mb-3" style="background-color: #000000;">
                    <h5 class="card-title">BLACK NOTICE</h5>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class=" btn-read-more" data-bs-toggle="modal" data-bs-target="#blackNoticeModal">
                        Click to read more
                    </button>
                </div>
            </div>
        </div>
        
        <!-- UN Special Notice -->
        <div class="col">
            <div class="card notice-card">
                <div class="card-body text-center">
                    <img src="{{asset('asset/light_b.png')}}" alt="UN Special Notice" class="notice-img mb-3" style="background-color: #009edb;">
                    <h5 class="card-title">UN SPECIAL NOTICE</h5>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class=" btn-read-more" data-bs-toggle="modal" data-bs-target="#unSpecialNoticeModal">
                        Click to read more
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Orange Notice -->
        <div class="col">
            <div class="card notice-card">
                <div class="card-body text-center">
                    <img src="{{asset('asset/orange.png')}}" alt="Orange Notice" class="notice-img mb-3" style="background-color: #ff7900;">
                    <h5 class="card-title">ORANGE NOTICE</h5>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class=" btn-read-more" data-bs-toggle="modal" data-bs-target="#orangeNoticeModal">
                        Click to read more
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Purple Notice -->
        <div class="col">
            <div class="card notice-card">
                <div class="card-body text-center">
                    <img src="{{asset('asset/purple.png')}}" alt="Purple Notice" class="notice-img mb-3" style="background-color: #800080;">
                    <h5 class="card-title">PURPLE NOTICE</h5>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class=" btn-read-more" data-bs-toggle="modal" data-bs-target="#purpleNoticeModal">
                        Click to read more
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--Red  Modal -->
<div class="modal fade" id="redNoticeModal" tabindex="-1" aria-labelledby="redNoticeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title fw-bold" id="redNoticeModalLabel">Red Notice</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h6><strong>PURPOSE</strong></h6>
      <ul><li>The purpose of INTERPOL Red Notice is to seek the location of a wanted person and his/her detention, arrest or restriction of movement for the purpose of extradition, surrender, or similar lawful action.</li></ul>
 

      <h6><strong>REQUIREMENTS</strong></h6>
      <ul>
        <li>Red Notice Application Form including date of birth on the format of INTERPOL (dd/mm/yyyy) duly filled in by the DPO</li>
        <li>Copy of FIR along with English Translation</li>
        <li>Statements of Witnesses U/s 161 Cr. PC</li>
        <li>Summary/History of the case in English, Date and facts of the case in (dd/mm/yyyy) format</li>
        <li>Warrant of arrest u/s 204 Cr. PC issued by the Court</li>
        <li>Proclamation order against accused u/s 87, 204 Cr. PC by the Court</li>
        <li>Perpetual Warrant of arrest u/s 512 Cr. PC by the Court</li>
        <li>PISCES/IBMS verification/Travel History</li>
        <li>Photograph & Travel Documents of accused</li>
        <li>VERISYS information (CNIC)/Copy of CNIC or CNIC number</li>
        <li>Regions/Countries likely to be visited</li>
      </ul>

      <h6><strong>ROUTE FOR REQUEST</strong></h6>
      <ul><li>The District Police Officer concerned or Officer In-Charge of the same level of the requesting Law Enforcement Agencies (LEAs) forwards the request for issuance of the INTERPOL Notice(s) to the Inspector General of Police/PPO, who forwards the same to the Home Department (the Provincial Government) for onward submission to the Ministry of Interior, Islamabad (approving/ competent authority). After approval, the Ministry of Interior refers the same to the Director General FIA/ Head of NCB-INTERPOL, Islamabad.</li></ul>
  
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!-- Yellow Modal -->
<div class="modal fade" id="yellowNoticeModal" tabindex="-1" aria-labelledby="yellowNoticeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title fw-bold" id="yellowNoticeModalLabel">Yellow Notice</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h6><strong>PURPOSE</strong></h6>
      <ul><li>   The purpose of INTERPOL Yellow Notice is to locate a missing person or to identify a person unable to identify himself/herself.</li></ul>


      <h6><strong>REQUIREMENTS</strong></h6>
      <ul>
        <li>Yellow Notice Application Form including date of birth on the format of INTERPOL (dd/mm/yyyy) duly filled in by the DPO</li>
        <li>Copy of FIR along with English Translation</li>
        <li>Summary/History of the case in English, Date and facts of the case in (dd/mm/yyyy) format</li>
        <li>Photograph & Travel Documents of accused</li>
        <li>Distinguishing Marks, Teeth</li>
        <li>Regions/Countries likely to be visited</li>
        <li>VERISYS information (CNIC)/Copy of CNIC or CNIC number</li>
      </ul>

      <h6><strong>ROUTE FOR REQUEST</strong></h6>
      <ul><li>The District Police Officer concerned or Officer In-Charge of the same level of the requesting Law Enforcement Agencies (LEAs) forwards the request for issuance of the INTERPOL Notice(s) to the Inspector General of Police/PPO, who forwards the same to the Home Department (the Provincial Government) for onward submission to the Ministry of Interior, Islamabad (approving/ competent authority). After approval, the Ministry of Interior refers the same to the Director General FIA/ Head of NCB-INTERPOL, Islamabad.</li></ul>
   
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>



<!-- Blue Modal -->
<div class="modal fade" id="blueNoticeModal" tabindex="-1" aria-labelledby="blueNoticeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title fw-bold" id="blueNoticeModalLabel">Blue Notice</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h6><strong>PURPOSE</strong></h6>
      <ul><li>The purpose of INTERPOL Blue Notice is to obtain information/locate/identify a person of interest in a criminal investigation.</li></ul>
    

      <h6><strong>REQUIREMENTS</strong></h6>
      <ul>
        <li>Blue Notice Application Form including date of birth on the format of INTERPOL (dd/mm/yyyy) duly filled in by the DPO</li>
        <li>Copy of FIR along with English Translation</li>
        <li>Statements of Witnesses U/s 161 Cr. PC</li>
        <li>Summary/History of the case in English, Date and facts of the case in (dd/mm/yyyy) format</li>
        <li>Proclamation order against accused u/s 87, 204 Cr. PC by the Court</li>
        <li>Regions/Countries likely to be visited</li>
        <li>PISCES/IBMS verification/Travel History</li>
        <li>Photograph & Travel Documents of accused</li>
        <li>VERISYS information (CNIC)/Copy of CNIC or CNIC number</li>
      </ul>

      <h6><strong>ROUTE FOR REQUEST</strong></h6>
      <ul><li>The District Police Officer concerned or Officer In-Charge of the same level of the requesting Law Enforcement Agencies (LEAs) forwards the request for issuance of the INTERPOL Notice(s) to the Inspector General of Police/PPO, who forwards the same to the Home Department (the Provincial Government) for onward submission to the Ministry of Interior, Islamabad (approving/ competent authority). After approval, the Ministry of Interior refers the same to the Director General FIA/ Head of NCB-INTERPOL, Islamabad.</li></ul>
    
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!--Green Modal -->
<div class="modal fade" id="greenNoticeModal" tabindex="-1" aria-labelledby="greenNoticeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title fw-bold" id="greenNoticeModalLabel">Green Notice</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h6><strong>PURPOSE</strong></h6>
      <ul><li>The purpose of INTERPOL Green Notice is to warn about a person's criminal activities.</li></ul>
    

      <h6><strong>REQUIREMENTS</strong></h6>
      <ul>
        <li>Green Notice Application Form including date of birth on the format of INTERPOL (dd/mm/yyyy) duly filled in by the DPO</li>
        <li>Copy of FIR along with English Translation</li>
        <li>Statements of Witnesses U/s 161 Cr. PC</li>
        <li>Summary/History of the case in English, Date and facts of the case in (dd/mm/yyyy) format</li>
        <li>Accused’s Criminal history/background</li>
        <li>PISCES/IBMS verification/Travel History</li>
        <li>Photograph & Travel Documents of accused</li>
        <li>VERISYS information (CNIC)/Copy of CNIC or CNIC number</li>
      </ul>

      <h6><strong>ROUTE FOR REQUEST</strong></h6>
      <ul><li>The District Police Officer concerned or Officer In-Charge of the same level of the requesting Law Enforcement Agencies (LEAs) forwards the request for issuance of the INTERPOL Notice(s) to the Inspector General of Police/PPO, who forwards the same to the Home Department (the Provincial Government) for onward submission to the Ministry of Interior, Islamabad (approving/ competent authority). After approval, the Ministry of Interior refers the same to the Director General FIA/ Head of NCB-INTERPOL, Islamabad.</li></ul>
   
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!--Black Modal -->
<div class="modal fade" id="blackNoticeModal" tabindex="-1" aria-labelledby="blackNoticeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title fw-bold" id="blackNoticeModalLabel">Black Notice</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h6><strong>PURPOSE</strong></h6>
      <ul><li>The purpose of INTERPOL Black Notice is to identify dead bodies.</li></ul>
    

      <h6><strong>REQUIREMENTS</strong></h6>
      <ul>
        <li>Black Notice Application Form including date of birth on the format of INTERPOL (dd/mm/yyyy) duly filled in by the DPO</li>
        <li>Copy of FIR along with English Translation</li>
        <li>Summary/History of the case in English, Date and facts of the case in (dd/mm/yyyy) format</li>
        <li>Circumstances of discovering the Body</li>
        <li>Estimated date of death</li>
        <li>Cause of Death</li>
        <li>Identity Particulars</li>
        <li>Gender, Age, Photograph, Distinguishing Marks, Teeth</li>
        <li>Country of origin, Nationality</li>
        <li>Additional Information</li>
      </ul>

      <h6><strong>ROUTE FOR REQUEST</strong></h6>
      <ul><li>The District Police Officer concerned or Officer In-Charge of the same level of the requesting Law Enforcement Agencies (LEAs) forwards the request for issuance of the INTERPOL Notice(s) to the Inspector General of Police/PPO, who forwards the same to the Home Department (the Provincial Government) for onward submission to the Ministry of Interior, Islamabad (approving/ competent authority). After approval, the Ministry of Interior refers the same to the Director General FIA/ Head of NCB-INTERPOL, Islamabad.</li></ul>
    
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>


<!--Un  Modal -->
<div class="modal fade" id="unSpecialNoticeModal" tabindex="-1" aria-labelledby="unSpecialNoticeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title fw-bold" id="unSpecialNoticeModalLabel">INTERPOL UN Special Notice</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h6><strong>PURPOSE</strong></h6>
    <ul><li>   INTERPOL UN Special Notice is to inform that an individual or an entity is subject to UN Security Council Sanctions and it is issued by the INTERPOL Secretariat General (IPSG), Lyon-France on the request of United Nations.</li></ul>
     

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!--Orange  Modal -->
<div class="modal fade" id="orangeNoticeModal" tabindex="-1" aria-labelledby="orangeNoticeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title fw-bold" id="orangeNoticeModalLabel">INTERPOL Orange Notice</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h6><strong>PURPOSE</strong></h6>
      <ul><li>    INTERPOL Orange Notice is published to warn of an event, a person, an object, a process or a modus operandi representing an imminent threat to public safety and likely to cause serious damage to property or injury to persons.</li></ul>
     
    
     
      <h6 class="mt-4"><strong>ROUTE FOR REQUEST</strong></h6>
     <ul><li>   The District Police Officer concerned or Officer In-Charge of the same level of the requesting Law Enforcement Agencies (LEAs) forwards the request for issuance of the INTERPOL Notice(s) to the Inspector General of Police/PPO, who forwards the same to the Home Department (the Provincial Government) for onward submission to the Ministry of Interior, Islamabad (approving/ competent authority). After approval, the Ministry of Interior refers the same to the Director General FIA/ Head of NCB-INTERPOL, Islamabad.</li></ul>
     
  
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!--Purple Modal -->
<div class="modal fade" id="purpleNoticeModal" tabindex="-1" aria-labelledby="purpleNoticeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title fw-bold" id="purpleNoticeModalLabel">INTERPOL Purple Notice</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h6><strong>PURPOSE</strong></h6>
     <ul><li>   The purpose of INTERPOL Purple Notice is to: <br>
    
        (a) Warn about modus operandi, objects, devices or concealment methods used by offenders, and/or <br>
        (b) Request information on offences to resolve them or assist in their investigation.</li></ul>
     
      </p>
      <h6 class="mt-4"><strong>ROUTE FOR REQUEST</strong></h6>
      <ul><li>     The District Police Officer concerned or Officer In-Charge of the same level of the requesting Law Enforcement Agencies (LEAs) forwards the request for issuance of the INTERPOL Notice(s) to the Inspector General of Police/PPO, who forwards the same to the Home Department (the Provincial Government) for onward submission to the Ministry of Interior, Islamabad (approving/ competent authority). After approval, the Ministry of Interior refers the same to the Director General FIA/ Head of NCB-INTERPOL, Islamabad.</li></ul>
 
   
    
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!-- Modal for Achievements -->
<div class="modal fade" id="achievementsModal" tabindex="-1" aria-labelledby="achievementsModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fw-bold" id="achievementsModalLabel">Our Achievements</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ul><li>Red Notices issued Up to 2015 = 463 and Extraditions = 70</li>
        <li>Red Notices issued in 2016 = 129 and Extraditions = 35</li>
         <li>Red Notices issued in 2019 = 142 and Extraditions = 96</li>
         <li>Red Notices issued in 2017 = 167 and Extraditions = 50</li>
         <li>Red Notices issued in 2018 = 243 and Extraditions = 85</li>
         <li>Red Notices issued in 2020 = 147 and Extraditions = 57</li>
         <li>Red Notices issued in 2021 = 31 and Extraditions = 31</li>
      
          <li>Total number of Red Notices issued Till 30th June, 2021 = 1,322 and total Extraditions = 424</li></ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
@endsection


   