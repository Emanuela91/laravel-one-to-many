<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
    ];

    // funzione per il collegamento 'uno a uno' con person detail 
    public function personDetail()
    {
        return $this->hasOne(PersonDetail::class);
    }

    // funzione per il collegamento 'uno a molti' con posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}