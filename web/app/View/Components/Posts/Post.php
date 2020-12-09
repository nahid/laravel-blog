<?php

declare(strict_types=1);

namespace App\View\Components\Posts;

use Carbon\Carbon;
use Illuminate\View\Component;

class Post extends Component
{
    public ?string $title;
    public ?string $link;
    public ?int $day;
    public ?string $date;

    /**
     * Create a new component instance.
     *
     * @param string|null $title
     * @param string|null $link
     */
    public function __construct(?string $title, ?string $link, $time)
    {
        $this->title = $title;
        $this->link = $link;
        $this->date($time);
    }

    protected function date($date)
    {
        $carbon = new Carbon($date);
        $this->day = $carbon->day;
        $this->date = $carbon->format('M Y');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('web.components.posts.post');
    }
}
