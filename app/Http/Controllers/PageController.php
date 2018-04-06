<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //function to view history page
    public function showHistoryPage()
    {
      return view('pages.history');
    }
    //function to generate gallery
    public function showGalleryPage()
    {
      return view('pages.gallery');
    }
}
