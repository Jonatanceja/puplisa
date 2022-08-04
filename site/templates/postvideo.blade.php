@extends('layouts.default')
@section('content')

<div class="py-10 container mx-auto space-y-5 min-h-screen max-w-4xl px-5 md:px-0">
    <x-layout.video :video="$page->video()" />
    <div>
        <x-header.h2>{{ $page->title() }}</x-header.h2>
    </div>
    <div class="py-10">
        {!! $page->text()->kti() !!}
    </div>
</div>    
@endsection
