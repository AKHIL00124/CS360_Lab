<?php
 
namespace App\Http\Controllers;
 
use Illuminate\View\View;
 
class HomeController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(): View
    {
        return view('index');
    }
    
    public function contact(): View
    {
        return view('contact');
    }
}