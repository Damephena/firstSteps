<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'First Steps';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $info = array(
            'title' => 'About First Steps',
            'body' => 'First Steps was designed to ease use of regular transactions.'
        );
        return view('pages.about')->with($info);
    }

    public function services(){
        $data = array(
            'title' => 'Services offered by First Steps',
            'services' => ['Data subscription', 'Bills payments', 'Flight bookings', 'Entertainment functions']
        );
        return view('pages.services')->with($data);
    }
}
