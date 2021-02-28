@extends('layouts.theme')


@section('content')

    <section>
        <div data-aos="fade-down" data-aos-delay="1000" id="servicename1" style="width: 100%;background-image: url({{asset('assets/img/video-production.jpg')}})"></div>
        <div class="container" style="margin-top: 87px;">
            <h1 class="text-center" data-aos="fade-down" data-aos-delay="350" style="color: rgb(36,145,255);font-size: 28px;margin-top: 2px;margin-left: 0;"><strong>Video Production</strong></h1>
            <p data-aos="fade-right" style="font-size: 20px;margin-top: 18px;font-weight: bold">{{__('messages.vp_desc')}}</p>
            <ul style="margin-top: 25px"  data-aos="fade-right">
                <li style="font-size: 20px">{{__('messages.vp_descA')}}</li>
                <li style="font-size: 20px">{{__('messages.vp_descB')}}</li>
                <li style="font-size: 20px">{{__('messages.vp_descC')}}</li>
                <li style="font-size: 20px">{{__('messages.vp_descD')}}</li>
                <li style="font-size: 20px">{{__('messages.vp_descE')}}</li>
                <li style="font-size: 20px">{{__('messages.vp_descF')}}</li>
            </ul>
        </div>
    </section>


@endsection
