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
        $rooms = Room::all();
        return view('device', compact('devices', 'rooms'));
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
        // dd($request->input('state'));
        $this->authorize('deviceCreate');
        $validatedData = $request->validate([
            'roomId' => 'required',
            'deviceName' => 'required',
        ]);

            // Create a new device instance
            $device = new Device();
            $device->smartDeviceId = 76842;
            $device->roomId = $request->input('roomId');
            $device->name = $request->input('deviceName');
            if ($request->input('deviceName') == 'Bulb') {
                $device->model = 'Round';
            } elseif ($request->input('deviceName') == 'Door') {
                $device->model = 'Sliding';
            } elseif ($request->input('deviceName') == 'Fan') {
                $device->model = 'Ceiling';
            }elseif($request->input('deviceName') == 'Switch'){
                $device->model = 'Smart';
            }
            $device->state = 0;

            // Save the device to the database
            $device->save();
            return redirect()->back()->with('success', 'Device created successfully');

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
