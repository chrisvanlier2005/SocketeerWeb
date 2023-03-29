<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class IntegrationController extends Controller
{
    //
    public function index()
    {
        dd(Storage::json("integrations.json"));
    }
}
