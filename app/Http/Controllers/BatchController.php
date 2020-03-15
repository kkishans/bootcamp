<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batch;
use DB;
class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches = Batch::all();
        return view('auth.batch.batches',compact('batches'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.batch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data  = new Batch;
        $data->total_seats = request('total_seat');
        $data->remaining_seats = request('total_seat');
        $data->batch_time = request('time');
        $data->courseid = request('c_id');
        $data->save();
       return redirect('/admin/batch');
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
        $batch = Batch::where('bid', $id)->first();
        return view('auth.batch.edit',compact('batch'));
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
        $data  = new Batch;
        $data->total_seats = request('total_seat');
        $data->remaining_seats = request('total_seat');
        $data->batch_time = request('time');
        $data->courseid = request('c_id');
        DB::update('update batches set total_seats = ? ,remaining_seats = ? ,
                    batch_time = ? , courseid = ?  where bid = ?',[$data->total_seats,$data->remaining_seats,$data->batch_time,$data->courseid,$id]);
        return redirect('/admin/batch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from batches where bid  = ?',[$id]);
        return redirect('/admin/batch');
    }
}
