<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Beats | Music Company</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="./Photos/beatsLogo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./SnackBarCSS/snackbar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./LandingPageCSS/landingStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
    (function(w, d) { w.CollectId = "63d6a6dd50094935eaaa44f4"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);
    </script>   



</head>

<body>
    <!-- Container -->
    <div class="container">
        <!-- Header -->
        <header>
            <!-- Hamburger -->
            <button class="hamburger_icon">
                <span class="hamburger"></span>
            </button>
            <a href="#"><img class="beats_logo" src="./Photos/beatsLogo.png" alt="beats_logo.png"></a>
            <!-- Navbar -->
            <nav>
                <ul>
                    <li class="list_items"><a href="#Home">Home</a></li>
                    <li class="list_items"><a href="#Specs">Specs</a></li>
                    <li class="list_items"><a href="#Case">Case</a></li>
                    <li class="list_items"><a href="#Products">Products</a></li>

                </ul>
                <button class="btn_primary">
                    <?php
                    $count = 0;
                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                    }
                    ?>


                    <a href="mycart.php" class="btn btn-outline-success"><i class='fa-solid fa-cart-shopping'
                            style='color:#ffffff'></i>&nbsp;&nbsp;
                        <?php echo $count; ?>
                    </a>

                </button>
                <button class="btn_primary">
                    <a href="./index.php">Logout</a>
                </button>



            </nav>
        </header>
        <!-- Hero -->
        <section class="hero">
            <!-- Hero_Text_Content -->
            <div class="hero_text_container">
                <div class="on_ear_logo">
                    <img src="./Photos/onEar.png" alt="on_ear.png">
                </div>
                <div class="heading_primary">
                    <h1>Beats 3</h1>
                </div>
                <div class="hero_text">
                    <div class="heading_secondary">
                        <h3>Overview</h3>
                    </div>
                    <div class="para">
                        <p>Enjoy award winning beat sound with wireless</p>
                        <p>listening freedom and a sleek streamlined design</p>
                        <p>with comformtable padded earphones, delivering</p>
                        <p>first-rate playback.</p>
                    </div>
                    <!-- <button class="btn_primary">
                        <a href="#">
                            Shopping_cart
                            <div class="shooping__bag_cart">
                                <img class="icons" src="./Icons/shoppingBag.png" alt="shopping_bag_icon.png">
                                <div class="para">Add to Bag</div>
                                <div class="heading_primary">N399K</div>
                            </div>
                        </a>
                    </button> -->
                </div>
            </div>

            <!-- Main_image -->
            <div class="main_image">
                <img src="./Photos/mainImage.png" alt="headphone.png">
            </div>
        </section>

        <!-- Clients_Sections -->
        <section class="slider">
            <div class="clients">
                <div class="client_img">
                    <img src="./Photos/amazonLogo.png" alt="amazon.png">
                </div>
                <div class="client_img">
                    <img src="./Photos/appleLogo.png" alt="apple.png">
                </div>
                <div class="client_img">
                    <img src="./Photos/spotifyLogo.png" alt="spotify.png">
                </div>
                <div class="client_img">
                    <img src="./Photos/youtubeLogo.png" alt="youtube.png">
                </div>
                <div class="client_img">
                    <img src="./Photos/amazonLogo.png" alt="amazon.png">
                </div>
                <div class="client_img">
                    <img src="./Photos/appleLogo.png" alt="apple.png">
                </div>
                <div class="client_img">
                    <img src="./Photos/spotifyLogo.png" alt="spotify.png">
                </div>
                <div class="client_img">
                    <img src="./Photos/youtubeLogo.png" alt="youtube.png">
                </div>
            </div>
        </section>

        <!-- Specs Section -->
        <section class="specs" id="Specs">
            <div class="spec_logo">
                <img src="./Icons/specsLogo.png" alt="spec_logo.png">
            </div>
            <div class="specs_main_content">
                <div class="specs_features">
                    <div class="specs_card">
                        <img src="./Icons/bluetooth.png" alt="bluetooth_icon.png">
                        <div class="heading_secondary">
                            <h3>Bluethoot</h3>
                        </div>
                        <div class="para">
                            <p>Bluethoot v6.2</p>
                        </div>
                    </div>
                    <div class="specs_card">
                        <img class="battery" src="./Icons/battery.png" alt="battery_icon.png">
                        <div class="heading_secondary">
                            <h3>Battery</h3>
                        </div>
                        <div class="para">
                            <p>Battery 40h</p>
                        </div>
                    </div>
                    <div class="specs_card">
                        <img src="./Icons/charger.png" alt="charger_icon.png">
                        <div class="heading_secondary">
                            <h3>Load</h3>
                        </div>
                        <div class="para">
                            <p>Fast charge 4.2-AAC</p>
                        </div>
                    </div>
                    <div class="specs_card">
                        <img src="./Icons/mic.png" alt="microphone_icon.png">
                        <div class="heading_secondary">
                            <h3>Microphone</h3>
                        </div>
                        <div class="para">
                            <p>Supports Apple Siri <br> and Google </p>

                        </div>
                    </div>
                </div>
                <div class="specs_image">
                    <img src="./Photos/specsImage.png" alt="specs_image.png">
                </div>
            </div>
        </section>

        <!-- Case Section -->
        <section class="case" id="Case">
            <div class="case_logo">
                <img src="./Icons/caseLogo.png" alt="case_logo.png">
            </div>
            <div class="case_main_content">
                <div class="case_image">
                    <img src="./Photos/caseImage.png" alt="xase_image.png">
                </div>
                <div class="case_description">
                    <div class="para">
                        <p>With a comfortable and </p>
                        <p>adaptable case so that you</p>
                        <p>can store it whenever you</p>
                        <p> want, and keep your durability</p>
                        <p>forever.</p>
                    </div>
                    <button class="btn_primary">
                        <img src="./Icons/group.png" alt="">
                        <a href="#">More info</a>
                    </button>
                </div>
            </div>
        </section>

        <!-- Buy Now Section -->
        <section class="buy_now_section">
            <div class="buy_now_container">
                <div class="heading_secondary">
                    <h3>Immerse yourself in</h3>
                    <h3>your music</h3>
                </div>
                <div class="para">
                    <p>Buy Now, upto 40% off</p>
                </div>
                <button class="btn_primary">
                    <img src="./Icons/shoppingBag.png" alt="">
                    <a href="#">Buy Now</a>
                </button>
            </div>
            <div class="buy_now_image">
                <img src="./Photos/buyNowSectionImage.png" alt="headphone.png">
            </div>
        </section>
        <!-- Choose Your Style -->
        <section class="choose_style_container" id="Products">
            <div class="choose_style_logo">
                <img src="./Icons/productLogo.png" alt="product.png">
            </div>

            <div class="styles_type">
                <div class="card card_1">
                    <form action="manage_cart.php" method="post">
                        <div class="card_bottom">
                            <div class="model">
                                <p>Black</p>
                                <p>&#8377 2899</p>
                            </div>
                            <div class="shopping_icon">
                                <button type="submit" onClick="snackBar()" name="add_to_cart" class="btn btn-info"><img
                                        src="./Icons/shoppingBag.png" alt=""></button>
                                <input type="hidden" name="item_name" value="band1g">
                                <input type="hidden" name="price" value="1999">
                            </div>
                        </div>
                </div>
                </form>


                <div class="card card_2">
                    <form action="manage_cart.php" method="post">
                        <div class="card_bottom">
                            <div class="model">
                                <p>Red Black</p>
                                <p>&#8377 2999</p>
                            </div>
                            <div class="shopping_icon">
                                <button type="submit" name="add_to_cart" class="btn btn-info"><img
                                        src="./Icons/shoppingBag.png" alt=""></button>
                                <input type="hidden" name="item_name" value="band2">
                                <input type="hidden" name="price" value="2999">
                            </div>
                        </div>
                </div>
                </form>
                <div class="card card_3">
                    <form action="manage_cart.php" method="post">
                        <div class="card_bottom">
                            <div class="model">
                                <p>Night Black</p>
                                <p> &#8377 2499</p>
                            </div>
                            <div class="shopping_icon">
                                <button type="submit" name="add_to_cart" class="btn btn-info"><img
                                        src="./Icons/shoppingBag.png" alt=""></button>
                                <input type="hidden" name="item_name" value="band3">
                                <input type="hidden" name="price" value="2500">
                            </div>
                        </div>
                </div>
                </form>
                <div class="card card_4">
                    <form action="manage_cart.php" method="post">
                        <div class="card_bottom">
                            <div class="model">
                                <p>Blue</p>
                                <p>&#8377 2799</p>
                            </div>
                            <div class="shopping_icon">
                                <button type="submit" name="add_to_cart" class="btn btn-info"><img
                                        src="./Icons/shoppingBag.png" alt=""></button>
                                <input type="hidden" name="item_name" value="band4">
                                <input type="hidden" name="price" value="2700">
                            </div>
                        </div>
                </div>
                </form>
                <div class="card card_5">
                    <form action="manage_cart.php" method="post">
                        <div class="card_bottom">
                            <div class="model">
                                <p>Twilight Grey</p>
                                <p>&#8377 2599</p>
                            </div>
                            <div class="shopping_icon">
                                <button type="submit" name="add_to_cart" class="btn btn-info"><img
                                        src="./Icons/shoppingBag.png" alt=""></button>
                                <input type="hidden" name="item_name" value="band5">
                                <input type="hidden" name="price" value="3000">
                            </div>
                        </div>
                </div>
                </form>

            </div>
        </section>

        <!-- Footer -->
        <footer>

            <a href="#"><img class="beats_logo" src="./Photos/beatsLogo.png" alt="beats_logo.png"></a>
            <div class="footer_links_container">
                <div class="heading_primary">
                    <h3>Products</h3>
                </div>
                <ul>
                    <li class="list_items"><a href="#">Home</a></li>
                    <li class="list_items"><a href="#Specs">Specs</a></li>
                    <li class="list_items"><a href="#Case">Case</a></li>
                    <li class="list_items"><a href="#Products">Products</a></li>
                </ul>
            </div>
            <div class="footer_links_container">
                <div class="heading_primary">
                    <h3>Support</h3>
                </div>
                <ul>
                    <li class="list_items"><a href="contact.php">Contact US</a></li>

                </ul>
            </div>


            <div class="footer_right_content">
                <form>
                    <input type="email" placeholder="Email">
                    <button class="btn_primary">
                        <img src="./Icons/rightArrow.png" alt="right_arrow.png">
                        <a href="#">Subscribe</a>
                    </button>
                </form>

                <div class="social_media_icons">
                    <a href="#"><img class="facebook_icon" src="./Icons/facebook.png" alt="facebook_logo.png"></a>
                    <a href="#"><img class="twitter_icon" src="./Icons/twitter.png" alt="twitter_logo.png"></a>
                    <a href="#"><img class="instagram_icon" src="./Icons/instagram.png" alt="instagram_icon"></a>
                    <a href="#"><img class="linkedin_logo" src="./Icons/linkedin.png" alt="linkedin_logo.png"></a>
                </div>
            </div>
        </footer>
        <!-- <div class="created_by">
            Made with ❤️ by AFRIDE
        </div>
    </div> -->

        <footer style="color: #888888;">&copy; Copyright @2023 &nbsp; All rights reserved  BeatsCompany</footer>
        <script src="./Javascript/script.js"></script>
        <script src="./Javascript/snackbar.js"></script>
</body>

</html>