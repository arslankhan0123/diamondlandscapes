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

    public function gallery()
    {
        return view('frontend.gallery.index');
    }

    public function reviews()
    {
        return view('frontend.reviews.index');
    }

    public function quote()
    {
        $services = Service::where('status', 'active')->latest()->get();
        return view('frontend.quote.index', compact('services'));
    }

    public function faq()
    {
        return view('frontend.faq.index');
    }

    public function services(Request $request)
    {
        $query = Service::where('status', 'active');
        $selected_category = null;

        if ($request->has('category')) {
            $selected_category = \App\Models\Category::where('slug', $request->category)->first();
            if ($selected_category) {
                $query->where('category_id', $selected_category->id);
            }
        }

        $services = $query->latest()->get();
        return view('frontend.services.index', compact('services', 'selected_category'));
    }

    public function servicesDetails($id)
    {
        $service = Service::with('galleries', 'faqs', 'highlights')->findOrFail($id);
        $services = Service::where('status', 'active')->where('category_id', $service->category_id)->latest()->take(3)->get();

        $prevService = Service::where('status', 'active')->where('id', '<', $id)->orderBy('id', 'desc')->first();
        $nextService = Service::where('status', 'active')->where('id', '>', $id)->orderBy('id', 'asc')->first();

        return view('frontend.services.details', compact('service', 'services', 'prevService', 'nextService'));
    }
}
