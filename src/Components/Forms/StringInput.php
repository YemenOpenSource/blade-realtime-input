<?php

declare(strict_types=1);

namespace YemeniOpenSource\BladeRealtimeInput\Components\Forms;

use Illuminate\View\Component;

class StringInput extends Component
{
    public $name;

    public $rules;

    public $type = 'text';

    public $id = '';

    public $class = '';

    public $placeholder = '';

    public $onkeypress = '';

    /**
     * Create the component instance.
     *
     * @param  string  $name
     * @param  array|string  $rules
     * @param  string  $id
     * @param  string  $class
     * @param  string  $placeholder
     * @param  string  $onkeypress
     * @param  bool  $is_repeated
     * @return void
     */
    public function __construct($name, $rules, $type = 'text', $id = '', $class = '', $placeholder = '', $onkeypress = '')
    {
        $this->name = $name;
        $this->rules = $rules;
        $this->type = $type;
        $this->id = $id;
        $this->class = $class;
        $this->placeholder = $placeholder;
        $this->onkeypress = $onkeypress;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('realtime-input::components.forms.string-input');
    }
}
