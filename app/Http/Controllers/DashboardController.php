<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Aquí puedes recuperar datos o realizar lógica antes de pasar a la vista
        return view('dashboard'); // Retorna la vista 'dashboard'
    }

    public function showOption1()
    {
        return view('dashboard.option1');
    }

    public function showOption2()
    {
        return view('dashboard.option2');
    }
    public function showOption3()
    {
        return view('dashboard.option3');
    }
    public function showOption4()
    {
        return view('dashboard.option4');
    }
    public function showOption5()
    {
        return view('dashboard.option5');
    }
}
