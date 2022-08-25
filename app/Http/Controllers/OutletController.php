<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outlet;
use Session;
use Validator;

class OutletController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outlets = Outlet::get();
        return view('outlet.index', compact('outlets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('outlet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v = Validator::make($request->all(),[
            'name'=>'required',
            'phone'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
        ]);
        if($v->fails()){
            return back()->withErrors($v)->withInput();
        }
        $outlet = New Outlet();
        $outlet->name = $request->name;
        $outlet->phone = $request->phone;
        $outlet->latitude = $request->latitude;
        $outlet->longitude = $request->longitude;
        if($request->hasFile('image')){
            $outlet->image = $request->file('image')->store('assets/uploads/outlet');
        }
        $outlet->save();
        session::flash('success', 'Outlet Created has been Successfully.');
        return redirect()->route('outlets.index');
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
        $outlet = Outlet::find(decrypt($id));
        return view('outlet.edit', compact('outlet'));
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
        $v = Validator::make($request->all(),[
            'name'=>'required',
            'phone'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
        ]);
        if($v->fails()){
            return back()->withErrors($v)->withInput();
        }
        $outlet = Outlet::find($id);
        $outlet->name = $request->name;
        $outlet->phone = $request->phone;
        $outlet->latitude = $request->latitude;
        $outlet->longitude = $request->longitude;
        if($request->hasFile('image')){
            $outlet->image = $request->file('image')->store('assets/uploads/outlet');
        }
        $outlet->save();
        session::flash('success', 'Outlet Updated has been Successfully.');
        return redirect()->route('outlets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $outlet = Outlet::find($id)->delete();
        session::flash('success', 'Outlet Delete has been Successfully.');
        return redirect()->route('outlets.index');
    }
}
