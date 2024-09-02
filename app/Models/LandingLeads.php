<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LandingLeads extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'landing_leads'; // Table name

    /**
        These attributes can be assigned en masse.     *
     * @var array<int, string>
     */
    public $fillable = [
        'identification',
        'first_name',
        'last_name',
        'phone',
        'email',
        'birthdate',
        'gender',
        'subject',
        'account',
        'plan',
        'origin',
        'time_stamp',

    ];

     //these are the protected attributes of the sales table

     public $protected =[

        'vendor_lead_code',
        'phone_number',
        'first_name',
        'middle_name',
        'last_name',
        'server_location',

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'birthdate' => 'date',
        'time_stamp' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];


}
