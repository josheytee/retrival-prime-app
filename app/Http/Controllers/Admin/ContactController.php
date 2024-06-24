<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(Request $request): View
    {
        $contacts = Contact::latest()->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function create(Request $request)
    {
        return view('admin.contacts.create');
    }

    public function show(Request $request, Contact $scheduleInterview)
    {
        // return view('scheduleInterview.show', compact('scheduleInterview'));
    }

    public function edit(Request $request, Contact $testimonial)
    {
        return view('admin.contacts.edit', compact('testimonial'));
    }

    public function update(Request $request, Contact $testimonial)
    {
        // dd($request->validated());
        $testimonial->update($request->all());

        // $request->session()->flash('scheduleInterview.id', $scheduleInterview->id);

        return redirect()->route('contacts.index');
    }

    public function destroy(Request $request, Contact $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('contacts.index');
    }
    public function acknowledge(Contact $contact)
    {
        // dd($contact);
        $contact->acknowledged = !$contact->acknowledged;
        $contact->save();
        return redirect()->route('contacts.index');
    }

    public function store(Request $request)
    {
        // dd($request->all() + ['proffession' => null]);
        $testimonial = Contact::create($request->all());
        if (isset($testimonial->id))
            return redirect()->route('contacts.index');
        else
            return redirect()->route('contacts.create');
    }
}
