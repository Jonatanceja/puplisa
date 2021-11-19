<footer class="bg-navy-dark py-14">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 container mx-auto px-5 md:px-0">
        <div class="flex space-x-5">
            <div class="text-gray-500 w-24">
                <x-ui.logo></x-ui.logo>
            </div>
            <div class="text-gray-500">
                <p>{{ $site->calle() }} No. {{ $site->numero() }}</p>
                <p>Col. {{ $site->colonia() }} C.P. {{ $site->codigo() }}</p>
                <p>{{ $site->ciudad() }}, {{ $site->estado() }}</p>
                <br>
                <p class="hover:text-gray-400 transition font-bold"><a href="mailto:{{ $site->mail() }}">{{ $site->mail() }}</a></p>
                <p class="hover:text-gray-400 transition font-bold"><a href="tel:{{ $site->telefono() }}">{{ $site->telefono() }}</a></p>
            </div>

        </div>
        <div class="text-center md:text-left">
            <h5 class="text-lg font-bold text-gray-500 uppercase">Navegación</h5>
            <ul>
                @foreach ($site->children()->listed() as $subpage)
               <li>
                <a href="{{ $subpage->url() }}" class="text-gray-500 uppercase hover:text-gray-400 transition">{{ $subpage->title() }}</a>   
               </li> 
              @endforeach
            </ul>
        </div>
        <div class="text-center md:text-left">
            <h5 class="text-lg font-bold text-gray-500 uppercase">Ayuda</h5>
            <ul>
                @foreach (page('ayuda')->children() as $subpage)
                <li>
                    <a href="{{ $subpage->url() }}" class="text-gray-500 uppercase hover:text-gray-400 transition">{{ $subpage->title() }}</a>
                </li>
                @endforeach 
            </ul>
        </div>
    </div>
    <div class="text-center container mx-auto py-6 border-gray-500 border-t mt-6 px-5 md:px-0">
        <p class="text-gray-500">Todos los derechos reservados <span class="font-bold">{{ $site->nombre() }}</span> 2021</p>
    </div>
</footer>