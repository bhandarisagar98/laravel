<?php

namespace App\Http\Controllers;

use App\Models\PreAdmitForms;
use Illuminate\Http\Request;

class PreAdmitFormsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rehab = PreAdmitForms::all();
        return view('staff.pages.viewadmissionforms',compact("rehab"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parent.pages.preadmitform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = new PreAdmitForms();
    // Validate the incoming request
        $request->validate([
        'patient_name' => 'required|string|max:255',
        'patient_address' => 'required|string|max:255',
        'patient_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000', // Adjust max size as needed
        'patient_medical_history' => 'required|string',
        'primary_contact_person_name' => 'required|string|max:255',
        'primary_contact_person_phone' => 'required|string|max:20',
        'secondary_contact_person_name' => 'required|string|max:255',
        'secondary_contact_person_phone' => 'required|string|max:255',
        'pre_rehab_history' => 'string',
    ]);

    // Handling image upload
    if ($request->hasFile('patient_image')) {
        $image = $request->file('patient_image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move('images/patient_image/', $imageName);
        $form->patient_image = $imageName; // Save the image path
    }

    $form->patient_name = $request->patient_name;
    $form->patient_address =$request->patient_address;
    $form->patient_medical_history = $request->patient_medical_history;
    $form->primary_contact_person_name = $request->primary_contact_person_name;
    $form->primary_contact_person_phone = $request->primary_contact_person_phone;
    $form->secondary_contact_person_name = $request->secondary_contact_person_name;
    $form->secondary_contact_person_phone = $request->secondary_contact_person_phone;
    $form->pre_rehab_history = $request->pre_rehab_history;

    // Save the form
    $form->save();
    return redirect('/parent');

}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $form = PreAdmitForms::find($id);
        $form->delete();
        return redirect('/staff/entry-form');
    }
}
