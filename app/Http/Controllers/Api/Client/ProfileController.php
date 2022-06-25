<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Client\Profile\UpdateProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        return response()->json([
            'username' => $user->name,
            'phone' => $user->phone,
            'location' => $user->location
        ]);
    }
    public function update(UpdateProfileRequest $request)
    {
        if (auth()->user()) {
            $user = auth()->user();
            $user->update([]);
            $user->name = $request->name;
            $user->location = $request->location;
            $user->phone = $request->phone;
            $user->save();

            return response()->json([
                'message' => 'data updated successfully',
                'username' => $user->name,
                'phone' => $user->phone,
                'location' => $user->location
            ]);
        }
    }
}
