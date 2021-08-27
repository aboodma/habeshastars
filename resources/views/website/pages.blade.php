@extends('layouts.website')
@section('style')

@endsection
@section('content')





    <div class="services-wrapper bg-white py-5">
        <div class="container">
            <p style="font-weight: 800;font-size:1.3rem; color:#241332" class="pb-0 mb-3">{{$page->title}}
            </p>
            <div class="row">
              <div class="col-md-12">
                  {!! $page->content !!}
              </div>
            </div>
        </div>
    </div>




@endsection
@section('script')

@endsection
