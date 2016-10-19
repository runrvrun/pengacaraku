<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Catpage;
use Illuminate\Http\Request;
use Session;

class CatpagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $catpages = Catpage::paginate(25);

        return view('admin.catpages.index', compact('catpages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.catpages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Catpage::create($requestData);

        Session::flash('flash_message', 'Catpage added!');

        return redirect('admin/catpages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $catpage = Catpage::findOrFail($id);

        return view('admin.catpages.show', compact('catpage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $catpage = Catpage::findOrFail($id);

        return view('admin.catpages.edit', compact('catpage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $catpage = Catpage::findOrFail($id);
        $catpage->update($requestData);

        Session::flash('flash_message', 'Catpage updated!');

        return redirect('admin/catpages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Catpage::destroy($id);

        Session::flash('flash_message', 'Catpage deleted!');

        return redirect('admin/catpages');
    }
}
