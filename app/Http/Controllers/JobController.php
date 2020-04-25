<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::paginate(5);
        return view('welcome', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addjob');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
            'email'=>'required|max:255',
            'age'=>'required|max:255',
            'phone'=>'required|max:255',
            'designation'=>'required|max:255',
            'address'=>'required|max:255',
            'city'=>'required|max:255',
            'state'=>'max:255',
            'zip'=>'required|max:255',
        ]);

        $job = new Job;
        $job->first_name = $request->firstname;
        $job->last_name = $request->lastname;
        $job->email = $request->email;
        $job->phone = $request->phone;
        $job->age = $request->age;
        $job->designation = $request->designation;
        $job->city = $request->city;
        $job->address = $request->address;
        $job->state = $request->state;
        $job->zip = $request->zip;

        $job->save();

        return redirect(route('home'))->with('Msg',"Job Addedd Successfully");



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
        $job = Job::find($id);
        return view('edit', compact('job'));
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
        $this->validate($request,[
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
            'email'=>'required|max:255',
            'age'=>'required|max:255',
            'phone'=>'required|max:255',
            'designation'=>'required|max:255',
            'address'=>'required|max:255',
            'city'=>'required|max:255',
            'state'=>'max:255',
            'zip'=>'required|max:255',
        ]);

        $job = Job::find($id);
        $job->first_name = $request->firstname;
        $job->last_name = $request->lastname;
        $job->email = $request->email;
        $job->phone = $request->phone;
        $job->age = $request->age;
        $job->designation = $request->designation;
        $job->city = $request->city;
        $job->address = $request->address;
        $job->state = $request->state;
        $job->zip = $request->zip;

        $job->save();

        return redirect(route('home'))->with('Msg',"Job Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Job::find($id)->delete();
        return redirect(route('home'))->with('Msg','Job Deleted Successfully');
    }
}
