<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Description as Desc;

class Description extends Component
{
    public string $job;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $job)
    {
        $this->job = $job;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if(!$description = Desc::where('codename', $this->job)->first()){
            return abort('404');
        }
        return view('components.description', ['description' => $description]);
    }
}
