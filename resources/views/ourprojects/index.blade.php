@extends('layouts.theme')

@section('content')
    <!--  services-->
    <section>
        <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="200" style="margin-top: 30px;">
                  <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('/')}}assets/img/web.jpg" style="height: 170px;" alt="">
                      <h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>{{ __('messages.web_title') }}</strong></h1>
                      <button onclick="window.location='{{ route('webproject') }}'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;width: 120px;text-align: center">Show</button>
                  </div>
              </div>
          </div>
        </div>
    </section>
    <!--end services    -->
@endsection
