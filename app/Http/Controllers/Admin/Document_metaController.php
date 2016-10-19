<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Document_metum;
use Illuminate\Http\Request;
use Session;

class Document_metaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $document_meta = Document_metum::paginate(25);

        return view('admin.document_meta.index', compact('document_meta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.document_meta.create');
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
        
        Document_metum::create($requestData);

        Session::flash('flash_message', 'Document_metum added!');

        return redirect('admin/document_meta');
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
        $document_metum = Document_metum::findOrFail($id);

        return view('admin.document_meta.show', compact('document_metum'));
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
        $document_metum = Document_metum::findOrFail($id);

        return view('admin.document_meta.edit', compact('document_metum'));
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
        
        $document_metum = Document_metum::findOrFail($id);
        $document_metum->update($requestData);

        Session::flash('flash_message', 'Document_metum updated!');

        return redirect('admin/document_meta');
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
        Document_metum::destroy($id);

        Session::flash('flash_message', 'Document_metum deleted!');

        return redirect('admin/document_meta');
    }
}
