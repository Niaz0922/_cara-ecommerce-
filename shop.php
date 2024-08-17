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


        <section class="page-head">
            <div class="hero-content">
                <h2>#Stayhome</h2>
                <p>Save more with coupons & up to 70% off</p>
            </div>
        </section>

        <section class="feture-products">

            <div class="feture-product-flex">
                <?php include "partials/fetching_Product.php"?>
            </div>

            <!--dasdasdas-->

        </section>

        <section class="pagination">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#"><i class="fa fa-long-arrow-right"></i></a>
            
        </section>

        <?php include "partials/footer.php" ?>


        <script src="script.js"></script>
    </body>

</html>