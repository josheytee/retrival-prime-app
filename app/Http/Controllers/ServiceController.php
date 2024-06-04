<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Comment;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Response;


class ServiceController extends Controller
{
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
     * Display the service page.
     */
    public function comment(Request $request, Service $service)
    {

        $comment = Comment::create($request->all());

        if ($comment->id) {
            return Response::json('Comment Sent Successfully!', 200);
            // session()->flash('CommentSent', 'Comment Sent Successfully!');
            return redirect()->intended(route('pages.service', $service))->with('CommentSent', 'Comment Sent Successfully!');
        }
        return redirect()->intended(route('pages.service'))->with('error', 'An error Occured! Please try again');
    }
}
