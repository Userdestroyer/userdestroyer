<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Job;

class Experience extends Component
{
    public $job;
    public $companies;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($job)
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
        $this->companies = $this->job->company->reverse();
        return view('components.experience');
    }
}
