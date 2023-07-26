<?php

namespace App\Http\Controllers\Site;
use Illuminate\Routing\Controller;

class SiteController extends Controller
{

    public function index()
    {
       return view('welcome');
    }
    public function contact()
    {
       return view('site/contact');
    }

}
