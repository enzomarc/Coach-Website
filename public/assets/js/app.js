$(function () {
    
    // Device screen size
    var screenWidth = window.outerWidth;
    window.sr = ScrollReveal({ reset: false });

    var documentResized = function () {

        if (screenWidth <= 1000) {
            $('header').removeClass('desktop').addClass('mobile')
        } else {
            $('header').removeClass('mobile').addClass('desktop')
        }

    }

    documentResized()

    $(window).resize(function () {
        screenWidth = window.innerWidth
        documentResized()
    })

    $('#navbar').headroom()

    $('a#menu-btn').click(function () {
        $('nav').slideDown(300)
        $('body').css('overflow-y', 'hidden')
    })

    $('li#back-btn a').click(function () {
        $('nav').slideUp(300)
        $('body').css('overflow-y', 'auto')
    })

    $('header').parallax({
        imageSrc: 'public/assets/img/bg.jpg',
        speed: 0.5
    })

    $('div#teen-section div#main').parallax({
        imageSrc: 'public/assets/img/bg3.jpg',
        speed: 0.5
    })

    $('div#adult-section div#main').parallax({
        imageSrc: 'public/assets/img/bg4.jpg',
        speed: 0.5
    })

    $('div#company-section div#main').parallax({
        imageSrc: 'public/assets/img/bg5.jpg',
        speed: 0.5
    })

    $('div#teen-section div.teen-top').parallax({
        imageSrc: 'public/assets/img/teen-bg.png',
        speed: 0.6
    })

    $('div#adult-section div.adult-top').parallax({
        imageSrc: 'public/assets/img/adult-bg.png',
        speed: 0.6
    })

    $('div#company-section div.company-top').parallax({
        imageSrc: 'public/assets/img/company-bg.png',
        speed: 0.6
    })

    $('.slider').slick({
        autoplay: true,
        arrows: false,
        centerMode: true,
        fade: true,
        focusOnSelect: false,
        mobileFirst: true,
        pauseOnFocus: false,
        pauseOnHover: false,

    })
     
    sr.reveal('h1, div.right', {
        origin: 'right',
        duration: 1000,
        delay: 200,
        distance: '50%',
        mobile: true
    })

    sr.reveal('div#side12', {
        origin: 'top',
        duration: 1000,
        delay: 200,
        distance: '50%',
        mobile: true
    })

    sr.reveal('div#top h5', {
        origin: 'bottom',
        duration: 1000,
        delay: 200,
        distance: '50%',
        mobile: true
    })

    sr.reveal('div#top h6', {
        origin: 'top',
        duration: 1000,
        delay: 200,
        distance: '50%',
        mobile: true
    })

    sr.reveal('input#email, div#main div.left', {
        origin: 'left',
        duration: 1000,
        delay: 200,
        distance: '50%',
        mobile: true
    })

    sr.reveal('button#submit, div.socials, h5, div#side11', {
        origin: 'bottom',
        duration: 1000,
        delay: 200,
        distance: '50%',
        mobile: true
    })

})