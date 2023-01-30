<?php

namespace App\View\Components\Forms\controls;

use Illuminate\View\Component;

class Input extends Component
{
    public string $label;
    public string $name;
    public string $id;
    public string $type;

    /**
     * @param string $label
     * @param string $name
     * @param string $id
     */
    public function __construct(string $label, string $name, string $id, string $type)
    {
        $this->label = $label;
        $this->name = $name;
        $this->id = $id;
        $this->type = $type;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.controls.input');
    }
}
