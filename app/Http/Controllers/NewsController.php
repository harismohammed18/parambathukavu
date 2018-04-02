<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Session;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //function to show news add form
    public function showAddForm()
    {
      return view('admin.news.addForm',['menu'=>'2']);
    }
    //function to save news
    public function saveNews(Request $request)
    {
      $request->validate([
        'newsTitle' => 'required',
        'newsDate' => 'required|date',
        'newsText' => 'required',
        'newsImage' => 'required|mimetypes:image/*'
      ]);
      if($request->hasFile('newsImage'))
      {
        $filename='parambathukavu-'.time().'.'.$request->file('newsImage')->getClientOriginalName().'.'.$request->file('newsImage')->getClientOriginalExtension();
        $request->file('newsImage')->move(public_path('newsImages'), $filename);
        $news = new News;
        $news->title = $request->newsTitle;
        $news->date = $request->newsDate;
        $news->news = $request->newsText;
        $news->image = $filename;
        $news->save();
        Session::flash('success','Saved');
        return back();
      }
    }
    //function to view all available news
    public function viewAllNews()
    {
      $news = News::orderBy('id', 'desc')->get();
      return view('admin.news.showAll',['news'=>$news,'menu'=>'2']);
    }
    //function to show edit form for selected news
    public function editForm($id)
    {
      $news = News::find($id);
      return view('admin.news.editForm',['menu'=>'2','news'=>$news]);
    }
    //function to save updated news
    public function updateNews(Request $request)
    {
      $request->validate([
        'newsTitle' => 'required',
        'newsDate' => 'required|date',
        'newsText' => 'required',
        'id' => 'required|numeric'
      ]);
      $news = News::find($request->id);
      $news->title = $request->newsTitle;
      $news->date = $request->newsDate;
      $news->news = $request->newsText;
      $news->save();
      Session::flash('updated','Saved');
      return redirect()->route('news.view');
    }
    //to delete selected news
    public function delete($id)
    {
       News::where('id','=',$id)->delete();
       Session::flash('success','Saved');
       return redirect()->route('news.view');
    }
}
