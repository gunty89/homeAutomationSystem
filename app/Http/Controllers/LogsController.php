<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Log;


class LogsController extends Controller
{
    public function update(Request $request, $id)
{
    $device = Device::where('deviceId', $id)->first();

    // Update the status
    if ($device->status == 0) {
        $device->status = 1;
        $action = 'Device turned on';
    } elseif ($device->status == 1) {
        $device->status = 0;
        $action = 'Device turned off';
    } else {
        // Handle the case when the device status is neither 0 nor 1
        return back()->withError('Invalid device status');
    }

    // Save the changes
    $device->save();

    // Create a new log entry
    Log::create([
        'deviceId' => $device->deviceId,
        'action' => $action,
        'date' => now(),
    ]);

    // Redirect back to the previous page
    return back();
}

}
