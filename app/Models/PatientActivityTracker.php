<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientActivityTracker extends Model
{
    use HasFactory;
    protected $fillable = ['activity_title', 'activity_description','activity_image'];
}
