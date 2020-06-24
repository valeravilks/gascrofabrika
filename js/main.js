var swiper = new Swiper('.swiper-container', {
    slidesPerView: 'auto',
    centeredSlides: true,
    spaceBetween: 100,
    grabCursor: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

$('.day').click(function(e){
    $('.day').removeClass('active');
    $(this).addClass('active');
    $('.main-menu-page .menu-block').removeClass('active');
    let ind = $('.main-menu-page .day').index(this);
    $('.main-menu-page .menu-block').eq(ind).addClass('active');

})