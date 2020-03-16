<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seat;
use DB;
class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats = Seat::all();
        return view('auth.seat.seats',compact('seats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('auth.seat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data  = new Seat;
        $data->cname = request('cname');
        $data->total_seats = request('total_seat');
        $data->available_seats = request('total_seat');
        $data->allocated_seats = 0;
        $data->save();
       return redirect('/admin/seat');
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
        $seat = Seat::where('s_id', $id)->first();
        return view('auth.seat.edit',compact('seat'));
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
        $data  = new Seat;
        $dat->cname = request('cname');
        $data->total_seats = request('total_seat');
        $data->available_seats = request('available_seats');
        $dat->allocated_seats = request('allocated_seats');
        DB::update('update batches set cname = ? , total_seats = ? , available_seats = ? ,
                    allocated_seats = ?  where s_id = ?',[$data->cname , $data->total_seats,$data->available_seats,$data->allocated_seats,$id]);
        return redirect('/admin/seat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::delete('delete from seats where s_id  = ?',[$id]);
        return redirect('/admin/seat');
    }

    /**
     * Increment the seats from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function up($id)
    {
        DB::update('update seats set total_seats = total_seats + 1, available_seats = available_seats +1 where s_id = ?',[$id]);
        return redirect('/admin/seat');
    }

    /**
     * Decreament the seats from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function down($id)
    {
        DB::update('update seats set total_seats = total_seats - 1, available_seats = available_seats - 1 where s_id = ?',[$id]);
        return redirect('/admin/seat');
    }

}
