<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScoopRequest;
use App\Models\Scoop;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ScoopController extends Controller
{
    public function index()
    {
        $scoops = Scoop::all();
        return Inertia::render("Dashboard/Scoops/Index", [
            "scoops" => $scoops->map(function ($scoop) {
                $dt = Carbon::parse($scoop->created_at);
                $scoop->created = $dt->toDateTimeString();
                return $scoop;
            })
        ]);
    }

    public function show(Scoop $scoop)
    {
        return Inertia::render("Dashboard/Scoops/Show", [
            "scoop" => $scoop
        ]);
    }

    public function create()
    {
        return Inertia::render("Dashboard/Scoops/Create");
    }

    public function store(ScoopRequest $request)
    {
        $scoop = new Scoop();
        $scoop->fill($request->all());
        // if ($request->content) {
        //     $scoop->content = $this->downloadFiles($request->content);
        // }
        $scoop->save();
        return Redirect::route('scoops.index')->with('success', 'Noticia creada con éxito.');
    }

    public function edit(Scoop $scoop)
    {
        return Inertia::render("Dashboard/Scoops/Edit", [
            "scoop" => $scoop
        ]);
    }

    public function update(Request $request, Scoop $scoop)
    {
        $scoop->fill($request->all());
        $scoop->save();
        return Redirect::route('scoops.index')->with('success', 'Noticia actualizada con éxito.');
    }

    public function downloadFiles($content)
    {
        $doc = new \DOMDocument();
        $doc->loadHTML($content);
        $images = $doc->getElementsByTagName('img');
        foreach ($images as $image) {
            $blob = $image->getAttribute('src');
            if (preg_match('/^data:image\/(\w+);base64,/', $blob)) {
                $extension = explode('/', mime_content_type($blob))[1];
                $file = substr($blob, strpos($blob, ',') + 1);
                $file = base64_decode($file);
                $path = "scoops/image-" . time() . ".$extension";
                Storage::disk('public')->put($path, $file);
                $content = str_replace($blob, "storage/$path", $content);
            }
        }
        return $content;
    }
}
