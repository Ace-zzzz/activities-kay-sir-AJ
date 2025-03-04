<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    // protected $guarded = ['description'];
    // protected $hidden  = ['description'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}