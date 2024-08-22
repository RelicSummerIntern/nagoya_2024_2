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

    protected static function boot()
    {
        parent::boot();

        // Storeが作成されたときに自動的にQuestを作成する
        static::created(function ($store) {
            // ここでQuestを作成し、store_idを設定
            $store->quests()->create([
                // 必要に応じて他のデータも設定
                'user_id' => auth()->id(), // 例: 現在のユーザーIDを設定
                'is_completed' => false, // 例: デフォルト値
            ]);
        });
    }
}
