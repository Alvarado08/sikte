<?php

namespace App\Livewire\Collections;

use App\Models\Collection;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

// #[Title('Collections - SIKTE')]
class CollectionIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.collections.collection-index')
            ->with([
                'collections' => Collection::latest()->paginate(6)
            ])
            ->title('Collections - '.config('app.name'));
    }
}
