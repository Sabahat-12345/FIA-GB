@extends('layouts.app',['title' => 'Public Complaint Portal'])
@section('main')
<style>
  /* public_portal section */
  .card {
    background-color: #007bff;
    color: white;
    border-radius: 10px;
    height: 140px; /* slightly smaller */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: left;
    padding: 0.75rem;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .card-content {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    flex-grow: 1;
  }

  .card img {
    /* width: 36px; */
    height: 50px;
    object-fit: contain;
  }

  .btn-custom,
  .btn-outline-light {
    border-radius: 25px;
    font-size: 0.8rem;
    padding: 0.3rem 0.8rem;
  }

  .btn-custom {
    background-color: #2a0d47;
    color: white;
    border: none;
    margin-top: 0.5rem;
  }

  .btn-custom:hover {
    background-color: #3c1a67;
  }

  .btn-online-complaint {
    background-color: #2a0d47;
    color: white;
    border: none;
    border-radius: 25px;
    font-size: 0.8rem;
    padding: 0.3rem 0.8rem;
    margin-top: 0.5rem;
  }

  .btn-online-complaint:hover {
    background-color: #3c1a67;
  }

  h2 {
    font-weight: bold;
    margin: 20px 0;
  }

  p.description {
    font-size: 0.95rem;
    color: #555;
  }

  .card strong {
    font-size: 0.9rem;
  }
</style>


    {{-- public_portal section --}}
    <div class="container text-center pb-5">
      <h2>PUBLIC COMPLAINT PORTAL</h2>
      <p class="description">
        If you want to lodge any complaint with FIA, please select respective type of crime mentioned below.
      </p>
  
      <div class="d-flex justify-content-center">
        <div class="row g-3" style="max-width: 1140px; width: 100%;">
          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-content">
                  <img src="{{ asset('asset/anti.png') }}" alt="Anti Corruption" />
                <strong>ANTI CORRUPTION</strong>
              </div>
              <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#economicCrimeModal">
                Click here for contact details
              </button>
  
            </div>
          </div>
  
          <!-- Card 2 -->
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-content">
                <img src="{{ asset('asset/economic_crime.png') }}" alt="Economic Crime" />
                <strong>ECONOMIC CRIME</strong>
              </div>
              <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#economicCrimeModal">
                Click here for contact details
              </button>
  
            </div>
          </div>
  
          <!-- Card 3: Cyber Crime -->
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-content">
                <img src="{{ asset('asset/cyber_crime.png') }}" alt="Cyber Crime" />
                <strong>CYBER CRIME</strong>
              </div>
              <div>
                 <button type="button" class="btn btn-custom btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#cyberCrimeModal">
                  Click here for contact details
    </button>
                  <a href="{{ route('complain') }}" class="btn btn-custom btn-sm">Online Complain</a>
  
              </div>
            </div>
          </div>
  
          <!-- Remaining Cards -->
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-content">
                <img src={{asset('asset/ahts.png')  }} alt="Anti Human Trafficking" />
                <strong>ANTI HUMAN TRAFFICKING AND SMUGGLING</strong>
              </div>
              <button type="button" class="btn btn-custom btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#antisModal">
                Click here for contact details
              </button>
  
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-content">
                <img src={{asset('asset/ibms.png')  }} alt="Border Management" />
                <strong>INTEGRATED BORDER MANAGEMENT SYSTEM</strong>
              </div>
             <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#generalContactModal">
    Click here for contact details
  </button>
  
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-content">
                <img src={{asset('asset/ipr.png')  }} alt="Intellectual Property" />
                <strong>INTELLECTUAL PROPERTY RIGHTS</strong>
              </div>
              <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#generalContactModal">
                Click here for contact details
              </button>
              
  
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-content">
                <img src={{asset('asset/immigration.png')  }} alt="Immigration" />
                <strong>IMMIGRATION</strong>
              </div>
              <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#newContactDetailsModal">
                Click here for contact details
              </button>
  
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-content">
                <img src="{{ asset('asset/interpol.png') }}" alt="Interpol" />
                <strong>INTERPOL</strong>
              </div>
              <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#contactDetailsModalNew">
                Click here for contact details
              </button>
  
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-content">
                <img src="https://img.icons8.com/color/48/security-checked.png" alt="Counter Terrorism" />
                <strong>COUNTER TERRORISM</strong>
              </div>
              <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#newContactDetailsModal">
                Click here for contact details
              </button>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Anti Corruption Modal -->
  <div class="modal fade" id="antiCorruptionModal" tabindex="-1" aria-labelledby="antiCorruptionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title  w-100 text-center " id="antiCorruptionModalLabel">ANTI CORRUPTION OFFICE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="border p-3 rounded">
            <strong class="d-block mb-2 text-center">HEADQUARTER</strong>
            <p><strong>Email:</strong> dir.acw@fia.gov.pk</p>
            <p><strong>Phone:</strong> 051-9260850</p>
            <p><strong>Fax:</strong> 051-9262734</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
   
  <!-- Economic Crime Modal -->
  <div class="modal fade" id="economicCrimeModal" tabindex="-1" aria-labelledby="economicCrimeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center" id="economicCrimeModalLabel">ECONOMIC CRIME</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="border p-3 rounded">
            <strong class="d-block mb-2 text-center">HEADQUARTER</strong>
            <p><strong>Email:</strong> dir.ecw@fia.gov.pk</p>
            <p><strong>Phone:</strong> 051-9262953</p>
            <p><strong>Fax:</strong> 051-9262954</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  
  {{-- cyber crime modal --}}
  <div class="modal fade" id="cyberCrimeModal" tabindex="-1" aria-labelledby="cyberCrimeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cyberCrimeModalLabel">Cyber Crime Regional Offices</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
  
            <!-- Each Office Card -->
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">Cyber Crime HQ</h6>
                <p class="mb-1"><strong>Address:</strong> National Police Foundation Building, G-10/4, Islamabad</p>
                <p><strong>Phone:</strong> 1991</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">RAWALPINDI</h6>
                <p class="mb-1"><strong>Address:</strong> HOUSE NO 162/2, PUNJ SAARKI NEAR BY SHELL PETROL PUMP ADAM JE ROAD, SADAR RAWALPINDI</p>
                <p><strong>Phone:</strong> +92 519330719</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">PESHAWAR</h6>
                <p class="mb-1"><strong>Address:</strong> LAVARGINI FLATS, ABDARA ROAD PESHAWAR</p>
                <p><strong>Phone:</strong> +92 919216251</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">ABBOTABAD</h6>
                <p class="mb-1"><strong>Address:</strong> HOUSE NO 3, STREET NO 1. MOSAZAI COLONY, MIRPUR MANSEHRA ROAD (K.K.H) ABBOTABAD</p>
                <p><strong>Phone:</strong> 099 2384148</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">FAISALABAD</h6>
                <p class="mb-1"><strong>Address:</strong> ZIA TOWN, STREET NO 2, EAST CANAL ROAD NEAR KASHMIR PULL (OPPOSITE GOHAR TEXTILE), FAISALABAD</p>
                <p><strong>Phone:</strong> 041 9330865</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">DERA ISMAIL KHAN</h6>
                <p class="mb-1"><strong>Address:</strong> FIA OFFICE 25-A SHAMI ROAD, NEAR ALNOOR MASJID, CANTONMENT, DERA ISMAIL KHAN</p>
                <p><strong>Phone:</strong> +92 6710537</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">GILGIT</h6>
                <p class="mb-1"><strong>Address:</strong> FIA CYBER CRIME OFFICE, NEAR GDA OFFICE, RIVER ROAD, CHINAR BAGH, GILGIT</p>
                <p><strong>Phone:</strong> +92 5811960707</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">MULTAN</h6>
                <p class="mb-1"><strong>Address:</strong> HOUSE #6, STREET-3, SHALIMAR COLONY, BOSAN TOWN, MULTAN</p>
                <p><strong>Phone:</strong> 061-XXXXXXX</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">KARACHI</h6>
                <p class="mb-1"><strong>Address:</strong> Nazar Court, Shahr-e-Faisal</p>
                <p><strong>Phone:</strong> 021-99249883</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">GUJRANWALA</h6>
                <p class="mb-1"><strong>Address:</strong> GHAUS PLAZA, COMMERCIAL AREA, CITY HOUSING SOCIETY, LAHORE ROAD, GUJRANWALA</p>
                <p><strong>Phone:</strong> 0559330015-16</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">LAHORE</h6>
                <p class="mb-1"><strong>Address:</strong> HOUSE # 8-B, BLOCK G, MUSHTAQ AHMED GURMANI ROAD, GULBERG 2, LAHORE (NEAR MACDONALD'S MAIN BOULEVARD)</p>
                <p><strong>Phone:</strong> 042-99268527</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">SUKKUR</h6>
                <p class="mb-1"><strong>Address:</strong> HOUSE NO A-126, SINDH HOUSING SOCIETY, NEAR NADRA, AIRPORT ROAD, SUKKUR</p>
                <p><strong>Phone:</strong> 0719310849</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">GAWADAR</h6>
                <p class="mb-1"><strong>Address:</strong> PLOT-M 15, NA BLOCK, STREET NO.06, NEW TOWN PHASE-01, GAWADAR</p>
                <p><strong>Phone:</strong> 03322400190</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">ISLAMABAD</h6>
                <p class="mb-1"><strong>Address:</strong> STREET 169, BUILDING 5C, G13/3 ISLAMABAD</p>
                <p><strong>Phone:</strong> 0519334627</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">QUETTA</h6>
                <p class="mb-1"><strong>Address:</strong> FIA OFFICE, BANGLOW 105, SHABOO ROAD, QUETTA</p>
                <p><strong>Phone:</strong> 0812870057</p>
              </div>
            </div>
  
            <div class="col">
              <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">HYDERABAD</h6>
                <p class="mb-1"><strong>Address:</strong> PLOT A-100, SITE AREA, NEAR CUSTOM HOUSE, HYDERABAD</p>
                <p><strong>Phone:</strong> 0229250010</p>
              </div>
            </div>
  
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
            
            <!-- Economic Crime Modal -->
            <div class="modal fade" id="economicCrimeModal" tabindex="-1" aria-labelledby="economicCrimeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title w-100 text-center" id="economicCrimeModalLabel">ECONOMIC CRIME</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="border p-3 rounded">
                      <strong class="d-block mb-2 text-center">HEADQUARTER</strong>
                      <p><strong>Email:</strong> dir.ecw@fia.gov.pk</p>
                      <p><strong>Phone:</strong> 051-9262953</p>
                      <p><strong>Fax:</strong> 051-9262954</p>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
  
  
         {{-- ANTI HUMAB TRAFFICKING AND SMUGGLING MODAL --}}
         <div class="modal fade" id="antisModal" tabindex="-1" aria-labelledby="antisModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="antisModalLabel">ANTI HUMAN TRAFFICKING & SMUGGLING OFFICE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="border p-3 rounded">
                  <strong class="d-block mb-2 text-center">HEADQUARTER</strong>
                  <p><strong>Email:</strong> dir.imm@fia.gov.pk</p>
                  <p><strong>Phone:</strong> 051-9263330</p>
                  <p><strong>Fax:</strong> 051-9263332</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
  
        {{-- INTEGRATED BORDER MANAGEMENT SYSTEM modal --}}
        <div class="modal fade" id="contactDetailsModal" tabindex="-1" aria-labelledby="contactDetailsModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="contactDetailsModalLabel">INTEGRATED BORDER MANAGEMENT SYSTEM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="border p-3 rounded">
                  <p><strong>Email:</strong> info@fia.gov.pk</p>
                  <p><strong>Phone:</strong> 051-111-345-786</p>
                  <p><strong>Address:</strong> FIA Headquarters, G-9/4 Islamabad, Pakistan</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
        {{-- INTELLECTUAL PROPERTY RIGHTS --}}
        <div class="modal fade" id="generalContactModal" tabindex="-1" aria-labelledby="generalContactModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="generalContactModalLabel">INTELLECTUAL PROPERTY RIGHTS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="border p-3 rounded">
                  <p><strong>Email:</strong> info@fia.gov.pk</p>
                  <p><strong>Phone:</strong> 051-111-345-786</p>
                  <p><strong>Address:</strong> FIA Headquarters, G-9/4, Islamabad</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
        {{-- IMMIGRATION --}}
        <div class="modal fade" id="newContactDetailsModal" tabindex="-1" aria-labelledby="newContactDetailsModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="newContactDetailsModalLabel">IMMIGRATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="border p-3 rounded">
                  <p><strong>Email:</strong> info@yourcompany.com</p>
                  <p><strong>Phone:</strong> 051-111-345-786</p>
                  <p><strong>Address:</strong> XYZ Street, ABC City, Country</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
        {{-- INTERPOL --}}
        <div class="modal fade" id="contactDetailsModalNew" tabindex="-1" aria-labelledby="contactDetailsModalNewLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="contactDetailsModalNewLabel">INTERPOL</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="border p-3 rounded">
                  <p><strong>Email:</strong> info@yourcompany.com</p>
                  <p><strong>Phone:</strong> 051-111-345-786</p>
                  <p><strong>Address:</strong> XYZ Street, ABC City, Country</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
        {{-- COUNTER TERRORISM --}}
        <div class="modal fade" id="newContactDetailsModal" tabindex="-1" aria-labelledby="newContactDetailsModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="newContactDetailsModalLabel">COUNTER TERRORISM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="border p-3 rounded">
                  <p><strong>Email:</strong> info@yourcompany.com</p>
                  <p><strong>Phone:</strong> 051-111-345-786</p>
                  <p><strong>Address:</strong> XYZ Street, ABC City, Country</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
  
  
@endsection
 
