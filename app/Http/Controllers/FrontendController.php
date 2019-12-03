<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Package;
use App\Testimonial;
use App\Whyus;
use App\Service;
use App\Feature;
use App\Seo;
use App\Portfolio;
use App\Summary;
class FrontendController extends Controller
{
    public function view(){

    	$about = About::get()->first();
    	$package = Package::where('status','active')->get()->all();
    	$testimonial = Testimonial::where('status','active')->get()->all();
    	$why = Whyus::where('status','active')->get()->all();
    	$service =Service::where('status','active')->get()->all();
    	$features = Feature::where('status','active')->get()->all();
    	$seo = Seo::get()->first();
    	$servicesum = Summary::where('name','service')->get()->first();
    	$portfoliosum = Summary::where('name','portfolio')->get()->first();
    	$packagesum = Summary::where('name','package')->get()->first();
    	$whyussum = Summary::where('name','whyus')->get()->first();
    	$testimonialsum = Summary::where('name','testimonial')->get()->first();
    	$contactsum = Summary::where('name','contact')->get()->first();
    	$featuresum = Summary::where('name','feature')->get()->first();
    	$subscriptionsum = Summary::where('name','subscription')->get()->first();
    	$portfolio = Portfolio::where('status','active')->get()->all();
    	return view('frontend.home.home',compact('portfolio','about','package','testimonial','why','service','features','seo','packagesum','portfoliosum','servicesum','whyussum','testimonialsum','contactsum','featuresum','subscriptionsum'));
    }
}
