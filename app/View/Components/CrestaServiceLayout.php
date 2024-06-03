<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;
use Illuminate\View\View;

class CrestaServiceLayout extends Component
{

    public function __construct(public string $name, public string $imagepath = "")
    {
        // dd($name);
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $services = Service::all();
        return view('layouts.cresta-service', compact('services'));
    }
}
