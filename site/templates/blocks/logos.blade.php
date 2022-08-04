<div class="bg-gray-100">
    <div class="container mx-auto overflow-hidden py-20 space-y-5">
        <x-header.h2 class="">Nuestros Clientes</x-header.h2>
       <x-text.regular>Con algunos de nuestros clientes tenemos más de 6 años trabajando, estamos seguros que estarán contentos de compartir contigo su experiencia. </x-text.regular>
       <div class="grid grid-cols-2 md:grid-cols-4 gap-10 items-center">
        <?php $images = $page->brands()->toFiles();
                            foreach($images as $image): ?>  
                <div class="">
                    <img class="mx-auto w-32" src="{{ $image->url() }}" alt="Logo">
                </div>
            <?php endforeach ?>
        </div> 
    </div>
</div>