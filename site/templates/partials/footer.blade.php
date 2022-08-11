<footer class="bg-navy-dark py-14">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 container mx-auto px-5 md:px-0">
        <div class="block md:flex md:space-x-5">
            <div class="text-gray-500 w-24 mx-auto md:m-0 mb-4 md:mb-0">
                <img src="/images/puplisa.svg" alt="">
            </div>
            <div class="text-white text-center md:text-left">
                <p>{{ $site->calle() }} No. {{ $site->numero() }}</p>
                <p>Col. {{ $site->colonia() }} C.P. {{ $site->codigo() }}</p>
                <p>{{ $site->ciudad() }}, {{ $site->estado() }}</p>
                <br>
                <p class="hover:text-gray-200 transition font-bold"><a href="mailto:{{ $site->mail() }}">{{ $site->mail() }}</a></p>
                <p class="hover:text-gray-200 transition font-bold"><a href="tel:{{ $site->telefono() }}">{{ $site->telefono() }}</a></p>
            </div>

        </div>
        <div class="text-center md:text-left">
            <h5 class="text-lg font-bold text-gray-200 uppercase">Navegación</h5>
            <div class="flex flex-col space-y-3 text-gray-200">
                @foreach ($site->children()->listed() as $subpage)
                    <a href="{{ $subpage->url() }}" class="uppercase h-full border-b border-transparent hover:border-cyan transition">{{ $subpage->title() }}</a>
              @endforeach

          </div>
        </div>
    </div>
    <div class="container mx-auto py-6 border-gray-500 border-t mt-6 px-5 md:px-0 flex items-center">
        <div class="w-full md:w-3/4">
            <p class="text-gray-200">Todos los derechos reservados <span class="font-bold">{{ $site->nombre() }}</span> 2021</p>
        </div>
        <div class="w-full md:w-1/4 flex justify-end space-x-5">
            <a class="text-xl transform hover:scale-110 text-gray-300" href="{{ $site->facebook() }}"><i class="lni lni-facebook-filled"></i></a>
            <a class="text-xl transform hover:scale-110 text-gray-300" href="{{ $site->youtube() }}"><i class="lni lni-youtube"></i></a>
        </div>
    </div>
</footer>