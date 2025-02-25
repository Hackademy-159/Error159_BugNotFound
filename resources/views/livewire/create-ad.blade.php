<div class="container mx-auto">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9">
            <form wire:submit="save" class="cst-form p-5 mb-5 shadow">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Titolo</label>
                    <input type="text" class="form-control" wire:model.blur="title">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Prezzo</label>
                    <input type="text" class="form-control" wire:model.blur="price">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <input type="text" class="form-control" wire:model.blur="description">
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Condizione</label>
                    <select type="text" class="form-select" wire:model.blur="status">
                        <option value="nuovo">Nuovo</option>
                        <option value="ottimo">Ottime</option>
                        <option value="buono">Buone</option>
                        <option value="discreto">Discrete</option>
                        <select />
                        @error('status')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Colore</label>
                    <input type="text" class="form-control" wire:model.blur="color">
                    @error('color')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Categoria</label>
                    <select class="form-select" wire:model.blur="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>



                <button type="submit" class="cst-button-card">Conferma inserimento</button>



            </form>
        </div>
    </div>

</div>
