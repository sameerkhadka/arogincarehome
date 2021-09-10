@extends('layouts.app')
@section('meta')
@php $blog = \App\Models\Page::where('id','1')->first(); @endphp
<meta charset="UTF-8">
<meta name="keywords" content="{{$blog->meta_key}}">
<meta name="description" content="{{$blog->meta_description}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('body')
    <section class="inner-banner" style="background: url({{asset('storage/pages/September2021/' . $blog->image)}});">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{route('index')}}">home</a></li>
                    <li><a href="">{{$blog->title}}</a></li>
                </ul>
                <h3>{{$blog->title}}</h3>
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
                                <img src="{{Voyager::image($item->image)}}" alt="{{$item->image_alt}}">
                            </div>

                            <div class="eve-dis for-blogs">
                                <h5>{!!$item->title!!}</h5>

                                <div class="evewrap-ft">
                                    
                                    <a href="{{route('blog.detail', $item->slug)}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection