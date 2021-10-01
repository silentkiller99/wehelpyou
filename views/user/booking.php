<!DOCTYPE html>
<html>
<head>

    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php include('header_link.php'); ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php if ($this->session->flashdata('checkLogin') != '') {
    ?>
    <script>
        swal({
            title: "Login",
            text: "<?= $this->session->flashdata('checkLogin')?>",
            icon: "warning",
            button: "Login",
            closeOnClickOutside: false
        }).then(function () {
            window.location = "<?= base_url('userLogin')?>";
        });
    </script>
    <?php
    exit;
}
?>
<div id="wrapper">

    <?php include('header.php'); ?>

    <div class="clearfix"></div>
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Appointment Book</h2>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Booking</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <?php

    $getData = getRowById('tbl_user_registration', 'user_registration_id', sessionId('userId'));
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-8 padding-right-30">
                <form method="post" action="">
                    <h3 class="margin-top-0 margin-bottom-30">Personal Details</h3>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" value="<?= $getData[0]['name'] ?>" name="name">
                        </div>

                        <div class="col-md-6">
                            <label>Phone</label>
                            <input type="text" value="<?= $getData[0]['phone'] ?>" name="phone">
                        </div>
                        <div class="col-md-6">
                            <label>Address</label>
                            <input type="text" value="<?= $getData[0]['address'] ?>" name="address">
                        </div>
                        <div class="col-md-6">
                            <label>Pincode</label>
                            <input type="text" value="<?= $getData[0]['pincode'] ?>" name="pincode">
                        </div>
                        <div class="col-md-6">
                            <label>State</label>
                            <input type="text" value="<?= $getData[0]['state'] ?>" name="state">
                        </div>
                        <div class="col-md-6">
                            <label>City</label>
                            <input type="text" value="<?= $getData[0]['city'] ?>" name="city">
                        </div>
                        <div class="col-md-6">
                            <label>Appointment Date</label>
                            <input type="date" name="appointment_date" required>
                        </div>
                    </div>
                    <button
                            class="button booking-confirmation-btn margin-top-40 margin-bottom-65">Book Now
                    </button>
                </form>
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