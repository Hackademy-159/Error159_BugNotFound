<button wire:click="toggleWishlist" class="btn">
    @if($isInWishlist)
        <i class="bi bi-heart-fill text-danger"></i> <!-- Cuore pieno -->
    @else
        <i class="bi bi-heart text-dark"></i> <!-- Cuore vuoto -->
    @endif
</button>
