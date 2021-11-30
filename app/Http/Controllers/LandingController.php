<?php

namespace App\Http\Controllers;

use App\Models\Scoop;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LandingController extends Controller
{
    public function index(){
        $scoops = Scoop::latest()->take(3)->get();
        return Inertia::render("Landing/Index", [
            "scoops" => $scoops
        ]);
    }
}
