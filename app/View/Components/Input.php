<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $type;
    public $label;
    public $attribute;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label,$type = "text", $attribute = null, $value = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->attribute = $attribute;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
