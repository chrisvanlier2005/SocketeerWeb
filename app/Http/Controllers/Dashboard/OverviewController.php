<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class OverviewController extends Controller
{
    public function __invoke(): View
    {
        $applicationCount = auth()->user()->applications()->count();
        $latestApp = auth()->user()->applications()->latest()->first();
        return view("pages.dashboard", [
            "applications_count" => $applicationCount,
            "latestApp" => $latestApp
        ]);
    }
}
