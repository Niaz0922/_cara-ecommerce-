var product = document.querySelectorAll(".pro");
var hamburger = document.querySelector(".mobile i");
var navbar = document.querySelector(".navbar");
var exitBTn = document.querySelector("#special");
var product = document.querySelectorAll(".pro");




const element = product.forEach((e)=>{

   e.addEventListener("click",function(ef){
    window.open("sproduct.html");
    console.log(ef.target.src);
    bigImage.src = ef.target.src;
   })
  
});

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