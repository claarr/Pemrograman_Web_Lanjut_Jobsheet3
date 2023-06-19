<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('pages.home', ['active' => 'home']);
    }

    public function todaySpecial() {
        return view('pages.todaySpecial', ['active' => 'todaySpecial']);
    }

    public function menu() {
        return view('pages.menu', ['active' => 'menu']);
    }

    public function contact() {
        return view('pages.contact', ['active' => 'contact']);
    }
}
