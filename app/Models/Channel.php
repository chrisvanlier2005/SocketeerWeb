<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Channel extends Model
{
    protected $fillable = [
        "application_id",
        "name"
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }
}
