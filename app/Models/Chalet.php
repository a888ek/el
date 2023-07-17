<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chalet extends Model
{
    public function images()
    {
        return $this->hasMany(Image::class); // Assuming one-to-many relationship between Chalet and Image
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    // دالة لحساب متوسط التقييمات
    public function averageRating()
    {
        return $this->customers()->avg('rating');
    }

    public function citys()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    protected $fillable = ['name', 'description', 'image', 'city_id']; // تأكد من وجود city_id
    use HasFactory;
}
