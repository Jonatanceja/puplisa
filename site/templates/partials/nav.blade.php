<nav>
  <!-- header/navigation -->
  <div x-data="{ isOpen: false }" class="flex justify-between p-4 bg-transparent lg:py-4 lg:px-8 border-b-white border-b fixed w-full">
      <div class="flex items-center">
        <a href="{{ $site->url() }}">
          <x-ui.logo class="text-white w-24"></x-ui.logo>
        </a>
      </div>

      <!-- left header section -->
      <div class="flex items-center justify-between">
          <button @click="isOpen = !isOpen" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
              </svg>
          </button>
          <div class="hidden space-x-6 lg:inline-block">
            <div class="flex flex-col space-y-6">
              @foreach ($site->children()->listed() as $subpage)
                <a href="{{ $subpage->url() }}" @click="isOpen = false" class="text-white uppercase h-full border-b border-transparent hover:border-yellow-500 transition">{{ $subpage->title() }}</a>
              @endforeach
            </div>
          </div>

          <!-- mobile navbar -->
          <div class="mobile-navbar">
              <!-- navbar wrapper -->
              <div class="fixed left-0 w-full p-5 bg-white rounded-b-lg shadow-xl top-16" x-show="isOpen"
                  @click.away=" isOpen = false">
                  <div class="flex flex-col space-y-6">
                    @foreach ($site->children()->listed() as $subpage)
                      <a href="{{ $subpage->url() }}" @click="isOpen = false" class="text-sm text-black">{{ $subpage->title() }}</a>
                    @endforeach
                  </div>
              </div>
          </div>
          <!-- end mobile navbar -->
      </div>
      <!-- right header section -->

  </div>
  

  
</nav>


