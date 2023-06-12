<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table='baiviet';
    protected $primaryKey = 'ma_bviet';
    protected $fillable = ['hinhanh', 'tieude', 'ten_bhat', 'ma_tloai', 'tomtat', 'noidung', 'ma_tgia'];
    public function author()
    {
        return $this->belongsTo(Author::class, 'ma_tgia');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'ma_tloai');
    }
        
    use HasFactory;
}
