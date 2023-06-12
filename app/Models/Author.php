<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table='tacgia';
    protected $primaryKey = 'ma_tgia';
    use HasFactory;
}
