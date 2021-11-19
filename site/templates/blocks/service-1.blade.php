<div class="container mx-auto block md:flex items-center relative py-12 px-5 md:px-0">
    <div class="w-full wow fadeInRight">
        @if ($image = $page->photo()->toFile())
            <img src="{{ $image->url() }}" alt="">
        @endif
    </div>
    <div class="bg-white shadow-md block md:absolute w-full md:w-3/4 right-0 space-y-7 rounded-md p-24 wow fadeInLeft -mt-10 md:-mt-0" data-wow-delay="300ms">
        <x-header.h3>{{ $page->title() }}</x-header.h3>
        <x-text.regular>{!! $page->text()->kti() !!}</x-text.regular>
        <x-buttons.lineb class="">{{ $page->button() }} →</x-buttons.lineb>
    </div>
</div>