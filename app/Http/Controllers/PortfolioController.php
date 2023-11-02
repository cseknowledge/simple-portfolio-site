<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = File::json(storage_path("data/portfolios.json"));

        return view("portfolio", compact("portfolios"));
    }

    public function show(string $id)
    {
        $projects = Arr::keyBy(File::json(storage_path("data/portfolios.json")), 'id');

        $project = (object) $projects[$id];

        return view("portfolio-details", compact("project"));
    }
}