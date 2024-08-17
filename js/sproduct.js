var galeryProduct = document.querySelectorAll(".small-img-col");
var bigImage = document.querySelector("#mainimg");
var product = document.querySelectorAll(".pro");
var hamburger = document.querySelector(".mobile i");
var navbar = document.querySelector(".navbar");
var exitBTn = document.querySelector("#special");
var cardaddBtn = document.querySelector("#addCardBTN");
var prizeDetails = document.querySelector(".single-pro-details h2");
var addcartPro = document.querySelector("#AddCartProduct");
var ammount = document.querySelector(".AmmoundPro")

var getSRC = localStorage.getItem("src");
var priceH4  = localStorage.getItem('price');
bigImage.src = getSRC;
prizeDetails.innerHTML = priceH4;



const galeryAnim = galeryProduct.forEach((e) => {
    e.addEventListener("click", function (ef) {
        bigImage.src = ef.target.src;

    })

})


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

const element = product.forEach((e) => {
    e.addEventListener("click", function (ef) {
        var PicSource = ef.target.src;
        bigImage.src = PicSource;
        localStorage.setItem("src",PicSource)
        var parentElement = ef.target.parentElement;
        var prize = parentElement.querySelector(".desc h4").innerHTML;
        prizeDetails.innerHTML = prize;
        localStorage.setItem("price",prize);
        
        
    })
});

ammount.addEventListener("input",function(e){
    var ammountOfTheElem = e.target.value;
    localStorage.setItem("ammount",ammountOfTheElem);
});


















 
















