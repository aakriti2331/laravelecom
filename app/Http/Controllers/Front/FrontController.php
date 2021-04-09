<?php

namespace App\Http\Controllers\Front;

use App\http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request)
    {
  return view('front.index');
    }


}
