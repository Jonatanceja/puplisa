<div class="bg-gray-100">
    <div class="container mx-auto overflow-hidden py-20 px-5 md:px-0">
        <x-header.h2 class="pb-20">Nuestros {{ $page->title() }}</x-header.h2>
        <x-layout.carousel>
            <?php $images = $page->brands()->toFiles();
                            foreach($images as $image): ?>  
                <div class="swiper-slide">
                    <a href="{{ $image->enlace() }}"><img class="mx-auto w-32" src="{{ $image->url() }}" alt="Logo"></a>
                </div>
            <?php endforeach ?>
        </x-layout.carousel>
    </div>
</div>