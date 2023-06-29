<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        return view('reservation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $userId = Auth::id();

        $requestData = $request->all();

        $post = new Reservation([
            'phone_number' => $requestData['phone'],
            'check_in_date' => $requestData['checkin'],
            'check_out_date' => $requestData['checkout'],
            'amount_adults' => $requestData['adults'],
            'amount_children' => $requestData['children'],
            'room_id' => $requestData['room'],
            'user_id' => $userId,
        ]);

        // Save the post
        $post->save();

        return redirect('reservation');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
