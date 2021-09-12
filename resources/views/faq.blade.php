@extends('layouts.app')
@section('meta')
<meta charset="UTF-8">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('body')
    <section class="inner-banner" style="background: url(./images/faq.jpg);">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="">home</a></li>
                    <li><a href="">resources</a></li>
                    <li><a href="">FAQs</a></li>
                </ul>
                <h3>FAQs</h3>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            
            <div class="accordion" id="accordionExample">
                @foreach($faqs as $faq)
                <div class="card">
                    <div class="card-header" id="headingOne">
                   
                            <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$loop->iteration}}" aria-expanded="false" aria-controls="collapse{{$loop->iteration}}">
                                {{$faq->question}}
                            </button>
             
                    </div>
              
                    <div id="collapse{{$loop->iteration}}" class="collapse" aria-labelledby="heading{{$loop->iteration}}" data-parent="#accordionExample">
                        <div class="card-body">
                            {!!$faq->answer!!}
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="card">
                  <div class="card-header" id="headingTwo">
                    
                      <button class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How Long Will I Need To Stay In care home?
                      </button>
                 
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <p>
                        The length of stay varies and depends on the severity or on the basis of stroke assessment and rehabilitation it varies. The patient will be cared in the best surroundings and by a compassionate, highly trained team of professionals.
                      </p>
                    </div>
                  </div>
                </div> --}}

                
                
            </div>

        </div>
    </section>

    @endsection