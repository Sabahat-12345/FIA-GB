@extends('layouts.app',['title' => 'Immigration Wing'])
@section('main')
<style>
    .card {
        height: 100%;
        transition: transform 0.3s;
    }
    /* .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    } */
    .link-card {
        text-decoration: none;
        color: #212529;
        display: block;
        height: 100%;
    }
    .link-card:hover {
        color: #0d6efd;
    }
    .section-header {
        text-align: center;
        margin: 2rem 0;
        font-weight: bold;
    }
    .card-header {
        background-color: #f8f9fa;
        font-weight: bold;
        text-align: center;
    }
    .card-link {
        background-color: #0d6efd;
        color: white;
        border-radius: 5px;
        padding: 5px 10px;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
    }
    .card-link:hover {
        background-color: #0b5ed7;
        color: white;
    }
    .list-item {
        margin-bottom: 8px;
    }
    .achievement-list li, .responsibility-list li {
        margin-bottom: 10px;
    }
</style>

<div class="container py-4">
    <!-- Header -->
    <header class="pb-3 mb-4 border-bottom">
        <h1 class="text-center fw-bold">IMMIGRATION WING</h1>
    </header>

    <!-- Main Description -->
    <div class="row mb-4">
        <div class="col-12">
            <p class="text-justify">
                FIA Immigration wing was established in 1975. It has since evolved into successful unit dealing with the challenges of rapidly changing international environment. The implementation of Integrated Border Management System (IBMS) and introduction of E - Visa has added to the efficiency of the system and better service delivery. This frontier is infrastructure basis. The area is divided by immigration, MRP/MRV linked with the National Database and Registration Authority (NADRA) in the computerization world. Additionally, to keep pace with the modern times is the main challenge. FIA Immigration is handling more than 22 million traffic of passengers annually at its 27 notified checkpoints/international borders. Immigration wing is playing an important role since 2018 in the enactment of Prevention of Trafficking in Persons Act 2018 and Prevention of Smuggling of Migrant Act 2018.
            </p>
            <p class="text-justify">
                The Immigration Directorate regulates the flow of international passengers and prevent instances of human smuggling, enforces ECL, PNIL & BL and deals with the issuance of Tourist and Business Visa on arrival through its 27 regulated entry exit points which includes 13 airports, 05 land routes, 04 seaports, 05 railway stations.
            </p>
        </div>
    </div>

    <!-- Three Column Section -->
    <div class="row mb-5 g-4">
        <!-- Our Achievements -->
        <div class="col-md-12 col-lg-4">
            <div class="card h-100 d-flex flex-column">
                <div class="card-header">OUR ACHIEVEMENTS</div>
                <div class="card-body d-flex flex-column">
                    <ul class="achievement-list ps-3">
                        <li class="list-item">Management of the movement on Western Border Crossing Points.</li>
                        <li class="list-item">Movement on Pak-Iran Border: at Taftan Border.</li>
                        <li class="list-item">Additional 07 Notified Border Crossing Points on Pakistan's Western Border.</li>
                        <li class="list-item">Immigration Process at Airports.</li>
                        <li class="list-item">Provision of food and clothing to deportees.</li>
                        <li class="list-item">Enforcement of FIA's Provisional National Identification List (PNIL).</li>
                    </ul>
                    <div class="text-center mt-auto">
                        <button class="card-link" data-bs-toggle="modal" data-bs-target="#borderAchievementModal">Click to read more</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Responsibilities -->
        <div class="col-md-12 col-lg-4">
            <div class="card h-100 d-flex flex-column">
                <div class="card-header">RESPONSIBILITIES OF FIA IMMIGRATION OFFICERS</div>
                <div class="card-body  d-flex flex-column">
                    <ul class="responsibility-list ps-3">
                        <li class="list-item">Examination of travel document & verifying and deporting international passengers.</li>
                        <li class="list-item">Prevention, Detection and Arrest of passengers travelling on fake/forged documents.</li>
                        <li class="list-item">Arrest of offenders with the assistance of police and other law enforcement agencies.</li>
                        <li class="list-item">Implementation of different formalities/terms and conditions stipulated by the government.</li>
                    </ul>
                    <div class="text-center mt-auto ">
                        <button class=" card-link" data-bs-toggle="modal" data-bs-target="#immigrationModal">Click to read more</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Targets -->
        <div class="col-md-12 col-lg-4">
            <div class="card h-100 d-flex flex-column">
                <div class="card-header">TARGETS IN FUTURE</div>
                <div class="card-body d-flex flex-column">
                    <p>Considering the better performance and facilitation by E Passport Link Office, FIA Immigration Wing has planned for opening of more link offices in following countries:</p>
                    <ol class="ps-3">
                        <li class="list-item">Turkey</li>
                        <li class="list-item">UAE</li>
                        <li class="list-item">Malaysia</li>
                        <li class="list-item">Spain</li>
                        <li class="list-item">United Kingdom</li>
                        <li class="list-item">Italy</li>
                    </ol>
                    <div class="text-center mt-auto">
                        <button class="card-link" data-bs-toggle="modal" data-bs-target="#futureTargetsModal">Click to read more</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Important Links Section -->
    <h2 class="section-header">IMPORTANT LINKS</h2>
    
    <div class="row mb-4 g-4">
        <!-- Link 1 -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <a href="#" class="link-card">
                        <h5 class="card-title text-center">HOW TO OBTAIN VISIT VISA THROUGH PAKISTAN MISSION ABROAD OR VISIT VISA ON ARRIVAL</h5>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Link 2 -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <a href="#" class="link-card">
                        <h5 class="card-title text-center">PROCEDURE TO BE ADOPTED BY PAKISTANI NATIONALS IN ABROAD IN CASE OF LOSS OF NICOP/POC</h5>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Link 3 -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <a href="#" class="link-card">
                        <h5 class="card-title text-center">PROCEDURE FOR REGISTRATION OF FOREIGNERS WITH POLICE STATIONS IN PAKISTAN</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4 g-4">
        <!-- Link 4 -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <a href="#" class="link-card">
                        <h5 class="card-title text-center">ONE WINDOW FACILITATION DESKS FOR OVERSEAS PAKISTANIS</h5>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Link 5 -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <a href="#" class="link-card">
                        <h5 class="card-title text-center">HOW TO OBTAIN BUSINESS VISA OF PAKISTAN</h5>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Link 6 -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <a href="#" class="link-card">
                        <h5 class="card-title text-center">VISA EXEMPTIONS</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Information -->
    <div class="row mb-4 g-4">
        <!-- Left Info -->
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="list-item">• List of country with home Pakistan has visa abolition agreement (17/07/2019)</li>
                        <li class="list-item">• Business Visa List (BVL)</li>
                        <li class="list-item">• How to obtain E-Visa of Pakistan</li>
                        <li class="list-item">• Detail of overseas attachments</li>
                        <li class="list-item">• Frequently Asked Questions</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Right Info -->
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="list-item">• Human Trafficking Introduction, relevant laws & emergency help No.s</li>
                        <li class="list-item">• Trafficking in Persons Report (TIP)</li>
                        <li class="list-item">• Trafficking in Persons Report 2018</li>
                        <li class="list-item">• Trafficking in Persons Report 2017</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Border Achievements Modal -->
