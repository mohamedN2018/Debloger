<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index() {

        return view('pages.index');
    }

    public function about() {

        return view('pages.about');
    }

    public function services() {

        $data = [
            'title' => ' The following services are provided: ',
            'services' => [
                'programming','automation',' web desing'
            ]
        ];
        return view('pages.services')->with($data);
    }

    public function News() {

        return view('pages.News');
    }

    public function menu() {

        return view('pages.menu');
    }

    public function carousel() {

        return view('pages.carousel');
    }


    public function login() {

        return view('auth.login');
    }

    public function register() {

        return view('auth.register');
    }

    public function verify() {

        return view('auth.verify');
    }

    public function dashboard() {

        return view('dashboard');
    }

    public function messaging() {

        return view('messaging.messaging');
    }

}
