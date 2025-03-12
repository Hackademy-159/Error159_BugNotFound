<button wire:click="toggleWishlist" class="border-0 col-bg mt-3">
    @if($isInWishlist)
    <i class="fs-3 bi bi-heart-fill col-b-text"></i><!-- Cuore pieno -->
    @else
    <i class="fs-3 bi bi-heart col-b-text"></i> <!-- Cuore vuoto -->
    @endif
</button>
