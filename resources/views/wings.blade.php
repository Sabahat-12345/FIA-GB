@extends('layouts.app',['title' => 'FIA Wings - Specialized Departments'])
@section('main')
<style>
  :root {
    --fia-blue: #0056b3;
    --fia-light-blue: #e6f0ff;
  }

  .fia-theme {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
  }

  .wing-link {
    text-decoration: none;
    color: inherit;
  }

  .wing-button {
    padding: 25px 15px;
    border: 2px solid var(--fia-blue);
    border-radius: 10px;
    text-align: center;
    font-weight: bold;
    background-color: #fff;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }

  .wing-button:hover {
    background-color: var(--fia-light-blue);
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.15);
  }

  .wing-icon {
    font-size: 2rem;
    margin-bottom: 10px;
    color: var(--fia-blue);
  }

  .section-title {
    color: var(--fia-blue);
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 30px;
  }

  .section-title:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background-color: #ffc107;
  }
</style>

<section class="fia-theme">


  <div class="container text-center my-5">
    <h2 class="section-title fw-bold">FIA WINGS</h2>
    <p class="mb-5 fs-5">FIA has specialized department for every individual work.</p>
    
    <div class="row g-4 justify-content-center">

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="{{route('anti-corruption')}}" class="wing-link">
          <div class="wing-button">
            <div>
              <div class="wing-icon"><i class="fas fa-hand-holding-usd"></i></div>
              <div>ANTI CORRUPTION</div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="{{route('economic-crime')}}" class="wing-link">
          <div class="wing-button">
            <div>
              <div class="wing-icon"><i class="fas fa-chart-line"></i></div>
              <div>ECONOMIC CRIME</div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="{{route('cyber-crime')}}" class="wing-link">
          <div class="wing-button">
            <div>
              <div class="wing-icon"><i class="fas fa-laptop-code"></i></div>
              <div>CYBER CRIME</div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="{{route('anti-human-trafficking')}}" class="wing-link">
          <div class="wing-button">
            <div>
              <div class="wing-icon"><i class="fas fa-users-slash"></i></div>
              <div>ANTI HUMAN TRAFFICKING</div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="border-management.html" class="wing-link">
          <div class="wing-button">
            <div>
              <div class="wing-icon"><i class="fas fa-map-marked-alt"></i></div>
              <div>BORDER MANAGEMENT</div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="intellectual-property.html" class="wing-link">
          <div class="wing-button">
            <div>
              <div class="wing-icon"><i class="fas fa-copyright"></i></div>
              <div>INTELLECTUAL PROPERTY</div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="immigration.html" class="wing-link">
          <div class="wing-button">
            <div>
              <div class="wing-icon"><i class="fas fa-passport"></i></div>
              <div>IMMIGRATION</div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="interpol.html" class="wing-link">
          <div class="wing-button">
            <div>
              <div class="wing-icon"><i class="fas fa-globe-americas"></i></div>
              <div>INTERPOL</div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="fia-academy.html" class="wing-link">
          <div class="wing-button">
            <div>
              <div class="wing-icon"><i class="fas fa-graduation-cap"></i></div>
              <div>FIA ACADEMY</div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="{{route('counter-terrorism')}}" class="wing-link">
          <div class="wing-button">
            <div>
              <div class="wing-icon"><i class="fas fa-shield-alt"></i></div>
              <div>COUNTER TERRORISM</div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="law.html" class="wing-link">
          <div class="wing-button">
            <div>
              <div class="wing-icon"><i class="fas fa-gavel"></i></div>
              <div>LAW</div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="technical.html" class="wing-link">
          <div class="wing-button">
            <div>
              <div class="wing-icon"><i class="fas fa-microchip"></i></div>
              <div>TECHNICAL</div>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>


@endsection

