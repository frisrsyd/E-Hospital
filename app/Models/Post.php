<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'tool_name',
        'link_location',
        'jumlah_alat',
        'icon',
        'category_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function checkout()
    {
        return $this->hasMany(Checkout::class);
    }

    public function getImageAttribute($value)
    {
        return url("tool_images/$value");
    }
}
