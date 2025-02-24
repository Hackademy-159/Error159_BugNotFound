<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ad extends Model
{
    protected $fillable = ['title','price','description','status','color','user_id',];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
