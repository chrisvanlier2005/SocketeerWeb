<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Contracts\View\View;

class ApplicationController extends Controller
{
    public function index() : View
    {
        $applications = Application::where("user_id", auth()->id())->get();
        return view("pages.applications", compact("applications"));
    }
}
