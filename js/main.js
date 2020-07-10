let swipers;

swipers = new Swiper('.swiper-container', {
    slidesPerView: 'auto',
    centeredSlides: true,
    spaceBetween: 0,
    grabCursor: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        // when window width is >= 320px
        640: {
            spaceBetween: 100,
        }
    }
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

var width = $(window).width();
$(window).resize(function(){
    if($(window).width() != width){
        $('.header-2').removeClass('open');
        console.log('swipers update')
        swipers.update();

        width = $(window).width();
    }
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