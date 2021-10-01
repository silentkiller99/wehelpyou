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

        <div class="row">

            <!-- Listings -->
            <div class="col-lg-12 col-md-12" style="margin-top: 20px">
                <div class="dashboard-list-box margin-top-0">
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <div class="small-dialog-header">
                            <h3>Send Message</h3>
                        </div>
                        <div class="message-reply margin-top-0">
                            <textarea cols="40" rows="3" placeholder="Your Message to Kathy"></textarea>
                            <button class="button">Send</button>
                        </div>
                    </div>

                    <h4>Booking Requests</h4>
                    <ul>
                        <?php
                        $getData = getRowById('tbl_book_appointment', 'user_id', sessionId('userId'));
                        if ($getData == '') {
                            ?>
                            <h3>No record available</h3>
                            <?php
                        } else {
                            foreach ($getData as $data) {
                                $hospital = getRowById('tbl_hospital_registration', 'hospital_registration_id', $data['hospital_id']);
                                ?>
                                <li class="pending-booking">
                                    <div class="list-box-listing bookings">
                                        <div class="list-box-listing-content">
                                            <div class="inner">
                                                <h3><?= $hospital[0]['name'] ?>
                                                </h3>
                                                <div class="inner-booking-list">
                                                    <h5>Booking Date:</h5>
                                                    <ul class="booking-list">
                                                        <li class="highlighted"><?= $data['appointment_date'] ?></li>
                                                    </ul>
                                                </div>
                                                <div class="inner-booking-list">
                                                    <h5>Status:</h5>
                                                    <ul class="booking-list">
                                                        <?php
                                                        if ($data['status'] == '0') {
                                                            ?>
                                                            <strong style="color: yellow;">Pending
                                                            </strong>
                                                            <?php
                                                        } else if ($data['status'] == '1') {
                                                            ?>
                                                            <strong style="color: green;">
                                                                Accept</strong>
                                                            <?php
                                                        } else if ($data['status'] == '3') {
                                                            ?>
                                                            <strong style="color: blue;">
                                                                Finish</strong>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <strong style="color: mediumvioletred;">Appointment
                                                                Cancel</strong>
                                                            <?php
                                                        }
                                                        ?>

                                                    </ul>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <?php
                            }
                        }

                        ?>


                    </ul>
                </div>
            </div>


            <!-- Copyrights -->
            <div class="col-md-12">
                <div class="copyrights">© 2019 Listeo. All Rights Reserved.</div>
            </div>
        </div

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


<?php include('footer_link.php'); ?>

</body>
</html>