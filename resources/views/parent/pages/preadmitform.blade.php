@extends('parent.layouts.master')
@section('content')

<style>
    /* CSS for Pre-Admit Form */
    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    h3 {
        text-align: center;
        margin: 20px 0;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="file"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box; /* Ensure that padding and border don't add to the width */
    }

    textarea {
        resize: vertical; /* Allow vertical resizing */
    }

    .c-pre-admin-button {
        background-color: #4CAF50;
        color: white;
        margin: 10px auto;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: block; /* Ensure button takes full width */
    }

    .c-pre-admin-button:hover {
        background-color: #45a049;
    }

    .fa-phone {
        margin-left: 5px;
    }

    /* Clearfix to properly align the submit button */
    .clearfix::after {
        content: "";
        display: table;
        clear: both;
    }

</style>

<h3>Pre-Admit Form</h3>
<form action="{{ route('storepreadmitform') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="patient_name">Patient Name</label>
    <input type="text" name="patient_name">

    <label for="patient_address">Patient Permanent Address</label>
    <input type="text" name="patient_address">

    <label for="patient_image">Patient Image</label>
    <input type="file" name="patient_image">

    <label for="patient_medical_history">Patient Medical History</label>
    <textarea name="patient_medical_history" cols="30" rows="10"></textarea>

    <label for="primary_contact_person_name">Primary Contact Person Name</label>
    <input type="text" name="primary_contact_person_name">

    <label for="primary_contact_person_phone">Primary Contact Person Phone <i class="fa fa-phone"></i></label>
    <input type="text" name="primary_contact_person_phone">

    <label for="secondary_contact_person_name">Secondary Contact Person Name</label>
    <input type="text" name="secondary_contact_person_name">

    <label for="secondary_contact_person_phone">Secondary Contact Person Phone <i class="fa fa-phone"></i></label>
    <input type="text" name="secondary_contact_person_phone">

    <label for="pre_rehab_history">Is There Previous Rehabilitation History? (Yes/No)</label>
    <input type="text" name="pre_rehab_history">

    <button class="c-pre-admin-button">Submit</button>
</form>

@endsection
