<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cardState extends Component
{
    public $value;
    public $heading;
    public $subHeading;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value,$heading,$icon, $subHeading="All Time")
    {
        $this->heading = $heading;
        $this->value = $value;
        $this->icon = $icon;
        $this->subHeading = $subHeading;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-state');
    }
}
