<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'city',
        'country',
        'city',
        'password',
        'gender',
        'proffessional',
        'youlead_alumin_status',
        'photo',
        'biography',
        'job_title'      
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
