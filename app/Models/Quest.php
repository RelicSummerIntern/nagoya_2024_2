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

    public function clearCount()
    {
        // クリア数をカウントするためのロジック
        // 例: Questのレコードに対するクリア済みフラグを持っている場合
        return $this->is_completed ? 1 : 0;
    }
    public static function totalClearCount()
    {
        // 全クエストの中でis_completedがtrueの数を合計する
        return self::where('is_completed', true)->count();
    }
}
