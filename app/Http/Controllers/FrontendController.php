<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Career;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $services = Service::where('status', 'active')->with('highlights')->latest()->take(4)->get();
        return view('welcome', compact('services'));
    }

    public function careers()
    {
        $careers = Career::where('status', 'active')->latest()->get();
        return view('frontend.careers.index', compact('careers'));
    }

    public function careerDetails($slug)
    {
        $career = Career::where('slug', $slug)->firstOrFail();
        return view('frontend.careers.details', compact('career'));
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function contact()
    {
        $services = Service::where('status', 'active')->latest()->get();
        return view('frontend.contact.index', compact('services'));
    }

    public function services()
    {
        $services = Service::where('status', 'active')->latest()->get();
        return view('frontend.services.index', compact('services'));
    }

    public function servicesDetails($id)
    {
        $service = Service::with('galleries', 'faqs', 'highlights')->findOrFail($id);
        $services = Service::where('status', 'active')->latest()->get();

        $prevService = Service::where('status', 'active')->where('id', '<', $id)->orderBy('id', 'desc')->first();
        $nextService = Service::where('status', 'active')->where('id', '>', $id)->orderBy('id', 'asc')->first();

        return view('frontend.services.details', compact('service', 'services', 'prevService', 'nextService'));
    }
}