<div class="modal fade" id="borderAchievementModal" tabindex="-1" aria-labelledby="borderAchievementModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title  fw-bold" id="borderAchievementModalLabel">Our Achievements</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <ul>
        <li>Management of the movement on Western Border Crossing Points.</li>
        <li>Movement on Pak-Iran Border at Taftan Border.</li>
        <li>Additional 07 Notified Border Crossing Points on Pakistan’s Western Border.</li>
        <li>Immigration Process at Airports.</li>
        <li>Provision of food and clothing to deportees.</li>
        <li>Enforcement of FIA’s Provisional National Identification List (PNIL).</li>
        <li>24/7 Operationalization of Torkham Border Terminal with Afghanistan Border.</li>
        <li>Provision of immigration services at Kartarpur Corridor for Sikh Yatrees.</li>
        <li>Establishment of additional 02 FIA Link Offices at Tehran, Iran and Athens, Greece.</li>
      </ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>


<!-- Immigration Responsibilities Modal -->
<div class="modal fade" id="immigrationModal" tabindex="-1" aria-labelledby="immigrationModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title fw-bold" id="immigrationModalLabel">Responsibilities of FIA Immigration Officers</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <ul>
        <li>Examination of travel documents of arriving and departing international passengers.</li>
        <li>Prevention, Detection and Arrest of passengers travelling on fake/forged documents.</li>
        <li>Arrest of offenders on the request of police and other law enforcement agencies.</li>
        <li>Implementation of different formalities/terms and conditions stipulated by the government in respect of different class of passengers including government servants, professionals, etc.</li>
        <li>Enforcement of Exit Control List.</li>
        <li>Handling all cases of Visa on Arrivals for Business and Tourist Category through its designated entry points across the country.</li>
      </ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!-- Future Targets Modal -->
