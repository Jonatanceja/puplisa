<div class="container px-5 md:px-0 mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 pb-24 -m-20">
    @foreach ($page->blurb()->toStructure() as $item)
        <x-ui.card class="wow fadeInUp" data-wow-delay="{{ $loop->iteration * 250 }}ms">
            @if ($image = $item->icono()->toFile()) 
                <img class="" src="{{ $image->url() }}" alt="">
            @endif
            <h3 class="font-bold text-xl text-gray-900 group-hover:text-white">{{ $item->heading() }}</h3>
            <p>{{ $item->text() }}</p>
            <x-ui.chevronr class="text-gray-900 w-10 h-10 p-2 group-hover:text-white border-orange group-hover:border-white border rounded-full" />
        </x-ui.card>
    @endforeach
</div>