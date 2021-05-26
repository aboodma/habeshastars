@extends('layouts.website')
@section('style')
<style>
    .menu-item {
        color: #000;
        font-size: 14px;
    }

    .active-menu {
        font-weight: bolder;
        color: #d47fa6 !important;
    }

</style>
@endsection
@section('content')
<div class="main-page second py-5">
    <div class="container">
        <div class="row">
            @include('parts.customer_sidebar')
            <div class="col-lg-8 right">
                <div class="p-4 bg-white rounded shadow-sm mb-3">
                    <h5 class="mb-4 font-weight-bold text-center">My Profile
                    </h5>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter Name ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email address
                                                <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter email">
                                            <span class="form-text text-muted">We'll never share your email with anyone
                                                else.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password
                                        <span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control"
                                        id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="">About Me</label>
                                    <textarea name="about_me" class="form-control" id="" cols="30" rows="5"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Country</label>
                                            <select name="country_id" class="form-control" id="">
                                                <option value="">Select Country</option>
                                                @foreach (\App\Country::all() as $country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Provider Type</label>
                                            <select name="provider_type" class="form-control" id="">
                                                <option value="">Select Provider Type</option>
                                                @foreach (\App\ProviderType::all() as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection