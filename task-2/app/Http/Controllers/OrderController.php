<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
    public function index()
    {
        return Order::with('manager')
            ->take(50)
            ->get();
    }
}
