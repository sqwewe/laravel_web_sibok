<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Hero extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'heroes';
    protected $guarded = false;
}
