
  <!-- header/navigation -->
  <header x-data="{ isOpen: false }"
  class="flex justify-between p-4 lg:py-4 lg:px-8 fixed w-full z-50 bg-navy transition duration-300 border-b text-white">
      <div class="flex items-center">
        <a href="{{ $site->url() }}">

          <x-ui.logo class="w-24"></x-ui.logo>
        </a>
      </div>

      <!-- left header section -->
      <div class="flex items-center justify-between">
          <button @click="isOpen = !isOpen" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 lg:hidden" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
              </svg>
          </button>
          <div class="hidden space-x-6 lg:flex">
            <div class="flex space-x-6">
              <a href="{{ $site->url() }}" @click="isOpen = false" class="uppercase h-full border-b border-transparent hover:border-cyan transition">Inicio</a>
              <div x-data="{ expanded: false }">
                <a href="#" @click="expanded = ! expanded" class="uppercase h-full border-b border-transparent hover:border-cyan transition">Servicios <span class="text-xs -mt-2"><i class="lni lni-chevron-down"></i></span></a>
                <ul class="bg-navy absolute mt-7 p-5 rounded-b-sm shadow-md z-50 border-t-2 border-cyan mx-auto space-y-3" x-show="expanded" x-collapse x-collapse.duration.1000ms>
                  @foreach ($site->grandChildren()->listed()->filterBy('intendedTemplate', 'service') as $item)
                    <li>
                      <a href="{{ $item->url() }}" class="uppercase h-full border-b border-transparent hover:border-cyan transition">{{ $item->title() }}</a>
                    </li>
                  @endforeach
                </ul>
              </div>
              <a class="uppercase h-full border-b border-transparent hover:border-cyan transition" href="/blog">Blog</a>
              <a href="/contacto" @click="isOpen = false" class="uppercase h-full border-b border-transparent hover:border-cyan transition">Contacto</a>
              <a class="text-xl transform hover:scale-110" href="{{ $site->facebook() }}"><i class="lni lni-facebook-filled"></i></a>

            </div>
          </div>

          <!-- mobile navbar -->
          <div class="mobile-navbar">
              <!-- navbar wrapper -->
              <div class="absolute left-0 w-full p-5 bg-navy rounded-b-lg shadow-xl top-20 sm:top-20 transition" x-show="isOpen"@click.away=" isOpen = false">
                  <div class="flex flex-col space-y-3">
                    <a href="{{ $site->url() }}" @click="isOpen = false" class="uppercase h-full border-b border-transparent transition">Inicio</a>
                    <a href="#" class="uppercase h-full border-b border-transparent transition">Servicios</a>
                    @foreach ($site->grandChildren()->listed()->filterBy('intendedTemplate', 'service') as $item)
                      <a href="{{ $item->url() }}" class="uppercase h-full border-b border-transparent transition ml-3 text-gray-400">- {{ $item->title() }}</a>
                    @endforeach
                    <a class="uppercase h-full border-b border-transparent transition" href="/blog">Blog</a>
                    <a href="/contacto" @click="isOpen = false" class="uppercase h-full border-b border-transparent transition">Contacto</a>
                    <a class="text-xl" href="{{ $site->facebook() }}"><i class="lni lni-facebook-filled"></i></a>

              </div>
                    
                  </div>
              </div>
          </div>
          <!-- end mobile navbar -->
      </div>
      <!-- right header section -->

    </header>
    <div class="h-20"></div>
  

  



<header x-data="{ open: false, prev: null, current: null }"  class="fixed z-10 w-full transition-all duration-300 -top-20">

    
</header>