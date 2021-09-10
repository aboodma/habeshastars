<?php

namespace App\Http\Controllers;

use App\WebsiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WebsiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $web_settings = WebsiteSetting::first();
        return view('backend.homepage.website_setting',compact('web_settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request->all();

        $website_settings = WebsiteSetting::first();
        $website_settings->social_facebook = $request->social_facebook;
        $website_settings->social_instagram = $request->social_instagram;
        $website_settings->social_linkedin = $request->social_linkedin;
        $website_settings->social_pinterest = $request->social_pinterest;
        $website_settings->social_twitter = $request->social_twitter;

        $website_settings->website_default_currency = $request->website_default_currency;
        $website_settings->website_default_language = $request->website_default_language;

        $website_settings->website_name_ar = $request->website_name_ar;
        $website_settings->website_name_en = $request->website_name_en;
        $website_settings->website_name_tr = $request->website_name_tr;
        $website_settings->website_name_et = $request->website_name_et;
        $website_settings->website_name_er = $request->website_name_er;

        $website_settings->website_description_ar = $request->website_description_ar;
        $website_settings->website_description_en = $request->website_description_en;
        $website_settings->website_description_tr = $request->website_description_tr;
        $website_settings->website_description_et = $request->website_description_et;
        $website_settings->website_description_er = $request->website_description_er;

        $website_settings->website_keywords_ar = $request->website_keywords_ar;
        $website_settings->website_keywords_en = $request->website_keywords_en;
        $website_settings->website_keywords_tr = $request->website_keywords_tr;
        $website_settings->website_keywords_et = $request->website_keywords_et;
        $website_settings->website_keywords_er = $request->website_keywords_er;

        $website_settings->provider_contract_ar = $request->provider_contract_ar;
        $website_settings->provider_contract_en = $request->provider_contract_en;
        $website_settings->provider_contract_tr = $request->provider_contract_tr;
        $website_settings->provider_contract_et = $request->provider_contract_et;
        $website_settings->provider_contract_er = $request->provider_contract_er;

        $website_settings->customer_contract_ar = $request->customer_contract_ar;
        $website_settings->customer_contract_en = $request->customer_contract_en;
        $website_settings->customer_contract_tr = $request->customer_contract_tr;
        $website_settings->customer_contract_et = $request->customer_contract_et;
        $website_settings->customer_contract_er = $request->customer_contract_er;
        if ($request->has('website_logo_ar')) {
            $random = Str::random(40)."ar";
            $logo_ar = $request->file('website_logo_ar');
            $logo_ar_file = $logo_ar->getClientOriginalName();
            $newName = explode('.',$logo_ar_file);
            $newName = $random.'.'.$logo_ar->extension();
            $fil= $logo_ar->move(public_path('uploads/logos/'), $newName);
            $website_settings->website_logo_ar = 'uploads/logos/'.$newName;
        }
        if ($request->has('website_logo_en')) {
            $random = Str::random(40)."en";
            $logo_en = $request->file('website_logo_en');
            $logo_en_file = $logo_en->getClientOriginalName();
            $newName = explode('.',$logo_en_file);
            $newName = $random.'.'.$logo_en->extension();
            $fil= $logo_en->move(public_path('uploads/logos/'), $newName);
            $website_settings->website_logo_en = 'uploads/logos/'.$newName;
        }
        if ($request->has('website_logo_tr')) {
            $random = Str::random(40)."tr";
            $logo_tr = $request->file('website_logo_tr');
            $logo_tr_file = $logo_tr->getClientOriginalName();
            $newName = explode('.',$logo_tr_file);
            $newName = $random.'.'.$logo_tr->extension();
            $fil= $logo_tr->move(public_path('uploads/logos/'), $newName);
            $website_settings->website_logo_tr = 'uploads/logos/'.$newName;
        }
        if ($request->has('website_logo_et')) {
            $random = Str::random(40)."et";
            $logo_et = $request->file('website_logo_et');
            $logo_et_file = $logo_et->getClientOriginalName();
            $newName = explode('.',$logo_et_file);
            $newName = $random.'.'.$logo_et->extension();
            $fil= $logo_et->move(public_path('uploads/logos/'), $newName);
            $website_settings->website_logo_et = 'uploads/logos/'.$newName;
        }
        if ($request->has('website_logo_er')) {
            $random = Str::random(40)."er";
            $logo_er = $request->file('website_logo_er');
            $logo_er_file = $logo_er->getClientOriginalName();
            $newName = explode('.',$logo_er_file);
            $newName = $random.'.'.$logo_er->extension();
            $fil= $logo_er->move(public_path('uploads/logos/'), $newName);
            $website_settings->website_logo_er = 'uploads/logos/'.$newName;
        }
        if ($website_settings->save()){
        return redirect()->back();

        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WebsiteSetting  $websiteSetting
     * @return \Illuminate\Http\Response
     */
    public function show(WebsiteSetting $websiteSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WebsiteSetting  $websiteSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(WebsiteSetting $websiteSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WebsiteSetting  $websiteSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebsiteSetting $websiteSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WebsiteSetting  $websiteSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebsiteSetting $websiteSetting)
    {
        //
    }
}
