<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Key Functional Units</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
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
</head>
<body>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
