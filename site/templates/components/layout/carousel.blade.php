<div class="mySwiper">
    <div class="swiper-wrapper flex items-center">
      {{ $slot }}
    </div>
</div>

@once
@push('styles')
<link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />  
@endpush
@push('scripts')
<script src="/js/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      autoplay: {
        delay: 5000,
      },
      // Default parameters
      slidesPerView: 1,
      spaceBetween: 10,
      // Responsive breakpoints
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 1,
          spaceBetween: 30
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 3,
          spaceBetween: 40
        }
      },
      freeMode: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: 'true',
      },
    });
</script>
@endpush
@endonce