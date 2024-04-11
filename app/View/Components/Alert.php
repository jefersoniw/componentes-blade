<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{

    private array $colors = [
        'green' => 'success',
        'red' => 'danger',
        'orange' => 'warning',
        'blue' => 'info',
    ];

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $color = 'green'
    )
    {
        //
    }

    public function get_color(): string
    {
        return $this->colors[$this->color] ?? 'success';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
