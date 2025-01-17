<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class v13_messageBanner extends Component
{

    /**
     * Create a new component instance.
     */
    // v13 just like set new props
    public $msg;
    public $customStyle;

    public function __construct($msg, $customStyle)
    {
        //
        // v13 props value
        $this->msg=$msg;
        $this->customStyle=$customStyle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.v13_message-banner');
    }
}
