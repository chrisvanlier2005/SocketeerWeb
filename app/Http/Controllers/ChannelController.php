<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    public function store(Request $request){
        $request->validate([
            "channel.name" => "required"
        ]);
        Channel::create([
            "name" => "`"
        ]);
    }
}
