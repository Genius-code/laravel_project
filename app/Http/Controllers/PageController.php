<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Page::select('id','name','link','order','status')->get();
        return view('backend.pages.index',['pages' => $rows]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Responsere
     */
    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'name' => 'bail|required|string|unique:pages|min:4',
            'link' => 'bail|required|string|unique:pages',
            'order' => 'bail|required|integer|unique:pages',
            'status' => 'required'
        ]);
        Page::create($request->all());
        return redirect()->route('pages.index')->with('success','Page Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Page::findOrFail($id);
        return view('backend.pages.show',['page' => $row]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        if ($page) {
            return view('backend.pages.edit',['page' => $page]);
        } else {
            return redirect()->route('pages.index');
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
        $page = Page::find($id);

            $request->validate([
                'name' => 'required',
                'link' => 'required',
                'order' => 'required',
                'status' => 'required',
            ]);
            $page->update($request->all());
            return redirect()->route('pages.index')->with('update','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        if ($page) {
            Page::destroy($id);
            return redirect()->route('pages.index')->with('del','Page Deleted Successfully');
        } else {
            return abort('404');
        }
    }
}
