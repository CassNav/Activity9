<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Division;
use App\Models\City;
use App\Models\Conference;

class TeamsController extends Controller
{
    public function index()
    {
        // Fetch all teams with their related division, city, and conference
        $teams = Team::select('teams.*', 'divisions.division_name', 'cities.city', 'conferences.conference_name')
            ->join('divisions', 'teams.division_id', '=', 'divisions.id')
            ->join('cities', 'teams.city_id', '=', 'cities.id')
            ->join('conferences', 'teams.conference_id', '=', 'conferences.id')
            ->get();

        // Pass the data to the view
        return view('teams.index', compact('teams'));
    }
}
