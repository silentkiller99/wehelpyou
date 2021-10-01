<!DOCTYPE html>
<head>

    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php include('header_link.php'); ?>

</head>
<body class="transparent-header">
<div id="wrapper">

    <?php include('header.php'); ?>

    <div class="clearfix"></div>
    <div class="main-search-container centered" data-background-image="images/main-search-background-01.jpg">
        <div class="main-search-inner">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>
                            Find Nearby
                            <!-- Typed words can be configured in script settings at the bottom of this HTML file -->
                            <span class="typed-words"></span>
                        </h2>
                        <h4>Expolore top-rated attractions, activities and more</h4>

                        <div class="main-search-input">

                            <div class="main-search-input-item">
                                <input type="text" placeholder="What are you looking for?" value=""/>
                            </div>

                            <div class="main-search-input-item location">
                                <div id="autocomplete-container">
                                    <input id="autocomplete-input" type="text" placeholder="Location">
                                </div>
                                <a href="#"><i class="fa fa-map-marker"></i></a>
                            </div>

                            <div class="main-search-input-item">
                                <select data-placeholder="All Categories" class="chosen-select">
                                    <option>All Categories</option>
                                    <option>Shops</option>
                                    <option>Hotels</option>
                                    <option>Restaurants</option>
                                    <option>Fitness</option>
                                    <option>Events</option>
                                </select>
                            </div>

                            <button class="button" onclick="window.location.href='listings-half-screen-map-list.html'">
                                Search
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h3 class="headline centered margin-bottom-45">
                        <strong class="headline-with-separator">New Hospital</strong>

                    </h3>
                </div>
                <div class="col-md-12">
                    <div class="simple-slick-carousel dots-nav">
                        <?php
                        $get = getAllRow('tbl_hospital_registration');
                        foreach ($get as $g) {
                            ?>
                            <div class="carousel-item">
                                <a href="<?= base_url("vSHospital/") . $g['hospital_registration_id'] ?>"
                                   class="listing-item-container">
                                    <div class="listing-item">
                                        <img src="<?= base_url("upload/") . $g['image'] ?>" alt="">
                                        <div class="listing-badge now-open">Now Open</div>
                                        <div class="listing-item-content">
                                            <span class="tag">Government</span>
                                            <h3><?= $g['name'] ?></h3>
                                        </div>

                                    </div>
                                    <div class="star-rating">
                                        <div class="rating-counter"><?= $g['address'] ?></div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }

                        ?>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h3 class="headline centered margin-bottom-45">
                        <strong class="headline-with-separator">Most Visited Hospital</strong>

                    </h3>
                </div>
                <div class="col-md-12">
                    <div class="simple-slick-carousel dots-nav">
                        <?php
                        $get = getAllRowsWithOrder('tbl_hospital_registration', 'hospital_registration_id', 'DESC');
                        foreach ($get as $g) {
                            ?>
                            <div class="carousel-item">
                                <a href="<?= base_url("vSHospital/") . $g['hospital_registration_id'] ?>"
                                   class="listing-item-container">
                                    <div class="listing-item">
                                        <img src="<?= base_url("upload/") . $g['image'] ?>" alt="">

                                        <div class="listing-item-content">
                                            <span class="tag">Government</span>
                                            <h3><?= $g['name'] ?></h3>
                                        </div>

                                    </div>
                                    <div class="star-rating">
                                        <div class="rating-counter"><?= $g['address'] ?></div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }

                        ?>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="headline centered margin-top-80">
                    Plan The Vacation of Your Dreams
                    <span class="margin-top-25">Explore some of the best tips from around the world from our partners and friends.  Discover some of the most popular listings in Sydney.</span>
                </h2>
            </div>
        </div>

        <div class="row icons-container">
            <!-- Stage -->
            <div class="col-md-4">
                <div class="icon-box-2 with-line">
                    <i class="im im-icon-Map2"></i>
                    <h3>Find Interesting Place</h3>
                    <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis
                        eros sollicitudin turpis.</p>
                </div>
            </div>

            <!-- Stage -->
            <div class="col-md-4">
                <div class="icon-box-2 with-line">
                    <i class="im im-icon-Mail-withAtSign"></i>
                    <h3>Contact a Few Owners</h3>
                    <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum metus
                        nullam viverra porta purus.</p>
                </div>
            </div>

            <!-- Stage -->
            <div class="col-md-4">
                <div class="icon-box-2">
                    <i class="im im-icon-Checked-User"></i>
                    <h3>Make a Reservation</h3>
                    <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin
                        feugiat pharetra consectetur.</p>
                </div>
            </div>
        </div>

    </div>


    <div id="footer" class="sticky-footer">
        <!-- Main -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img class="footer-logo" src="images/logo.png" alt="">
                    <br><br>
                    <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut
                        lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
                </div>

                <div class="col-md-4 col-sm-6 ">
                    <h4>Helpful Links</h4>
                    <ul class="footer-links">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Add Listing</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>

                    <ul class="footer-links">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Our Partners</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-3  col-sm-12">
                    <h4>Contact Us</h4>
                    <div class="text-widget">
                        <span>12345 Little Lonsdale St, Melbourne</span> <br>
                        Phone: <span>(123) 123-456 </span><br>
                        E-Mail:<span> <a href="#"><span class="__cf_email__"
                                                        data-cfemail="e78881818e8482a7829f868a978b82c984888a">[email&#160;protected]</span></a> </span><br>
                    </div>

                    <ul class="social-icons margin-top-20">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
                    </ul>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyrights">© 2019 WeHelpYou. All Rights Reserved.</div>
                </div>
            </div>

        </div>

    </div>
</div>
<?= include('footer_link.php'); ?>

</body>
</html>