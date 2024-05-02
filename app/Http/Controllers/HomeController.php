<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data['title'] = "Accueil";
        return view("main.home", $data);
    }

    public function about()
    {
        $data['title'] = "A propos";
        return view("main.about", $data);
    }

    public function contact()
    {
        $data['title'] = "Contacter";
        return view("main.contact", $data);
    }

    public function courses()
    {
        $data['title'] = "Les Formations";
        return view("main.courses", $data);
    }
}
