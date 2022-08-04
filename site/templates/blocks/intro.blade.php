<div class="container py-20 mx-auto px-5 md:px-0">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-20 items-center">
        <div>
            <x-header.h2 class="pb-5">Nuestro servicios de {{ $page->parent()->title() }}</x-header.h2>
            <x-text.regular>{!! $page->text()->kti() !!}</x-text.regular>
        </div>
        <div>
            @if ($image = $page->pic()->toFile())
               <img src="{{ $image->crop(600, 600)->url() }}" alt="Imagen"> 
            @endif
        </div>
    </div>
</div>