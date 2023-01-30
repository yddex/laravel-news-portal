<?php

namespace App\View\Components\Forms\controls;

use Illuminate\View\Component;

class Textarea extends Component
{
    public string $label;
    public string $name;
    public string $id;

    /**
     * @param string $label
     * @param string $name
     * @param string $id
     */
    public function __construct(string $label, string $name, string $id)
    {
        $this->label = $label;
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * Create a new component instance.
     *
     * @return void
     */

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.controls.textarea');
    }
}
