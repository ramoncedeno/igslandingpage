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
        Schema::create('list_vicidials', function (Blueprint $table) {

            $table->id()->unsigned()->comment('Primary key, auto-incremental');
            $table->integer('list_id')->comment('ID of the list');
            $table->string('gmt_offset_now', 10)->comment('Current GMT offset');
            $table->enum('called_since_last_reset', ['Y', 'N'])->comment('Indicates if called since last reset');
            $table->string('phone_code')->comment('Phone code, maximum length 30');
            $table->string('phone_number', 30)->comment('Phone number, maximum length 30');
            $table->string('title', 255)->comment('Title of the person');
            $table->string('first_name', 255)->comment('First name of the person');
            $table->string('middle_initial', 255)->nullable()->comment('Middle initial of the person');
            $table->string('last_name', 50)->comment('Last name of the person');
            $table->string('address1', 255)->nullable()->comment('First line of address');
            $table->string('address2', 255)->nullable()->comment('Second line of address');
            $table->string('address3', 255)->nullable()->comment('Third line of address');
            $table->string('city', 255)->nullable()->comment('City of the address');
            $table->string('state', 255)->nullable()->comment('State of the address');
            $table->string('province', 255)->nullable()->comment('Province of the address');
            $table->string('postal_code', 10)->nullable()->comment('Postal code of the address');
            $table->string('country_code', 2)->comment('Country code, maximum length 2');
            $table->enum('gender', ['h', 'm'])->nullable()->comment('Gender: h = male, m = female');
            $table->date('date_of_birth')->nullable()->comment('Date of birth');
            $table->string('alt_phone', 30)->nullable()->comment('Alternative phone number, maximum length 30');
            $table->string('email', 255)->nullable()->comment('Email address');
            $table->string('security_phrase', 255)->nullable()->comment('Security phrase for verification');
            $table->text('comments')->nullable()->comment('Additional comments');
            $table->integer('called_count')->comment('Count of calls made');
            $table->dateTime('last_local_call_time')->nullable()->comment('Timestamp of the last local call');
            $table->integer('rank')->nullable()->comment('Rank of the person');
            $table->string('owner', 50)->nullable()->comment('Owner of the entry');
            $table->integer('entry_list_id')->comment('Entry list ID');
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
        Schema::dropIfExists('list_vicidials');
    }
};
