@extends('layouts.theme')

@section('content')

    <section id="service2">
        <div data-aos="fade-down" data-aos-delay="1000" id="servicename" style="width: 100%;"></div>
        <div class="container" style="margin-top: 87px;">
            <h1 class="text-center" data-aos="fade-down" data-aos-delay="350" style="color: rgb(36,145,255);font-size: 28px;margin-top: 2px;margin-left: 0;"><strong>{{__('messages.mobile_title')}}</strong></h1>
            <p data-aos="fade-right" style="font-size: 20px;margin-top: 18px">{{__('messages.mobile_des1')}}</p>
            <p data-aos="fade-right" style="font-size: 20px">{{__('messages.mobile_desc2')}}</p>
            <p data-aos="fade-right" style="font-size: 20px">{{__('messages.mobile_desc3')}}</p>
            <p data-aos="fade-right" style="font-size: 20px">{{__('messages.mobile_desc4')}}</p>

            <div class="row" style="margin-top:60px">
                <div class="col-md-6">
                    <h3 style="text-align: center">Android Apps</h3>
                </div>
                <div class="col-md-6">
                    <h3 style="text-align: center">ios Apps</h3>
                </div>
            </div>
{{--            <div class="row" style="margin-top: 42px;margin-bottom: 10px;">--}}
{{--                <div class="col-sm-12 col-md-6"><img alt="" class="border rounded shadow" data-aos="fade-right" data-aos-delay="700" src="{{asset('/')}}assets/img/mobile.png" width="100%" height="270px" style="padding: 0;"></div>--}}
{{--                <div class="col" data-aos="fade-left" data-aos-delay="800">--}}
{{--                    <h1 style="color: rgb(80,158,237);font-size: 27px;margin-top: 1px;margin-left: 0;padding: 0;padding-top: 20px;"><strong>Service Name</strong></h1>--}}
{{--                    <p style="margin-top: 20px;font-size: 19px"><strong>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</strong><br><br><br></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row" style="margin-top: 42px;margin-bottom: 10px;">--}}
{{--                <div class="col-sm-12 col-md-6"><img alt="" class="border rounded shadow" data-aos="fade-right" data-aos-delay="800" src="{{asset('/')}}assets/img/mobile.png" width="100%" height="270px" style="padding: 0;"></div>--}}
{{--                <div class="col" data-aos="fade-left" data-aos-delay="900">--}}
{{--                    <h1 style="color: rgb(80,158,237);font-size: 27px;margin-top: 1px;margin-left: 0;padding: 0;padding-top: 20px;"><strong>Service Name</strong></h1>--}}
{{--                    <p style="margin-top: 20px;font-size: 19px;"><strong>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</strong><br><br><br></p>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>


@endsection
