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


        <section class="page-head-about">
            <div class="hero-content-contact">
                <h2>#let's_talk</h2>
                <p>LEAVE A MESSEGE,We love to hear from you!</p>
            </div>
        </section>

        <section class="cart">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody class="tbodyCArt">
                      <tr>
                        <td><a><i class="fa fa-times-circle"
                                    style="color: black;"></i></a></td>
                        <td><img src="img/products/f1.jpg" alt></td>
                        <td>Cartoon Astronot T-shirt</td>
                        <td>$112</td>
                        <td><input type="number" value="1"></td>
                        <td>$112</td>
                    </tr>
                    <tr>
                        <td><a><i class="fa fa-times-circle"
                                    style="color: black;"></i></a></td>
                        <td><img src="img/products/f1.jpg" alt></td>
                        <td>Cartoon Astronot T-shirt</td>
                        <td>$112</td>
                        <td><input type="number" value="1"></td>
                        <td>$112</td>
                    </tr>
                    <tr>
                        <td><a><i class="fa fa-times-circle"
                                    style="color: black;"></i></a></td>
                        <td><img src="img/products/f1.jpg" alt></td>
                        <td>Cartoon Astronot T-shirt</td>
                        <td>$112</td>
                        <td><input type="number" value="1"></td>
                        <td>$112</td>
                    </tr>
                    <tr>
                        <td><a><i class="fa fa-times-circle"
                                    style="color: black;"></i></a></td>
                        <td><img src="img/products/f1.jpg" alt></td>
                        <td>Cartoon Astronot T-shirt</td>
                        <td>$112</td>
                        <td><input type="number" value="1"></td>
                        <td>$112</td>
                    </tr>
                </tbody>

            </table>
        </section>

        <section class="cart-add">
            <div class="coupon">
                <h3>Apply Coupon</h3>
                <div>
                    <input type="text" placeholder="Enter your coupon">
                    <button class="normal">Apply</button>
                </div>

            </div>

            <div class="subtotal">
                <h3>Cart Totals</h3>
                <table>
                    <tr>
                        <td>Cart Subtotal</td>
                        <td>$335</td>
                    </tr>

                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>

                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>$335</strong></td>
                    </tr>
                </table>
                <button class="normal">Procced To Check Out</button>

            </div>

        </section>

        <?php include "partials/footer.php" ?>


        <script src="cart.js"></script>

    </body>

</html>