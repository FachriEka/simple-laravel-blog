<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User, Contents};

class MainController extends Controller
{
    public function index(){
      $contents = Contents::with('user')
        ->pagination(10);
      return view('contents._home', compact('contents'));
    }
}
