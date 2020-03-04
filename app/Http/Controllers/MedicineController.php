<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;
use Image;
class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablet = Medicine::all();
        return view('pharmacist.medicine')->with('medicine', $tablet);
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

    // public function search(Request $request)
    // {
    //     $scan = Input::get('name');
    //     if ($scan != ""){
    //         $tablet - Medicine::where('name', 'LIKE', '%' . $SCAN . '%')->get()->all();
    //         if (count($tablet) > 0){
    //             return view('pharmacist.medicine')->with(['medicine' => $tablet, 'name' => $scan]);
    //         }else{
    //             return view('pharmacist.medicine')->with('message', 'No Medicine found for this search!');
    //         }
    //     }else{
    //         return view('pharmacist.medicine')->with('message', 'Your search is empty!');
    //     }
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DD($request->photo);
        $this->validate($request,[
            'medicineid' => 'required',
            'employeeid' => 'required',
            'medicinename' => 'required',
            'description' => 'required',
            'type' => 'required',
            'price' => 'required',
            'manufacturedate' => 'required',
            'expiredate' => 'required',
            'photo' => 'required',
        ]);

        $tablet = new Medicine;

        $tablet->id = $request->input('medicineid');
        $tablet->employee_id = $request->input('employeeid');
        $tablet->name = $request->input('medicinename');
        $tablet->description = $request->input('description');
        $tablet->type = $request->input('type');
        $tablet->price = $request->input('price');
        $tablet->manufacture_date = $request->input('manufacturedate');
        $tablet->expire_date = $request->input('expiredate');
        // DD($request->hasFile('photo'));
        if ($request->hasFile('photo')){
            $albums = $request->file('photo');
            // DD($albums);
            $filename = $albums->getClientOriginalName();
            $location = public_path('images/medicine/' .$filename);
            Image::make($albums)->resize(1400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);
            $tablet->photo = $filename;
            }

        $tablet->save();
        return redirect('medicine')->with('success', 'Medicine Details has been Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $capsule = Medicine::FindOrFail($id);
        return view('crud.medicineShow', compact('capsule'));
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
        $tablet = Medicine::FindOrFail($id);
        $this->validate($request,[
            'medicineid' => 'required',
            'employeeid' => 'required',
            'medicinename' => 'required',
            'description' => 'required',
            'type' => 'required',
            'price' => 'required',
            'manufacturedate' => 'required',
            'expiredate' => 'required',
            'photo' => 'required',
        ]);
        $tablet->id = $request->input('medicineid');
        $tablet->employee_id = $request->input('employeeid');
        $tablet->name = $request->input('medicinename');
        $tablet->description = $request->input('description');
        $tablet->type = $request->input('type');
        $tablet->price = $request->input('price');
        $tablet->manufacture_date = $request->input('manufacturedate');
        $tablet->expire_date = $request->input('expiredate');
        if ($request->hasFile('photo')){
            $albums = $request->file('photo');
            // DD($albums);
            $filename = $albums->getClientOriginalName();
            $location = public_path('images/medicine/' .$filename);
            Image::make($albums)->resize(1400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);
            $tablet->photo = $filename;
            }

        $tablet->save();
        return redirect()->back()->with('notice', 'Medicine Details has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tablet = Medicine::FindOrFail($id);
        $tablet->delete();
        return redirect()->back()->with('flash_message', 'Data has been Deleted Successfully!');
    }
}
