@extends('layouts.app',['title' => 'Important Links'])
@section('main')
<style>
  .important-links a {
    color: blue;
    text-decoration: none;
  }
  .important-links a:hover {
    text-decoration: underline;
  }
  .important-links table tbody tr:hover td {
    background-color: #f0f0f0; /* Light dark color on hover */
  }
</style>

<h2 class="text-center p-5"><strong>IMPORTANT LINKS</strong></h2>

  <div class="important-links container mt-4">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Sr. #</th>
          <th>Name</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1</td><td><a href="https://www.interior.gov.pk" target="_blank">Ministry of Interior</a></td></tr>
        <tr><td>2</td><td><a href="https://www.mofa.gov.pk" target="_blank">Ministry of Foreign Affairs</a></td></tr>
        <tr><td>3</td><td><a href="https://nab.gov.pk" target="_blank">National Accountability Bureau</a></td></tr>
        <tr><td>4</td><td><a href="https://punjabpolice.gov.pk" target="_blank">Punjab Police</a></td></tr>
        <tr><td>5</td><td><a href="https://sindhpolice.gov.pk" target="_blank">Sindh Police</a></td></tr>
        <tr><td>6</td><td><a href="https://kppolice.gov.pk" target="_blank">Khyber Pakhtunkhwa Police</a></td></tr>
        <tr><td>7</td><td><a href="http://balochistanpolice.gov.pk" target="_blank">Baluchistan Police</a></td></tr>
        <tr><td>8</td><td><a href="https://ictadministration.gov.pk" target="_blank">Islamabad Capital Territory Administration</a></td></tr>
        <tr><td>9</td><td><a href="https://fc.gov.pk" target="_blank">FC Pakistan Army</a></td></tr>
        <tr><td>10</td><td><a href="https://www.paknavy.gov.pk" target="_blank">Pakistan Coast Guard</a></td></tr>
        <tr><td>11</td><td><a href="https://www.nadra.gov.pk" target="_blank">NADRA</a></td></tr>
        <tr><td>12</td><td><a href="https://www.nacta.gov.pk" target="_blank">NACTA</a></td></tr>
        <tr><td>13</td><td><a href="https://civildefence.gov.pk/">Civil Defense</a></td></tr>
        <tr><td>14</td><td><a href="https://www.dgip.gov.pk/home/">Immigration & Passport</a></td></tr>
      </tbody>
    </table>
  </div>

@endsection
  



  