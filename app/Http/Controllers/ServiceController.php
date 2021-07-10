<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Service::select('id','name','icon')->get();
        return view('backend.services.index',['services' => $rows]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|min:3|max:10|unique:services.name',
            'icon'        => 'required|string',
            'description' => 'required|min:10',
            'status'      => 'required'
        ]);
        Service::create($request->all());
        return redirect()->route('services.index')->with('success','Services Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Service::findOrFail($id);
        return view('backend.services.show',['service' => $row]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Service::find($id);
        return view('backend.services.edit',['service' => $row]);
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
        $request->validate([
            'name'        => 'required|min:3|max:20',
            'icon'        => 'required|string',
            'description' => 'required|min:10',
            'status'      => 'required'
        ]);
        //dd($request->all());
        $row = Service::find($id);
        $row->update($request->all());
        return redirect()->route('services.index')->with('update','Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //check if id exist
        $service = Service::find($id);
        if ($service) {
            $service->destroy($id);
        }else{
            return abort('404');
        }

        return redirect()->route('services.index')->with('msg','Data Deleted Successfully');
    }


}
