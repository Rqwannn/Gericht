const btnScroll = document.querySelector('.scroll-right');
const btnScrollIcon = document.querySelector('.scroll-right i');
const CardMedia = document.querySelector('.card-social-media');

btnScroll.addEventListener("click", function(){
    if(CardMedia.style.left == "100%"){
        CardMedia.style.left = "0%";
        btnScrollIcon.style.transform = "rotate(0deg)";
    } else {
        CardMedia.style.left = "100%";
        btnScrollIcon.style.transform = "rotate(180deg)";
    }
})