<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemain extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'no_punggung', 
        'posisi',
    ];
}
