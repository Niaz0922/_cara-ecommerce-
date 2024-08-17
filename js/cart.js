const tr = document.querySelectorAll(".cart table tbody tr");
const hamburger = document.querySelector(".mobile i");
const navbar = document.querySelector(".navbar");
const exitBTn = document.querySelector("#special");
const TbodyLi = document.querySelector(".tbodyCArt");




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


function AddCartContent() {
    const prize = localStorage.getItem("price");
    const srcPic = localStorage.getItem("src");
    const ammount = localStorage.getItem("ammount");
    const priceSpit = prize.split("$");
    const subtotal = priceSpit[1] * ammount;


    const elementAppend = document.createElement("tr");
    elementAppend.innerHTML = `<td class="Icon"><a><i id="i" class="fa fa-times-circle"
    style="color: black;"></i></a></td>
    <td><img src="${srcPic}" alt></td>
    <td>Cartoon Astronot T-shirt</td>
    <td>${prize}</td>
    <td><input type="number" value="${ammount}"></td>
    <td>${subtotal}</td>`;

    TbodyLi.appendChild(elementAppend);
    const i = document.querySelectorAll(".cart table tbody tr td a");

    const result = i.forEach((e)=>{
        e.addEventListener("click",function(ef){
            const OneParent = ef.target.parentElement;
            const twoParent = OneParent.parentElement; 
            const ThreeParent = twoParent.parentElement; 
            ThreeParent.remove(); 
        })
    
    });
}
=































