<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request = $request->all();
        $user = new CreateNewUser();
        $user->create($request);
        return response()->json([
            'message' => 'User created successfully',
        ], 201);

    }

    public function resetPassword(Request $request)
    {
        $request = $request->all();
        $user = User::where('email', $request['email'])->first();

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $resetPassword = new ResetUserPassword();
        $resetPassword->reset($user, $request);

        return response()->json([
            'message' => 'Password reset successful',
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
