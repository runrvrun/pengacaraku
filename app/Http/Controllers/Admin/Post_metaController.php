<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post_metum;
use Illuminate\Http\Request;
use Session;

class Post_metaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $post_meta = Post_metum::paginate(25);

        return view('admin.post_meta.index', compact('post_meta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.post_meta.create');
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
        
        Post_metum::create($requestData);

        Session::flash('flash_message', 'Post_metum added!');

        return redirect('admin/post_meta');
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
        $post_metum = Post_metum::findOrFail($id);

        return view('admin.post_meta.show', compact('post_metum'));
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
        $post_metum = Post_metum::findOrFail($id);

        return view('admin.post_meta.edit', compact('post_metum'));
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
        
        $post_metum = Post_metum::findOrFail($id);
        $post_metum->update($requestData);

        Session::flash('flash_message', 'Post_metum updated!');

        return redirect('admin/post_meta');
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
        Post_metum::destroy($id);

        Session::flash('flash_message', 'Post_metum deleted!');

        return redirect('admin/post_meta');
    }
}
