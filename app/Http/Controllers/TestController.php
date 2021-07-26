<?php


namespace App\Http\Controllers;


use \Illuminate\Contracts\View\View;

class TestController extends Controller
{
    public function index(): View
    {
        return view('test');
    }
}
