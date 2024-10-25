<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    // Permite que esses campos sejam atribuídos em massa
    protected $fillable = ['name', 'description', 'price'];
}
