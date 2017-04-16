<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {

      $date = [];
      $data["first_name"] = "Luke";
      $data["last_name"] = "skywaker";

      $data["myname"] = "橋本圭司";
      return view('pages.about', $data);
    }
}
