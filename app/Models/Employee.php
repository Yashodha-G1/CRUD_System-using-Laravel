<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'FirstName',
        'LastName',
        'Email',
        'Phone',
        'Department',
        'DateJoined',
        'IsActive',
    ];

    protected $casts = [
        'DateJoined' => 'date',
        'IsActive' => 'boolean',
    ];
}
