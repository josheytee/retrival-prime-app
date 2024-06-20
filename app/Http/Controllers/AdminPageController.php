<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminProfileUpdateRequest;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AdminPageController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('admin.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function testimonial(Request $request): View
    {
        $testimonials = Testimonial::all();
        return view('admin.pages.testimonials', compact('testimonials'));
    }
}
