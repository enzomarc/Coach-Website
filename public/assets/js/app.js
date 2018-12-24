$(function () {
    
    // Device screen size
    var screenWidth = $(window).width()
    var screenHeight = $(window).height()
    window.sr = ScrollReveal({ reset: false })

    var documentResized = function () {

        $('header').css('height', screenHeight)

        if (screenWidth <= 1080) {
            $('header').removeClass('desktop').addClass('mobile')
            $('div#container').addClass('mobile')
        } else {
            $('header').removeClass('mobile').addClass('desktop')
            $('div#container').removeClass('mobile')
        }

    }

    documentResized()

    $(window).resize(function () {
        screenWidth = window.innerWidth
        documentResized()
    })

    $('a#menu-btn').click(function () {
        $('nav').slideDown(300)
        $('body').css('overflow-y', 'hidden')
    })

    $('li#back-btn a').click(function () {
        $('nav').slideUp(300)
        $('body').css('overflow-y', 'auto')
    })

    $('header#header').parallax({
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

    $('.slider').slick({
        autoplay: true,
        arrows: false,
        centerMode: true,
        fade: true,
        focusOnSelect: false,
        mobileFirst: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        adaptiveHeight: true,
    })
     
    sr.reveal('div.right', {
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

    sr.reveal('div#main div.left', {
        origin: 'left',
        duration: 1000,
        delay: 200,
        distance: '50%',
        mobile: true
    })

    sr.reveal('button#submit, div#side11', {
        origin: 'bottom',
        duration: 1000,
        delay: 200,
        distance: '50%',
        mobile: true
    })

    sr.reveal('div.container div.main-page', {
        origin: 'bottom',
        duration: 1000,
        delay: 500,
        distance: '150%',
        mobile: true
    })

})