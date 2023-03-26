<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\CreateApplicationAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicationRequest;
use App\Models\Application;
use App\Models\Server;
use Illuminate\Contracts\View\View;

class ApplicationController extends Controller
{
    public function index(): View
    {
        $applications = Application::where("user_id", auth()->id())->get();
        return view("pages.applications.index", compact("applications"));
    }

    public function show(Application $application){
        return view("pages.applications.show", compact("application"));
    }

    public function create(): View
    {
        $servers = Server::all();
        return view("pages.applications.create", compact('servers'));
    }

    public function store(ApplicationRequest $request, CreateApplicationAction $action){
        $action->handle($request->validated());
        return to_route("applications.index")->with("success", "Application created successfully");
    }
}
