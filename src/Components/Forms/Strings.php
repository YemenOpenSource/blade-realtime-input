<?php

declare(strict_types=1);

namespace YemeniOpenSource\BladeRealtimeInput\Components\Forms;

use Illuminate\View\Component;

class Strings extends Component
{
    public $name;

    public $rules;

    /**
     * Create the component instance.
     *
     * @param  string  $name
     * @param  array|string  $rules
     * @return void
     */
    public function __construct($name, $rules)
    {
        $this->name = $name;
        $this->rules = $rules;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('realtime-input::strings');
    }
}
