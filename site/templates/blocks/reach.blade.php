@if ($image = $page->background()->tofile())
    <div class="bg-cover bg-center p-10 md:p-20 " style="background-image: url({{ $image->url() }})">         
@endif
        <div class="space-y-5 text-center text-white">
            <p class="text-4xl text-white">Contáctanos para más información: </p>
            <div class="space-y-3">
                <a class="hover:underline" href="tel:{{ $page->phone() }}">
                    <p class="text-xl">{{ $page->phone() }}</p>
                </a>
                <a class="hover:underline" href="mailto:{{ $page->mail() }}">
                    <p class="text-xl">{{ $page->mail() }}</p>
                </a>
            </div>
            <div class="flex justify-center">
                <a href="https://api.whatsapp.com/send?phone=521{{ $page->whatsapp() }}" target="blank">
                    <x-buttons.line class="mt-5 flex items-center">Whatsapp <span><x-icons.whatsapp class="text-white group-hover:text-navy h-6 ml-3"></x-icons.whatsapp></span></x-buttons.line>
                </a>
            </div>
        </div>
    </div>