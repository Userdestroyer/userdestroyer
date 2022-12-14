<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Projects extends Component
{
    public $company;
    public $projects;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($company)
    {
        $this->company = $company;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->projects = $this->company->projects;
        return view('components.projects');
    }
}
