<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Keyword extends Model
{
    protected $fillable = [
        'name',
        'description',
        'tactica',
        'tag',
    ];
    
    public function minis() {
        return $this->belongsToMany(Mini::class);
    }

    public function hiddenKeywords() {
        return $this->hasMany(Mini::class, 'hidden_keyword_id', 'id');
    }
}
