@extends('layouts.theme')

@section('content')

    <section>
        <div class="wwe"></div>
        <div class="container">
            <h1 class="text-center" data-aos="flip-left" data-aos-delay="750" style="margin-top: 56px;"><strong><em>About Us</em></strong></h1>
            <div class="shadow-sm">
                <h1 style="font-size: 24px;margin-top: 31px;color: rgb(58,138,207);padding: 10px;"><strong>{{__('messages.about_us_title')}}</strong></h1>
                <p data-aos="fade-right" style="font-size: 18px;margin-top: 18px;font-weight: bold">{{__('messages.about_desc1')}}</p>
                <p data-aos="fade-right" style="font-size: 18px">{{__('messages.about_desc2')}}</p>
                <p data-aos="fade-right" style="font-size: 18px">{{__('messages.about_desc3')}}</p>
                <p data-aos="fade-right" style="font-size: 18px">{{__('messages.about_desc4')}}</p>

                <p data-aos="fade-right" style="font-size: 18px">{{__('messages.mission_title')}}</p>
                <p data-aos="fade-right" style="font-size: 18px">{{__('messages.mission_desc')}}</p>

            </div>
{{--            <div class="row">--}}
{{--                <div class="col-sm-12 col-md-6 text-right text-md-right colid" data-aos="fade-right" data-aos-delay="750" style="padding: 0;"><img alt="" width="100%" src="{{asset('/')}}assets/img/mis.png" height="400px" style="height: 361px;"></div>--}}
{{--                <div class="col-sm-12 col-md-6 text-right text-md-right colid" data-aos="fade-left" data-aos-delay="800" style="padding: 0;">--}}
{{--                    <h1 class="text-center" style="padding-top: 20px;color: rgb(57,147,237);"><strong>Mision</strong></h1>--}}
{{--                    <p class="text-left" style="padding-left: 13px;padding-right: 10px;padding-top: 33px;font-size: 18px;color: rgb(80,83,86);filter: blur(0px) brightness(121%) contrast(175%) grayscale(0%) hue-rotate(0deg) invert(0%) saturate(77%);"><br>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.<br><br></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row" id="iiii">--}}
{{--                <div class="col-sm-12 col-md-6 text-right text-md-right colid" data-aos="fade-right" data-aos-delay="1000" style="padding: 0;">--}}
{{--                    <h1 class="text-center" style="padding-top: 20px;color: rgb(61,150,239);"><strong>Vision</strong></h1>--}}
{{--                    <p class="text-left" style="padding-left: 13px;padding-right: 10px;padding-top: 33px;font-size: 18px;color: rgb(80,83,86);filter: blur(0px) brightness(121%) contrast(175%) grayscale(0%) hue-rotate(0deg) invert(0%) saturate(77%);"><br>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.<br><br></p>--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-6 text-lowercase text-sm-center text-md-right" data-aos="fade-left" data-aos-delay="1200" id="colid-1" style="padding: 0;"><img alt="" width="100%" src="{{asset('/')}}assets/img/vision.jpg" height="400px" style="height: 361px;"></div>--}}
{{--            </div>--}}
        </div>
    </section>


@endsection
