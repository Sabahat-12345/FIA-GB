<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FIA Contact Info</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>

    .info-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 30px;
      text-align: center;
      transition: box-shadow 0.3s ease-in-out;
    }

    .info-card:hover {
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .info-card img {
      width: 90px;
      margin-bottom: 30px;
    }

    .info-title {
      font-weight: 600;
      font-size: 1.2rem;
    }

    .info-subtitle {
      font-weight: 500;
    }

    .info-text {
      font-size: 1rem;
      color: #333;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <div class="row justify-content-center align-items-stretch g-4">
    
    <!-- Phone Number Card -->
    <div class="col-md-6 col-lg-4 d-flex">
      <div class="info-card h-100 w-100">
        <a href="{{ route('complain') }}">
        <img src="{{asset('asset/cell_phone.png')}}" alt="Phone Icon" class="mt-4"  >
    </a>
        <div class="info-title mt-3">PHONE NUMBER</div>
        <div class="info-subtitle mt-2">FIA HeadQuarter:</div>
        <div class="info-text">051-111-345-786</div>
      </div>
    </div>

    <!-- Address Card -->
    <div class="col-md-6 col-lg-4  d-flex">
      <div class="info-card  h-100 w-100">
        <a href="{{ route('complain') }}">
        <img src="{{asset('asset/address.png')}}" alt="Address Icon">
    </a>
        <div class="info-title">ADDRESS</div>
        <div class="info-subtitle mt-2">FIA HeadQuarter:</div>
        <div class="info-text">
          FIA Headquarters,<br>
          NEAR GDA OFFICE RIVER ROAD CHINARBAGH<br>
         GILGIT, PK
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
