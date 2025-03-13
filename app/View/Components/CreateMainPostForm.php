<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CreateMainPostForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $category
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.create-main-post-form');
    }
}
