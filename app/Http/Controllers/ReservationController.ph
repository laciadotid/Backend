<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $reservations = Reservation::orderByDesc('created_at')->get();
        // return view('reservations.index', compact('reservations'));
        return view('reservations.index');
    }

    public function history()
    {
        $histories = Reservation::where('user_id', Auth::user()->id)->get();
        return view('reservations.history', compact('histories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $services = Service::all();
        // return view('reservations.create', compact('services'));
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'pet_name' => 'required|max:255',
        //     'pet_type' => 'required|max:255',
        //     'pet_gender' => 'required',
        //     'service_id' => 'required',
        // ]);

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'metaDescription' => 'required|max:255',
            'featuredImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|max:255',
            'content' => 'required|longText',
            'post_author' => 'required|integer|between:0,18446744073709551615',
            'post_category' => 'required|integer|between:0,18446744073709551615',
        ]);

        $reservation = new Reservation();
        $reservation->pet_name = $request->pet_name;
        $reservation->pet_type = $request->pet_type;
        $reservation->pet_gender = $request->pet_gender;
        $reservation->service_id = $request->service_id;
        $reservation->user_id = Auth::user()->id;
        $reservation->save();
        return redirect()->route('reservations.history');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
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
        $reservation = Reservation::find($id);
        $services = Service::all();
        return view('reservations.edit', compact('reservation', 'services'));
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
        $validator = Validator::make($request->all(), [
            'pet_name' => 'required|max:255',
            'pet_type' => 'required|max:255',
            'pet_gender' => 'required',
            'service_id' => 'required',
        ]);

        $reservation = Reservation::find($id);
        $reservation->pet_name = $request->pet_name;
        $reservation->pet_type = $request->pet_type;
        $reservation->pet_gender = $request->pet_gender;
        $reservation->service_id = $request->service_id;
        $reservation->user_id = Auth::user()->id;
        $reservation->save();
        return redirect()->route('reservations.history');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param  string  $status
     * @return \Illuminate\Http\Response
     */
    public function updateStatus($id, $status)
    {
        $reservation = Reservation::find($id);
        $reservation->status = $status;
        $reservation->save();
        return redirect()->route('reservations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect()->route('reservations.history');
    }
}
