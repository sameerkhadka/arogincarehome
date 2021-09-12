@extends('layouts.app')
@section('meta')
<meta charset="UTF-8">
<meta name="keywords" content="{{$homepage->meta_key}}">
<meta name="description" content="{{$homepage->meta_description}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection

@section('toastr')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>  
    @if(Session::has('success'))  
            toastr.success("{{ Session('success') }}");  
    @endif  
    </script>  
@endsection

@section('body')
@foreach($popups as $img)
<div class="modal" id="indexModal{{ $loop->iteration }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">        
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img src="{{ Voyager::image($img->image) }}" alt="{{$img->alt}}">
        </div>  
      </div>
    </div>
  </div>
@endforeach

<section class="banner">
        <div class="banner-slider owl-carousel">
            @foreach($items as $item)
            <div class="item">
                <img class="banner-bg" src="{{Voyager::image($item->image)}}" alt="{{$item->alt}}" >
                    <div class="overlay banner-overlay"></div>

                    <div class="container">
                        <div class="banner-text">
                            {!!$item->title!!}

                            <p>{{$item->subtitle}}</p>

                            <a class="main-btn" href="{{$item->url ? $item->url : '#'}}">{{$item->button}}</a>
                        </div>
                    </div>
            </div>
            @endforeach

            {{-- <div class="item">
                <img class="banner-bg" src="./images/banner.JPG" alt="" >
                    <div class="overlay banner-overlay"></div>

                    <div class="container">
                        <div class="banner-text">
                            <h2>Connected together to smile, share and create beautiful memories</h2>

                            <p>Arogin care home gives care and attention that the patient deserves</p>

                            <a class="main-btn" href="">About Us </a>
                        </div>
                    </div>
            </div> --}}
        </div>
        
    </section>

    <section class="abt">
        <div class="container">

            <div class="sec-head">
                <p>{{$homepage->mission_title}}</p>

                {!!$homepage->mission_subtitle!!}
            </div>

            <section class="abt-images">
                <div class="abt-img-sing">
                    <img src="{{Voyager::image($homepage->image1)}}" alt="{{$homepage->image1_alt}}">

                    <div class="abti-text">
                        {!!$homepage->image1_text!!}
                    </div>

                </div>

                <div class="abt-img-sing">
                    <img src="{{Voyager::image($homepage->image2)}}" alt="{{$homepage->image2_alt}}">
                    <div class="abti-text">
                        {!!$homepage->image2_text!!}
                    </div>

                </div>



            </section>

        </div>
    </section>

    <section class="brake-text">
        <div class="container">
            <div class="text">

                <p>
                    {{$homepage->intro}}
                </p>

                <div class="icon">
                    <img src="./images/icon/care-home-icon.svg" alt="">
                </div>

            </div>

            
        </div>
    </section>

    <section class="achiv">
        <div class="container">
            <div class="sec-head">
                <p>{{$homepage->achievement_title}}</p>

                {!!$homepage->achievement_subtitle!!}
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="achv-sing">
                        {!!$homepage->text1!!}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="achv-sing">
                        {!!$homepage->text2!!}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="achv-sing">
                        {!!$homepage->text3!!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="all-ser">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sec-head">
                        <p>{{$homepage->team_title}}</p>
                        {!!$homepage->team_subtitle!!}
                       <span> {{$homepage->team_description}}</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="all-ser-img" style="background: url(./images/doctorsbg.jpg);">
                        <ul>
                            @php $items = explode(',',$homepage->team_key); @endphp
                            @foreach($items as $item)
                            <li>
                                <img src="./images/icon/star.svg" alt="">
                                {{$item}}
                            </li>
                            @endforeach
                            {{-- <li>
                                <img src="./images/icon/star.svg" alt="">
                                Nutritionists
                            </li>

                            <li>
                                <img src="./images/icon/star.svg" alt="">
                                 Acupuncturists
                            </li>

                            <li>
                                <img src="./images/icon/star.svg" alt="">
                                Physiotherapists
                            </li>

                            <li>
                                <img src="./images/icon/star.svg" alt="">
                                Clinical Psychologists
                            </li> --}}
                        </ul>
                    </div>
                </div>

                <div class="col-md-8 offset-md-2">
                    <div class="services-slider owl-carousel">
                        <div class="item">
                            <div class="ser-slider-wrap">
                                <img src="./images/1.jpg" alt="">

                                <div class="ser-slider-text">
                                    <h5>24/7 Nursing care</h5>
                                    <p>The patients who need close monitoring by a skilled &amp; qualified nursing care team around the clock will be
                                        facilitated with 24/7 Nursing care.
                                    </p>

                                    <a href="">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="ser-slider-wrap">
                                <img src="./images/arogin.jpg" alt="">

                                <div class="ser-slider-text">
                                    <h5>Stroke Care & Rehabilitation</h5>
                                    <p>Our specialist team works with you to assist with your recovery from surgery or from a large range of
                                        neurological conditions.
                                    </p>

                                    <a href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="sec-head">
                <p>{{$homepage->feature_title}}</p>

                {!!$homepage->feature_heading!!}
            </div>

            <div class="ft-wrap">
                <div class="row">
                    @foreach($features as $feature)
                        <div class="col-md-4">
                            <div class="ft-sing">
                                <img src="{{Voyager::image($feature->image)}}" alt="{{$feature->alt}}">

                                <h5>{{$feature->title}}</h5>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-md-4">
                        <div class="ft-sing">
                            <img src="./images/features/4.png" alt="">

                            <h5>Physiotherapy services (in-house)</h5>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="ft-sing">
                            <img src="./images/features/6.png" alt="">

                            <h5>Nutritious food & balanced diet</h5>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="ft-sing">
                            <img src="./images/features/2.png" alt="">

                            <h5>Bystander not required</h5>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="ft-sing">
                            <img src="./images/features/5.png" alt="">

                            <h5>Accupunture, Speech, Swallow</h5>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="ft-sing">
                            <img src="./images/features/7.png" alt="">

                            <h5>Sharing & Private room (Airconditioned)</h5>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="ft-sing">
                            <img src="./images/features/3.png" alt="">

                            <h5>Day Care facility with pick up drop facility</h5>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="ft-sing">
                            <img src="./images/features/3.png" alt="">

                            <h5>Day Care facility with pick up drop facility</h5>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="ft-sing">
                            <img src="./images/features/3.png" alt="">

                            <h5>Day Care facility with pick up drop facility</h5>
                        </div>
                    </div> --}}


                </div>
            </div>
        </div>
    </section>

    <section class="associations">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="sec-head">
                        <p>{{$story->association_title}}</p>
        
                        {!!$story->association_maintitle!!}

                        <span>
                            {!!$story->association_description!!}
                        </span>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="partner-logo">
                        <ul>
                            @php $i = 0; @endphp
                            @foreach(json_decode($story->association_images) as $img)
                                @php if($i == 6)  break;  @endphp
                                <li><img src="{{Voyager::image($img)}}" alt="{{json_decode($story->image_alts)[$loop->iteration - 1]}}"></li>
                                @php $i++ @endphp
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

    <section class="events">
        <div class="container">
            <div class="sec-head">
                <p>{{$homepage->event_title}}</p>

                {!!$homepage->event_subtitle!!}
            </div>

            <div class="row">
                @foreach($events as $event)
                <div class="col-md-4">
                    <div class="event-wrap">
                        <div class="eve-img">
                            <img src="{{Voyager::image($event->image)}}" alt="{{$event->alt}}">
                            <label class="upcoming">Upcoming</label>
                        </div>

                        <div class="eve-dis">
                            <h5>{{$event->title}}</h5>

                            <div class="evewrap-ft">
                                <div class="date">
                                    <i class="far fa-calendar-alt"></i>

                                    <div class="time">
                                        <span>{{$event->date}}</span>
                                        <span>{{$event->time}}</span>
                                    </div>
                                    
                                </div>

                                <a href="{{route('events.detail', $event->slug)}}">Read More</a>
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
                </div>

                <div class="col-md-4">
                    <div class="event-wrap">
                        <div class="eve-img">
                            <img src="./images/event2.jpg" alt="">
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
                </div>           --}}

                
            </div>
        </div>
    </section>

    <section class="testimonial-break">
        <div class="container">
            <div class="testimonial-slider owl-carousel">
                @foreach($testimonials as $testimonial)
                    <div class="item">
                        <div class="test-card">
                        
            
                                
                                {!!$testimonial->description!!}
                                    <h6>{{$testimonial->name}}</h6>
                                    <span>{{$testimonial->designation}}</span>

                    
                        </div>
                    </div>
                @endforeach

                {{-- <div class="item">
                    <div class="test-card">
                      
        
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur nisi nobis fugiat non 
                                velit sit alias! Ullam consequatur mollitia tempora magni, aliquid asperiores
                                rem ducimus non architecto nihil </p>
                                <h6>Another Name</h6>
                                <span>Digital Market </span>
                   
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="events">
        <div class="container">
            <div class="sec-head">
                <p>Blogs</p>

                <h4>
                    Arogin Diaries    
                </h4>
            </div>

            <div class="row">
            
                @foreach($blogs as $blog)
                    @if($loop->first)
                        <div class="col-md-7">
                            <div class="event-big event-wrap">

                                <div class="eve-bg">
                                    <img src="{{Voyager::image($blog->image)}}" alt="{{$blog->image_alt}}">
                                </div>

                                <div class="eve-dis">
                                    {!!$blog->title!!}

                                    <div class="evewrap-ft">                                        
                                        <a href="{{route('blog.detail', $blog->slug)}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        @if(!$loop->last)<div class="col-md-5">@endif
                            <div class="event-small ">
                                <div class="eve-img">
                                    <img src="{{Voyager::image($blog->image)}}" alt="{{$blog->image_alt}}">
                                </div>

                                <div class="eve-dis">
                                    {!!$blog->title!!}

                                    <div class="evewrap-ft">
                                    

                                        <a href="{{route('blog.detail', $blog->slug)}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @if($loop->last)</div>@endif
                    @endif
                @endforeach
                {{-- <div class="col-md-5">
                    <div class="event-small ">
                        <div class="eve-img">
                            <img src="./images/event3.jpg" alt="">
                        </div>

                        <div class="eve-dis">
                            <h5>Arogin family takes the opportunity of teachers day to thank all the wonderful teachers.</h5>

                            <div class="evewrap-ft">
                              

                                <a href="">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="event-small ">
                        <div class="eve-img">
                            <img src="./images/blogs2.jpg" alt="">
                        </div>

                        <div class="eve-dis">
                            <h5>"HAPPY NURSE DAY"
                                We express our appreciation and gratitude for the real heroes(COVID 19 frontliners) and always a hero.</h5>

                            <div class="evewrap-ft">
                              

                                <a href="blog-detail.html">Read More</a>
                            </div>
                        </div>
                    </div> --}}

                    

                </div>


                

                
                

                
            </div>
        </div>
    </section>

    <section class="service-contact">
        <div class="container">
            <div class="ser-con" style="background-image: url(./images/1.jpg);">
                <div class="row">
                    <div class="col-md-4">
                        <div class="sc-wrap">
                            <h4>For Support</h4>
    
                            <div class="sc-card">
                                <i class="fas fa-phone"></i>
                                <p>{{setting('contact.appointment')}}</p>
                            </div>

                            <div class="sc-card">
                                <i class="far fa-envelope"></i>
                                <p>{{setting('contact.email')}}</p>
                            </div>
                        </div>

                        <div class="sc-wrap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.7902562756212!2d85.33082471541569!3d27.72376153137651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb193aadb36ec7%3A0xde536b353406bcbc!2sArogin%20Care%20Home!5e0!3m2!1sen!2snp!4v1630471873164!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                        
                    </div>

                    <div class="col-md-8">
                        <div class="sc-wrap">
                            <h4>Book an Appointment</h4>
                            <p>We are happy to welcome you for your tour at arogin care 
                                home facilities before making your decision.</p>
                            <form action="{{ route('submit-form') }}" method="POST">
                             @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sc-form">
                                        <label >Full Name</label>
                                        <input type="text" name='name' required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="sc-form">
                                        <label >Phone Number</label>
                                        <input type="number" name='phone' required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="sc-form">
                                        <label >Email Address</label>
                                        <input type="email" name='email' required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="sc-form">
                                        <label >Message</label>
                                        <textarea name='message' required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="sc-form">
                                        <button>Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq general-faq">
        <div class="container">
            
            <div class="row align-item-center">
                <div class="col-md-6">
                    <div class="faq-img">
                        <img src="{{Voyager::image($homepage->faq_image)}}" alt="{{$homepage->faq_image_alt}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="sec-head">
                      
                        <h4>
                            FAQS 
                        </h4>
                    </div>

                    <div class="accordion" id="accordionExample">
                        @foreach($faqs as $faq)
                        <div class="card">
                            <div class="card-header" id="heading{{$loop->iteration}}">
                           
                                    <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$loop->iteration}}" aria-expanded="{{$loop->iteration==1 ? "true" : "false"}}" aria-controls="collapse{{$loop->iteration}}">
                                        <h3 class="faq-title">{{$faq->question}}</h3>
                                    </button>
                     
                            </div>
                      
                            <div id="collapse{{$loop->iteration}}" class="collapse {{$loop->iteration==1 ? "show" : ""}}" aria-labelledby="heading{{$loop->iteration}}" data-parent="#accordionExample">
                                <div class="card-body">
                                    {!!$faq->answer!!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="card">
                          <div class="card-header" id="headingTwo">
                            
                              <button class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h1 class="faq-title">How Long Will I Need To Stay In care home?</h1>
                              </button>
                         
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              <p>
                                The length of stay varies and depends on the severity or on the basis of stroke assessment and rehabilitation it varies. The patient will be cared in the best surroundings and by a compassionate, highly trained team of professionals.
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                              
                                <button class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  <h4 class="faq-title">How Long Will I Need To Stay In care home?</h4>
                                </button>
                           
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body">
                                <p>
                                  The length of stay varies and depends on the severity or on the basis of stroke assessment and rehabilitation it varies. The patient will be cared in the best surroundings and by a compassionate, highly trained team of professionals.
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="card">
                            <div class="card-header" id="heading4">
                              
                                <button class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  <h6 class="faq-title">How Long Will I Need To Stay In care home?</h6>
                                </button>
                           
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                              <div class="card-body">
                                <p>
                                  The length of stay varies and depends on the severity or on the basis of stroke assessment and rehabilitation it varies. The patient will be cared in the best surroundings and by a compassionate, highly trained team of professionals.
                                </p>
                              </div>
                            </div>
                          </div> --}}

                      
        
                        
                        
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection

@section('popup')
<script>
    @foreach($popups as $item)
        $(window).on('load',function(){

            $('#indexModal{{ $loop->iteration }}').modal('show');

        });
        @endforeach
    </script>
@endsection