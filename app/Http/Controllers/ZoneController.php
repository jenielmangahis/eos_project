<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Houses;
use App\Zones;
use Auth;
class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($houseid)
    {
        $userId = Auth::id();
        $house = Houses::where('id','=',$houseid)
                        ->where('user_id','=',$userId)->get();
        $zones  = Zones::where('house_id','=',$houseid)
                       ->where('user_id','=',$userId)->orderBy('id', 'desc')->get();

        $houseCnt = $house->count();

       

        if($houseCnt <= 0){
            return view('notfound');
        }

        else{

           // dd($zoneCount);
        return view('users.components.zone',compact('house','zones'));
     
        }

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

     //setActive

     public function setactive($id){
        $userId = Auth::id();
        $zone = Zones::firstOrCreate(['id' => $id]);
        $zone->status = 1;
        $zone->save();
 
         alert()->success('Status','Active' );
         return redirect()->back();
     }
 
     //InActive
     public function setinactive($id){
 
         $zone = Zones::firstOrCreate(['id' => $id]);
         $zone->status = 0;
         $zone->save();
  
          alert()->warning('Status','InActive' );
          return redirect()->back();
      }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $house_id)
    {
        $zone = new Zones;
 
       
       
        $userId = Auth::id();
        $zone->user_id = $userId;
        $zone->house_id = $house_id;
        $zone->name = $request->input('name');
        $zone->description = $request->input('description');
        $zone->status=  0;
        $zone->save();
       
       
        alert()->success('Success','Zone ' . $request->input('name') . ' has been added.' );
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
        
        $zone = Zones::firstOrCreate(['id' => $id]);
        $zone->name = $request->input('name');
        $zone->description = $request->input('description');
        $zone->save();
 
        alert()->success('Success','Zone record has been updated! ' );
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
        $zone = Zones::findOrFail($id);
        $zone->delete();
        alert()->error('Zone Removed!','Zone has been removed completely! ' );
        return redirect()->back();
    }
}
