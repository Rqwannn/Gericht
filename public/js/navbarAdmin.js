const clickValueProfile = document.querySelector(".clickValueProfile");
const cardProfileDown = document.querySelector(".slideDown-Profile");

clickValueProfile.addEventListener("click", function(){
    if(cardProfileDown.style.top == "120%"){
        cardProfileDown.style.opacity = "0";
        cardProfileDown.style.top = "200%";
        setTimeout(function(){
            cardProfileDown.style.display = "none";
        }, 500)
    } else {
        cardProfileDown.style.display = "block";
        setTimeout(function(){
            cardProfileDown.style.opacity = "1";
            cardProfileDown.style.top = "120%";
        }, 100)
    }

})

const barClick = document.querySelector(".barClick");
const sideNavbar = document.querySelector(".sideNavbar");
const BrandHeader = document.querySelector(".BrandHeader h3");
const BrandHeaderImg = document.querySelector(".BrandHeader img");
const sideNavLink = document.querySelector(".sideNav-link li");
const sideNavLinkText = document.querySelectorAll(".sideNav-link p");
const sideNavLinkIcon = document.querySelectorAll(".sideNav-link i");

barClick.addEventListener("click", function(){
    if(sideNavbar.style.width == "5%"){        
        sideNavbar.style.width = "26%"
        BrandHeader.style.display = "block";
        BrandHeaderImg.style.display = "none";
        sideNavLinkText.forEach((result) => {
            result.style.display = "block";
        })
        sideNavLinkIcon.forEach((result) => {
            result.style.transform = "translate(0)";
        })
    } else {
        sideNavbar.style.width = "5%";
        sideNavbar.style.overflowX = "hidden";
        BrandHeader.style.display = "none";
        BrandHeaderImg.style.display = "block";
        sideNavLinkText.forEach((result) => {
            result.style.display = "none";
        })
        sideNavLinkIcon.forEach((result) => {
            result.style.transform = "translate(-40px, 9px)";
        })
    }
})