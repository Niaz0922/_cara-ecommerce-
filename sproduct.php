<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Niaz Ecommerce</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/5633e145fd.js"
            crossorigin="anonymous"></script>
    </head>

    <body>
    <?php include "partials/header.php" ?>


        <section class="pro-details">
            <div class="single-pro-image">
                <img src="img/products/f1.jpg" width="100%" id="mainimg">

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="img/products/f1.jpg" width="100%"
                            class="small-img" alt>
                    </div>

                    <div class="small-img-col">
                        <img src="img/products/f2.jpg" width="100%"
                            class="small-img" alt>
                    </div>

                    <div class="small-img-col">
                        <img src="img/products/f3.jpg" width="100%"
                            class="small-img" alt>
                    </div>

                    <div class="small-img-col">
                        <img src="img/products/f4.jpg" width="100%"
                            class="small-img" alt>
                    </div>

                </div>

            </div>

            <div class="single-pro-details">
                <h6>Home / T-shirt</h6>
                <h4>Men's Fashion T-shirt</h4>
                <h2>$140</h2>
                <select>
                    <option>Select Size</option>
                    <option>XL</option>
                    <option>Double Xl</option>
                    <option>Small</option>
                    <option>Large</option>
                </select>
                <input type="number" value="1" class="AmmoundPro">
                <button class="normal" id="AddCartProduct">Add To Cart</button>
                <h4>Product Details</h4>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ut numquam quae beatae minus? Explicabo quos aliquid sunt
                    quibusdam praesentium, similique, dignissimos amet cumque
                    odit recusandae, consequuntur laboriosam aliquam perferendis
                    officia!lorem40
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Recusandae, eius consequatur, temporibus quo iure minus sunt
                    odit est corporis laboriosam sequi sit iusto obcaecati
                    itaque et nesciunt quos, inventore id. Sit mollitia alias
                    veniam quis praesentium quaerat accusantium itaque nesciunt.
                </span>

            </div>
        </section>

        <section class="feture-products">
            <h2>New Arrivals</h2>
            <p>Summer Collection New Modern Design</p>

            <div class="feture-product-flex">
                <div class="pro">
                    <img src="img/products/n1.jpg" alt>
                    <div class="desc">
                        <span>Adidas</span>
                        <h5>Cartoon Astronut T-shirt</h5>
                        <div class="star"></div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <h4>$100</h4>

                    </div>

                    <a id="nowheer">
                        <i class="fal fa-cart-shopping"></i>
                    </a>

                </div>

                <div class="pro">
                    <img src="img/products/n2.jpg" alt>
                    <div class="desc">
                        <span>Adidas</span>
                        <h5>Cartoon Astronut T-shirt</h5>
                        <div class="star"></div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <h4>$30</h4>

                    </div>

                    <a id="nowheer">
                        <i class="fal fa-cart-shopping"></i>
                    </a>

                </div>

                <div class="pro">
                    <img src="img/products/n3.jpg" alt>
                    <div class="desc">
                        <span>Adidas</span>
                        <h5>Cartoon Astronut T-shirt</h5>
                        <div class="star"></div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <h4>$1200</h4>

                    </div>

                    <a id="nowheer">
                        <i class="fal fa-cart-shopping"></i>
                    </a>

                </div>

                <div class="pro">
                    <img src="img/products/n4.jpg" alt>
                    <div class="desc">
                        <span>Adidas</span>
                        <h5>Cartoon Astronut T-shirt</h5>
                        <div class="star"></div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <h4>Out of stock</h4>

                    </div>

                    <a id="nowheer">
                        <i class="fal fa-cart-shopping"></i>
                    </a>

                </div>
            </div>

            <!--dasdasdas-->

        </section>

        <?php include "partials/footer.php" ?>

        
        <script src="sproduct.js"></script>
        
    </body>

</html>