<div class="modal fade" id="futureTargetsModal" tabindex="-1" aria-labelledby="futureTargetsModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title  fw-bold" id="futureTargetsModalLabel">Targets in Future</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <ul><li>Considering the better performance and facilitation by its Overseas Link Offices, FIA Immigration Wing has planned for opening of more link offices in the following countries:</li>
      <ul>
        <li>Turkey</li>
        <li>UAE</li>
        <li>Malaysia</li>
        <li>Spain</li>
        <li>United Kingdom</li>
        <li>Italy</li>
      </ul>
    </ul>
    <ul><li> With the inception of China Pakistan Economic Corridor (CPEC), the flow of passengers, traders, visitors, and tourists is expected to rise, resulting in a huge increase in the role and responsibilities of FIA Immigration.</li>
     
      <li>FIA Immigration Wing is committed to providing better service to passengers and stopping illegal migration. Stringent legislative, preventive, and punitive measures are in place. We are tightening the noose around the networks of human traffickers and smugglers, and we hope to achieve more success in the future through our better efforts and effective international coordination and cooperation.</li></ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

{{-- !-- Visit Visa Modal --> --}}
<div class="modal fade" id="visitVisaModal" tabindex="-1" aria-labelledby="visitVisaModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="visitVisaModalLabel">How to Obtain Visit Visa Through Pakistan Mission Abroad or Visit Visa on Arrival</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    <ul><li>   Pakistan Missions abroad are authorized to grant visit/tourist visa for three months validity and stay with double entries to foreigners of 190 countries of List-A. The said list can be seen <a href="https://www.interior.gov.pk/tourist-visa/" target="_blank">here</a>.</li>
 
    <li>Moreover, the nationals of 50 countries will be granted Visa-on-arrival for individual tourists/group tourists. The said list can be seen <a href="https://fpcci.org.pk/visa-on-arrival-50-countries/" target="_blank">here</a>.</li></ul>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>


<!-- NICOP/POC Loss Procedure Modal -->
<div class="modal fade" id="nicopPocModal" tabindex="-1" aria-labelledby="nicopPocModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="nicopPocModalLabel">Procedure for Loss of NICOP/POC</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <ul><li>   The overseas Pakistanis who have expired NICOP/POC or lost it, they can travel to Pakistan by getting renewal slip of the same from NADRA office.</li>
   
      <li>However, if they are not in possession of renewal slip, they may also travel to Pakistan where they can get landing permit free of cost by showing NICOP/POC (expired) or “B” form to FIA Immigration staff.</li>
      <li>    The landing permit will be for 72 hours only.</li>
  </ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!-- Foreigner Registration Modal -->
<div class="modal fade" id="foreignerRegModal" tabindex="-1" aria-labelledby="foreignerRegModalLabel" aria-hidden="true">
<div class="modal-dialog  modal-lg modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="foreignerRegModalLabel">Procedure for Registration of Foreigners</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <ul><li>The nationals of India and Somalia travelling to Pakistan are required to undergo Police Registration under Registration of Foreigners Rules, 1966. Please follow the following steps for a hassle-free trip:</li>
     
      <ul>
        <li>Provide additional information regarding your visit to the Immigration Officer on arrival and get a copy of Form-C.</li>
        <li>Register yourself with the foreigner’s registration branch of District Police Officer of Special Branch in the city/district of stay and get a Residential Permit for the period of stay.</li>
        <li>Before departure, do not forget to surrender the Residential Permit to the same authority and get a Travel Permit.</li>
      </ul>
    </ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!-- One Window Facilitation Desk Modal -->
<div class="modal fade" id="owfdModal" tabindex="-1" aria-labelledby="owfdModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="owfdModalLabel">One Window Facilitation Desks for Overseas Pakistanis</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <ul><li>In compliance with the Wafaqi Mohatasib's order, One Window Facilitation Desks (OWFD) for the resolution of public grievances have been established at all International Airports including Islamabad, Karachi, Lahore, Quetta, and Peshawar.</li>
        <li>Focal persons deputed by FIA are always available at these desks along with other agencies like CAA, ASF, ANF, Immigration & Passport to facilitate passengers.</li>
  <li>Contact numbers of the focal persons are also available on the website.</li>
