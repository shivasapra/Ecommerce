<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.index')->with('vendors',App\Vendor::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendor = new App\Vendor;
        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->save();

        $user = new App\User;
        $user->name = $vendor->name;
        $user->email = $vendor->email;
        $user->password = bcrypt('pass@123');
        $user->save();

        return redirect()->route('vendors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = App\Vendor::find($id);
        return view('vendor.show')->with('vendor',$vendor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor = App\Vendor::find($id);
        return view('vendor.edit')->with('vendor',$vendor);
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
        $vendor = App\Vendor::find($id);
        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->save();

        return redirect()->route('vendors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        App\Vendor::find($id)->delete();
        return redirect()->back();
    }
}
