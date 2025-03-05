<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9">
            <form wire:submit.prevent="save" class="cst-form p-5 my-5 shadow">

                @csrf

                <!-- Titolo -->
                <div class="mb-3">
                    <label class="form-label">{{__('ui.Titolo')}}</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                        wire:model.defer="title">
                    @error('title')
                        <div class="invalid-feedback d-flex align-items-center">
                            <i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Prezzo -->
                <div class="mb-3">
                    <label class="form-label">{{__('ui.Prezzo')}}</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror"
                        wire:model.defer="price">
                    @error('price')
                        <div class="invalid-feedback d-flex align-items-center">
                            <i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Descrizione -->
                <div class="mb-3">
                    <label class="form-label">{{__('ui.Descrizione')}}</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror"
                        wire:model.defer="description">
                    @error('description')
                        <div class="invalid-feedback d-flex align-items-center">
                            <i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Condizione -->
                <div class="mb-3">
                    <label class="form-label">{{__('ui.Condizione')}}</label>
                    <select class="form-select @error('status') is-invalid @enderror" wire:model.defer="status">
                        <option value="">{{__('ui.Seleziona una condizione')}}</option>
                        <option value="nuovo">{{__('ui.Nuovo')}}</option>
                        <option value="ottimo">{{__('ui.Ottime')}}</option>
                        <option value="buono">{{__('ui.Buone')}}</option>
                        <option value="discreto">{{__('ui.Discrete')}}</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback d-flex align-items-center">
                            <i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Colore -->
                <div class="mb-3">
                    <label class="form-label">{{__('ui.Colore')}}</label>
                    <input type="text" class="form-control @error('color') is-invalid @enderror"
                        wire:model.defer="color">
                    @error('color')
                        <div class="invalid-feedback d-flex align-items-center">
                            <i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Categoria -->
                <div class="mb-3">
                    <label class="form-label">{{__('ui.Categoria')}}</label>
                    <select class="form-select @error('category') is-invalid @enderror" wire:model.defer="category">
                        <option value="">{{__('ui.Seleziona una categoria')}}</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="invalid-feedback d-flex align-items-center">
                            <i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}
                        </div>
                    @enderror
                </div>


                {{-- inserimento immagini --}}
                <div class="mb-3">
                    <label class="form-label">{{__('ui.Inserisci immagini')}}</label>
                    <input type="file" wire:model.live="temporary_images" multiple
                        class="form-control shadow @error('temporary_images.') is-invalid @enderror"
                        placeholder="Img" />
                    @error('temporary_images.')
                        <p class="fst-italic text-danger">{{ $message }}</p>
                    @enderror
                    @error('temporary_images')
                        <p class="fst-italic text-danger">{{ $message }}</p>
                    @enderror
                </div>

                @if (!empty($images))
                    <div class="mb-3 mx-3">
                            <label for="" class="form-label">Anteprima immagini caricate</label>
                            <div class="row border-create-img shadow py-4">
                                @foreach ($images as $key => $image)
                                    <div class="col d-flex flex-column align-items-center my-3 p-0">
                                        <div class="img-preview mx-auto shadow rounded"
                                            style="background-image: url({{ $image->temporaryUrl() }});">
                                        </div>
                                        <button type="button" class="cst-button"
                                            wire:click="removeImage({{ $key }})">X
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                @endif

                <!-- Bottone di conferma -->
                <div class="d-flex justify-content-center pt-4">
                    <button type="submit" class="cst-button-card">Conferma inserimento</button>
                </div>
            </form>
        </div>
    </div>
</div>
