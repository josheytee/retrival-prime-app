<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Display the index page.
     */
    public function index(Request $request): View
    {
        return view('pages.index');
    }

    /**
     * Display the services page.
     */
    public function services(Request $request): View
    {
        $services = Service::all();
        return view('pages.services', compact('services'));
    }
    /**
     * Display the service page.
     */
    public function service(Service $service): View
    {

        return view('services.' . $service->slug, compact('service'));
    }



    /**
     * Display the testimonial page.
     */
    public function testimonial(Request $request): View
    {
        return view('pages.testimonial');
    }

    /**
     * Display the news page.
     */
    public function news(Request $request): View
    {
        return view('pages.news');
    }

    /**
     * Display the faq page.
     */
    public function faq(Request $request): View
    {
        return view('pages.faq');
    }

    /**
     * Display the about page.
     */
    public function about(Request $request): View
    {
        return view('pages.about');
    }
}
