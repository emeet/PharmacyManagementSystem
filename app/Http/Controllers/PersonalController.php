<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal = Personal::all();
        // DD($personal);
        return view('pharmacist.personal')->with('employee', $personal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'pharmacistid' => 'required',
            'userid' => 'required',
            'address' => 'required',
            'number' => 'required',
            'gender' => 'required',
            'position' => 'required',
        ]);

        $personal = new Personal;

        $personal->id = $request->input('pharmacistid');
        $personal->user_id = $request->input('userid');
        $personal->address = $request->input('address');
        $personal->phone_number = $request->input('number');
        $personal->gender = $request->input('gender');
        $personal->position = $request->input('position');

        $personal->save();
        return redirect('personal')->with('success', 'Well done! Data Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Personal::findOrFail($id);
        return view('crud.show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $employee = Personal::findOrFail($id);
        // return view('personal',compact('employee'));
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
        $personal = Personal::FindOrFail($id);
        $this->validate($request,[
            'pharmacistid' => 'required',
            'userid' => 'required',
            'address' => 'required',
            'number' => 'required',
            'gender' => 'required',
            'position' => 'required',
        ]);
        $personal->id = $request->input('pharmacistid');
        $personal->user_id = $request->input('userid');
        $personal->address = $request->input('address');
        $personal->phone_number = $request->input('number');
        $personal->gender = $request->input('gender');
        $personal->position = $request->input('position');

        $personal->save();
        return redirect()->back()->with('notice', 'Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Personal::FindOrFail($id);
        $person->delete();
        return redirect()->back()->with('flash_message', 'Medicine Details deleted successfully');
    }
}
