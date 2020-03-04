<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Supplier;
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('pharmacist.supplier')->with('supplier', $supplier);
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
            'supplierid' => 'required',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'number' => 'required',
            'country' => 'required',
        ]);

        $vendor = new Supplier;

        $vendor->id = $request->input('supplierid');
        $vendor->name = $request->input('name');
        $vendor->address = $request->input('address');
        $vendor->email = $request->input('email');
        $vendor->contact_number = $request->input('number');
        $vendor->country = $request->input('country');

        $vendor->save();
        return redirect('supplier')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supply = Supplier::FindOrFail($id);
        return view('crud.supplierShow', compact('supply'));
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
        $supply = Supplier::FindOrFail($id);
        $this->validate($request,[
            'supplierid' => 'required',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'number' => 'required',
            'country' => 'required',
        ]);

        $supply->id = $request->input('supplierid');
        $supply->name = $request->input('name');
        $supply->address = $request->input('address');
        $supply->email = $request->input('email');
        $supply->contact_number = $request->input('number');
        $supply->country = $request->input('country');

        $supply->save();
        return redirect()->back()->with('notice', 'Information has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supply = Supplier::FindOrFail($id);
        $supply->delete();
        return redirect()->back()->with('flash_message', 'Information has been Deleted Successfully!');
    }
}
