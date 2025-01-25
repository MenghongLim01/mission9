<?php
// app/Models/Form.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';

    protected $fillable = [
        'fullName',
        'email',
        'password',
        'birthYear',
        'country',
        'city',
    ];

    protected $hidden = [
        'password',
    ];
}
