<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * firstname
     * middlename
     * lastname
     * dateOfBirth
     * address
     * civilStatus
     * contactNumber
     * officePosition
     * dateAssumed
     */
    public function up(): void
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('age');
            $table->string('dateOfBirth');
            $table->string('address');
            $table->string('civilStatus');
            $table->string('contactNumber');
            $table->string('officePosition');
            $table->string('dateAssumed');
            $table->string('officerImage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('officers');
    }
};
