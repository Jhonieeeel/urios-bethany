<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Firstname
     * Middlename
     * Lastname
     * Age
     * Sex
     * Address
     * ContactNumber
     * ----
     * Incident Date
     * Incident Time
     * Admission Date
     * Reporting Date
     * Nature of the Crime
     * Case Status
     */
    public function up(): void
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('age');
            $table->string('sex');
            $table->string('address');
            $table->string('contactNumber');
            $table->string('incidentDate'); 
            $table->string('incidentTime');
            $table->string('admissionDate');
            $table->string('reportDate');
            $table->string('natureOfTheCrime');
            $table->string('caseStatus');
            $table->string('residentImage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
