<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UseDetail extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'city', 'mobile'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
