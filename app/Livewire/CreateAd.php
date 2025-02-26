<?php

namespace App\Livewire;

use App\Models\Ad;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;

class CreateAd extends Component
{
    #[Validate('required|min:5')]
    public $title;
    #[Validate('required|min:10')]
    public $description;
    #[Validate('required')]
    public $category;
    #[Validate('required|numeric')]
    public $price;
    #[Validate('required')]
    public $status;
    #[Validate('required')]
    public $color;
    public $article;

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.min' => 'Il titolo deve contenere almeno 5 caratteri.',
            'description.required' => 'La descrizione è obbligatoria.',
            'description.min' => 'La descrizione deve contenere almeno 10 caratteri.',
            'category.required' => 'Seleziona una categoria.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'status.required' => 'Seleziona uno stato.',
            'color.required' => 'Seleziona un colore.',
        ];
    }
    public function save(){
        $this->validate();
        $this->article = Ad::create([
            'title' => $this->title,
            'description' => $this->description,
            'category_id' => $this->category,
            'price' => $this->price,
            'status' => $this->status,
            'color' => $this->color,
            'user_id' => Auth::id(),
        ]);
        $this->reset();
        return redirect()->route('create.ad')->with('success', 'Annuncio crerato con successo');

    }
    public function render()
    {
        // $categories = Category::all()->orderBy('name');
        return view('livewire.create-ad');
        // ,compact('categories')
    }
}
