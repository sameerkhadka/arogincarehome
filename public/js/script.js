$(window).on('scroll', function() {
    if ($(this).scrollTop() >200){  
        $('#header').addClass("fix-head");
    }
    else{
        $('#header').removeClass("fix-head");
    }
});


$(window).on('load', function() {
    setTimeout(function(){
        $('#myModal').modal('show');
      },3000);

    
});

$('.banner-slider').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplayHoverPause: false,
    autoplay: true,
    margin: 1,
    animateOut: 'fadeOutRight',
    animateIn: 'fadeInLeft',
    autoplayTimeout: 7000,
    
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 1,
        
        },
        1200: {
            items: 1,
        }
    }
});

$('.services-slider').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplayHoverPause: true,
    autoplay: true,
    smartSpeed: 1100,
    margin: 1,
    
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 1,
        
        },
        1200: {
            items: 1,
        }
    }
});

$('.testimonial-slider').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplayHoverPause: true,
    autoplay: true,
    smartSpeed: 1100,
    margin: 1,
    
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 1,
        
        },
        1200: {
            items: 1,
        }
    }
});


$('.care-image-silder').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    smartSpeed: 1500,
    margin: 15,
    
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 2,
        
        },
        1200: {
            items: 3,
        }
    }
});


// var vidBtn = document.querySelector('.vd-play');
// var vidBox = document.querySelector('.ev-video');
// var closeBtn = document.querySelector('.close-btn');

// closeBtn.addEventListener("click", function(){
//     vidBox.classList.remove('show');
//     var vid = $('.home-video') 
//     vid[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
  

// })

// vidBtn.addEventListener("click", function(){
//     vidBox.classList.add('show');
    
// })

gsap.from('.banner-main', {
    opacity: 0,
    xPercent: 100,
    duration: 2,
    delay: 0.5,
});

gsap.from('.banner-text', {
    opacity: 0,
    scale: 0,
    duration: 1
});