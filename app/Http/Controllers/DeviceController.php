<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Devices;
use App\SensorsType;
class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($zoneid)
    {

        $devices = Devices::where('zone_id','=', $zoneid)->orderBy('id', 'desc')->get();
        $sensors = SensorsType::all();
        $devicecnt = $devices->count();

     

        return view('users.components.device',compact('devices','sensors'));
     

        
    }

     //setActive

     public function setactive($id){

        $device = Devices::firstOrCreate(['id' => $id]);
        $device->status = 1;
        $device->save();
 
         alert()->success('Status','Active' );
         return redirect()->back();
     }
 
     //InActive
     public function setinactive($id){
 
         $device = Devices::firstOrCreate(['id' => $id]);
         $device->status = 0;
         $device->save();
  
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
        $device = new Devices;
        $zone_id = $request->input('zone_id');
        $device->name = $request->input('name');
        $device->description = $request->input('description');
        $device->sensor_type_id=  $request->input('sensors_type');
        $device->zone_id = $zone_id;
        $device->status =0;
        $device->save();
       

        alert()->success('Success','Device ' . $request->input('name') . ' has been added to your device(s).' );
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
        $device = Devices::firstOrCreate(['id' => $id]);
        $device->name = $request->input('name');
        $device->description = $request->input('description');
        $device->sensor_type_id = $request->input('sensors_type');
        $device->save();
 
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
        $device = Devices::findOrFail($id);
        $device->delete();
        alert()->error('Device Removed!','Device has been removed completely! ' );
        return redirect()->back();
    }
}
