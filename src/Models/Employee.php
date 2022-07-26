<?php

namespace Elcapitano\Employeemanagement\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'card_id',
        'birth_date',
        'email',
        'adresse',
        'job',
        'job_date'
    ];
}
