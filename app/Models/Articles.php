<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    // protected $table = 'articles';

    protected $fillable = [
        'id',
        'image',
        'user_id',
        'category_id',
        'title',
        'content',
    ];


    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function categorys()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
