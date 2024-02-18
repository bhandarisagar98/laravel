@extends('staff.layouts.master')
@section('content')

<style>
    .patient-info {
    margin: 40px auto; /* Center align the container */
    background-color: #ffffff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    max-width: 800px; /* Limit the width of the container */
}

.patient-info h2 {
    font-size: 28px;
    font-weight: bold;
    color: #333333;
    margin-bottom: 10px;
}

.patient-info h4 {
    font-size: 20px;
    color: #555555;
    margin-top: 0;
    margin-bottom: 20px;
}

.patient-info img {
    display: block;
    margin: 0 auto 20px; /* Center align the image */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 100%;
    height: auto;
}

</style>
<div class="patient-info">
    <h2>Patient Name:</h2> <h4>{{$rehab->patient_name}}</h4>
    <h2>Patient Address:</h2> <h4>{{$rehab->patient_address}}</h4>
    <h2>Patient Image:</h2> <img src="{{asset('images/patient_image/'. $rehab->patient_image)}}" alt="{{$rehab->patient_name}}" height="200">
    <h2>Patient Medical History:</h2> <h4>{{$rehab->patient_medical_history}}</h4>
    <h2>Primary Contact Person Name:</h2> <h4>{{$rehab->primary_contact_person_name}}</h4>
    <h2>Primary Contact Person Phone:</h2> <h4>{{$rehab->primary_contact_person_phone}}</h4>
    <h2>Secondary Contact Person Name:</h2> <h4>{{$rehab->secondary_contact_person_name}}</h4>
    <h2>Secondary Contact Person Phone:</h2> <h4>{{$rehab->secondary_contact_person_phone}}</h4>
    <h2>Rehab History:</h2> <h4>{{$rehab->pre_rehab_history}}</h4>
</div>
@endsection
