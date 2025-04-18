

@extends('layouts.app',['title' => 'Complaint Registration Form'])
@section('main')
    
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
       {{-- complain   --}}
<div class="container py-5">
  <h2 class="mb-4">Complaint Registration Form</h2>
  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
  <p>All fields marked with <span class="text-danger">*</span> are mandatory.</p>
  <form action="{{ route('complaint.store') }}" method="POST">
    @csrf

    <div class="row g-3">
      <div class="col-md-4">
        <label class="form-label">Full Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="full_name" placeholder="Enter your full name here" required>
        @error('full_name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-4">
        <label class="form-label">Father Name</label>
        <input type="text" class="form-control" name="father_name" placeholder="Enter your father name here">
        @error('father_name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-4">
        <label class="form-label">CNIC <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="cnic" placeholder="Enter your CNIC 1234512345671" required>
        @error('cnic')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-4">
        <label class="form-label">Gender <span class="text-danger">*</span></label>
        <select class="form-select" name="gender" required>
          <option selected disabled>Select Option</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
        @error('gender')
        <div class="text-danger">{{ $message }}</div>      
        @enderror
      </div>
      <div class="col-md-4">
        <label class="form-label">Mobile Number <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="mobile_number" placeholder="Enter your mobile number here" required>
        @error('mobile_number')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-4">
        <label class="form-label">Phone Number</label>
        <input type="text" class="form-control" name="phone_number" placeholder="Enter your phone number here">
        @error('phone_number')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-4">
        <label class="form-label">WhatsApp Number</label>
        <input type="text" class="form-control" name="whatsapp_number" placeholder="Enter your WhatsApp number here">
        @error('whatsapp_number')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-4">
        <label class="form-label">Email Address</label>
        <input type="email" class="form-control"  name="email" placeholder="Enter your email address here">
        @error('email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-4">
        <label class="form-label">Occupation</label>
        <select class="form-select" name="occupation">
          <option selected disabled>Select Option</option>
          <option value="student">Student</option>
          <option value="government">Government Employee</option>
          <option value="private">Private Sector</option>
          <option value="self">Self-Employed</option>
          <option value="other">Other</option>
        </select>
        @error('occupation')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-6">
        <label class="form-label">Postal Address</label>
        <input type="text" class="form-control" name="postal_address" placeholder="Enter your postal address here">
        @error('postal_address')
        <div class="text-danger">{{ $message }}</div>

        @enderror
      </div>
      <div class="col-md-6">
        <label class="form-label">City <span class="text-danger">*</span></label>
        <select class="form-select" name="city" required>
          <option selected disabled>Select Option</option>
          <option value="gilgit">Gilgit</option>
          <option value="skardu">Skardu</option>
          <option value="hunza">Hunza</option>
          <option value="diamer">Diamer</option>
          <option value="other">Other</option>
        </select>
        @error('city')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-12">
        <label class="form-label">Crime Category <span class="text-danger">*</span></label>
        <select class="form-select" name="crime_category" required>
          <option selected disabled>Select Option</option>
          <option value="theft">Theft</option>
          <option value="fraud">Fraud</option>
          <option value="violence">Violence</option>
          <option value="cyber">Cyber Crime</option>
          <option value="other">Other</option>
        </select>
        @error('crime_category')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-12">
        <label class="form-label">Crime Details <span class="text-danger">*</span></label>
        <textarea class="form-control" rows="4" name="crime_details" placeholder="Brief Crime Details and Involved Person(s) Details. (Not More Than 3400 Characters)" required></textarea>
        @error('crime_details')
        <div class="text-danger">{{ $message }}</div>

        @enderror
      </div>

      {{-- <div class="col-md-6 d-flex align-items-end">
        <img src="captcha-placeholder.jpg" alt="Captcha" class="img-fluid">
        <button type="button" class="btn btn-outline-secondary ms-2">↻</button>
      </div>
      <div class="col-md-6">
        <label class="form-label">Enter Captcha</label>
        <input type="text" class="form-control" placeholder="Enter Captcha">
      </div> --}}

      <div class="col-12">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="declaration" name="declaration" required>
            @error('declaration')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          <label class="form-check-label" for="declaration">
            I affirm that all the information I have provided on this form is correct to the best of my knowledge. <span class="text-danger">*</span>
          </label>
        </div>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit Complaint</button>
      </div>
    </div>
  </form>
</div>


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
       Gilgit, PK
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
  
  
 

        

  