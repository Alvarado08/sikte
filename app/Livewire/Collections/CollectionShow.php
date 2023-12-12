<?php

namespace App\Livewire\Collections;

use App\Models\Collection;
use Livewire\Component;

class CollectionShow extends Component
{
    public Collection $collection;
    public function mount($slug)
    {
        $this->collection = Collection::where('slug',$slug)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.collections.collection-show');
    }
}
