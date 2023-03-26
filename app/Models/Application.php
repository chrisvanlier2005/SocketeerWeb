<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Application extends Model
{
    protected $fillable = [
        "app_name",
        "server_id",
        "server_key",
        "client_key",
        "callback",
        "user_id"
    ];

    public function server(): BelongsTo
    {
        return $this->belongsTo(Server::class);
    }

    public function channels(): HasMany
    {
        return $this->hasMany(Channel::class);
    }
}
