<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Employee;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $employees = Employee::take(4)->get();
        return view('home', [
            'title' => 'HOME',
            'employees' => $employees
        ]);
    }
}
