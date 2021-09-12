@extends('layouts.app')
@section('meta')
<meta charset="UTF-8">
<meta name="keywords" content="{{$item->meta_key}}">
<meta name="description" content="{{$item->meta_description}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('body')

    <section class="inner-banner" style="background: url({{Voyager::image($item->image)}});">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{route('index')}}">home</a></li>
                    <li><a href="">who we are</a></li>
                    <li><a href="">our story</a></li>
                </ul>
                <h3>{{$item->image_text}}</h3>
            </div>
        </div>
    </section>

    <section class="sto-top">
        <div class="container">
            <div class="sto-textwrap">
                <h4>{{$item->title}}</h4>
    
                    {!! $item->introduction !!}               
                   
            </div>
        </div>
    </section>

    <section class="story2">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="sec-head full-width">
                        <p>{{$item->who_title}}</p>
                        {!!$item->who_maintitle!!}
                        <span>
                            {!!$item->who_intro!!}
                        </span>
                    </div>
                </div>
    
                <div class="col-md-7">
                    <div class="text-wrap">
                        {!!$item->who_description!!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="associations">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="sec-head">
                        <p>{{$item->association_title}}</p>
        
                        {!!$item->association_maintitle!!}

                        <span>
                            {!!$item->association_description!!}
                        </span>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="partner-logo">
                        <ul>                           
                                @foreach(json_decode($item->association_images) as $img)
                                    <li><img src="{{Voyager::image($img)}}" alt="{{$item->image_alts ? json_decode($item->image_alts)[$loop->iteration - 1] : ''}}"></li>
                                @endforeach
                            {{-- <li><img src="./images/company/grande.png" alt=""></li>
                            <li><img src="./images/company/medi.png" alt=""></li>
                            <li><img src="./images/company/medi.png" alt=""></li>
                            
                            <li><img src="./images/company/grande.png" alt=""></li>
                            <li><img src="./images/company/chirayu.png" alt=""></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="story2">
        <div class="container">
        
            <div class="sec-head">
                <p>{{$item->service_title}}</p>

                {!!$item->service_intro!!}
            </div>
             

            <div class="why-list">
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-md-4">
                            <div class="wh-wrap">
                                <img src="{{Voyager::image($service->image)}}" alt="{{$service->alt}}">

                                <h4>
                                    {{$service->title}}
                                </h4>

                                {!!$service->body!!}
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-md-4">
                        <div class="wh-wrap">
                            <img src="./images/icon/nurse.svg" alt="">

                            <h4>
                                24/7 Care Support
                            </h4>

                            <p>
                                Round the clock qualified, fully trained, committed , caring & skilled nursing staff
                                & certified caregivers.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="wh-wrap">
                            <img src="./images/icon/nurse.svg" alt="">

                            <h4>
                                Scientific staff to patient ratios
                            </h4>

                            <p>
                                Regular general physician visit and specialist doctor(Cardiac, Neuro, urology
                                & others) visit at arogin care home premises as per the need of the patient.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="wh-wrap">
                            <img src="./images/icon/nurse.svg" alt="">

                            <h4>
                                Personalised Care
                            </h4>

                            <p>
                                After the several levels of patient assessment, a personalised care plan is developed
and medication management is done.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="wh-wrap">
                            <img src="./images/icon/nurse.svg" alt="">

                            <h4>
                                Attendees not required
                            </h4>

                            <p>
                                Bystanders or attendees are not required as certified and trained caregivers will
                                take good care of patients
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="wh-wrap">
                            <img src="./images/icon/nurse.svg" alt="">

                            <h4>
                                Nutritious food & balanced diet:
                            </h4>

                            <p>
                                Patient diet plan is developed by our nutritionist. diet chart revision is
                                done on timely basis
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="wh-wrap">
                            <img src="./images/icon/nurse.svg" alt="">

                            <h4>
                                Communication with family members
                            </h4>

                            <p>
                                Regular communication with families and periodic counseling
                                is done.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="wh-wrap">
                            <img src="./images/icon/nurse.svg" alt="">

                            <h4>
                                Critical Care management team
                            </h4>

                            <p>
                                With a team of highly qualified medical
                                professionals and skilled staff nurses provides the best critical care management
                                services.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="wh-wrap">
                            <img src="./images/icon/nurse.svg" alt="">

                            <h4>
                                Standard guidelines based Care
                            </h4>

                            <p>
                                Standard Guideline based care to patients having critical and non
                                critical health conditions. Under the guidance and standard operating procedure of our consultant Dr.
                                Ramesh Kandel.
                            </p>
                        </div>
                    </div> --}}
                </div>
            </div>

          
        </div>
    </section>

    <section class="aspires">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="aspire-text">
                        <div class="sec-head">
                            <p>{{$item->strive_title}}</p>
            
                        </div>

                        {!!$item->strive_description!!}

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="aspire-img">
                        <img src="{{Voyager::image($item->strive_image)}}" alt="{{$item->strive_image_alt}}">
                    </div>
                </div>


            </div>

        </div>
    </section>
@endsection