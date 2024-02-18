<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pre_admit_forms', function (Blueprint $table) {
            $table->id();
            $table -> string('patient_name');
            $table -> string('patient_address');
            $table->string('patient_image');
            $table -> string('patient_medical_history');
            $table -> string('primary_contact_person_name');
            $table -> integer('primary_contact_person_phone');
            $table -> string('secondary_contact_person_name');
            $table -> integer('secondary_contact_person_phone');
            $table -> string('pre_rehab_history');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre_admit_forms');
    }
};
