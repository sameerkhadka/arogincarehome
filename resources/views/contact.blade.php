@extends('layouts.app')
@section('meta')
<meta charset="UTF-8">
<meta name="keywords" content="{{setting('contact.key')}}">
<meta name="description" content="{{setting('contact.description')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('body')
    <section class="inner-banner" style="background: url({{Voyager::image(setting('contact.banner'))}});">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{route('index')}}">home</a></li>
                    <li><a href="">who we are</a></li>
                    <li><a href="">contact us</a></li>
                </ul>
                <h3>Contact Us</h3>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="contact-article">
                <div class="contact-detail">
                    <div class="cd-header">
                        <h4>Contact Information</h4>
                        <p>Fill up the form and our Team will get back to you soon.</p>

                    </div>

                    <div class="cinfo">
                        <div class="c-info-card">
                            <i class="fas fa-phone"></i>
                            <p>{{setting('contact.header')}}</p>
                        </div>

                        <div class="c-info-card">
                            <i class="fas fa-envelope"></i>
                            <p>{{setting('contact.email')}}</p>
                        </div>

                        <div class="c-info-card">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>{{setting('contact.location')}}</p>
                        </div>
                    </div>

                    <div class="contact-social">
                        <a href="{{setting('social-media.facebook')}}"><i class="fab fa-facebook-f"></i> </a>
                        <a href="{{setting('social-media.instagram')}}"><i class="fab fa-instagram"></i></a>
                        <a href="{{setting('social-media.twitter')}}"><i class="fab fa-twitter"></i></a>
                        <a href="{{setting('social-media.linked')}}"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                </div>

                <div class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="cf-card">
                                <label >First Name</label>
                                <input type="text">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="cf-card">
                                <label >Last Name</label>
                                <input type="text">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="cf-card">
                                <label >Mail</label>
                                <input type="email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="cf-card">
                                <label >Phone</label>
                                <input type="number">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="cf-card">
                                <label >Message</label>
                                <textarea></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="cf-card mb-0">
                                <button>Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.7902562756212!2d85.33082471541569!3d27.72376153137651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb193aadb36ec7%3A0xde536b353406bcbc!2sArogin%20Care%20Home!5e0!3m2!1sen!2snp!4v1629971870139!5m2!1sen!2snp"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
  
@endsection