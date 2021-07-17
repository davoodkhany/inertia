<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia('Dashboard/Index', [
            'foo' => 'bar',
            'family' => 'khany'
        ]);
    }


    public function test(){
        return Inertia('Testing/index');
    }
}
