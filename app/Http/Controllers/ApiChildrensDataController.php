<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChildrensData;
class ApiChildrensDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllData()
    {
        $childrensData = ChildrensData::all();
        
        return response()->json(['allChildrensData'=>$childrensData]);
    }

   public function getDataById($id){
       $childrensData = ChildrensData::find($id);

       if(is_null($childrensData)){
            return response()->json(['message'=>'data not found',404]);
       }
       else{
           return response()->json(['ChildrenDataById'=>$childrensData]);
       }

  
   }
   public function addData(Request $request){
    //    $childrensData = ChildrensData::create($request->all());

       $childrensData = new ChildrensData;
       $childrensData->nama = $request->nama;
       $childrensData->jenis_kelamin =  $request-> jenis_kelamin;
       $childrensData->alamat = $request->alamat;
       $childrensData->ttl = $request->ttl;
       $childrensData->golongan_darah =$request->golongan_darah;
       $childrensData->save();

       return response($childrensData,201);
   }

   public function updateData(Request $request, $id){
       $childrensData = ChildrensData::find($id);

       if(is_null($childrensData)){
        return response()->json(['message'=>'data not found',404]);
       }
    //    $childrensData->nama = $request->nama;
    //    $childrensData->jenis_kelamin = $request->jenis_kelamin;
    //    $childrensData->alamat = $request->alamat;
    //    $childrensData->ttl = $request->ttl;
    //    $childrensData->golongan_darah =$request->golongan_darah;
       
       $childrensData->update($request->all());

       return response($childrensData, 200);
   }

   public function destroy($id){
        $childrensData = ChildrensData::find($id);
        if(is_null($childrensData)){
            return response()->json(['message'=>'data not found',404]);
       }
       else{
        
        $childrensData->delete();
        return response()->json(['message'=>'deleted data sucessfully']);
       }
       
   }
}
