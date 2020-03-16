<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Batch;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Student;
        $data->fname = request('fname');
        $data->lname = request('lname');
        $data->course = request('course');
        $data->sem = request('sem');
        $data->address = request('address');
        $data->phone = request('mobnum');
        $data->email = request('mail');
        $cname = request('optradio');
        $data->bid = DB::table('batches')->where('cname',$cname)->join('courses','courses.cid','=','batches.courseid')->value('bid');
        $seats = DB::table('batches')->where('bid',$data->bid)->value('remaining_seats');
        if($request->get('joinGroup') == null){
            $data->join = 0;
          } else {
            $data->join = request('joinGroup');
          }

        if($seats > 0)
        {
            DB::update("update batches set remaining_seats = remaining_seats - 1 where remaining_seats > 0 and bid = ? ",[$data->bid]);
            $data->save();
        }
        else 
        {
            return back()->withError($request->input('course'). ' seats are full')->withInput();
        }
        
        

        return redirect('/registration');
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
        //
    }
}
