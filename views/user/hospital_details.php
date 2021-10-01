<!DOCTYPE html>
<html>
<head>
    <title>Hospital Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php include('header_link.php'); ?>

</head>
<body>
<div id="wrapper" style="overflow-y: hidden">
    <?php include('header.php'); ?>

    <div class="clearfix"></div>

    <div class="single-listing-page-titlebar"></div>


    <div class="container">
        <div class="row sticky-wrapper">
            <div class="col-lg-8 col-md-8 padding-right-30">
                <?php
                $getId = $this->uri->segment(2);
                $getData = getRowById('tbl_hospital_registration', 'hospital_registration_id', $getId)
                ?>

                <div id="titlebar" class="listing-titlebar">
                    <div class="listing-titlebar-title">
                        <h2><?= $getData[0]['name'] ?><span class="listing-tag">Government</span></h2>
                        <span>
						<a href="#" class="listing-address">
							<i class="fa fa-map-marker"></i>
                            <?= $getData[0]['address'] ?>
						</a>
					</span>
                        <div class="star-rating" data-rating="5">
                            <div class="rating-counter"><a href="#listing-reviews">(31 reviews)</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <img src="<?= base_url("upload/") . $getData[0]['image'] ?>">
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 padding-right-30">
                    <div class="row margin-bottom-25">
                        <div class="col-md-6 col-xs-6">
                            <h3>Vaccine </h3>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $where = "(hospital_id = $getId)";
                        $get = getRowByMoreId('tbl_add_medicine', $where);


                        if (empty($get)) {
                            ?>
                            <p>No Vaccine Available</p>
                            <?php
                        } else {
                            foreach ($get as $g) {
                                $mId = $g['medicine_name'];
                                $where2 = "(id = '$mId')";
                                $getAll = getRowByMoreId('tbl_medicine_name', $where2);
                                if ($getAll[0]['type'] == '2') {
                                    ?>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="listing-item-container list-layout">
                                            <a href="<?= base_url("checkoutPage?mId=$mId&hId=$getId") ?>"
                                               class="listing-item">
                                                <div class="listing-item-content">
                                                    <div class="listing-item-inner">
                                                        <h3><?= $getAll[0]['medicine_name'] ?><br><i
                                                                    class="verified-icon"></i>Available
                                                        </h3>
                                                        <div class="star-rating" data-rating="3.5">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
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


</div>
<?php include('footer_link.php'); ?>

</body>
</html>