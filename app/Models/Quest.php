<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    protected $fillable = [
        'store_id',
        'user_id',
        'is_completed',
        // 必要に応じて他のフィールドも追加
    ];
}
