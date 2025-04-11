<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DG's Message Section</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    .custom-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 20px;
    }

    .custom-card h5 {
      font-weight: bold;
    }

    .underline {
      height: 3px;
      background-color: red;
      margin-top: 5px;
      margin-bottom: 15px;
    }

    .read-more-btn {
      background-color: #1D2472;
      color: white;
      border-radius: 20px;
      padding: 5px 15px;
      text-decoration: none;
      font-weight: 500;
      display: inline-block;
      margin-top: 10px;
    }

    .read-more-btn:hover {
      background-color: #0d6efd;
      color: white;
    }

    .dg-img {
      width: 100%;
      border-radius: 10px;
      object-fit: cover;
      height: 300px;
    }
    
    .date-text {
      font-weight: 500;
      color: #333;
   
      text-align: right;
      padding-top: 15px;
    }

    /* Square indicators */
    .carousel-indicators [data-bs-target] {
      width: 12px;
      height: 12px;
      background-color: #ccc;
      border-radius: 0;
      margin: 0 4px;
      border: none;
    }

    .carousel-indicators .active {
      background-color: #1D2472;
    }

    .content-col {
      display: flex;
      flex-direction: column;
    }

    @media (min-width: 992px) {
      .dg-img {
        height: 100%;
        min-height: 350px;
      }
      
      .custom-card {
        height: 100%;
        margin-bottom: 0;
      }
      
      .message-card {
        padding-right: 30px;
      }
    }

    @media (max-width: 768px) {
      .dg-img {
        height: 250px;
        margin-bottom: 15px;
      }
      
      .carousel-indicators {
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

  <div class="container my-5">
    <div class="row">
      <!-- Director General's Message -->
      <div class="col-lg-4 col-md-12 message-card">
        <div class="custom-card">
          <h5>Director General's Message</h5>
          <div class="underline"></div>
          <p>
            I am honored to assume the role of Director General of the Federal Investigation Agency (FIA), entrusted with the responsibility of upholding the values of justice, equity and rule of law for our great nation. FIA has a rich legacy of safeguarding the interests of Pakistan, and I am committed to advancing and upholding this legacy ...
          </p>
          <a href="#" class="read-more-btn">Click to Read More</a>
        </div>
      </div>

      <!-- Assumes Office Section --> 
      <div class="col-lg-8 col-md-12">
        <div class="custom-card">
          <div class="row">
            <!-- Slider Section -->
            <div class="col-lg-6 col-md-12">
              <div id="dgSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('asset/fia.png')}}" class="dg-img w-100" alt="Slide 1">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('asset/fia2.png')}}" class="dg-img w-100" alt="Slide 2">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('asset/fia3.png')}}" class="dg-img w-100" alt="Slide 3">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('asset/fia4.png')}}" class="dg-img w-100" alt="Slide 4">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('asset/fia5.png')}}" class="dg-img w-100" alt="Slide 4">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('asset/fia6.png')}}" class="dg-img w-100" alt="Slide 4">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('asset/fia6.png')}}" class="dg-img w-100" alt="Slide 4">
                  </div>
                </div>

                <!-- Indicators -->
                <div class="carousel-indicators position-static mt-3 justify-content-center">
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="2"></button>
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="3"></button>
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="4"></button>
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="5"></button>
                  <button type="button" data-bs-target="#dgSlider" data-bs-slide-to="6"></button>
                </div>
              </div>
            </div>
            
            <!-- Content Section -->
            <div class="col-lg-6 col-md-12 content-col ps-lg-3 ps-md-0 mt-3 mt-lg-0">
              <h5>Director General FIA, Mr. Riffat Mukhtar, Assumes Charge of Office</h5>
              <div class="underline"></div>
              <p>
                Mr. Riffat Mukhtar, a seasoned officer from the 24th Common of the Police Service of Pakistan, has assumed charge as the Director General of the Federal Investigation Agency (FIA)
              </p>
              <div class="date-text">Dated: 07-Apr-2025</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>