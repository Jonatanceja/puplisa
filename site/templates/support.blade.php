@extends('layouts.default2')
@section('content')

<section class="container mx-auto px-5 md:px-0 mb-24">
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class=" space-y-5">
            <div class="space-y-2">
                <x-header.h2>{{ $page->title() }}</x-header.h2>
                <x-header.h4>{{ $page->text() }}</x-header.h4>
            </div>
            <div class="space-y-3">
                <x-header.h3>Indicaciones</x-header.h3>
                <x-text.regular>
                    {!! $page->steps()->kti() !!}
                </x-text.regular>
            </div>
            <div class="flex space-x-5">
                <a href="{{ $page->mac() }}">
                    <x-buttons.navy class="mt-5 flex items-center">Descarga Mac <span><x-icons.macos class="text-white h-6 ml-3"></x-icons.macos></span>
                    </x-buttons.navy>
                </a>
                <a href="{{ $page->mac() }}">
                    <x-buttons.blue class="mt-5 flex items-center">Descarga Windows <span><x-icons.windows class="text-white h-6 ml-3"></x-icons.windows></span>
                    </x-buttons.blue>
                </a>
            </div>
        </div>
        <div>
            @if ($image = $page->background()->tofile())
                <div class="bg-cover bg-center p-10 md:p-20 space-y-5" style="background-image: url({{ $image->url() }})">         
            @endif
                    <p class="text-xl text-white">También puedes visitarnos en nuestras oficinas ubicadas en: </p>
                    <div class="text-white">
                        <p>{{ $site->calle() }} No. {{ $site->numero() }}</p>
                        <p>Colonia {{ $site->colonia() }}</p>
                        <p>{{ $site->ciudad() }}, {{ $site->estado() }}</p> 
                        <p><br></p>
                        <p class="hover:text-gray-200"><a href="mailto:{{ $site->mail() }}">{{ $site->mail() }}</a></p>
                        <p>{{ $site->telefono() }}</p>
                    </div>
                    <div>
                        <p class="text-xl text-white">O contáctanos también a través de:</p>
                        <a href="https://api.whatsapp.com/send?phone=521{{ $site->whatsapp() }}" target="blank">
                            <x-buttons.line class="mt-5 flex items-center">Whatsapp <span><x-icons.whatsapp class="text-white group-hover:text-navy h-6 ml-3"></x-icons.whatsapp></span></x-buttons.line>
                        </a>
                    </div>
                </div>
        </div>

    </div>
    
    
</section>

@endsection