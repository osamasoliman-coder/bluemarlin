@extends('layouts.theme')


@section('content')

    <section>
        <div data-aos="fade-down" data-aos-delay="1000" id="servicename1" style="width: 100%;background-image: url({{asset('assets/img/seo.jpg')}})"></div>
        <div class="container" style="margin-top: 87px;">
            <h1 class="text-center" data-aos="fade-down" data-aos-delay="350" style="color: rgb(36,145,255);font-size: 28px;margin-top: 2px;margin-left: 0;"><strong>Search Engine Optimization</strong></h1>
            <p data-aos="fade-right" style="font-size: 25px;margin-top: 18px">{{__('messages.seo_desc1')}}</p>
            <p data-aos="fade-right" style="font-size: 25px">{{__('messages.seo_desc2')}}</p>
            <p data-aos="fade-right" style="font-size: 25px">{{__('messages.seo_desc3')}}</p>
        </div>
    </section>


@endsection
