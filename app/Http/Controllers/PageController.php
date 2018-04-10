<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GalleryName;
use App\News;

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
    //function to show news page
    public function showNewsPage()
    {
      $news = News::latest()->paginate(4);
      return view('pages.news',['news'=>$news]);
    }
    //detailed news view
    public function detailedNews($id)
    {
      $news = News::find($id);
      return view('pages.newsDetailes',['news'=>$news]);
    }
    //function to show Vazhipadu Page
    public function showVazhipaduPage()
    {
      return view('pages.vazhipadu');
    }
}
