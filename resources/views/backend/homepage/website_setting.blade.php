@extends('layouts.backend')
@section('page_header','Website Settings')
@section('page_toolbar')

@endsection
@section('content')

    <div class="content flex-column-fluid" id="kt_content">

        <div class="col-md-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
{{--                    <h3 class="card-title">Create Banner</h3>--}}

                </div>
                <!--begin::Form-->
                <form action="{{route('admin.website_settings.update')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group mb-8">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Social Link Facebook </label>
                                    <input type="text" value="{{$web_settings->social_facebook}}" class="form-control" name="social_facebook">
                                </div>
                                <div class="form-group">
                                    <label for="">Social Link Instagram  </label>
                                    <input type="text" class="form-control" value="{{$web_settings->social_instagram}}" name="social_instagram">
                                </div>
                                <div class="form-group">
                                    <label for="">Social Link Linkedin  </label>
                                    <input type="text" class="form-control" value="{{$web_settings->social_linkedin}}" name="social_linkedin">
                                </div>
                                <div class="form-group">
                                    <label for="">Social Link Pinterest  </label>
                                    <input type="text" class="form-control" value="{{$web_settings->social_pinterest}}" name="social_pinterest">
                                </div>
                                <div class="form-group">
                                    <label for="">Social Link Twitter  </label>
                                    <input type="text" class="form-control" value="{{$web_settings->social_twitter}}" name="social_twitter">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Website Currency</label>
                                    <input type="text" class="form-control" value="{{$web_settings->website_default_currency}}" name="website_default_currency">
                                </div>
                                <div class="form-group">
                                    <label for="">Website Default Language</label>
                                    <select name="website_default_language" class="form-control" id="">
                                        @foreach(App\Language::all() as $lang)
                                            <option @if($web_settings->website_default_language == $lang->locale) selected @endif value="{{$lang->locale}}">{{$lang->locale}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <b><hr></b>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Website Name (AR)</label>
                                    <input type="text" class="form-control" value="{{$web_settings->website_name_ar}}" name="website_name_ar">
                                </div>
                                <div class="form-group">
                                    <label for="">Website Name (EN)</label>
                                    <input type="text" class="form-control" value="{{$web_settings->website_name_en}}" name="website_name_en">
                                </div>
                                <div class="form-group">
                                    <label for="">Website Name (TR)</label>
                                    <input type="text" class="form-control" value="{{$web_settings->website_name_tr}}" name="website_name_tr">
                                </div>
                                <div class="form-group">
                                    <label for="">Website Name (ET)</label>
                                    <input type="text" class="form-control" value="{{$web_settings->website_name_et}}" name="website_name_et">
                                </div>
                                <div class="form-group">
                                    <label for="">Website Name (ER)</label>
                                    <input type="text" class="form-control" value="{{$web_settings->website_name_er}}" name="website_name_er">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Logo (AR)</label>
                                    <input type="file" class="form-control" name="website_logo_ar">
                                </div>
                                <div class="form-group">
                                    <label for="">Logo (EN)</label>
                                    <input type="file" class="form-control" name="website_logo_en">
                                </div>
                                <div class="form-group">
                                    <label for="">Logo (TR)</label>
                                    <input type="file" class="form-control" name="website_logo_tr">
                                </div>
                                <div class="form-group">
                                    <label for="">Logo (ET)</label>
                                    <input type="file" class="form-control" name="website_logo_et">
                                </div>
                                <div class="form-group">
                                    <label for="">Logo (ER)</label>
                                    <input type="file" class="form-control" name="website_logo_er">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Website Description (AR)</label>
                                    <textarea name="website_description_ar" class="form-control" id="" cols="30" rows="1">{{$web_settings->website_description_ar}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Website Description (EN)</label>
                                    <textarea name="website_description_en" class="form-control" id="" cols="30" rows="1">{{$web_settings->website_description_en}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Website Description (TR)</label>
                                    <textarea name="website_description_tr" class="form-control" id="" cols="30" rows="1">{{$web_settings->website_description_tr}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Website Description (ET)</label>
                                    <textarea name="website_description_et" class="form-control" id="" cols="30" rows="1">{{$web_settings->website_description_et}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Website Description (ET)</label>
                                    <textarea name="website_description_er" class="form-control" id="" cols="30" rows="1">{{$web_settings->website_description_er}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Website Keywords (AR)</label>
                                    <textarea name="website_keywords_ar" class="form-control" id="" cols="30" rows="1">{{$web_settings->website_keywords_ar}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Website Keywords (EN)</label>
                                    <textarea name="website_keywords_en" class="form-control" id="" cols="30" rows="1">{{$web_settings->website_keywords_en}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Website Keywords (TR)</label>
                                    <textarea name="website_keywords_tr" class="form-control" id="" cols="30" rows="1">{{$web_settings->website_keywords_tr}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Website Keywords (ET)</label>
                                    <textarea name="website_keywords_et" class="form-control" id="" cols="30" rows="1">{{$web_settings->website_keywords_et}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Website Keywords (ET)</label>
                                    <textarea name="website_keywords_er" class="form-control" id="" cols="30" rows="1">{{$web_settings->website_keywords_er}}</textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Provider Contract (AR)</label>
                                    <select name="provider_contract_ar" class="form-control" id="">
                                            @foreach(App\Page::where('locale','ar')->get() as $page)
                                                 <option @if($web_settings->provider_contract_ar == $page->id) selected @endif value="{{$page->id}}">{{$page->title}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Provider Contract (EN)</label>
                                    <select name="provider_contract_en" class="form-control" id="">
                                        @foreach(App\Page::where('locale','en')->get() as $page)
                                            <option @if($web_settings->provider_contract_en == $page->id) selected @endif value="{{$page->id}}">{{$page->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Provider Contract (TR)</label>
                                    <select name="provider_contract_tr" class="form-control" id="">
                                        @foreach(App\Page::where('locale','tr')->get() as $page)
                                            <option @if($web_settings->provider_contract_tr == $page->id) selected @endif value="{{$page->id}}">{{$page->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Provider Contract (ET)</label>
                                    <select name="provider_contract_et" class="form-control" id="">
                                        @foreach(App\Page::where('locale','et')->get() as $page)
                                            <option @if($web_settings->provider_contract_et == $page->id) selected @endif value="{{$page->id}}">{{$page->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Provider Contract (ER)</label>
                                    <select name="provider_contract_er" class="form-control" id="">
                                        @foreach(App\Page::where('locale','er')->get() as $page)
                                            <option @if($web_settings->provider_contract_er == $page->id) selected @endif value="{{$page->id}}">{{$page->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Customer Contract (AR)</label>
                                    <select name="customer_contract_ar" class="form-control" id="">
                                        @foreach(App\Page::where('locale','ar')->get() as $page)
                                            <option @if($web_settings->customer_contract_ar == $page->id) selected @endif value="{{$page->id}}">{{$page->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Customer Contract (EN)</label>
                                    <select name="customer_contract_en" class="form-control" id="">
                                        @foreach(App\Page::where('locale','en')->get() as $page)
                                            <option @if($web_settings->customer_contract_en == $page->id) selected @endif value="{{$page->id}}">{{$page->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Customer Contract (TR)</label>
                                    <select name="customer_contract_tr" class="form-control" id="">
                                        @foreach(App\Page::where('locale','tr')->get() as $page)
                                            <option @if($web_settings->customer_contract_tr == $page->id) selected @endif value="{{$page->id}}">{{$page->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Customer Contract (ET)</label>
                                    <select name="customer_contract_et" class="form-control" id="">
                                        @foreach(App\Page::where('locale','et')->get() as $page)
                                            <option @if($web_settings->customer_contract_et == $page->id) selected @endif value="{{$page->id}}">{{$page->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Customer Contract (ER)</label>
                                    <select name="customer_contract_er" class="form-control" id="">
                                        @foreach(App\Page::where('locale','er')->get() as $page)
                                            <option @if($web_settings->customer_contract_er == $page->id) selected @endif value="{{$page->id}}">{{$page->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>





                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </div>
                </form>
                <!--end::Form-->
            </div>


        </div>

    </div>
    <!--end::Content-->
@endsection
