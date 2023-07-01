<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Room;
use Illuminate\Http\Request;
use illuminate\Database\Eloquent\SoftDeletes;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::all();
        $roomIds = Room::all();
        return view('device', compact('devices', 'roomIds'));
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
        $this-> authorize('deviceCreate');

        $validatedData = $request->validate([
            'room' => 'required',
            'name' => 'required|max:255',
            'model' => 'required|max:255',
            'state' => 'required|max:255',
        ]);

        // Create a new device instance
        $device = new Device();
        $device->smartDeviceId = 76842;
        $device->name = $request->input('name');
        $device->model = $request->input('model');
        $device->state = $request->input('state');


        // Save the device to the database
        $device->save();
        return redirect()->back()->with('success', 'device created successfully');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this-> authorize('deviceDelete');
        $device = Device::where('deviceId', $id)->first();
        $device->status = 2;
        $device->save();


        //
    }
}
