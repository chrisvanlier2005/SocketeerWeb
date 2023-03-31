<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class IntegrationController extends Controller
{
    public function index()
    {
        return view("pages.integrations");
    }
}
