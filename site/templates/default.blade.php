@extends('layouts.default2')
@section('content')

    <section class="container mx-auto px-5 md:px-0 space-y-10 mb-24">
        <x-header.h2>{{ $page->title() }}</x-header.h2>
        <x-text.regular>{!! $page->text()->kti() !!}</x-text.regular>
    </section>

@endsection
