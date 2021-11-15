$(function(){
    //スムーススクロール
    $('a[href^="#"]' + 'a:not(".carousel-control")').click(function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
        });
        //ハンバーガーメニュー
    $('.header-icon').on('click',function(){
        $(this).toggleClass('active');
        $('.header-nav').toggleClass('show');
    })
    if($('.header-nav').hasClass('show')){
        $('.header-nav').removeClass('show');
    }
    //ヘッダーアニメーション
    ScrollReveal().reveal('.header',{
        mobile: false,
        duration: 3500,
        opacity: 0,
        reset: 'true'
    });
    //.conceptアニメーション
    ScrollReveal().reveal('.concept-first__left',{
        mobile: false,
        duration: 2000,
        opacity: 0,
        distance: '50px',
        origin: 'bottom',
        reset: 'true'
    });
    ScrollReveal().reveal('.concept-first__right',{
        mobile :false,
        duration: 3000,
        opacity: 0,
        scale: 0.5,
        distance: '50px',
        origin: 'bottom',
        reset: 'true'
    });
    ScrollReveal().reveal('.concept-second__left',{
        mobile: false,
        duration: 3000,
        opacity: 0,
        scale: 0.5,
        distance: '50px',
        origin: 'bottom',
        reset: 'true'
    });
    ScrollReveal().reveal('.concept-second__right',{
        mobile: false,
        duration: 2000,
        opacity: 0,
        distance: '50px',
        origin: 'bottom',
        reset: 'true'
    });
    //.infomationアニメーション
    ScrollReveal().reveal('.infomation-cont',{
        mobile: false,
        duration: 2500,
        scale: 1.5,
        reset: 'true'
    });
    //.menuアニメーション
    ScrollReveal().reveal('.menu-item__img',{
        mobile: false,
        duration: 1500,
        scale: 1.5,
        reset: 'true'
    });
});