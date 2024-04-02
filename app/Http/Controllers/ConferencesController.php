<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;


class ConferencesController extends Controller
{
    public function index()
    {
        // Fetch all conferences
        $conferences = Conference::all();

        // Pass the data to the view
        return view('conferences.index', compact('conferences'));
    }
}
