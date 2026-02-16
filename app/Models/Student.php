<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Optional: specify table name if not "students"
    // protected $table = 'students';

    // Mass-assignable fields
    protected $fillable = [
        'name',
        'email',
        'age',
    ];
}