<li>Complaints against staff are received at these desks, and international passengers are facilitated in immigration matters round the clock. Any issues are resolved on the spot by the concerned staff.</li>

      </ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!-- Business Visa Modal -->
<div class="modal fade" id="businessVisaModal" tabindex="-1" aria-labelledby="businessVisaModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="businessVisaModalLabel">How to Obtain Business Visa of Pakistan</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <ul><li>Missions are allowed to grant a 5-year multiple-entry business visa within 24 hours to the businessmen of 96 Business Visa List (BVL) countries (<a href="https://visa.nadra.gov.pk/business-visa-list-bvl/" target="_blank">list is available here</a>).</li><li>This is subject to the production of any of the following documents:</li>
   
      <ul>
        <li>Recommendation letter from Chamber of Commerce & Industry of respective foreign country.</li>
        <li>Invitation letter from a business organization duly recommended by the concerned Trade Organization.</li>
        <li>Recommendation letter by Honorary Investment Counselor of BOI or Commercial Attaché.</li>
      </ul>
    </ul> 
     <ul><li>Visa on Arrival (VOA) for 30 days is granted to businessmen of 96 BVL countries upon presentation of the above documents.</li><li>Multiple business visa for 5 years shall be granted within 24 hours, subject to provision of requisite documents.</li></ul>
 
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!-- VISA Exemptions Modal -->
<div class="modal fade" id="visaExemptionsModal" tabindex="-1" aria-labelledby="visaExemptionsModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="visaExemptionsModalLabel">VISA EXEMPTIONS</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <ul><li><strong>Diplomatic/Official Passport holders</strong> and <strong>SAARC Visa Holders</strong> from the specified countries are exempted from Police Registration.</li>
        <li>   Nationals of the specified countries holding <strong>Work Visas in managerial categories</strong> are also exempted from Police Registration, <strong>except</strong> for <strong>Indians</strong> and <strong>foreigners of Indian origin</strong>.</li>
   </ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>


<script>
document.querySelector('.link-card').addEventListener('click', function(e) {
  e.preventDefault();
  var myModal = new bootstrap.Modal(document.getElementById('visitVisaModal'));
  myModal.show();
});
</script>

<script>
    // Trigger modal for NICOP/POC Loss Procedure
    document.querySelectorAll('.link-card').forEach(function(link) {
      if (link.textContent.includes("PROCEDURE TO BE ADOPTED BY PAKISTANI NATIONALS IN ABROAD IN CASE OF LOSS OF NICOP/POC")) {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          var modal = new bootstrap.Modal(document.getElementById('nicopPocModal'));
          modal.show();
        });
      }
    });
  </script>

<script>
// Trigger modal for Foreigner Registration Procedure
document.querySelectorAll('.link-card').forEach(function(link) {
  if (link.textContent.includes("PROCEDURE FOR REGISTRATION OF FOREIGNERS WITH POLICE STATIONS IN PAKISTAN")) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      var modal = new bootstrap.Modal(document.getElementById('foreignerRegModal'));
      modal.show();
    });
  }
});
</script>


<script>
// Trigger modal for One Window Facilitation Desks
document.querySelectorAll('.link-card').forEach(function(link) {
  if (link.textContent.includes("ONE WINDOW FACILITATION DESKS FOR OVERSEAS PAKISTANIS")) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      var modal = new bootstrap.Modal(document.getElementById('owfdModal'));
      modal.show();
    });
  }
});
</script>

<script>
// Trigger modal for Business Visa
document.querySelectorAll('.link-card').forEach(function(link) {
  if (link.textContent.includes("HOW TO OBTAIN BUSINESS VISA OF PAKISTAN")) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      var modal = new bootstrap.Modal(document.getElementById('businessVisaModal'));
      modal.show();
    });
  }
});
</script>

<script>
// Trigger modal for VISA EXEMPTIONS
document.querySelectorAll('.link-card').forEach(function(link) {
  if (link.textContent.includes("VISA EXEMPTIONS")) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      var modal = new bootstrap.Modal(document.getElementById('visaExemptionsModal'));
      modal.show();
    });
  }
});
</script>
@endsection
   

    
 