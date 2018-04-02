<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Festivals;
use Session;

class FestivalController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
        return view('admin.festivals.addForm',['menu'=>'5']);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $request->validate([
        'festName' => 'required',
        'about' => 'required',
        'picture' => 'required|image'
      ]);
      if($request->hasFile('picture'))
      {
        $filename='parambathukavu-'.time().'.'.$request->file('picture')->getClientOriginalName().'.'.$request->file('picture')->getClientOriginalExtension();
        $request->file('picture')->move(public_path('festivalImages'), $filename);
        $fest = new Festivals;
        $fest->name = $request->festName;
        $fest->about = $request->about;
        $fest->image = $filename;
        $fest->save();
        Session::flash('success','Saved');
        return back();
      }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show()
  {
      $fest = Festivals::orderBy('id','desc')->get();
      return view('admin.festivals.showAll',['menu'=>'5','fests'=>$fest]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $fest = Festivals::find($id);
    return view('admin.festivals.editForm',['menu'=>'5','fest'=>$fest]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
      $request->validate([
        'festName' => 'required',
        'about' => 'required',
        'id' => 'required|numeric'
      ]);
      $fest =  Festivals::find($request->id);
      $fest->name = $request->festName;
      $fest->about = $request->about;
      $fest->save();
      Session::flash('updated','Saved');
      return redirect()->route('festival.viewAll');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      Festivals::where('id','=',$id)->delete();
      Session::flash('success','Saved');
      return redirect()->route('festival.viewAll');
  }
}
