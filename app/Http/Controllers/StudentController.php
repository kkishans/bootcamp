<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use App\Batch;
use PDF;    
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
        $data->language = request('optradio');
        $email = DB::table('students')->where('email',$data->email)->value('email');
        $seats = DB::table('seats')->where('cname',$data->course)->value('available_seats');

        if ($data->language == null) {
            return back()->withError('Please select language...')->withInput();
        }

        if ($email != null) {
            return back()->withError($request->input('mail'). ' email already exists...')->withInput();
        }
        if($request->get('joinGroup') == null){
            $data->join = 0;
          } else {
            $data->join = request('joinGroup');
          }

        if($seats > 0)
        {
            DB::update("update seats set available_seats = available_seats - 1 , allocated_seats = allocated_seats +1 where available_seats > 0 and cname = ? ",[$data->course]);
            $data->save();
        }
        else 
        {
            return back()->withError($request->input('course'). ' seats are full')->withInput();
        }
        
        
        $email = $data->email;
        return view('registered',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($email)
    {
        $student = Student::where('email', $email)->first();
        //return view('makepdf',compact('student'));
        $pdf = PDF::loadView('makepdf', compact('student'));  
        return $pdf->download('Confirmation Ticket.pdf');
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
