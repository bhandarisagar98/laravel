<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreAdmitForms extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'patient_address',
        'patient_image',
        'patient_medical_history',
        'primary_contact_person_name',
        'primary_contact_person_phone',
        'secondary_contact_person_name',
        'secondary_contact_person_phone',
        'pre_rehab_history',
    ];
}
