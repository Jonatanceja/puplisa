<div class="bg-gray-100">
    <div class="container mx-auto overflow-hidden py-20">
        <x-header.h2 class="pb-20">Nuestros {{ $page->title() }}</x-header.h2>
        <x-layout.carousel>
            <?php $images = $page->brands()->toFiles();
                            foreach($images as $image): ?>  
                <div class="swiper-slide">
                    <img class="mx-auto w-56" src="{{ $image->url() }}" alt="Logo">
                </div>
            <?php endforeach ?>
        </x-layout.carousel>
    </div>
</div>