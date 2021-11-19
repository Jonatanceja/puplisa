<section class="pb-14 -mt-24">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-end px-5 md:px-0">
        <div class="wow fadeInRight">
            @if ( $image = $page->photo()->toFile())
                <img src="{{ $image->url() }}" alt="">
            @endif
        </div>
        <div class="flex flex-wrap space-y-5 wow fadeInLeft">
            <x-text.regular>{!! $page->text()->kti() !!}</x-text.regular>
            <a href="{{ $page->link() }}">
            <x-buttons.blue>
                {{ $page->button() }}
            </x-buttons.blue>
            </a>
        </div>
    </div>
</section>