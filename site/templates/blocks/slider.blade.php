<section>
    <x-layout.swiper>
        <?php $images = $page->gallery()->toFiles();
                        foreach($images as $image): ?>  
            <div class="swiper-slide">
                <div class="bg-cover bg-center md:h-screen h-64 flex items-center" style="background-image: url({{ $image->url() }})">
                    <div class="container mx-auto p-12 md:p-0">
                        <div class="w-full md:w-2/3 space-y-6">
                            <x-header.h1 class="text-white">{{ $image->heading() }}</x-header.h1>
                            <x-text.subtitle class="text-white md:text-regular text-xs">{{ $image->text() }}</x-text.subtitle>
                            @if ($image->boton()->isNotEmpty())
                            <div class="flex justify-center md:justify-start">
                                <a href="{{ $image->enlace() }}">
                                    <x-buttons.blue>{{ $image->boton() }}</x-buttons.blue>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach ?>
    </x-layout.swiper>
</section>
