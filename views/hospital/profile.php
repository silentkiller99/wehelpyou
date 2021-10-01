<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include('header.php'); ?>
    <title>Document</title>

    <style>
        .mySlides {
            display: none;
        }

        .w3-display-left {
            position: absolute;
            top: 50%;
            left: 0%;
            transform: translate(0%, -50%);
        }

        .w3-display-right {
            position: absolute;
            top: 50%;
            right: 0%;
            transform: translate(0%, -50%);
        }

        .w3-black, .w3-hover-black:hover {
            color: #fff !important;
            background-color: #000 !important;
        }

        .w3-btn, .w3-button {
            border: none;
            display: inline-block;
            padding: 8px 16px;
            vertical-align: middle;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
            background-color: inherit;
            text-align: center;
            cursor: pointer;
            white-space: nowrap;
        }
    </style>
</head>
<body class="app">
<div class="layout">
    <!-- Side Nav START -->
    <?php include('navbar.php'); ?>
    <!-- Side Nav END -->
    <!-- Page Container START -->
    <div class="page-container">
        <!-- Header START -->
        <?php include('head.php'); ?>
        <div class="main-content">
            <div class="container-fluid">
                <div class="page-title">
                    <h4>Hospital Profile</h4>
                </div>
                <?php
                $data = getRowById('tbl_hospital_registration', 'hospital_registration_id', sessionId('hospitalId'));
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="widget-profile-1 card">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img class="mySlides"
                                                 src="<?= base_url("Upload/") . $data[0]['image'] ?>"
                                                 style="width:100%">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-heading border bottom">
                                        <h4 class="card-title">General Info</h4>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="mrg-top-10 text-dark"><b>Hospital Name</b></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mrg-top-10"><?= ucwords($data[0]['name']); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="mrg-top-10 text-dark"><b>Phone No.</b></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mrg-top-10"><?= $data[0]['phone']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="mrg-top-10 text-dark"><b>Email</b></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mrg-top-10"><?= $data[0]['email']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="mrg-top-10 text-dark"><b>Address</b></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mrg-top-10"><?= $data[0]['address']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="mrg-top-10 text-dark"><b>Area</b></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mrg-top-10"><?= $data[0]['area']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="mrg-top-10 text-dark"><b>Pin Code</b></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mrg-top-10"><?= $data[0]['pincode']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="mrg-top-10 text-dark"><b>City</b></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mrg-top-10"><?= $data[0]['city']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="mrg-top-10 text-dark"><b>Status</b></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mrg-top-10">
                                                    <span class="status online mrg-top-10"></span>
                                                    <span class="mrg-left-10">Available</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php include('footer.php'); ?>

    </div>

</div>

<?php include('footer_link.php'); ?>
</body>
</html>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>
