@extends('layouts.app')
@section('meta')
@php $test = \App\Models\Page::where('id','4')->first(); @endphp
<meta charset="UTF-8">
<meta name="keywords" content="{{$test->meta_key}}">
<meta name="description" content="{{$test->meta_description}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('body')

    <section class="inner-banner" style="background: url({{asset('storage/pages/September2021/' . $test->image)}});">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{route('index')}}">home</a></li>
                    <li><a href="">who we are</a></li>
                    <li><a href="">{{$test->title}}</a></li>
                </ul>
                <h3>{{$test->title}}</h3>
            </div>
        </div>
    </section>

    <section class="test-wrap">
        <div class="container">
            @foreach($items as $item)
                <div class="test-card">
                    <img src="{{Voyager::image($item->image)}}" alt="{{$item->alt}}">

                    <div class="tes-desc">
                        <h6>{{$item->name}}</h6>
                        {!! $item->description !!}
                    </div>
                </div>
            @endforeach

            {{-- <div class="test-card">
                <img src="./images/man.png" alt="">

                <div class="tes-desc">
                    <h6>People Name</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur nisi nobis fugiat non 
                        velit sit alias! Ullam consequatur mollitia tempora magni, aliquid asperiores
                        rem ducimus non architecto nihil perferendis vel natus fugit nulla officia,
                        id quasi nemo optio cumque cum sapiente porro minima obcaecati deserunt. 
                        Esse dolorum eaque qui voluptatem?</p>
                </div>
            </div>

            <div class="test-card">
                <img src="./images/man.png" alt="">

                <div class="tes-desc">
                    <h6>People Name</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur nisi nobis fugiat non 
                        velit sit alias! Ullam consequatur mollitia tempora magni, aliquid asperiores
                        rem ducimus non architecto nihil perferendis vel natus fugit nulla officia,
                        id quasi nemo optio cumque cum sapiente porro minima obcaecati deserunt. 
                        Esse dolorum eaque qui voluptatem?</p>
                </div>
            </div>

            <div class="test-card">
                <img src="./images/man.png" alt="">

                <div class="tes-desc">
                    <h6>People Name</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur nisi nobis fugiat non 
                        velit sit alias! Ullam consequatur mollitia tempora magni, aliquid asperiores
                        rem ducimus non architecto nihil perferendis vel natus fugit nulla officia,
                        id quasi nemo optio cumque cum sapiente porro minima obcaecati deserunt. 
                        Esse dolorum eaque qui voluptatem?</p>
                </div>
            </div> --}}
        </div>
    </section>
  
@endsection