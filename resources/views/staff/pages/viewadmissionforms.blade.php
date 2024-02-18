@extends('staff.layouts.master')
@section('content')
<style>
    /* Resetting default margin and padding for all elements */
* {
    margin: 0;
    padding: 0;
}

/* Basic styling for the table */
table {
    width: 100%;
    border-collapse: collapse;
}

/* Styling for table header */
thead {
    background-color: #f2f2f2; /* Light gray background */
}

thead th {
    padding: 10px;
    text-align: left;
}

/* Styling for table body */
tbody td {
    padding: 10px;
    border-bottom: 1px solid #ddd; /* Bottom border for each row */
}

/* Styling for alternating rows */
tbody tr:nth-child(even) {
    background-color: #f9f9f9; /* Lighter gray background for even rows */
}

/* Styling for action links */
td a {
    margin-right: 5px; /* Add some spacing between links */
    text-decoration: none;
    padding: 5px 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333; /* Link color */
}

td a:hover {
    background-color: #ccc; /* Hover background color */
}

/* Styling for patient photo */
td img {
    max-width: 100px; /* Limiting the width of the image */
    height: auto; /* Letting the height adjust automatically */
    display: block; /* Ensuring the image is displayed as a block element */
    margin: 0 auto; /* Centering the image horizontally */
}

</style>
<table>
    <thead>
        <tr>
            <th>Patient Name</th>
            <th>Patient Photo</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rehab as $r)
        <tr>
            <td>{{$r->patient_name}}</td>
            <td><img src="{{asset('images/patient_image/'. $r->patient_image)}}" alt="{{$r->patient_name}}" height="200"></td>
            <td>
                <a href="{{route('staff-view-single-admission-form',$r->id)}}">View More</a>
                <a href="{{route('staff-delete-entry-form',$r->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
