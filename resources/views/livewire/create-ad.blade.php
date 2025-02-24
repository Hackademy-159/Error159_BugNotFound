<div class="container">

    <div class="row">
        <div class="col-12 col-md-6">
            <form wire:submit="save">
                
                @csrf
                
                <div class="mb-3">
                    <label class="form-label">Titolo</label>
                    <input type="text" class="form-control" wire:model="title">
                </div>


                <div class="mb-3">
                    <label class="form-label">Prezzo</label>
                    <input type="text" class="form-control" wire:model="price">
                </div>


                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <input type="text" class="form-control" wire:model="description">
                </div>


                <div class="mb-3">
                    <label class="form-label">Condizione</label>
                    <select type="text" class="form-select" wire:model="status">
                        <option value="nuovo">Nuovo</option>
                        <option value="ottimo">Ottime</option>
                        <option value="buono">Buone</option>
                        <option value="discreto">Discrete</option>
                        <select/>
                </div>


                <div class="mb-3">
                    <label class="form-label">Colore</label>
                    <input type="text" class="form-control" wire:model="color">
                </div>


                <select class="form-select" wire:model="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>


                <button type="submit" class="btn btn-primary">Conferma inserimento</button>
            
                

            </form>
        </div>
    </div>

</div>
