<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $fillable = ['id', 'name'];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
