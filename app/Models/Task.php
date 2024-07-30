<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    const STATUS = [
        1 => ['label' => '未着手'],
        2 => ['label' => '着手中'],
        3 => ['label' => '完了'],
    ];

    public function getStatusAttribute()
    {
        //$this->attributes['status']でstatusカラムの値を取得している
        $status = $this->attributes['status'];

        //
        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['label'];
    }

}
