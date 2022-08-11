
  <!-- header/navigation -->
  <header x-data="{ isOpen: false }"
  class="flex justify-between p-4 lg:py-4 lg:px-8 fixed w-full z-50 bg-cyan transition duration-300 border-b text-black">
      <div class="flex items-center">
        <a href="{{ $site->url() }}">

          <img class="w-12" src="/images/puplisa.svg" alt="">
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
              <a class="text-xl transform hover:scale-110" href="{{ $site->facebook() }}"><i class="lni lni-facebook-filled"></i></a>
              <a class="text-xl transform hover:scale-110" href="{{ $site->youtube() }}"><i class="lni lni-youtube"></i></a>

            </div>
          </div>

          <!-- mobile navbar -->
          <div class="mobile-navbar">
              <!-- navbar wrapper -->
              <div class="absolute left-0 w-full p-5 bg-cyan-dark rounded-b-lg shadow-xl top-20 sm:top-20 transition" x-show="isOpen"@click.away=" isOpen = false">
                  <div class="flex flex-col space-y-3">
                    @foreach ($site->children()->listed() as $subpage)
                    <a href="{{ $subpage->url() }}" @click="isOpen = false" class="uppercase h-full border-b border-transparent hover:border-cyan transition">{{ $subpage->title() }}</a>
              @endforeach
                    <a class="text-xl" href="{{ $site->facebook() }}"><i class="lni lni-facebook-filled"></i></a>
                    <a class="text-xl transform hover:scale-110" href="{{ $site->youtube() }}"><i class="lni lni-youtube"></i></a>
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