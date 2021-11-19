
  <!-- header/navigation -->
  <header x-data="{ isOpen: false }"
  x-init="prev = window.pageYOffset" x-ref="navbar" @keyup.escape.window="open = false" @click.away="open = false" @scroll.window="
            current = window.pageYOffset;
            if(current < 200) { $refs.navbar.classList.add('text-white','bg-transparent','border-b','shadow-none'); $refs.navbar.classList.remove('text-navy','bg-white','border-b-0','shadow-md'); }
            else { $refs.navbar.classList.add('text-navy','bg-white','border-b-0','shadow-md'); $refs.navbar.classList.remove('text-white','bg-transparent','border-b','shadow-none'); }"
  class="flex justify-between p-4 lg:py-4 lg:px-8 fixed w-full z-50 border-b-white text-white transition duration-300 border-b">
      <div class="flex items-center">
        <a href="{{ $site->url() }}">
          <x-ui.logo class="w-12 md:w-24" />
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
              @foreach ($site->children()->listed() as $subpage)
                <a href="{{ $subpage->url() }}" @click="isOpen = false" class="uppercase h-full border-b border-transparent hover:border-cyan transition">{{ $subpage->title() }}</a>
              @endforeach
            </div>
          </div>

          <!-- mobile navbar -->
          <div class="mobile-navbar">
              <!-- navbar wrapper -->
              <div class="fixed left-0 w-full p-5 bg-white rounded-b-lg shadow-xl top-20 sm:top-28 transition" x-show="isOpen"
                  @click.away=" isOpen = false">
                  <div class="flex flex-col space-y-6">
                    <ul>
                      @foreach ($site->children()->listed() as $subpage)
                      <li>
                        <a href="{{ $subpage->url() }}" @click="isOpen = false" class="text-normal uppercase text-navy">{{ $subpage->title() }}</a>
                      </li>
                      @endforeach
                    </ul>
                    
                  </div>
              </div>
          </div>
          <!-- end mobile navbar -->
      </div>
      <!-- right header section -->

    </header>
  

  



<header x-data="{ open: false, prev: null, current: null }"  class="fixed z-10 w-full transition-all duration-300 -top-20">

    
</header>