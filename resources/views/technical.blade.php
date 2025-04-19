@extends('layouts.app',['title' => 'Technical Wing - FIA'])
@section('main')
<style>
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
    

    .card {
      border: 1px solid #ddd;
      border-radius: 12px;
      padding: 20px;
      height: 100%;
    }

    h2, h4 {
      font-weight: bold;
    }
  </style>

  
<div class="container py-5 text-center">
    <!-- Heading -->
    <h2 class="mb-3">TECHNICAL WING</h2>
    <p class="mb-5">
      FIA Technical Wing was Established in 1975. To Provide forensic/scientific assistance to field units of FIA throughout Pakistan, Federal Courts in the field of Questioned Documents and Fingerprints. The experts of this wing rendered expert opinions under Article 59 of Qanoon-e-Shahadat 1984.
    </p>

    <!-- Sub Heading -->
    <h4 class="mb-4">PRIMARY FUNCTIONS</h4>

    <!-- Cards Row -->
    <div class="row g-4">
      <!-- Our Achievements -->
      <div class="col-lg-4 col-md-6">
        <div class="card text-start">
          <h5 class="fw-bold">OUR ACHIEVEMENTS</h5>
          <ul>
            <li>Till February 2019 the condition of the Laboratory was not satisfactory. Neither equipped with latest equipments nor had proper space.</li>
            <li>In March 2019, the Laboratory was renovated and equipped with gadgets with the assistance of British High Commission, Islamabad.</li>
            <li>Equipments provided were as under:-</li>
          </ul>
          <div class="text-center mt-auto">
            <button class="btn-custom mt-3" data-bs-toggle="modal" data-bs-target="#achievementModal">Click to read more</button>
          </div>
        </div>
      </div>

      <!-- Questioned Documents -->
      <div class="col-lg-4 col-md-6">
        <div class="card text-start">
          <h5 class="fw-bold">QUESTIONED DOCUMENTS</h5>
          <ul>
            <li>Determination of genuineness /authorship of signatures and writings.</li>
            <li>Determination of the presence of erasers, alterations, additions, substitutions in writing and figures whether hand written, typed or printed.</li>
          </ul>
          <div class="text-center mt-auto">
            <button class="btn-custom mt-3" data-bs-toggle="modal" data-bs-target="#questionedModal">Click to read more</button>

          </div>
        </div>
      </div>

      <!-- Fingerprint Section -->
      <div class="col-lg-4 col-md-12">
        <div class="card text-start">
          <h5 class="fw-bold">FINGERPRINT SECTION</h5>
          <ul>
            <li>To examine disputed thumb impressions.</li>
            <li>To train the Fingerprint proficient.</li>
            <li>Verification of fingerprints of intending emigrants.</li>
            <li>To check the criminal history of persons applying for PSV driving licenses.</li>
          </ul>
          <div class="text-center mt-auto">
            <button class="btn-custom mt-3" data-bs-toggle="modal" data-bs-target="#fingerprintModal">Click to read more</button>

          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Achievement Modal -->
  <div class="modal fade" id="achievementModal" tabindex="-1" aria-labelledby="achievementModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="achievementModalLabel">Our Achievements</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Your modal content here -->
          <li>Till February 2019 the condition of the Laboratory was not satisfactory. Neither equipped with latest equipment nor had proper space.</li>
        <li>In March 2019, the Laboratory was renovated and equipped with gadgets with the assistance of the British High Commission, Islamabad.</li>
        <li>Equipments provided were as under:-</li>
          </ul>
          <ul>
            <li>VSC 40/HD: To examine the security features, erasing, alteration in the documents.</li>
            <li>ESDA-2/B: To develop the indent writings on the documents.</li>
          </ul>
          <ul><li>In the month of September 2020, the FIA Technical Wing succeeded in replacing the old manual Identity Cards (containing no security features) with new computerized digital cards containing sufficient security features.</li>
         <li>In the recent past, this wing has provided forensic assistance in the JIT cases pertaining to anonymous accounts and visa scams expeditiously. The process of forensic assistance is still in progress, and it is expected to go a long way when the rush work/Technical Opinion grows once the COVID situation is under control.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Questioned Documents Modal -->
<div class="modal fade" id="questionedModal" tabindex="-1" aria-labelledby="questionedModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="questionedModalLabel">Questioned Documents Section</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Determination of genuineness / authorship of signatures and writings.</li>
            <li>Determination of the presence of erasers, alterations, additions, substitutions in writing and figures whether handwritten, typed or printed.</li>
            <li>Determination of false addition, replacement, or removal in leaves of books, registers, files etc.</li>
            <li>Determination of removal, replacement, affixation etc. of revenue stamps on various types of documents.</li>
            <li>Determination of counterfeit documents, currency notes, prize bonds, financial instruments etc.</li>
            <li>Determination of alterations in passports, visas etc.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Fingerprint Section Modal -->
<div class="modal fade" id="fingerprintModal" tabindex="-1" aria-labelledby="fingerprintModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="fingerprintModalLabel">Fingerprint Section</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>To examine disputed thumb impressions.</li>
            <li>To train the Fingerprint proficient.</li>
            <li>Verification of fingerprints of intending emigrants.</li>
            <li>To check the criminal history of persons applying for PSV driving licenses.</li>
            <li>Search slip received from Interpol to check the criminal data of the persons.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
  


  
>
