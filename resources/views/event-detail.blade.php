@extends('layouts.app')
@section('meta')
<meta charset="UTF-8">
<meta name="keywords" content="{{$item->meta_key}}">
<meta name="description" content="{!! $item->meta_description !!}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('body')

    <!-- <section class="inner-banner" style="background: url(./images/tips.jpg);">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="">home</a></li>
                    <li><a href="">events</a></li>
                </ul>
                <h3>Events</h3>
            </div>
        </div>
    </section> -->

    <section class="event-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="event-img">
                        <img src="{{Voyager::image($item->image)}}" alt="{{$item->alt}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="sec-head">
                        <h4>
                            {{$item->title}}
                        </h4>

                        <span>
                            {!! $item->subtitle !!}
                        </span>
                    </div>

                    <div class="eve-date">
                            <div class="date">
                                <i class="far fa-calendar-alt"></i>

                                <div class="time">
                                    <span>{{$item->date}}</span>
                                    <span>{{$item->time}}</span>
                                </div>
                                
                            </div>
                     
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="full-desc">
                       {!!$item->description!!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq general-faq">
        <div class="container">

            @php $faq_img = \App\Homepage::where('id', '1')->first(); @endphp
            
            <div class="row align-item-center">
                <div class="col-md-5">
                    <div class="faq-img">
                        <img src="{{Voyager::image($faq_img->faq_image)}}" alt="{{$faq_img->faq_image_alt}}">
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="sec-head">
                      
                        <h4>
                            FAQS 
                        </h4>
                    </div>

                    <div class="accordion" id="accordionExample">
                        @php $faqs = \App\Faq::where('type','event')->where('type_id',$item->id)->orderBy('order','asc')->get(); @endphp
                        @foreach($faqs as $faq)
                        <div class="card">
                            <div class="card-header" id="heading{{$loop->iteration}}">
                           
                                    <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$loop->iteration}}" aria-expanded="{{$loop->first ? "true" : "false"}}" aria-controls="collapse{{$loop->iteration}}">
                                        <h3 class="faq-title">{{$faq->question}}</h3>
                                    </button>
                     
                            </div>
                      
                            <div id="collapse{{$loop->iteration}}" class="collapse {{$loop->first ? "show" : ""}}" aria-labelledby="heading{{$loop->iteration}}" data-parent="#accordionExample">
                                <div class="card-body">
                                    {!!$faq->answer!!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection