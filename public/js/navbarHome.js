const idUser = document.querySelector(".idUser");
const WrapperAllOrder = document.querySelector(".infoAllOrder div");

if(WrapperAllOrder != null){
    $.ajax({
        url : "http://127.0.0.1:8000/Api/GetAllOrder.php",
        type : "POST",
        dataType : "JSON",
        data : {
            User : idUser.innerHTML
        },
        error : function(){
            alert("gagal")
        },
        success : function(result){
            WrapperAllOrder.innerHTML = result.setTotal;
        }
    })
}

TweenMax.staggerFrom(".nav-links ul li a", .2, {
    delay: .3,
    opacity: 0,
    y: "-50",
    ease: Expo.easeInOut
  }, 0.15);

TweenMax.from('.LogoTitle', 1.4, {
    delay: .3,
    opacity: 0,
    y: "-50",
    ease: Expo.easeInOut
})

TweenMax.from('.profile-image', 1.4, {
    delay: .3,
    opacity: 0,
    y: "-50",
    ease: Expo.easeInOut
});

(function () {
    $('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 1000);
            return false;
          }
        }
      });
  });

  window.addEventListener('scroll', function(){
    const SlideUp = document.querySelector(".WrapperCircleUp");
    SlideUp.classList.toggle('SlideUpOpacity', window.scrollY > 0);
  });