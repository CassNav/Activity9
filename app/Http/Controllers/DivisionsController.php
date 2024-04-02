<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;

class DivisionsController extends Controller
{
    public function index()
    {
        $divisions = Division :: all();
        return view('division.index', compact('division'));
    }
}
