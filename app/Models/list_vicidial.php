<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class list_vicidial extends Model
{
    use HasFactory;

    protected $table = 'list_vicidial';

    protected $fillable = [

     'list_id',
     'gmt_offset_now',
     'called_since_last_reset',
     'phone_code',
     'phone_number',
     'title',
     'first_name',
     'middle_initial',
     'last_name',
     'address1',
     'address2',
     'address3',
     'city',
     'state',
     'province',
     'postal_code',
     'country_code',
     'gender',
     'date_of_birth',
     'alt_phone',
     'email',
     'security_phrase',
     'comments',
     'called_count',
     'last_local_call_time',
     'rank',
     'owner',
     'entry_list_id',

    ];

    public $protected =[

        'phone_number',
        'first_name',
        'last_name',
        'address1',
        'address2',
        'address3',
        'city',
        'state',
        'province',
        'postal_code',
        'country_code',
        'alt_phone',
        'email',
       'security_phrase',
    ];

      /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'phone_number' => 'hashed',
        'alt_phone'=> 'hashed',
        'email' =>'encryted',
        'security_phrase' => 'hashed',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];





}
