@extends('layouts.app')
@section('meta')
@php $tip = \App\Models\Page::where('id','6')->first(); @endphp
<meta charset="UTF-8">
<meta name="keywords" content="{{$tip->meta_key}}">
<meta name="description" content="{{$tip->meta_description}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('body')

    <section class="inner-banner" style="background: url({{asset('storage/pages/September2021/' . $tip->image)}});">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{route('index')}}">home</a></li>
                    <li><a href="">resources</a></li>
                    <li><a href="">tips</a></li>
                </ul>
                <h3>{{$tip->title}}</h3>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach($tips as $item)
                <li class="nav-item" role="presentation">
                  <a class="nav-link {{$loop->first ? 'active' : ''}}" id="{{$item->title}}-tab" href="#{{$item->title}}" data-toggle="tab" role="tab"  >{{$item->title}}</a>
                </li>
                @endforeach
                {{-- <li class="nav-item" role="presentation">
                  <a class="nav-link" id="dementia-tab" data-toggle="tab" href="#dementia" role="tab">Dementia</a>
                </li> --}}
  
              </ul>
              <div class="tab-content" id="myTabContent">
                @foreach($tips as $item)
                <div class="tab-pane fade {{$loop->first ? 'show active' : ''}}" id="{{$item->title}}" role="tabpanel" >
                    <div class="tips-wrapper">
                        {!!$item->description!!}

                    </div>
                </div>
                @endforeach

                {{-- <div class="tab-pane fade" id="dementia" role="tabpanel" >
                    <div class="tips-wrapper">
                        <h5>About Dementia</h5>

                        <p>Dementia is a syndrome not a disease associated with an ongoing decline of brain functioning.
                            There are many types of dementia & different causes of dementia,</p>

                        <h5>Symptoms of dementia</h5>

                        <ul>
                            <li>memory loss</li>
                            <li>thinking speed</li>
                            <li>mental sharpness and quickness</li>
                            <li>language, such as using words incorrectly, or trouble speaking</li>
                            <li>understanding</li>
                            <li>judgement</li>
                            <li>mood</li>
                            <li>movement</li>
                            <li>difficulties doing daily activities</li>

                        </ul>

                        <p>
                            People with dementia can lose interest in their usual activities. They may also lose their interest in relationships and socialising. They may also lose empathy .A person with dementia may see or hear things that other people do not and we call it hallucination
                        </p>

                        <p>
                            Losing the ability to remember events, or not fully understanding their environment or situations happens with dementia people it can seem as if they're not telling the truth or are wilfully ignoring problems.
                        </p>
                        <p>
                            As dementia affects a person's mental abilities, they may find planning and organising difficult.
A person with dementia will usually need help from friends or relatives, including help with making decisions.

                        </p>

                        <p>
                            The symptoms of dementia usually become worse over time. In the late stage of dementia, people will not be able to take care of themselves and may lose their ability to communicate.
                        </p>

                    </div>
                </div> --}}
              </div>

        </div>
    </section>
@endsection