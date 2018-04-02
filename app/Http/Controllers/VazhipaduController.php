<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vazhipadu;
use Session;

class VazhipaduController extends Controller
{
  //to show add form
  public function showAddForm()
  {
    return view('admin.vazhipadu.addForm',['menu'=>'3']);
  }
  //function to save
  public function save(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'price' => 'required|numeric',
      'aim' => 'required'
    ]);
    $vazhipadu = new Vazhipadu;
    $vazhipadu->name = $request->name;
    $vazhipadu->price = $request->price;
    $vazhipadu->aim = $request->aim;
    $vazhipadu->save();
    Session::flash('success','Saved');
    return back();
  }
  //function to view all $vazhipadu
  public function viewAll()
  {
    $vazhipadus = Vazhipadu::orderBy('id','desc')->get();
    return view('admin.vazhipadu.showAll',['menu'=>'3','vazhipadus'=>$vazhipadus]);
  }
  //to show edit form
  public function showEditForm($id)
  {
    $vazhipadus = Vazhipadu::find($id);
    return view('admin.vazhipadu.editForm',['menu'=>'3','vazhipadu'=>$vazhipadus]);
  }
  //to save edited vazhipadu
  public function update(Request $request)
  {
    $request->validate([
      'id' => 'required',
      'name' => 'required',
      'price' => 'required|numeric',
      'aim' => 'required'
    ]);
    $vazhipadu = Vazhipadu::find($request->id);
    $vazhipadu->name = $request->name;
    $vazhipadu->price = $request->price;
    $vazhipadu->aim = $request->aim;
    $vazhipadu->save();
    Session::flash('updated','Saved');
    return redirect()->route('vazhipadu.viewAll');
  }
  //to delete selected vazhipadu
  public function remove($id)
  {
    Vazhipadu::where('id','=',$id)->delete();
    Session::flash('success','Saved');
    return redirect()->route('vazhipadu.viewAll');
  }
}
