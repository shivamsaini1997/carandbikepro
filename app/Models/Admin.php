<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',   // Add 'name' here
        'email',
        'password',
        // any other attributes you want to allow for mass assignment
    ];
}
