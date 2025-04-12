<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FIA Section</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .fia-bar {
      background-color: #1d2472;
      display: flex;
      overflow: hidden;
      position: relative;
      align-items: center;
      /* padding: 0.5rem 1rem; */
      flex-wrap: nowrap;
      padding-left: 80px;
    }

    .fia-bar .nav-link {
      color: white;
      text-align: center;
      padding: 10px 15px;
      white-space: nowrap;
      font-size: 1rem;
    }

    .fia-bar .active {
      background-color: #0099ff;
      font-weight: bold;
    }

    .welcome-link {
      background-color: #0099ff;
      font-weight: bold;
      flex-shrink: 0;
      z-index: 2;
   padding: 10px 15px; 
      /* border-radius: 5px; */ */
      white-space: nowrap;
      
    }

    .scrolling-wrapper {
      overflow: hidden;
      flex-grow: 1;
      margin-left: 20px;
      mask-image: linear-gradient(to right, transparent, white 5%, white 95%, transparent);
      -webkit-mask-image: linear-gradient(to right, transparent, white 5%, white 95%, transparent);
    }

    .scrolling-content {
      display: flex;
      width: max-content;
      animation: scroll-left 10s linear infinite;
    }

    .scrolling-wrapper:hover .scrolling-content {
      animation-play-state: paused;
    }

    .scrolling-content .nav-link {
      margin-right: 50px;
      font-size: 1rem;
    }

    @keyframes scroll-left {
      0% {
        transform: translateX(0%);
      }
      100% {
        transform: translateX(-50%);
      }
    }

    /* ✅ Only responsive improvements — design unchanged */
    @media (max-width: 768px) {
      .fia-bar {
        flex-wrap: wrap;
        flex-direction: column;
        align-items: stretch;
        padding-left: 0px !important;
      }

      .welcome-link {
        margin-bottom: 10px;
        width: 100%;
        text-align: center;
      }

      .scrolling-wrapper {
        margin-left: 0;
        width: 100%;
      }

      .scrolling-content .nav-link {
        font-size: 0.95rem;
        margin-right: 30px;
      }
    }

    @media (max-width: 480px) {
      .scrolling-content .nav-link {
        font-size: 0.85rem;
        margin-right: 20px;
      }
    }
  </style>
</head>
<body>
{{-- header Section --}}
<div class="container-fluid p-0">
  <div class="d-flex fia-bar">
    <div class="welcome-link">WELCOME TO FIA</div>

    <div class="scrolling-wrapper w-100">
      <div class="scrolling-content">
        {{-- Repeat content for smooth infinite scroll --}}
        @for ($i = 0; $i < 2; $i++)
          <a href="{{ asset('pdfs/FIA_SPECTRUM_JULY_SEPTEMBER.PDF') }}" target="_blank" class="nav-link">FIA SPECTRUM (July - September 2024)</a>
          <a href="{{ asset('pdfs/FIA_SPECTRUM_january_june.pdf') }}" target="_blank" class="nav-link">FIA SPECTRUM (January - June 2024)</a>
          <a href="{{ asset('pdfs/FIA PERFORMANCE.pdf') }}" target="_blank" class="nav-link">FIA Performance 2024</a>
        @endfor
      </div>
    </div>
  </div>
</div>

</body>
</html>