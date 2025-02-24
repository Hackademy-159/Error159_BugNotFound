<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CreateAd extends Component
{
    public function render()
    {
        $categories = Category::all();

        return view('livewire.create-ad', compact('categories'));
    }
}
