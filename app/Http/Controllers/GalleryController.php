<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GalleryName;
use App\GalleryImages;
use Session;
use File;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //to show gallery create form
    public function showAddForm()
    {
      return view('admin.gallery.add',['menu' => '1']);
    }
    //to create gallery eith name
    public function createGalleryName(Request $request)
    {
      $GalleryName = new GalleryName;
      $GalleryName->name = $request->name;
      $GalleryName->save();
      Session::put('galleryNameId',$GalleryName->id);
      return $GalleryName;
    }
    //function to save uploaded images
    public function saveImages(Request $request)
    {
      $request->validate([
     'file' => 'required|mimetypes:image/*',
     ]);
     if($request->hasFile('file')){
       $filename=time().'.'.$request->file('file')->getClientOriginalName().'.'.date('Y-M-D H-i-s').'.'.$request->file('file')->getClientOriginalExtension();
       $request->file('file')->move(public_path('galleryImages'), $filename);
       $image = new GalleryImages;
       $image->imageName = $filename;
       $image->galleryName = Session::get('galleryNameId');
       $image->save();
     }
    }
    //function to show generate form
    public function viewForm()
    {
      $gallery = GalleryName::all();
      return view('admin.gallery.generateForm',['menu'=>'1','galleries'=>$gallery]);
    }
    //to open selected gallery
    public function openGallery(Request $request)
    {
      $request->validate([
        'galleryName' => 'required|numeric'
      ]);
      $images = GalleryName::find($request->galleryName);
      return view('admin.gallery.openGallery',['menu' => '1' , 'images' => $images]);
    }
    //function to delete selected images
    public function deleteImages($id)
    {
      $image = GalleryImages::find($id);
      File::delete(public_path().'/galleryImages'.'/'.$image->imageName);
      GalleryImages::where('id','=',$id)->delete();
      Session::flash('success','Deleted');
      return back();
    }
    //function to delete selected gallery and associated files
    public function deleteGallery($id)
    {
      $images = GalleryName::find($id);
      foreach($images->getImages as $image)
      {
        $image = GalleryImages::find($image->id);
        File::delete(public_path().'/galleryImages'.'/'.$image->imageName);
        GalleryImages::where('id','=',$id)->delete();
      }
      GalleryName::where('id','=',$id)->delete();
      return redirect()->route('gallery.generateForm');
    }
}
