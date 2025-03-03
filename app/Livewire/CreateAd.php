<?php

namespace App\Livewire;

use App\Models\Ad;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateAd extends Component
{
    use WithFileUploads;
    public $images = [];
    public $temporary_images;

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
    public $ad;

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
        $this->ad = Ad::create([
            'title' => $this->title,
            'description' => $this->description,
            'category_id' => $this->category,
            'price' => $this->price,
            'status' => $this->status,
            'color' => $this->color,
            'user_id' => Auth::id(),
        ]);

        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $this->ad->images()->create([
                    'path' => $image->store('images', 'public')]);
            }
        }
    
        $this->reset();
        return redirect()->route('create.ad')->with('success', 'Annuncio creato con successo');

    }
    public function render()
    {
        // $categories = Category::all()->orderBy('name');
        return view('livewire.create-ad');
        // ,compact('categories')
    }

    public function updatedTemporaryImages()
{
    if ($this->validate([
        'temporary_images.*' => 'image|max:1024',
        'temporary_images' => 'max:6'
    ])) {
        foreach ($this->temporary_images as $image) {
            $this->images[] = $image;
        }
    }
}
    public function removeImage($key)
{
    if (in_array($key, array_keys($this->images))) {
        unset($this->images[$key]);
    }
}
}








