<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poojaas;
use Session;

class PoojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('admin.poojas.addForm',['menu'=>'4']);
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
          'poojaName' => 'required',
          'about' => 'required',
          'picture' => 'required|image'
        ]);
        if($request->hasFile('picture'))
        {
          $filename='parambathukavu-'.time().'.'.$request->file('picture')->getClientOriginalName().'.'.$request->file('picture')->getClientOriginalExtension();
          $request->file('picture')->move(public_path('poojaasImage'), $filename);
          $pooja = new Poojaas;
          $pooja->name = $request->poojaName;
          $pooja->about = $request->about;
          $pooja->image = $filename;
          $pooja->save();
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
        $pooja = Poojaas::orderBy('id','desc')->get();
        return view('admin.poojas.showAll',['menu'=>'4','poojaas'=>$pooja]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pooja = Poojaas::find($id);
      return view('admin.poojas.editForm',['menu'=>'4','pooja'=>$pooja]);
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
          'poojaName' => 'required',
          'about' => 'required',
          'id' => 'required|numeric'
        ]);
        $pooja =  Poojaas::find($request->id);
        $pooja->name = $request->poojaName;
        $pooja->about = $request->about;
        $pooja->save();
        Session::flash('updated','Saved');
        return redirect()->route('pooja.viewAll');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Poojaas::where('id','=',$id)->delete();
        Session::flash('success','Saved');
        return redirect()->route('pooja.viewAll');
    }
}
