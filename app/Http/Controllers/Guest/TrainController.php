<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Hat::all());
        $trains = Train::orderBy('id')->get();
        return view('guests.trains.index', compact('trains'));
    }
}
