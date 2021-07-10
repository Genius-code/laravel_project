<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Team::select('id','name','job','twitter_link','facebook_link','linkedin_link')->get();
        return view('backend.teams.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.teams.create');
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
            'name'          => 'required|string|min:3',
            'job'           => 'required|string|min:3',
            'twitter_link'  => 'required|string',
            'facebook_link' =>'required|string',
            'linkedin_link' => 'required|string',
            'status'        => 'required'
        ]);
        $teams =Team::create($request->all());
        return redirect()->route('teams.index')->with('success','Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Team::findOrFail($id);
        return view('backend.teams.show',['team' => $row]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        if ($team) {
            return view('backend.teams.edit',compact('team'));
        } else {
            return abort(404);
        }

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
        $team = Team::find($id);
        $validate = $request->validate([
            'name'          => 'required|string|min:3',
            'job'           => 'required|string|min:3',
            'twitter_link'  => 'required|string',
            'facebook_link' => 'required|string',
            'linkedin_link' => 'required|string',
            'status'        => 'required'
        ]);

            $team->update($request->all());
            return redirect()->route('teams.index',compact('team'))->with('update','Data Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        if ($team) {
            Team::destroy($id);
            return redirect()->route('teams.index')->with('del','Data Deleted Successfully');
        } else {
            return abort(404);
        }
    }
}
