@extends('layouts.app')
@section('meta')
<meta charset="UTF-8">
<meta name="keywords" content="{{$item->meta_key}}">
<meta name="description" content="{{$item->meta_description}}">
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
    <section class="inner-banner" style="background: url({{Voyager::image($item->banner_image)}});">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{route('index')}}">home</a></li>
                    <li><a href="">care service</a></li>
                    <li><a href="">{{$item->title}}</a></li>
                </ul>
                <h3>{{$item->title}}</h3>
            </div>
        </div>
    </section>

    <section class="care-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="care-side-nav">
                        <div class="side-nav-head">
                            <h4>More Services</h4>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </div>

                        <ul>
                            @php $services = \App\CareService::all(); @endphp
                            @foreach($services as $service)
                            <li><a href="{{route('services', $service->slug)}}"> {{$service->title}} <img src="{{asset('images/icon/star-blue.svg')}}" alt=""></a></li>
                            @endforeach
                            {{-- <li><a href=""> Stroke Care & Rehabilitation <img src="./images/icon/star-blue.svg" alt=""></a></li>
                            <li><a href=""> Dementia & Alzheimer’s Care <img src="./images/icon/star-blue.svg" alt=""></a></li>
                            <li><a href=""> Residential & Day care service <img src="./images/icon/star-blue.svg" alt=""></a></li>
                            <li><a href=""> Palliative Care <img src="./images/icon/star-blue.svg" alt=""></a></li>
                            <li><a href=""> Ortho & Spinal Injury Care <img src="./images/icon/star-blue.svg" alt=""></a></li>
                            <li><a href=""> Lab Services <img src="./images/icon/star-blue.svg" alt=""></a></li>
                            <li><a href=""> Pharmacy <img src="./images/icon/star-blue.svg" alt=""></a></li> --}}
                        </ul>
                    </div>

                    <div class="services-contact">
                        <h4 class="heading-bg">Contact Us</h4>

                        <div class="sc-card">
                            <i class="fas fa-phone"></i>
                            <p>{{setting('contact.appointment')}}</p>
                        </div>

                        <div class="sc-card">
                            <i class="far fa-envelope"></i>
                            <p>{{setting('contact.email')}}</p>
                        </div>

                        <div class="sc-card">
                            <i class="fab fa-whatsapp"></i>
                            <p>{{setting('contact.whatsapp')}}</p>
                        </div>
                    </div>

                    <div class="services-contact">
                        <h4 class="heading-bg">Book Appointment</h4>
                    <form action="{{ route('submit-form') }}" method="POST">
                        @csrf
                            <div class="qc-form">
                                <input type="text" placeholder="Full Name" name='name' required>
                            </div>

                            <div class="qc-form">
                                <input type="number" placeholder="Contact Number" name='phone' required>
                            </div>

                            <div class="qc-form">
                                <input type="email" placeholder="Email Address" name='email' required>
                            </div>

                            <div class="qc-form">
                                <textarea placeholder="Your Message" name='message' required></textarea>
                            </div>

                            <div class="qc-form">
                                <button>Submit</button>
                            </div>
                    </form>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="care-top-text">
                        {!!$item->content!!}
                    </div>

                    <section class="care-tags">
                            <ul>
                                @php $tags = explode(",",$item->tags) @endphp
                                @foreach($tags as $tag)
                                <li>{{$tag}}</li>
                                @endforeach
                                {{-- <li>24/7 nursing care</li>
                                <li>rehabilitative care</li>
                                <li>highest quality care psychologically</li>
                                <li>friendly care givers</li>
                                <li>patient specific care plan</li> --}}
                            </ul>
                      
                    </section>
                </div>
            </div>
        </div>
    </section>


    <section class="care-img">
        <div class="container">
            <div class="sec-head">
                <p>Gallery</p>

                <h4>
                    Featured Images    
                </h4>
            </div>

            <div class="care-image-silder owl-carousel">
                @foreach(json_decode($item->images) as $img)
                    <div class="item">
                        <div class="care-img-card">
                            <a href="{{Voyager::image($img)}}" data-lightbox="nursing-care">
                                <img src="{{Voyager::image($img)}}" alt="{{$item->image_alts ? json_decode($item->image_alts)[$loop->iteration - 1] : ''}}">
                                <img src="{{asset('images/modal.svg')}}" class="md-btn">
                            </a>                          
                        </div>
                    </div>
                @endforeach

                {{-- <div class="item">
                    <div class="care-img-card">
                        <a href="images/care-services1.jpg" data-lightbox="nursing-care">
                            <img src="images/care-services1.jpg" alt="">
                            <img src="images/modal.svg" alt="" class="md-btn">
                        </a>   
                    
                    </div>
                </div>

                <div class="item">
                    <div class="care-img-card">
                        <a href="images/IMG-14ae1b68a4a15a5b061999f492f97399-V.jpg" data-lightbox="nursing-care">
                            <img src="images/IMG-14ae1b68a4a15a5b061999f492f97399-V.jpg" alt="">
                            <img src="images/modal.svg" alt="" class="md-btn">
                        </a>   
                    
                    </div>
                </div>

                <div class="item">
                    <div class="care-img-card">
                        <a href="images/care-services1.jpg" data-lightbox="nursing-care">
                            <img src="images/care-services1.jpg" alt="">
                            <img src="images/modal.svg" alt="" class="md-btn">
                        </a>   
                    
                    </div>
                </div> --}}

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
                        @php $faqs = \App\Faq::where('type','careservices')->where('type_id',$item->id)->orderBy('order','asc')->get(); @endphp
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

                        {{-- <div class="card">
                            <div class="card-header" id="headingOne">
                           
                                    <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h3 class="faq-title">When Are Visiting Hours?</h3>
                                    </button>
                     
                            </div>
                      
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        We strive to accommodate the needs of family and friends of patients as much as possible and our visiting hours are also flexible .
                                   
        
                                        We have no restrictions for visiting your loved ones at Arogin care home  as we believe that patients benefit from regular visits from friendly faces.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
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
                            <div class="card-header" id="headingFour">
                              
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