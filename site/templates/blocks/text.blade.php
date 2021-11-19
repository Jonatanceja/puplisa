<section class="py-14 md:py-24 bg-no-repeat bg-top bg-white -mt-24" style="background-image: url(/images/mapa.png)">
    <div class="container mx-auto px-5 md:px-0">
        <div class="space-y-5 text-center wow fadeIn">
            <x-header.h4>{{ $page->info() }}</x-header.h4>
            <x-header.h2>{{ $page->heading() }}</x-header.h2>
            <x-text.regular>{!! $page->text() !!}</x-text.regular>
        </div>
            </div>
</section>