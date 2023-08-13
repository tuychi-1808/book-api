<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function journals(){
        return $this->hasMany(Journal::class);
    }

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
