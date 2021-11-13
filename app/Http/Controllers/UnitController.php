<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
class UnitController extends Controller
{
    public function index(){
        $units = Unit::orderByRaw('unit_type, description')->limit(100)->get();
        return view('units.index', ['units' => $units]);
    }
}
