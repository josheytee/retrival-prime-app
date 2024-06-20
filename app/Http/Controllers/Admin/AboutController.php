<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index(Request $request): View
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    public function create(Request $request)
    {
        // return view('admin.contacts.create');
    }

    public function show(Request $request, About $scheduleInterview)
    {
        // return view('scheduleInterview.show', compact('scheduleInterview'));
    }

    public function edit(Request $request, About $site)
    {
        $about = $site;
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $site)
    {
        // dd($request->validated());
        $site->update($request->all());

        // $request->session()->flash('scheduleInterview.id', $scheduleInterview->id);

        return redirect()->route('site.index');
    }

    public function destroy(Request $request, About $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('site.index');
    }
    public function acknowledge(About $about)
    {
        // dd($about);
        $about->acknowledged = !$about->acknowledged;
        $about->save();
        return redirect()->route('site.index');
    }

    public function store(Request $request)
    {
        // dd($request->all() + ['proffession' => null]);
        $testimonial = About::create($request->all());
        if (isset($testimonial->id))
            return redirect()->route('contacts.index');
        else
            return redirect()->route('contacts.create');
    }
}
