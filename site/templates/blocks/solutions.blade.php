<section class="py-14 bg-no-repeat bg-top bg-opacity-5" style="background-image: url(/images/mapa.png)">
    <div class="container mx-auto px-5 md:px-0">
        <div class="space-y-5 text-center wow fadeIn">
            <x-header.h4>{{ $page->info() }}</x-header.h4>
            <x-header.h2>{{ $page->heading() }}</x-header.h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 py-14">
            <?php $items = $page->blurb()->toStructure(); foreach ($items as $item): ?>
            <x-ui.card2 data-wow-delay="{{ $loop->iteration * 250 }}ms">
                <div class="flex flex-wrap space-y-5">
                        <div class="">
                            @if ($image = $item->icon()->toFile()) 
                            <img class="h-12" src="{{ $image->url() }}" alt="Icono">
                            @endif
                        </div>
                        <h3 class="font-bold text-xl text-navy">{{ $item->heading() }}</h3>
                        <p class="text-gray-500">{{ $item->text() }}</p>   
                        <a class="text-cyan hover:text-navy font-bold transition pt-5" href="/servicios">Ver más →</a> 
                </div>
                        
            </x-ui.card2>
        <?php endforeach ?>
        </div>
    </div>
</section>