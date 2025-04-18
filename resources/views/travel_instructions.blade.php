@extends('layouts.app',['title' => 'International Travel Instructions'])
@section('main')
<style>
  .travel-container {
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 30px;
    max-width: 900px;
    margin: 0 auto;
  }
  .travel-button {
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    font-weight: bold;
    min-height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    transition: background-color 0.3s, color 0.3s;
    background-color: white;
    color: inherit;
    text-decoration: none;
  }
  .travel-button:hover {
    background-color: #e9ecef;
    color: #000;
    cursor: pointer;
  }
  @media (max-width: 768px) {
    .travel-button {
      min-height: 80px;
      font-size: 14px;
    }
  }
  @media (max-width: 576px) {
    .travel-button {
      min-height: 60px;
      font-size: 12px;
    }
  }
</style>

<section>
<h4 class="text-center py-4"><strong>INTERNATIONAL TRAVEL INSTRUCTIONS / RESTRICTIONS</strong></h4>

<div class="travel-container mt-4 mb-5">
  <div class="row g-3">
    <div class="col-md-6 col-sm-12">
      <a href="{{ asset('pdfs/updated_visa_fee.pdf') }}" target="_blank" class="travel-button">NEW UPDATED VISA FEE</a>
    </div>
    <div class="col-md-6 col-sm-12">
      <a href="{{ asset('pdfs/travel_restr.pdf') }}" target="_blank" class="travel-button">NEW TRAVEL RESTRICTIONS</a>
    </div>
    <div class="col-md-6 col-sm-12">
      <a href="{{ asset('pdfs/travel_guide.pdf') }}" target="_blank" class="travel-button">NEW TRAVEL GUIDE</a>

    </div>
    <div class="col-md-6 col-sm-12">
      <a href="{{ asset('pdfs/india_travel_advisory.pdf') }}" target="_blank" class="travel-button">
        IMPORTANT TRAVEL DIRECTIVES<br>
        FOR PAKISTANI TRAVELERS<br>
        TRAVELING TO INDIA
      </a>
    </div>
  </div>
</div>
</section>
@endsection
 


