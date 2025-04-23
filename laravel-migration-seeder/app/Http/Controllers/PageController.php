<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $today = date('Y-m-d');
        $trains = Train::whereDate('departure_date', '>=', $today)->get();
        return view("home", compact("trains"));
    }
}
