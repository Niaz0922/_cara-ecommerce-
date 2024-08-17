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

        <section class="contact-details">
            <div class="details">
                <span>GET IN TOUCH</span>
                <h2>Visit one of our agency locations or contact us today</h2>
                <h3>Head Office</h3>
                <div>
                    <li>
                        <i class="fa fa-map"></i>
                        <p>56 glassford road G1 1Ul Dhaka</p>
                    </li>

                    <li>
                        <i class="fa fa-envelope"></i>
                        <p>contact niazenterprise@gmail.com</p>
                    </li>


                    <li>
                        <i class="fa fa-phone"></i>
                        <p>Phone Number 0122244444545</p>
                    </li>

                </div>
            </div>

            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3281402969174!2d90.36794657420904!3d23.806927786605975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d43ca1de9d%3A0x362095c8b18cafd5!2sAdarsha%20High%20School!5e0!3m2!1sen!2sbd!4v1701944880193!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

        </section>

        <section class="form-details">
            <form action="login.php" method="POST">
                <span>LEAVE A MESSEGE</span>
                <h2>We love to hear from you</h2>
                <input type="text" placeholder="Your name" name="name">
                <input type="text" placeholder="Your E-mail" name="email">
                <input type="text" placeholder="Your Subject" name="subject">
                <textarea name="textarea" placeholder="Your Message" id="" cols="30" rows="10">

                </textarea>
                <button class="normal" name="submit">Submit</button>

            </form>

            <div class="people">
                <div>
                    <img src="img/people/1.png" alt="">
                    <p><span>John Doe</span>Senior Marketing Manager <br>Phone +88013323324 <br>example@gmail.com</p>
                </div>

                <div>
                    <img src="img/people/2.png" alt="">
                    <p><span>William SMith</span>Senior Marketing Manager <br>Phone +88013323324 <br>example@gmail.com</p>
                </div>

                <div>
                    <img style="border-radius: 50%;" src="img/people/5.png" alt="">
                    <p><span>Tm Abir</span>My honorable idol and entrepreneur <br>Phone +883243324 <br>tmabir@gmail.com</p>
                </div>
            </div>

        </section>

        <footer>
            <div class="col">
                <img class="logo" src="img/logo.png" alt>
                <h4>Contact</h4>
                <p><strong>Adress : </strong>532 Washington Road , Street 32,
                    San Francesco</p>
                <p><strong>Phone : </strong>0122222343423/(+9)014342343234</p>
                <p><strong>Hours : </strong>10-OO -18:00,Mon-sat</p>
                <div class="follow">
                    <h4>Follow US</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-youtube"></i>

                    </div>
                </div>
            </div>

            <div class="col about">
                <h4>About</h4>
                <a href>About us</a>
                <a href>Delivery Information</a>
                <a href>Privacy Policy</a>
                <a href>Terms & condition</a>
                <a href>Contact Us</a>

            </div>

            <div class="col contact">
                <h4>My account</h4>
                <a href>Sign In</a>
                <a href>View Cart</a>
                <a href>My wishlist</a>
                <a href>Track my order</a>
                <a href>Help</a>
            </div>

            <div class="col install">
                <h4>Install App</h4>
                <p>From app store or google play</p>
                <div class="row">
                    <img src="img/pay/app.jpg" alt>
                    <img src="img/pay/play.jpg" alt>
                </div>
                <p>Secured Payment Getways</p>
                <img src="img/pay/pay.png" alt>
            </div>

        </footer>

        <script src="shop.js"></script>
    </body>

</html>