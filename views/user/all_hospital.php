<!DOCTYPE html>
<html>
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

    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>All Hospital
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-lg-9 col-md-8 padding-right-30">

                <!-- Sorting / Layout Switcher -->
                <div class="row margin-bottom-25">

                    <div class="col-md-6 col-xs-6">

                        <div class="layout-switcher">

                            <a href="#" class="list active"><i class="fa fa-align-justify"></i></a>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-6">
                        <!-- Sort by -->
                        <div class="sort-by">
                            <div class="sort-by-select">
                                <select data-placeholder="Default order" class="chosen-select-no-single">
                                    <option>Default Order</option>
                                    <option>Highest Rated</option>
                                    <option>Most Reviewed</option>
                                    <option>Newest Listings</option>
                                    <option>Oldest Listings</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sorting / Layout Switcher / End -->


                <div class="row">
                    <?php
                    $get = getAllRowsWithOrder('tbl_hospital_registration', 'hospital_registration_id', 'DESC');
                    foreach ($get as $g) {
                        ?>
                        <div class="col-lg-12 col-md-12">
                            <div class="listing-item-container list-layout">
                                <a href="<?= base_url("vSHospital/") . $g['hospital_registration_id'] ?>"
                                   class="listing-item">

                                    <div class="listing-item-image">
                                        <img src="<?= base_url("upload/") . $g['image'] ?>" alt="">
                                        <span class="tag">Government</span>
                                    </div>
                                    <div class="listing-item-content">
                                        <div class="listing-item-inner">
                                            <h3><?= $g['name'] ?><i class="verified-icon"></i></h3>
                                            <span><?= $g['address'] ?></span>
                                            <div class="star-rating" data-rating="3.5">

                                            </div>
                                        </div>

                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <!-- Pagination -->
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Pagination -->
                        <div class="pagination-container margin-top-20 margin-bottom-40">
                            <nav class="pagination">

                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Pagination / End -->

            </div>


            <!-- Sidebar
            ================================================== -->
            <div class="col-lg-3 col-md-4">
                <div class="sidebar">

                    <!-- Widget -->
                    <div class="widget margin-bottom-40">
                        <h3 class="margin-top-0 margin-bottom-30">Filters</h3>

                        <!-- Row -->
                        <div class="row with-forms">
                            <!-- Cities -->
                            <div class="col-md-12">
                                <input type="text" placeholder="What are you looking for?" value=""/>
                            </div>
                        </div>
                        <!-- Row / End -->


                        <!-- Row -->
                        <div class="row with-forms">
                            <!-- Type -->
                            <div class="col-md-12">
                                <select data-placeholder="All Categories" class="chosen-select">
                                    <option>All Categories</option>
                                    <option>Shops</option>
                                    <option>Hotels</option>
                                    <option>Restaurants</option>
                                    <option>Fitness</option>
                                    <option>Events</option>
                                </select>
                            </div>
                        </div>
                        <!-- Row / End -->


                        <!-- Row -->
                        <div class="row with-forms">
                            <!-- Cities -->
                            <div class="col-md-12">

                                <div class="input-with-icon location">
                                    <div id="autocomplete-container">
                                        <input id="autocomplete-input" type="text" placeholder="Location">
                                    </div>
                                    <a href="#"><i class="fa fa-map-marker"></i></a>
                                </div>

                            </div>
                        </div>
                        <!-- Row / End -->
                        <br>

                        <!-- Area Range -->
                        <div class="range-slider">
                            <input class="distance-radius" type="range" min="1" max="100" step="1" value="50"
                                   data-title="Radius around selected destination">
                        </div>


                        <!-- More Search Options -->
                        <a href="#" class="more-search-options-trigger margin-bottom-5 margin-top-20"
                           data-open-title="More Filters" data-close-title="More Filters"></a>

                        <div class="more-search-options relative">

                            <!-- Checkboxes -->
                            <div class="checkboxes one-in-row margin-bottom-15">

                                <input id="check-a" type="checkbox" name="check">
                                <label for="check-a">Elevator in building</label>

                                <input id="check-b" type="checkbox" name="check">
                                <label for="check-b">Friendly workspace</label>

                                <input id="check-c" type="checkbox" name="check">
                                <label for="check-c">Instant Book</label>

                                <input id="check-d" type="checkbox" name="check">
                                <label for="check-d">Wireless Internet</label>

                                <input id="check-e" type="checkbox" name="check">
                                <label for="check-e">Free parking on premises</label>

                                <input id="check-f" type="checkbox" name="check">
                                <label for="check-f">Free parking on street</label>

                                <input id="check-g" type="checkbox" name="check">
                                <label for="check-g">Smoking allowed</label>

                                <input id="check-h" type="checkbox" name="check">
                                <label for="check-h">Events</label>

                            </div>
                            <!-- Checkboxes / End -->

                        </div>
                        <!-- More Search Options / End -->

                        <button class="button fullwidth margin-top-25">Update</button>

                    </div>
                    <!-- Widget / End -->

                </div>
            </div>
            <!-- Sidebar / End -->
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