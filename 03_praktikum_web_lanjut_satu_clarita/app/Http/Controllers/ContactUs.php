<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUs extends Controller
{
    public function index(){
        return view('contact', [
            'insta' => url('https://www.instagram.com/clarr.xx/?hl=id'),
            'mail' => 'claritapuyrianggtaeni@gmail.com',
            'git' => 'claarr'
        ]);
    }
}
