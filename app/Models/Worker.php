<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Worker extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'workers';
    protected $guarded = false;
}
