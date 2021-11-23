@extends('layouts.default2')
@section('content')

<section class="container mx-auto px-5 md:px-0 ">
    <div class="space-y-2">
        <x-header.h3>{{ $page->title() }}</x-header.h3>
        <div class="text-gray-600">
            <?php foreach($site->breadcrumb() as $crumb): ?>
                <a class="text-gray-400 hover:text-gray-300" href="<?= $crumb->url() ?>" <?= e($crumb->isActive(), 'aria-current="page"') ?>>
                    <?= html($crumb->title()) ?>
                </a>
                /
        <?php endforeach ?>
        </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 px-5 md:px-0 gap-10">
        <div>
            @if ($image = $page->photo()->toFile())
                <img src="{{ $image->url() }}" alt="">
            @endif
        </div>
        <div class="space-y-5">
            <h3 class="text-xl md:text-2xl text-navy font-bold">Descripción</h3>
            <x-text.regular>
                {!! $page->description()->kti() !!}
            </x-text.regular>
            <div>
                <a href="https://api.whatsapp.com/send?phone=521{{ $site->whatsapp() }}" target="blank">
                    <x-buttons.navy>
                        Cotizar
                    </x-buttons.navy>
                </a>
            </div>
        </div>
    </div>
    <div class="mb-24 bg-gray-50 p-5 md:p-10 rounded-md">
        <?php $items = $page->details()->toStructure(); foreach ($items as $item): ?>
            <div class="grid grid-cols-2">
                <div class="py-2 border-b border-gray-100">
                    <x-text.regular>
                        {{ $item->detail() }}:
                    </x-text.regular>
                </div>
                <div class="py-2 border-b border-gray-100">
                    <x-text.regular>
                        {{ $item->description() }}
                    </x-text.regular>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

@endsection