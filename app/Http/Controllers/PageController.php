<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GalleryName;
use App\News;
use App\Vazhipadu;
use App\Poojaas;

class PageController extends Controller
{
    //function to show welcome page
    public function showWelcomePage()
    {
      $news = News::latest()->take(3)->get();
      return view('welcome',['news' => $news]);
    }
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
    //to show all vazhipadu namespace
    public function getAllVazhipadu()
    {
      return Vazhipadu::select('id','name','price')->get();
    }
    //to view details of selected vazhipadu
    public function getVazhipaduDetails($id)
    {
      return Vazhipadu::find($id);
    }
    //show all poojaas page
    public function showPoojaas()
    {
      return view('pages.poojaas');
    }
    //details of all poojaas
    public function getPoojaas()
    {
      return Poojaas::select('name','id','image')->get();
    }
    //details of selected pooja
    public function getPoojaDetails($id)
    {
      return Poojaas::find($id);
    }

}
