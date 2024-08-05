<?php

namespace App\Http\Controllers;

use App\Models\doctorDataEn;
use Illuminate\Http\Request;
use Carbon\Carbon;


class JoinusController extends Controller
{
    public function showEnglishForm(){

        return view('user_area.join_us_en');
    }

    public function submitEnglishForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'job' => 'nullable|array',
            'city' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'scientific_certificate_image' => 'required',
            'syndicate_image' => 'required',
            'clinic_photos' => 'nullable',
            'logo' => 'required',
            'doctor_image' => 'required',
            'professional_license' => 'required',
        ]);

        // dd($request->all());

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
            'department' => $request->input('department'),
            'job' => implode(',', $request->input('job', [])), // Handle checkboxes
            'city' => $request->input('city'),
            'location' => $request->input('location'),
        ];

       // Handle file uploads
       if ($request->hasFile('scientific_certificate_image')) {
        $data['scientific_certificate_image'] = $request->file('scientific_certificate_image')->store('images', 'public');
    }

    if ($request->hasFile('syndicate_image')) {
        $data['syndicate_image'] = $request->file('syndicate_image')->store('images', 'public');
    }

    if ($request->hasFile('clinic_photos')) {
        $data['clinic_photos'] = $request->file('clinic_photos')->store('images', 'public');
    }

    if ($request->hasFile('logo')) {
        $data['logo'] = $request->file('logo')->store('images', 'public');
    }

    if ($request->hasFile('doctor_image')) {
        $data['doctor_image'] = $request->file('doctor_image')->store('images', 'public');
    }

    if ($request->hasFile('professional_license')) {
        $data['professional_license'] = $request->file('professional_license')->store('images', 'public');
    }




    $date =  $date = Carbon::now();
    $dayName = $date->format('l');
    $yearTwoDigit = $date->format('y');


    session([
        'name' => $request->input('name'),
        'phone' => $request->input('phone'),
        'city' => $request->input('city'),
        'email' => $request->input('email'),
        'date_day' => $date->day,
        'date_month' => $date->month,
        'date_year' =>  $yearTwoDigit,
        'day_name' => $dayName
    ]);


    DoctorDataEn::create($data);


        return redirect()->route('english.contract')->with('success', 'Doctor data has been added successfully.');
    }



    public function showArabicForm()
       {
        return view('user_area.join_us_ar');

        }

}
