<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index() {

      $data = [];
      $data['name'] = "keiji";
      $data['years'] = "26";

      return view('practice', $data);
    }
}
