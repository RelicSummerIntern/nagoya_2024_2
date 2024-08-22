<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Store extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'genre_id',
        'opening_year',
        'opening_month',
        'opening_day',
        'postal_code',
        'prefecture',
        'address',
        'building_name',
        'phone_number',
        'email',
        'image_url',
        'discription',
    ];
    

    protected $table = 'stores';
    

    public function quests()
    {
        return $this->hasMany(Quest::class);
    }
}
