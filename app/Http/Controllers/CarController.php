<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;


class CarController extends Controller
{
    public function index()
    {
        return Car::all();
    }
}
