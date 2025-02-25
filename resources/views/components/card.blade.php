<div class="card mx-auto shadow text-center mb-3">
    <img src="https://picsum.photos/200" class="card-img-top" alt="immagine dell'articolo {{ $ad->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $ad->title }}</h5>
        <h6 class="card-subtle text-body-secondary">Prezzo: {{ $ad->price }} €</h6>
      
        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="{{route('ad.show',compact('ad'))}}" class="cst-button-card ">Dettaglio</a>
            <a href="{{ route('byCategory', ['category' => $ad->category]) }}" class="cst-button-card2">
                {{ $ad->category->name}}
            </a>
            
        </div>
    </div>
</div>
