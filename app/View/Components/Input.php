<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $type = 'text',
        public $label = null,
        public $required = false,
        public $list = false,
        public $wire = null,
        public $name = null,
        public $id = null,
        public $options = null
    )
    {
        $this->type = $type;
        $this->label = $label;
        $this->required = $required;
        $this->list = $list;
        $this->wire = $wire;
        $this->name = $name ?? $this->wire;
        $this->id = $id ?? $this->name;
        $this->options = json_decode($options, true);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
