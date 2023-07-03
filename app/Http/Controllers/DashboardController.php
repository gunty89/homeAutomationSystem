<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Log;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::where('roomId', 1)->get();
        // echo $devices;
        return view('room.dashboard', compact('devices'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id == 2) {
            $devices = Device::where('roomId', 2)->get();
            return view('room.master', compact('devices'));
        } elseif ($id == 3) {
            $devices = Device::where('roomId', 3)->get();
            return view('room.store',  compact('devices'));
        }
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
        $device = Device::where('deviceId', $id)->first();

        // Update the status
        if ($device->status == 0) {
            $device->status = 1;
            if ($device->name == 'Fan') {
                $action = 'Fan turned off';
            }elseif($device->name == 'Bulb') {
                $action = 'Bulb turned off';
            }elseif($device->name == 'Door'){
                $action = 'Door Closed';
            }else{

            }
        } elseif ($device->status == 1) {
            $device->status = 0;
            if ($device->name == 'Fan') {
                $action = 'Fan turned off';
            }elseif($device->name == 'Bulb') {
                $action = 'Bulb turned off';
            }elseif($device->name == 'Door'){
                $action = 'Door Closed';
            }else{

            }
        } else {
            // Handle the case when the device status is neither 0 nor 1
            return back()->withError('Invalid device status');
        }

        // Save the changes
        $device->save();

        // Create a new log entry
        Log::create([
            'userId' => auth()->user()->userId,
            'deviceId' => $device->deviceId,
            'action' => $action,
            'date' => now(),
        ]);

        // Redirect back to the previous page
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {






    }
}
