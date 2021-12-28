<?php

namespace GMJ\LaravelBlock2Recaptcha\View\Components;

use Illuminate\View\Component;

class Wrapper extends Component
{
    public $callback;
    public function mount($callback)
    {
        $this->callback = $callback;
    }

    public function render()
    {
        return view('LaravelBlock2Recaptcha::components.wrapper');
    }
}
