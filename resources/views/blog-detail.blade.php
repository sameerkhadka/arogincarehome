@extends('layouts.app')
@section('meta')
<meta charset="UTF-8">
<meta name="keywords" content="{{$item->meta_tag}}">
<meta name="description" content="{!! $item->meta_description !!}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('body')
    <!-- <section class="inner-banner" style="background: url(./images/tips.jpg);">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="">home</a></li>
                    <li><a href="">blogs</a></li>
                </ul>
                <h3>Care of Covid Patient in Home Isolation
                </h3>
            </div>
        </div>
    </section> -->

    <section class="blog-detail">
        <div class="container">
            <h4>{!!$item->title!!}</h4>
            
            <div class="cover-image">
                <img src="{{Voyager::image($item->image)}}" alt="{{$item->image_alt}}">
            </div>

            <div class="blg-des">
                {!! $item->description !!}
            </div>
        </div>
    </section>

@endsection