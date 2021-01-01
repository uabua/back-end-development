<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgrammingLanguage extends Model
{
    protected $table = 'programming_languages';
    protected $fillable = ['id', 'name'];
}
