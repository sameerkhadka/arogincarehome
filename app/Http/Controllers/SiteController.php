<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

use App\Blog;

use App\Event;

use App\Story;

use App\Service;

use App\Testimonial;

use App\Homepage;

use App\Feature;

use App\Faq;

use App\Tip;

use App\CareService;

use App\Popup;

class SiteController extends Controller
{
    public function index()
    {
        $items = Slider::all();
        $homepage = Homepage::where('id','1')->first();
        $testimonials = Testimonial::orderBy('order', 'asc')->paginate(5);
        $services = Service::orderBy('order','asc')->get();
        $story =  Story::where('id','1')->first();
        $events = Event::orderBy('created_at', 'desc')->get();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(3);
        $features = Feature::orderBy('created_at', 'desc')->get();
        $faqs = Faq::where('type','homepage')->orderBy('order','asc')->get();
        $popups = Popup::where('status',1)->orderBy('order', 'desc')->get();
        return view('index', compact('items','homepage','testimonials','services','story','events','blogs','features','faqs','popups'));
    }

    public function blog()
    {
        $items = Blog::orderBy('created_at', 'desc')->get();
        return view('blogs', compact('items'));
    }

    public function blog_detail($slug)
    {
        $item = Blog::where('slug' , $slug)->first();
        return view('blog-detail', compact('item'));
    }

    public function event()
    {
        $items = Event::orderBy('created_at', 'desc')->get();
        return view('events', compact('items'));
    }

    public function event_detail($slug)
    {
        $item = Event::where('slug' , $slug)->first();
        return view('event-detail', compact('item'));
    }

    public function testimonial()
    {
        $items = Testimonial::orderBy('created_at', 'desc')->get();
        return view('testimonial', compact('items'));
    }

    public function team()
    {
        return view('team');
    }

    public function story()
    {
        $services = Service::orderBy('order','asc')->get();
        $item =  Story::where('id','1')->first();
        return view('our-story', compact('services', 'item'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function faq()
    {
        $faqs = Faq::where('type','main')->orderBy('order','asc')->get();
        return view('faq', compact('faqs'));
    }

    public function tip()
    {
        $tips = Tip::orderBy('order','asc')->get();
        return view('tips', compact('tips'));
    }

    public function services($slug)
    {
        $item = CareService::where('slug', $slug)->first();
        return view('service', compact('item'));
    }
}

