@extends('layouts.app')
@section('meta')
@php $team = \App\Models\Page::where('id','3')->first(); @endphp
<meta charset="UTF-8">
<meta name="keywords" content="{{$team->meta_key}}">
<meta name="description" content="{{$team->meta_description}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('body')
    <section class="inner-banner" style="background: url({{asset('storage/pages/September2021/' . $team->image)}});">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{route('index')}}">home</a></li>
                    <li><a href="">who we are</a></li>
                    <li><a href="">our team</a></li>
                </ul>
                <h3>{{$team->title}}</h3>
            </div>
        </div>
    </section>

    <section class="team-article">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="sec-head">                                    
                        <p>{{$team->content_title}}</p>
                        {!!$team->content_heading!!}
                    </div>

                {!!$team->content_description!!}
                </div>
            </div>
        </div>
    </section>

  @endsection