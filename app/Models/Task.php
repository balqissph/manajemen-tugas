<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Definisikan kolom yang dapat diisi secara massal
    protected $fillable = [
        'title',
        'description',
        'status',
        'due_date',
        'user_id', // jika ada relasi ke user
    ];
}
