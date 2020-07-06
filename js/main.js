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

$('.mobile-menu').click(function(){
    $('.header-2').addClass('open')
})

$('.mobile-menu-close').click(function(){
    $('.header-2').removeClass('open')
})

$( window ).resize(function() {
    $('.header-2').removeClass('open')
});

$('.menu-d li:first-child a').click(function(e){
    e.preventDefault();

})

$('.menu-d li:first-child a').mouseenter(function(){
    $('.dop-header-menu').addClass('active')
})

$('.menu-d li:first-child a').mouseleave(function(){
    setTimeout(function() {
        $('.dop-header-menu').removeClass('active')
    }, 200)

})

$('.dop-header-menu').mouseenter(function(){
    $('.dop-header-menu').addClass('active2')
})
$('.dop-header-menu').mouseleave(function(){
    $('.dop-header-menu').removeClass('active2')
})