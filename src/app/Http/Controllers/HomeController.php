<?php
namespace App\Http\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home/Splash');
    }
}
