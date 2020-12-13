<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $links_breadcrumb;
    public $current_breadcrumb;
    public function mount($links_breadcrumb = [], $current_breadcrumb = null)
    {
        $this->current_breadcrumb = $current_breadcrumb;
        $this->links_breadcrumb = $links_breadcrumb;
    }
    public function render()
    {
        return view('livewire.component.breadcrumb');
    }
}
