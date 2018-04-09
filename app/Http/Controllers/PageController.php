<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GalleryName;

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
    //function to get gallery names
    public function getGalleryNames()
    {
      return GalleryName::all();
    }
    //get Gallery Images For Selected Gallery
    public function getGalleryImagesForSelectedGallery($id)
    {
      return GalleryName::find($id)->getImages;
    }
}
