<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia('Dashboard/Index', [
            'foo' => 'bar',
        ]);
    }


    public function test(){
        return Inertia('Testing/index');
    }
}
