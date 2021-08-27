<?php

namespace App\Http\Controllers;

use App\Language;
use App\Page;
use Illuminate\Http\Request;
use Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
       return view('backend.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::all();
        return view('backend.pages.create',compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $page = new Page();
       $page->title = $request->title;
       $page->content = $request->content;
       $page->locale = $request->locale;
       $page->slug = Str::slug($request->title);
        if ($page->save()){
            return redirect()->route('admin.pages.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $page = Page::where('slug',$slug)->first();
        return view('website.pages',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $languages = Language::all();
       return view('backend.pages.edit',compact('page','languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $page->title = $request->title;
        $page->content = $request->content;
        $page->slug = Str::slug($request->title);
        $page->locale = $request->locale;
        if ($page->save()){
            return redirect()->route('admin.pages.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        if ($page->delete()){
            return redirect()->route('admin.pages.index');
        }
    }
}
