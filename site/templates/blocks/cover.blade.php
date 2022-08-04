@if ($image = $page->cover()->toFile())
<div class="bg-cover bg-center h-64 md:h-96" style="background-image: url({{ $image->url() }})">
    <div class="container mx-auto flex items-end pt-44 px-5 md:px-0">
        <div>
            <h1 class="text-white font-bold text-4xl md:text-6xl">{{ $page->parent()->title() }}</h1>
        </div>
    </div>
</div>  
@endif
