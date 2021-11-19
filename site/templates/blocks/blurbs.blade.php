<section class="bg-gray-100">
    <div class="container px-5 md:px-0 mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 pb-24 -m-20">
        <?php $items = $page->blurb()->toStructure(); foreach ($items as $item): ?>
            <x-ui.card class="wow fadeInUp" data-wow-delay="{{ $loop->iteration * 250 }}ms">
                <div class="flex items-center">
                    <div class="relative">
                        @if ($page->inconw()->isNotEmpty())
                        <div>
                            @if ($image = $item->inconw()->toFile()) 
                            <img class="h-10 mr-5" src="{{ $image->url() }}" alt="Icono">
                            @endif
                        </div>
                        @endif
                        @if ($page->iconb()->isNotEmpty())
                        <div class="absolute left-0 top-0 group-hover:opacity-0">
                            @if ($image = $item->iconb()->toFile()) 
                            <img class="h-10 mr-5" src="{{ $image->url() }}" alt="Icono">
                            @endif
                        </div>
                        @endif
                    </div>
                    
                    <h3 class="font-bold text-xl text-navy group-hover:text-white">{{ $item->heading() }}</h3>
                </div>
                <p class="text-gray-500 group-hover:text-white">{{ $item->text() }}</p>
                @if ($page->link()->isNotEmpty())
                <x-ui.chevronr class="text-navy w-10 h-10 p-2 group-hover:text-white border-cyan group-hover:border-white border-2 rounded-full" />
                @endif
            </x-ui.card>
        <?php endforeach ?>
    </div>
</section>
