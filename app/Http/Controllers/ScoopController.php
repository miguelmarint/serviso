<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScoopRequest;
use App\Models\Scoop;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ScoopController extends Controller
{
    public function index()
    {
        $scoops = Scoop::all();
        return Inertia::render("Dashboard/Scoops/Index", [
            "scoops" => $scoops
        ]);
    }

    public function create()
    {
        return Inertia::render("Dashboard/Scoops/Create");
    }

    public function store(ScoopRequest $request)
    {
        dd($request->all());
    }
}
