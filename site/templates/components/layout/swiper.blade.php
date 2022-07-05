<div class="swiper-container slider">
    <div class="swiper-wrapper">
      {{ $slot }}
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

@once
@push('styles')
<link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />  
@endpush
@push('scripts')
<script src="/js/swiper-bundle.min.js"></script>
<script>
var slider = new Swiper('.slider', {
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
   delay: 10000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
</script>
@endpush
@endonce