<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news'; // Pastikan Laravel membaca tabel yang benar

    protected $fillable = [
        'title', 'content', 'image', 'created_at', 'updated_at'
    ]; // Sesuaikan dengan kolom dalam tabel news
}
