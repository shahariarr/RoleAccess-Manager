<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name', 'image', 'user_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
