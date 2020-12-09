<?php

namespace App\View\Components\Page;

use Illuminate\View\Component;

class Paginate extends Component
{
    public ?string $next = null;
    public ?string $prev = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(?string $next = null, ?string $prev = null)
    {
        $this->next = $next;
        $this->prev = $prev;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('web.components.page.paginate');
    }
}
