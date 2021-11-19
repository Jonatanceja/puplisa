<section class="bg-gray-100 pt-24 pb-56">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-end px-5 md:px-0">
        <div class="space-y-5 wow fadeInRight">
            <x-header.h4>{{ $page->info() }}</x-header.h4>
            <x-header.h2>{{ $page->heading() }}</x-header.h2>
            <div class="flex space-x-5">
                @if ($page->button1()->isNotEmpty())
                <a href="{{ $page->link1() }}">
                    <x-buttons.blue>
                        {{ $page->button1() }}
                    </x-buttons.blue>
                </a>
                @endif
                @if ($page->button2()->isNotEmpty())
                <a href="{{ $page->link2() }}">
                    <x-buttons.navy>
                        {{ $page->button2() }}
                    </x-buttons.navy>
                </a>
                @endif
            </div>
        </div>
        <div class="wow fadeInLeft">
            <x-text.regular class="font-bold">
                {!! $page->text()->kti() !!}
            </x-text.regular>
        </div>
    </div>
</section>