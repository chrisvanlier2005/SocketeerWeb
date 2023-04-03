<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ApplicationActivity;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\View\View;

class OverviewController extends Controller
{
    public function __invoke(): View
    {
        $applicationCount = auth()->user()->applications()->count();
        $latestApp = auth()->user()->applications()->latest()->first();

        $activity = ApplicationActivity::with("application")->whereHas(relation: "application", callback: function (Builder $query) {
            $query->where("id", auth()->id());
        })->limit(10)->latest()->get();

        return view("pages.dashboard", [
            "applications_count"   => $applicationCount,
            "latestApp"            => $latestApp,
            "application_activity" => $activity
        ]);
    }
}
