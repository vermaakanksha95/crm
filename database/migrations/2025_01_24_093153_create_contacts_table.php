<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('first_name')->nullable(); // First Name
            $table->string('last_name')->nullable(); // Last Name
            $table->string('account_name')->nullable(); // Account Name
            $table->string('email')->nullable(); // Email
            $table->string('mobile')->nullable(); // Mobile
            $table->string('assistant')->nullable(); // Assistant
            $table->string('lead_source')->nullable(); // Lead Source
            $table->string('vendor_name')->nullable(); // Vendor Name
            $table->string('title')->nullable(); // Title
            $table->string('department')->nullable(); // Department
            $table->date('date_of_birth')->nullable(); // Date of Birth
            $table->string('asst_phone')->nullable(); // Assistant Phone
            $table->string('secondary_email')->nullable(); // Secondary Email
            $table->unsignedBigInteger('reporting_to')->nullable(); // Reporting To

            // Mailing Address
            $table->string('mailing_street')->nullable();
            $table->string('mailing_city')->nullable();
            $table->string('mailing_state')->nullable();
            $table->string('mailing_pincode')->nullable();
            $table->string('mailing_country')->nullable();

            // Other Address
            $table->string('other_street')->nullable();
            $table->string('other_city')->nullable();
            $table->string('other_state')->nullable();
            $table->string('other_pincode')->nullable();
            $table->string('other_country')->nullable();

            // Description Information
            $table->text('description')->nullable();

            $table->timestamps(); // Created at and Updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};


