<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complain;

class ComplainController extends Controller
{
    public function store(Request $request)
    {
      
      $data =  $request->validate([
            'full_name' => 'required|string|max:255',
           'father_name' => 'nullable|string|max:255',
             'cnic' => 'required|string|max:15|unique:complains,cnic',
            'gender' => 'required|in:male,female,other',
            'mobile_number' => 'required|string',
           'phone_number' => 'nullable|string',
             'whatsapp_number' => 'nullable|string',
             'email' => 'required|email',
             'occupation' => 'nullable|string',
             'postal_address' => 'nullable|string',
             'city' => 'required|string',
             'crime_category' => 'required|string',
             'crime_details' => 'required|string|max:3400',
            'declaration' => 'accepted',
        ]);
      
       $data = $request->except('declaration');
        Complain::create($data);
    
        return back()->with('success', 'Your complaint has been submitted successfully!');
}
}
