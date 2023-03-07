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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('account_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('suffix');
            $table->date('birthdate');
            $table->string('address');
            $table->string('spouse');
            $table->integer('tin_number');
            $table->string('occupation');
            $table->string('gender');
            $table->string('department');
            $table->string('member_office');
            $table->string('employment_status');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('job_title');
            $table->string('email')->unique();
            $table->timestamp('time_date_created')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
