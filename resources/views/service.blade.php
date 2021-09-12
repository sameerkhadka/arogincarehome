@extends('layouts.app')
@section('meta')
<meta charset="UTF-8">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('body')
    <section class="inner-banner" style="background: url(./images/nusring-care.jpg);">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="">home</a></li>
                    <li><a href="">care service</a></li>
                    <li><a href="">24/7 nursing care</a></li>
                </ul>
                <h3>24/7 Nursing care</h3>
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
                            <li><a href=""> 24/7 Nursing care <img src="./images/icon/star-blue.svg" alt=""></a></li>
                            <li><a href=""> Stroke Care & Rehabilitation <img src="./images/icon/star-blue.svg" alt=""></a></li>
                            <li><a href=""> Dementia & Alzheimer’s Care <img src="./images/icon/star-blue.svg" alt=""></a></li>
                            <li><a href=""> Residential & Day care service <img src="./images/icon/star-blue.svg" alt=""></a></li>
                            <li><a href=""> Palliative Care <img src="./images/icon/star-blue.svg" alt=""></a></li>
                            <li><a href=""> Ortho & Spinal Injury Care <img src="./images/icon/star-blue.svg" alt=""></a></li>
                            <li><a href=""> Lab Services <img src="./images/icon/star-blue.svg" alt=""></a></li>
                            <li><a href=""> Pharmacy <img src="./images/icon/star-blue.svg" alt=""></a></li>
                        </ul>
                    </div>

                    <div class="services-contact">
                        <h4 class="heading-bg">Contact Us</h4>

                        <div class="sc-card">
                            <i class="fas fa-phone"></i>
                            <p>9801143425</p>
                        </div>

                        <div class="sc-card">
                            <i class="far fa-envelope"></i>
                            <p>info@arogincarehome.com</p>
                        </div>

                        <div class="sc-card">
                            <i class="fab fa-whatsapp"></i>
                            <p>9801143425</p>
                        </div>
                    </div>

                    <div class="services-contact">
                        <h4 class="heading-bg">Book Appointment</h4>

                        <div class="qc-form">
                            <input type="text" placeholder="Full Name">
                        </div>

                        <div class="qc-form">
                            <input type="number" placeholder="Contact Number">
                        </div>

                        <div class="qc-form">
                            <input type="email" placeholder="Email Address">
                        </div>

                        <div class="qc-form">
                            <textarea name="" placeholder="Your Message" ></textarea>
                        </div>

                        <div class="qc-form">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="care-top-text">
                        <p>
                            Our Residential care service is designed for patients requiring minimal personal
                             care to critical care , comfort, convenience, 
                             hospitality are placed at the heart of Arogin where
                              patients are encouraged and can continue to lead 
                              independent and fulfilling lives. Our highly trained 
                              care team spends time getting to know each patient and
                               their loved ones in order to deliver patient centered care 
                        </p>

                        <p>
                            Our approach to Nursing care is enabled by the patient specific care plan and it is created for each resident. It helps us to ensure that every patient we look after is treated according to their specific needs and abilities. Arogin does its best in offering the best chance for recovery or for living with as much independence as possible                                                                        .

                        </p>

                        <p>
                            The patients who need close monitoring by a skilled & qualified nursing care team around the clock will be facilitated with 24/7 Nursing care.  For instance, this may include people who need rehabilitative care after an accident, stroke or people with longer-term conditions, bedridden.

                        </p>
                    </div>

                    <section class="care-tags">
                            <ul>
                                <li>close monitoring</li>
                                <li>24/7 nursing care</li>
                                <li>rehabilitative care</li>
                                <li>highest quality care psychologically</li>
                                <li>friendly care givers</li>
                                <li>patient specific care plan</li>
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
                <div class="item">
                    <div class="care-img-card">
                        <a href="images/event2.jpg" data-lightbox="nursing-care">
                            <img src="images/event2.jpg" alt="">
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
                </div>

            </div>

            
        </div>
    </section>

    

    <section class="faq general-faq">
        <div class="container">
            
            <div class="row align-item-center">
                <div class="col-md-5">
                    <div class="faq-img">
                        <img src="./images/faqimage.svg" alt="">
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="sec-head">
                      
                        <h4>
                            FAQS 
                        </h4>
                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="card">
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
                          </div>

                      
        
                        
                        
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection