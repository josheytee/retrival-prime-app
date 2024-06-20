<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{

    public function index(Request $request): View
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create(Request $request)
    {
        return view('admin.testimonials.create');
    }

    public function show(Request $request, Testimonial $scheduleInterview)
    {
        // return view('scheduleInterview.show', compact('scheduleInterview'));
    }

    public function edit(Request $request, Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        // dd($request->validated());
        $testimonial->update($request->all());

        // $request->session()->flash('scheduleInterview.id', $scheduleInterview->id);

        return redirect()->route('testimonials.index');
    }

    public function destroy(Request $request, Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('testimonials.index');
    }

    public function store(Request $request)
    {
        // dd($request->all() + ['proffession' => null]);
        $testimonial = Testimonial::create($request->all());
        if (isset($testimonial->id))
            return redirect()->route('testimonials.index');
        else
            return redirect()->route('testimonials.create');
    }
}
