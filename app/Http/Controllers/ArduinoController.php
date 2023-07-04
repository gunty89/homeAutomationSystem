<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Log;
use App\Models\SensoryData;

class ArduinoController extends Controller
{
    public function handleUpdate(Request $request)
    {


        $incomingPacket = $_REQUEST["packet"];
        $deviceData = (explode(":", $incomingPacket));
        

        SensoryData::create([
            'smarDeviceId' => 76842,
            'temperature' => $deviceData[0],
            'lightLevel' => $deviceData[1],
            'humidity' => $deviceData[2],
            'collectedTime' => $deviceData[3],
        ]);


         $devices = Device::whereIn('id', [1, 2, 3, 4])->get();

         foreach ($devices as $index => $device) {
             $status = $deviceData[$index + 4];
             $device->status = $status;
             $device->save();
         }



        return response()->json(['message' => 'Device not found'], 404);
    }
    //
}
