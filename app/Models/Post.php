<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'posts';
    protected $guarded = false;

    public function category()
    {
        return $this->belongsTo(Categoty::class, 'categoty_id', 'id');
    }
}
