var hamburger = document.querySelector(".mobile i");
var navbar = document.querySelector(".navbar");
var exitBTn = document.querySelector("#special");
var product = document.querySelectorAll(".pro");
var heroButton = document.querySelector(".hero-content button");
var bannerBTn = document.querySelector(".banner button");

hamburger.addEventListener("click", function () {
    navbar.style.right = "0px";
    hamburger.style.display = "none";
    exitBTn.style.display = "block"
});

exitBTn.addEventListener("click", function () {
    navbar.style.right = "-300px";
    hamburger.style.display = "block";
    exitBTn.style.display = "none"
});

const random = product.forEach((e) => {
    e.addEventListener("click", (ef) => {
        location.href = "sproduct.html";
        var sourcrOfIMG = ef.target.src;
        localStorage.setItem('src',sourcrOfIMG);
        parentElem = ef.target.parentElement;
        var priceOFelem =  parentElem.querySelector(".desc h4").innerHTML;
        localStorage.setItem('price',priceOFelem);

    });
});



























