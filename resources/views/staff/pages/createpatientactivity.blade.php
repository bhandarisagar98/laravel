@extends('parent.layouts.master')
@section('content')

<style>


</style>

<h3>Pre-Admit Form</h3>
<form action="/parent/entry-form">
@csrf
<label for="search pateint">Patient Name</label>

<label for="activity title">Activity Title</label>
<input type="text" name="activity_title">

<label for="activity description">Activity Description</label>
<input type="text" name="activity_description">

<button class="c-activity-submit-button">Submit</button>

</form>

@endsection