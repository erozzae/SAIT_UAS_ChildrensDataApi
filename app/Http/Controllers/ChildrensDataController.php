<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChildrensData;
class ChildrensDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $childrensData = childrensData::all();
        $no =0;
        return view('childrensData.index',compact('childrensData','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('childrensData.addData');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $childrensData = new ChildrensData;
        $childrensData->nama = $request->nama;
        $childrensData->jenis_kelamin = $request->jenis_kelamin;
        $childrensData->alamat = $request->alamat;
        $childrensData->ttl = $request->ttl;
        $childrensData->golongan_darah =$request->golongan_darah;
        
        $childrensData->save();
        return redirect('/children');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $childrensData = ChildrensData::find($id);
        return view('childrensData.editData',compact('childrensData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $childrensData = ChildrensData::find($id);
        $childrensData->nama = $request->nama;
        $childrensData->jenis_kelamin = $request->jenis_kelamin;
        $childrensData->alamat = $request->alamat;
        $childrensData->ttl = $request->ttl;
        $childrensData->golongan_darah =$request->golongan_darah;
        
        $childrensData->update();
        return redirect('/children');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $childrensData = ChildrensData::find($id);
        $childrensData->delete();
        return redirect()->back();
    }
}
