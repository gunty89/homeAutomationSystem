<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Log;


class ArduinoController extends Controller
{
    public function handleUpdate(Request $request){
         // Retrieve the necessary data from the request
    $deviceId = $request->input('deviceId');
    $status = $request->input('status');

    // Update the device status
    $device = Device::find($deviceId);
    if ($device) {
        $device->status = $status;
        $device->save();

        // Create a new log entry
        Log::create([
            'deviceId' => $device->deviceId,
            'action' => ($status == 1) ? 'Device turned on' : 'Device turned off',
            'date' => now(),
        ]);

        return response()->json(['message' => 'Update successful']);
    }

    return response()->json(['message' => 'Device not found'], 404);
    }
    //
}
