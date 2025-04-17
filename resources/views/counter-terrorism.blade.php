<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Counter Terrorism Wing</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .main-title {
      font-weight: bold;
      text-align: center;
      margin: 30px 0;
    }
    .card {
      height: 100%;
      border-radius: 10px;
      transition: transform 0.3s;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .card-title {
      text-align: center;
      font-weight: bold;
    }
    .red-button {
      background-color: #ca3333;
      color: white;
      border: none;
      border-radius: 25px;
      padding: 8px 16px;
      text-align: center;
      display: inline-block;
      font-size: 14px;
      margin: 10px auto;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .red-button:hover {
      background-color: #b52c2c;
    }
    .blue-button {
      background-color: #303080;
      color: white;
      border: none;
      border-radius: 25px;
      padding: 8px 16px;
      text-align: center;
      display: inline-block;
      font-size: 14px;
      margin: 4px auto;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .blue-button:hover {
      background-color: #252570;
    }
  </style>
</head>
<body>
  <div class="container py-4">
    <h1 class="main-title">COUNTER TERRORISM WING</h1>

    <!-- Side by Side Section -->
    <div class="row row-cols-1 row-cols-lg-2 g-4 mb-4">
      <!-- Left Side: Introduction -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">COUNTER TERRORISM WING</h5>
            <p>
              Counter Terrorism Wing (CTW) established in May 2003. CTW is working hard with the primary objective to 
              strengthen the internal as well as external National Security environment of the country.
            </p>
            <p>
              <strong>Vision:</strong> To become a center of excellence for specialized counter terrorist investigations, to combat espionage, terrorist 
              financing, cyber terrorism as well as blasphemy throughout Pakistan.
            </p>
            <div class="text-center">
            <a href="{{asset('pdfs/red-book-2023.pdf')}}" target="_blank">
  <button class="red-button">Red Book - 2023 of Most Wanted High Profile Terrorists</button>
</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Side: Achievements -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">OUR ACHIEVEMENTS</h5>
            <ul>
              <li>Dealing with many High Profile Cases</li>
              <li>RAW Sleeper Cell busted in Karachi</li>
              <li>06 properties of terrorist were auctioned of amounting Rs. 4.6 million</li>
            </ul>
            <div class="text-center">
              <button type="button" class="btn btn-primary blue-button" data-bs-toggle="modal" data-bs-target="#achievementsModal">
                Click to read more
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- More Sections (Same as before) -->
       <!-- Three Information Cards Row -->
       <div class="container">
        <!-- First Row - 3 cards -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
          <!-- Mandate Card -->
          <div class="col">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">MANDATE</h5>
                <ul>
                  <li>To deal in high profile cases entrusted by Government of Pakistan with Transnational element</li>
                  <li>Terrorism and Terrorist Financing</li>
                  <li>Cyber Terrorism</li>
                  <li>Blasphemy</li>
                  <li>Official Secret Act 1923 (Espionage)</li>
                </ul>
              </div>
            </div>
          </div>
          
          <!-- Operational Units Card -->
          <div class="col">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">OPERATIONAL UNITS</h5>
                <ul>
                  <li>Investigation / Operation Unit.</li>
                  <li>Financial Investigation Unit.</li>
                  <li>Cyber Terrorism Investigation Unit.</li>
                  <li>Explosive Analysis Unit.</li>
                  <li>Field Units:<br>
                      Islamabad, Karachi, Lahore, Quetta and Peshawar</li>
                </ul>
              </div>
            </div>
          </div>
          
          <!-- Investigation/Operation Unit Card -->
          <div class="col col-md-12">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">INVESTIGATION/ OPERATION UNIT</h5>
                <ul>
                  <li>Headed by Addl. Director / Deputy Director</li>
                  <li>Supervision of Enquiries / Cases</li>
                  <li>Police Station deals with all schedule offences of FIA</li>
                  <li>Regular Composite Police Station</li>
                  <li>Seek assistance from other units for enquiries / investigations.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      
        <!-- Second Row - 2 cards -->
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <!-- Financial Investigation Unit Card -->
          <div class="col ">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">FINANCIAL INVESTIGATION UNIT</h5>
                <ul>
                  <li>Mandate to prevent & combat financial and economic crime throughout Pakistan</li>
                  <li>Member of the all National Task Forces</li>
                  <li>Member of AML/CFT desk, collects response/data from operational units/zones on TF/ML/Hawala and shares with FATF Secretariat.</li>
                  <li>Part of working group which developed National Risk Assessment.</li>
                </ul>
              </div>
            </div>
          </div>
          
          <!-- Cyber Terrorism Investigation Unit Card -->
          <div class="col">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">CYBER TERRORISM INVESTIGATION UNIT (CTIU)</h5>
                <ul>
                  <li>Headed by Deputy Director Forensic.</li>
                  <li>Supervise enquiries / investigations related to Cyber Terrorism.</li>
                  <li>Supervision of Digital Forensic Laboratory.</li>
                  <li>Maintaining National Criminal Database (NCDB).</li>
                  <li>Compiling and Publishing RED BOOK of MWTs.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <!-- Two Information Cards Row -->
   
    <!-- You can keep the remaining sections here (Mandate, Units, etc.) -->

    <!-- Achievements Modal -->
    <div class="modal fade" id="achievementsModal" tabindex="-1" aria-labelledby="achievementsModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title fw-bold text-primary" id="achievementsModalLabel">OUR ACHIEVEMENTS</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Dealing with many High Profile Cases</li>
              <li class="list-group-item">RAW Sleeper Cell busted in Karachi</li>
              <li class="list-group-item">06 properties of terrorist were auctioned amounting to Rs. 4.6 million</li>
              <li class="list-group-item">48 properties and Rs. 30 million were seized in high profile money laundering cases</li>
              <li class="list-group-item">03 accused were sentenced for life imprisonment in Dr. Imran Farooq Murder Case</li>
              <li class="list-group-item">Report has been submitted in Ms. Perveen Rehman Murder Case</li>
              <li class="list-group-item">Four sting operations conducted by CTW in the matters pertaining to espionage</li>
              <li class="list-group-item">Apprehended 03 accused involved in Blasphemy</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
