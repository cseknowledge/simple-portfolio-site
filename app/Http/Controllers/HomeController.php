<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $experiences = File::json(storage_path("data/experiences.json"));
        $educations = File::json(storage_path("data/educations.json"));

        return view("welcome", compact("experiences", "educations"));
    }

    public function about()
    {
        return view("about");
    }
}