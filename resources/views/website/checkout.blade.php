@extends('layouts.website')
@section('style')
<style>
    .bak {
        background: #2a4d6c69;
        width: 100%;
        background-size: cover;
        height: 100%;
        position: absolute;
    }

    .pink-btn {
        color: #d47fa6;
        border-color: #d47fa6;
        border-radius: 20px;
    }

    .pink-btn:hover {
        color: #fff !important;
        background-color: #d47fa6 !important;
        border-color: #d47fa6 !important;
    }

    .btn-big-pink {
        background-color: #d47fa6 !important;
        border-color: #d47fa6 !important;

    }


    .sec-btn {
        border-radius: 20px;
    }
    .rd-in {
        border-radius: 20px;
    }

</style>
@endsection
@section('content')


<div class="services-wrapper bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('payment_info')}}" method="POST">
                            <input type="hidden" name="service_id" value="{{$request->service_id}}">
                            <input type="hidden" name="provider_id" value="{{$request->provider_id}}">
                            <input type="hidden" name="price" value="{{$request->price}}">
                            @csrf
                            <legend>Request a video from Nora Fathi to :</legend>
                            <div class="form-group">
                                <label for="">
                                    From
                                </label>
                                <input type="text" class="form-control rd-in" name="from">
                                <small>This field is required </small>
                            </div>
                            <div class="form-group">
                                <label for="">To</label>
                                <input type="text" class="form-control rd-in" name="to">
                                <small>This field is required </small>
                            </div>
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="customer_message" class="form-control rd-in" id="" cols="30" rows="5"></textarea>
                                <small>This field is required </small>
                            </div>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" name="is_public" type="checkbox" value="1" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Make this video public on our platform
                                </label>
                              </div>
                              <br>
                              <div class="form-group">
                                  <button class="btn btn-success  btn-lg btn-block" type="submit">Proceed to payment</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">

                <img class="http://localhost/celebrate/narabana/public/images/video.png" src="" width="250" alt="">
            </div>
           
        </div>
     
    </div>







    @endsection
    @section('script')
    <script>
         function select_service(service_id,e) {
              $.ajax({
                  url:"{{route('service_check')}}",
                  type:"GET",
                data:{service_id:service_id},
                  success : function (re) {
                      $(".price").html(re.price + " USD");
                      $("#price").val(re.price);
                  }
              });
                $("#"+e.id).parent().toggleClass('active');
            }
        $(document).ready(function () {

            $('.freelance-slider').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 3,
                dir: "ltr",
                centerMode: true,
                centerPadding: '60px',
                // adaptiveHeight: true,

            });

           

        })
        //   freelance-slider

    </script>
    @endsection
