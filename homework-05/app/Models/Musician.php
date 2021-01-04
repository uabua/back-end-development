<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musician extends Model
{
    protected $table = 'musicians';
    protected $fillable = ['id', 'name'];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
