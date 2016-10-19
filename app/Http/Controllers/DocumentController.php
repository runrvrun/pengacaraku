<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Catpage;
use App\Post;
use App\Post_metum;
use App\Document;
use App\Document_metum;
use App\Category;

class DocumentController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($permalink) {
        $doc = Document::where('slug', $permalink)->first();
        return view('pages.document')->with('doc',$doc);
    }    
    
    public function category($permalink) {        
        $category = Category::where('slug', $permalink)->first();
        $posts = Post_metum::get()->where('meta_name', '=', 'post_category')->where('meta_value', '=', $category->id);
        $catpage = Catpage::where('slug', $permalink)->first();
        $docs = Document_metum::get()->where('meta_name', '=', 'document_category')->where('meta_value', '=', $category->id);
        return view('pages.doccat')->with('catpage',$catpage)->with('posts',$posts)->with('docs',$docs);
    }    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
