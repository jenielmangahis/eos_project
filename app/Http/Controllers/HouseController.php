<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Houses;
use Auth;
class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        $houses = Houses::where('user_id',$userId)->orderBy('id', 'desc')->get();

       
        return view('users.components.house',compact('houses','userId'));
    }

    //setActive

    public function setactive($id){

       $house = Houses::firstOrCreate(['id' => $id]);
       $house->status = 1;
       $house->save();

        alert()->success('Status','Active' );
        return redirect()->back();
    }

    //InActive
    public function setinactive($id){

        $house = Houses::firstOrCreate(['id' => $id]);
        $house->status = 0;
        $house->save();
 
         alert()->warning('Status','InActive' );
         return redirect()->back();
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $house = new Houses;
        $userId = Auth::id();
        $house->user_id = $userId;
        $house->name = $request->input('name');
        $house->description = $request->input('description');
        $house->location=  $request->input('location');
        $house->status=  0;
        $house->save();

        alert()->success('Success','House ' . $request->input('name') . ' has been added to your records.' );
        return redirect()->back();
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
        //
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


        $house = Houses::firstOrCreate(['id' => $id]);
        $house->name = $request->input('name');
        $house->description = $request->input('description');
        $house->location = $request->input('location');
        $house->save();
 
        alert()->success('Success','record has been updated! ' );
        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
