<div class="container mx-auto py-20 max-w-4xl">
    @if ($image = $page->info()->toFile())
        <img class="w-full" src="{{ $image->url() }}" alt="Infografía">
    @endif  
</div>