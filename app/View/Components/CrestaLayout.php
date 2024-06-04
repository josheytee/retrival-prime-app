<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;
use Illuminate\View\View;

class CrestaLayout extends Component
{

    public function __construct(public string $title = "Home")
    {
    }



    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $services = Service::all();

        return view('layouts.cresta', compact('services'));
    }
}
