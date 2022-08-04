@extends('layouts.default')
@section('content')

<div class="py-10 container mx-auto space-y-5 min-h-screen">
        <x-header.h2>Nuestros servicios</x-header.h2>
        @foreach ($page->children() as $subpage)
            <div class="pb-5 border-b border-gray-300">
                <x-header.h3>{{ $subpage->title() }}</x-header.h3>
                <a class="hover:underline" href="{{ $subpage->url() }}">
                    Ver características del servicio →
                </a>
            </div>
        @endforeach
</div>

@endsection
