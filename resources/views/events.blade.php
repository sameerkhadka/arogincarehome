@extends('layouts.app')
@section('meta')
@php $event = \App\Models\Page::where('id','2')->first(); @endphp
<meta charset="UTF-8">
<meta name="keywords" content="{{$event->meta_key}}">
<meta name="description" content="{{$event->meta_description}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('body')

    <section class="inner-banner" style="background: url({{asset('storage/pages/September2021/' . $event->image)}});">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{route('index')}}">home</a></li>
                    <li><a href="">{{$event->title}}</a></li>
                </ul>
                <h3>{{$event->title}}</h3>
            </div>
        </div>
    </section>

    <section class="event-head">
        <div class="container">
            <div class="sec-head">
                <p>{{$event->content_title}}</p>

                {!!$event->content_heading!!}

                <span>{!!$event->content_description!!}</span>
            </div>
        </div>
    </section>

    <section class="events">
        <div class="container">
            <div class="row">
            @foreach($items as $item)
                <div class="col-md-4">
                    <div class="event-wrap">
                        <div class="eve-img">
                            <img src="{{Voyager::image($item->image)}}" alt="{{$item->alt}}">
                            <label class="upcoming">Upcoming</label>
                        </div>

                        <div class="eve-dis">
                            <h5>{{$item->title}}</h5>

                            <div class="evewrap-ft">
                                <div class="date">
                                    <i class="far fa-calendar-alt"></i>

                                    <div class="time">
                                        <span>{{$item->date}}</span>
                                        <span>{{$item->time}}</span>
                                    </div>
                                    
                                </div>

                                <a href="{{route('events.detail', $item->slug)}}" >Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

                {{-- <div class="col-md-4">
                    <div class="event-wrap">
                        <div class="eve-img">
                            <img src="./images/event3.jpg" alt="">
                            <label class="upcoming">Upcoming</label>
                        </div>

                        <div class="eve-dis">
                            <h5>Care of Covid Patient in Home Isolation</h5>

                            <div class="evewrap-ft">
                                <div class="date">
                                    <i class="far fa-calendar-alt"></i>

                                    <div class="time">
                                        <span>June 12</span>
                                        <span>01 PM to 02PM</span>
                                    </div>
                                    
                                </div>

                                <a href="event-detail.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
    </section>

  @endsection