<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
