@extends('layouts.themehome')


@section('content')
    <!--    hero-->
    <div id="fw_al_001" class="carousel slide ps_slide_y ps_indicators_y swipe_y ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2500">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#fw_al_001" data-slide-to="0" class="active"></li>
            <li data-target="#fw_al_001" data-slide-to="1"></li>
            <li data-target="#fw_al_001" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

            <!-- First Slide -->
            <div class="carousel-item active">

                <!-- Slide Background -->
                <img src="{{asset('/')}}assets/img/mobile.png" alt="fw_al_001_01" id="imgfixedslizeslide">

                <!-- Slide Text Layer -->
                <div class="fw_al_001_slide">
                    <h4 data-animation="animated fadeInUp" style="color: white;margin-top: 20px;">Mobile Applications</h4>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="carousel-item">

                <!-- Slide Background -->
                <img src="{{asset('/')}}assets/img/web.jpg" alt="fw_al_001_02.jpg" id="imgfixedslizeslide">

                <!-- Slide Text Layer -->
                <div class="fw_al_001_slide">
                    <h4 data-animation="animated fadeInUp" style="color: white;margin-top: 20px;">Web Development</h4>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Third Slide -->
            <div class="carousel-item">

                <!-- Slide Background -->
                <img src="{{asset('/')}}assets/img/seo.jpg" alt="fw_al_001_03" id="imgfixedslizeslide">

                <!-- Slide Text Layer -->
                <div class="fw_al_001_slide">
                    <h4 data-animation="animated fadeInUp" style="color: white;margin-top: 20px;">Search Engine Optimization</h4>
                </div>
            </div>
            <!-- End of Slide -->

        </div><!-- End of Wrapper For Slides -->

    </div> <!-- End Paradise Slider -->
    <!-- End Hero -->


    <!--   who we are-->
    <section>
        <div class="container">
            <section class="about-us">
                <div class="container">
                    <h1 class="text-center" data-aos="fade-down" data-aos-delay="550" style="color: rgb(75,101,167);font-size: 32px;margin-top: 75px;"><strong>{{ __('messages.whowearehome_title') }}</strong></h1>
                    <div class="row padding-content">
                        <div class="col-md-4 no-padding">
                            <div id="wowslider-container1">
                                <div class="ws_images">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li><div>Custom Code</div></li>
                                    </ul>
                                </div>
                                <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">javascript image slider</a><strong>Bold</strong></div>
                                <div class="ws_shadow"></div>
                            </div><img data-aos="fade-right" data-aos-delay="100" style="width: 100%;height: 100%;" src="{{asset('/')}}assets/img/sponsership.jpg" alt=""></div>
                        <div class="col-md-8 abt-right" data-aos="fade-left" data-aos-delay="250">
                            <h1 class="text-left text-center" style="font-size: 34px;margin-top: 25px;">{{ __('messages.whowearehome_title') }}</h1>
                            <p style="font-size: 17px;">{{ __('messages.whowearehome_desc') }}</p>
                        </div>
                    </div>
                    <h1 class="text-center" data-aos="fade-down" data-aos-delay="400" style="color: rgb(43,56,176);margin-top: 16px;margin-bottom: 18px;"><strong>Services</strong></h1>
                </div>
            </section>
        </div>
    </section>
    <!--    end who we are-->

    <!--  services-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="100" style="margin-top: 30px;/*box-shadow: 5px 10px #e8e8e8;*/">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('/')}}assets/img/mobile.png" style="height: 170px;" alt="">
                        <h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>{{ __('messages.mobile_title') }}</strong></h1>
                        <button onclick="window.location='{{ route('mobile') }}'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;width: 120px;text-align: center">Show</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="200" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('/')}}assets/img/web.jpg" style="height: 170px;" alt="">
                        <h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>{{ __('messages.web_title') }}</strong></h1>
                        <button onclick="window.location='{{ route('web') }}'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;width: 120px;text-align: center">Show</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="300" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('/')}}assets/img/seo.jpg" style="height: 170px;" alt="">
                        <h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>{{ __('messages.SearchEngineOptimization_title') }}</strong></h1>
                        <button onclick="window.location='{{ route('seo') }}'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;width: 120px;text-align: center">Show</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="400" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('/')}}assets/img/socialmediamanagment.jpg" style="height: 170px;" alt="">
                        <h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>{{__('messages.SocialMediaManagement_title')}}</strong></h1>
                        <button onclick="window.location='{{ route('socialmediamanagment') }}'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;width: 120px;text-align: center">Show</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="500" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('/')}}assets/img/branding.jpeg" style="height: 170px;" alt="">
                        <h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>{{__('messages.branding_title')}}</strong></h1>
                        <button onclick="window.location='{{ route('branding') }}'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;width: 120px;text-align: center">Show</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="600" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('/')}}assets/img/dmktg.jpg" style="height: 170px;" alt="">
                        <h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>{{__('messages.DigitalMarketing_title')}}</strong></h1>
                        <button onclick="window.location='{{ route('digitalmarketing') }}'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;width: 120px;text-align: center">Show</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="700" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('/')}}assets/img/influencer.jpg" style="height: 170px;" alt="">
                        <h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>{{__('messages.Influencerservices_title')}}</strong></h1>
                        <button onclick="window.location='{{ route('influencer') }}'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;width: 120px;text-align: center">Show</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="800" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('/')}}assets/img/photoshot.jpg" style="height: 170px;" alt="">
                        <h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>{{__('messages.Photoshooting_title')}}</strong></h1>
                        <button onclick="window.location='{{ route('photoshooting') }}'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;width: 120px;text-align: center">Show</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="900" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('/')}}assets/img/droneservice.png" style="height: 170px;" alt="">
                        <h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>{{__('messages.DroneServices_title')}}</strong></h1>
                        <button onclick="window.location='{{ route('drone') }}'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;width: 120px;text-align: center">Show</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="1100" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('/')}}assets/img/eventmanagment.jpg" style="height: 170px;" alt="">
                        <h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>{{__('messages.EventManagement_title')}}</strong></h1>
                        <button onclick="window.location='{{ route('eventmangement') }}'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;width: 120px;text-align: center">Show</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="1200" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('/')}}assets/img/sponsership.jpg" style="height: 170px;" alt="">
                        <h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>{{__('messages.Sponsorshipservices_title')}}</strong></h1>
                        <button onclick="window.location='{{ route('sponsership') }}'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;width: 120px;text-align: center">Show</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="1200" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('/')}}assets/img/video-production.jpg" style="height: 170px;" alt="">
                        <h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>{{__('messages.videoproduction_title')}}</strong></h1>
                        <button onclick="window.location='{{ route('videoproduction') }}'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;width: 120px;text-align: center">Show</button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--end services    -->

    <!--    our work process-->
    <section style="background-color: #14b3f7;margin-top: 66px;">
        <div class="container">
            <h1 class="text-center" data-aos="fade-up-right" style="color: rgb(255,255,255);font-size: 35px;margin-top: 34px;padding-top: 75px;padding-bottom: 23px;">Our Work Process</h1>
            <div class="row" style="margin-left: 1%;padding-right: 1%;margin-bottom: 23px;padding-bottom: 101px;">
                <div class="col-sm-12 col-md-2 colourwork" data-aos="flip-right" data-aos-delay="200" style="margin-top: 19px;margin-bottom: 10px;background-color: #ffffff;margin-left: 3px;margin-right: 10px;">
                    <div class="text-center" id="divicon" style="width: 20px;height: 20px;margin-top: 19px;margin-left: auto;background-color: white;margin-right: auto;"></div>
                    <h1 class="text-center" style="font-size: 25px;margin-bottom: 22px;">Get ideas</h1>
                </div>
{{--                <div class="col-sm-12 col-md-2 text-center colourwork" data-aos="flip-right" data-aos-delay="300" style="margin-top: 19px;margin-bottom: 10px;background-color: #ffffff;margin-left: 3px;margin-right: 10px;">--}}
{{--                    <div class="text-center" id="divicon" style="width: 50px;height: 50px;margin-top: 19px;margin-left: auto;background-color: #aea7a7;margin-right: auto;"><i class="fa fa-star" style="margin-top: 14px;"></i></div>--}}
{{--                    <h1 class="text-center" style="font-size: 25px;margin-bottom: 22px;">Sketch Up</h1>--}}
{{--                </div>--}}
                <div class="col-sm-12 col-md-2 colourwork" data-aos="flip-right" data-aos-delay="400" style="margin-top: 19px;margin-bottom: 10px;background-color: #ffffff;margin-left: 3px;margin-right: 10px;">
                    <div class="text-center" id="divicon" style="width: 20px;height: 20px;margin-top: 19px;margin-left: auto;background-color: white;margin-right: auto;"></div>
                    <h1 class="text-center" style="font-size: 25px;margin-bottom: 22px;">Discuss</h1>
                </div>
                <div class="col-sm-12 col-md-2 colourwork" data-aos="flip-right" data-aos-delay="400" style="margin-top: 19px;margin-bottom: 10px;background-color: #ffffff;margin-left: 3px;margin-right: 10px;">
                    <div class="text-center" id="divicon" style="width: 20px;height: 20px;margin-top: 19px;margin-left: auto;background-color: white;margin-right: auto;"></div>
                    <h1 class="text-center" style="font-size: 25px;margin-bottom: 22px;">Revise</h1>
                </div>
                <div class="col-sm-12 col-md-2 colourwork" data-aos="flip-right" data-aos-delay="500" style="margin-top: 19px;margin-bottom: 10px;background-color: #ffffff;margin-left: 3px;margin-right: 10px;">
                    <div class="text-center" id="divicon" style="width: 20px;height: 20px;margin-top: 19px;margin-left: auto;background-color: white;margin-right: auto;"></div>
                    <h1 class="text-center" style="font-size: 25px;margin-bottom: 22px;">Approve</h1>
                </div>
                <div class="col-sm-12 col-md-2 colourwork" data-aos="flip-right" data-aos-delay="600" style="margin-top: 19px;margin-bottom: 10px;background-color: #ffffff;margin-left: 3px;margin-right: 3px;">
                    <div class="text-center" id="divicon" style="width: 20px;height: 20px;margin-top: 19px;margin-left: auto;background-color: white;margin-right: auto;"></div>
                    <h1 class="text-center" style="font-size: 25px;margin-bottom: 22px;">Lanuch</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end our work process    -->

    <!--   our clients-->
    <h2 class="text-center" data-aos="fade-down" data-aos-delay="450" style="font-size: 29px;margin-top: 71px;margin-bottom: 42px;"><strong>Our Clients</strong></h2>
    <section class="clientid" style="margin-top: 20px;">
        <div class="d-flex flex-row multiple-item-slider" style="padding-top: 28px;padding-bottom: 30px;">
            <div class="justify-content-center spacer-slider">
                <figure class="figure"><img class="img-fluid figure-img shadow-lg" src="assets/img/alsarokh.idrak.jpg" alt="alt text here">
                    <figcaption class="figure-caption">idrak</figcaption>
                </figure>
            </div>
            <div class="justify-content-center spacer-slider">
                <figure class="figure"><img class="img-fluid figure-img mx-auto d-block" src="https://picsum.photos/1080/1335?image=1083" alt="alt text here">
                    <figcaption class="figure-caption">Caption</figcaption>
                </figure>
            </div>
            <div class="justify-content-center spacer-slider">
                <figure class="figure"><img class="img-fluid figure-img" src="https://picsum.photos/1080/1335?image=1076" alt="alt text here">
                    <figcaption class="figure-caption">Caption</figcaption>
                </figure>
            </div>
            <div class="justify-content-center spacer-slider">
                <figure class="figure"><img class="img-fluid figure-img" src="https://picsum.photos/1080/1335?image=1075" alt="alt text here">
                    <figcaption class="figure-caption">Caption</figcaption>
                </figure>
            </div>
            <div class="justify-content-center spacer-slider">
                <figure class="figure"><img class="img-fluid figure-img" src="https://picsum.photos/1080/1335?image=1074" alt="alt text here">
                    <figcaption class="figure-caption">Caption</figcaption>
                </figure>
            </div>
            <div class="justify-content-center spacer-slider">
                <figure class="figure"><img class="img-fluid figure-img" src="https://picsum.photos/1080/1335?image=1071" alt="alt text here">
                    <figcaption class="figure-caption">Caption</figcaption>
                </figure>
            </div>
            <div class="justify-content-center spacer-slider">
                <figure class="figure"><img class="img-fluid figure-img" src="https://picsum.photos/1080/1335?image=1060" alt="alt text here">
                    <figcaption class="figure-caption">Caption</figcaption>
                </figure>
            </div>
            <div class="justify-content-center spacer-slider">
                <figure class="figure"><img class="img-fluid figure-img d-flex" src="https://picsum.photos/1080/1335?image=1045" alt="alt text here">
                    <figcaption class="figure-caption">Caption</figcaption>
                </figure>
            </div>
        </div>
    </section>
    <!--    end our clients-->

    <!--    contact us-->
    <h1 class="text-center" data-aos="fade-down" data-aos-delay="700" style="margin-top: 73px;margin-bottom: 77px;font-size: 29px;"><strong>{{__('messages.contactus_title')}}</strong></h1>
    <section class="">
        <div class="container" style="padding-bottom: 55px;padding-top: 39px;">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <p class="shadow" data-aos="fade-right" data-aos-delay="250" style="color: rgb(52,150,248);font-size: 19px;padding: 28px;margin-top: 12px;background-color: #ffffff;"><i class="fa fa-home" style="padding-right: 8px;font-size: 22px;"></i><strong>{{__('messages.Address_title')}} :&nbsp;</strong><span style="font-size: 13px;color: rgb(62,139,217);"><strong>{{__('messages.address_desc')}}</strong></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <p class="shadow" data-aos="fade-right" data-aos-delay="350" style="color: rgb(52,150,248);font-size: 19px;padding: 28px;background-color: #ffffff;"><i class="fa fa-phone" style="padding-right: 8px;font-size: 22px;"></i><strong>{{__('messages.Phone_title')}} :&nbsp;</strong><span style="font-size: 13px;color: rgb(62,139,217);"><strong>{{__('messages.phone_desc')}}</strong></span></p>
                            <p class="shadow" data-aos="fade-right"
                               data-aos-delay="500" style="color: rgb(52,150,248);font-size: 19px;padding: 28px;background-color: #ffffff;"><i class="fa fa-whatsapp" style="padding-right: 8px;font-size: 22px;"></i><strong>{{__('messages.Whatsapp_title')}} :&nbsp;</strong><span style="font-size: 13px;color: rgb(62,139,217);"><strong>{{__('messages.phone_desc')}}</strong></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <p class="shadow" data-aos="fade-right" data-aos-delay="650" style="color: rgb(52,150,248);font-size: 19px;padding: 28px;background-color: #ffffff;"><i class="fa fa-envelope" style="padding-right: 8px;font-size: 20px;"></i><strong>{{__('messages.Email_title')}} :&nbsp;</strong><span style="font-size: 13px;color: rgb(62,139,217);"><strong>{{__('messages.email_desc')}}</strong></span></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <input class="border rounded shadow" type="text" data-aos="fade-left" data-aos-delay="1000" style="width: 100%;padding: 16px;margin: 4px;margin-top: 9px;font-size: 21px;" placeholder="Enter Your Name">
                    <input class="border rounded shadow" type="text" data-aos="fade-left" data-aos-delay="1100" style="width: 100%;padding: 16px;margin: 4px;margin-top: 9px;font-size: 20px;" placeholder="Enter Email">
                    <input class="border rounded shadow" type="text" data-aos="fade-left" data-aos-delay="1250" style="width: 100%;padding: 16px;margin: 4px;margin-top: 9px;font-size: 20px;" placeholder="Enter Your Phone">
                    <input class="border rounded shadow" type="text" data-aos="fade-left" data-aos-delay="1450" style="width: 100%;padding: 16px;margin: 4px;margin-top: 9px;height: 122px;font-size: 20px;" placeholder="Enter Your Message">
                    <button class="btn btn-primary bg-info border rounded border-light shadow" data-aos="fade-left" data-aos-delay="1400" type="button" style="width: 100%;margin-top: 9px;">
                        {{__('messages.send')}}</button></div>
            </div>
        </div>
    </section>
    <!--end contact us    -->
    <a class="text-center" id="scroll-to-top" title="Scroll to top" href="#" style="background-color: rgba(0,25,150,0.6);margin: -32px;margin-left: 0;padding: 0;margin-bottom: 3px;margin-top: 0;"><i class="fas fa-angle-up"></i></a>
@endsection
