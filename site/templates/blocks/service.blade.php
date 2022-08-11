@extends('layouts.default')
@section('content')

<section>
    <div class="py-20 container mx-auto px-5 md:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div>
                @if ($image = $page->photo()->toFile())
                <img src="{{ $image->url() }}" alt="Imagen de servicio">
                @endif
            </div>
            <div class="space-y-5">
                <x-header.h2>{{ $page->title() }}</x-header.h2>
                <p>{!! $page->text()->kti() !!}</p>
            </div>
        </div>
    </div>
</section>

@endsection
