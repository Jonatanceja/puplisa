@if ($image = $page->photo()->toFile())
    <section class="bg-cover bg-center" style="background-image: url({{ $image->url() }})">
@endif
        <div class="container mx-auto text-white wow fadeInRight px-5 md:px-0">
            <div class="py-24 space-y-5">
                <h4 class="font-bold">
                    {{ $page->info() }}
                </h4>
                <h3 class="text-4xl font-bold w-full md:w-1/2">
                    {{ $page->heading() }}
                </h3>
                <div>
                    <a href="{{ $page->link() }}">
                        <x-buttons.line>{{ $page->button() }}</x-buttons.line>
                    </a>

                </div>
            </div>
        </div>
</section>

