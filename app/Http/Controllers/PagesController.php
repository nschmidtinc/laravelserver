<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index() {
        $title = "welcome to laravel!";

        return view("index") ->with("title", $title) ;
    }
    public function about() {
        $title = "about us";

        return view("pages.about") ->with("title", $title);

    }
    public function services() {
        $title = "what we do";
        $data = array(
            "title" => "services",
            "services" => ["webDesign", "styling", "front end" ]
        );
        return view("pages.services") ->with($data);
    }
}
