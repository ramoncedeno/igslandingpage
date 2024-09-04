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
        Schema::create('landing_leads', function (Blueprint $table) {

            $table->id()->unsigned()->comment('Primary key, auto-incremental');
            $table->string('identification',18)->comment('CURP');
            $table->string('first_name',255)->comment('User_s First name');
            $table->string('last_name',255)->comment('User_s Last name'); //
            $table->string('phone',30)->comment('Phone number');
            $table->string('email',255)->comment('User Email address');
            $table->date('birthdate')->comment('Date of birth');
            $table->enum('gender', ['h', 'm'])->comment('Gender: h = male, m = female');
            $table->string('subject',255)->comment('Subject');
            $table->string('account',255)->comment('Sponsor_s name');
            $table->string('plan',255)->nullable()->comment('Plan Name');
            $table->string('origin',255)->nullable()->comment('Origin URL');
            $table->timestamp('time_stamp')->comment('Date and time of registration');
            $table->string('created_at',255)->comment('date the record was created');
            $table->string('updated_at',255)->comment('date the record was modified');
            $table->string('deleted_at',255)->comment('date the record was deleted');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_leads');
    }
};
