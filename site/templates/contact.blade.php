@extends('layouts.default')
@section('content')

<section class="container mx-auto px-5 md:px-0 mb-12 py-10 md:py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
            @if ($image = $page->background()->tofile())
                <div class="bg-cover bg-center p-10 md:p-20 space-y-5 text-white" style="background-image: url({{ $image->url() }})">         
            @endif
            <h3 class="text-white text-xl md:text-3xl">Para ayuda o dudas con algunos de nuestros servicios contáctanos</h3>
            <div class="space-y-3">
                <p class="text-white hover:underline"><a href="mailto:{{ $site->mail() }}">{{ $site->mail() }}</a></p>
                <p>{{ $site->telefono() }}</p>
                <div>
                    <p>O contáctanos también a través de:</p>
                    <a href="https://api.whatsapp.com/send?phone=521{{ $site->whatsapp() }}" target="blank">
                        <x-buttons.blue class="mt-5 flex items-center">Whatsapp <span><x-icons.whatsapp class="text-white group-hover:text-navy h-6 ml-3"></x-icons.whatsapp></span></x-buttons.blue>
                    </a>
                </div>
            </div>                   
                </div>
                <div class="space-y-5">
                    <p class="text-xl text-navy">También puedes visitarnos en nuestras oficinas ubicadas en: </p>
                    <p>{{ $site->calle() }} No. {{ $site->numero() }}</p>
                    <p>Colonia {{ $site->colonia() }}</p>
                    <p>{{ $site->ciudad() }}, {{ $site->estado() }}</p>       
                    <div>
                        {!! $page->map()->value() !!}
                    </div>
                </div>
    </div>
</section>
@endsection