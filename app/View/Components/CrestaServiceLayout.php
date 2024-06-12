<?php

namespace App\View\Components;

use App\Models\Comment;
use App\Models\Service;
use Illuminate\View\Component;
use Illuminate\View\View;

class CrestaServiceLayout extends Component
{

    // public $id;
    public function __construct(public string $name, public string $imagepath = "", public string $description = "", public int $id = 0)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $services = Service::all();
        $comments = Comment::where('service_id', $this->id)->where('approved', 1)->get();
        return view('layouts.cresta-service', compact('services', 'comments'));
    }
}
