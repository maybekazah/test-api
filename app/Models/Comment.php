<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'commentable_id',
        'commentable_type',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
    public function commentable(): MorphTo

    {
        return $this->morphTo();
    }
}
