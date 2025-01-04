$(function (){
  if ($('body').is('.page-news') && window.innerWidth >= 768) {
    var slide_wrapper = $("<div class='swiper-wrapper'></div>");
    var news = $('.news .grid > *');

    const chunkSize = 4
    for (var i = 0; i < news.length; i += chunkSize) {
        slide_wrapper.append(
          $("<div class='swiper-slide grid gap-3 text-white font-semibold'></div>")
            .append(news.slice(i, i + chunkSize)));
    }
    $('.page-news .news > :nth-child(1)')
      .addClass('swiper')
      .append(slide_wrapper)
      .append('<div class="swiper-button-prev"></div>')
      .append('<div class="swiper-button-next"></div>');

   var swiper = new Swiper(".swiper", {
      slidesPerView: 1,
      spaceBetween: 12,
      freeMode: true,
    });
  }
})
