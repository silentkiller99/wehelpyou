<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Home</title>
    <?php include('header.php'); ?>

</head>
<body>
<div class="app">
    <div class="layout">
        <?php include('navbar.php'); ?>
        <div class="page-container">
            <?php include('head.php'); ?>



            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-block">
                                    <div class="inline-block">
                                        <h1 class="no-mrg-vertical">$168.90</h1>
                                        <p>This Month</p>
                                    </div>
                                    <div class="pdd-top-25 inline-block pull-right">
                                        <span class="label label-success label-lg mrg-left-5">+18%</span>
                                    </div>
                                    <div class="mrg-top-25">
                                        <div id="bar-config"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-block">
                                    <p class="mrg-btm-5">This Quarter</p>
                                    <h1 class="no-mrg-vertical font-size-35">$3,936<b class="font-size-16">.80</b></h1>
                                    <p class="text-semibold">Total Revenue</p>
                                    <div class="mrg-top-10">
                                        <h2 class="no-mrg-btm">88</h2>
                                        <span class="inline-block mrg-btm-10 font-size-13 text-semibold">Online Revenue</span>
                                        <span class="pull-right pdd-right-10 font-size-13">70%</span>
                                        <div class="progress progress-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mrg-top-10">
                                        <h2 class="no-mrg-btm">69</h2>
                                        <span class="inline-block mrg-btm-10 font-size-13 text-semibold">Offline Revenue</span>
                                        <span class="pull-right pdd-right-10 font-size-13">50%</span>
                                        <div class="progress progress-success">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card widget-weather">
                                <div class="card-block">
                                    <h5 class="card-title">New York, 22 July</h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inline-block">
                                                <h1 class="today-cel">
                                                    <span>28°</span>
                                                    <i class="ei-partialy-cloudy text-warning"></i>
                                                </h1>
                                                <p>Partly Sunny</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row border bottom mrg-top-30">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-4">
                                                    <h3 class="no-mrg-btm">22°/28°</h3>
                                                    <p class="font-size-13">Temp</p>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-4">
                                                    <h3 class="no-mrg-btm">61%</h3>
                                                    <p class="font-size-13">Humidity</p>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-4">
                                                    <h3 class="no-mrg-btm">18<span class="font-size-13">km/h</span></h3>
                                                    <p class="font-size-13">Wind</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mrg-top-35">
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <div class="next-7day">
                                                <span class="display-block">WED</span>
                                                <h2 class="mrg-top-10"><i class="ei-cloud"></i></h2>
                                                <span>28°</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <div class="next-7day">
                                                <span class="display-block">THU</span>
                                                <h2 class="mrg-top-10"><i class="ei-breeze"></i></h2>
                                                <span>23°</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <div class="next-7day">
                                                <span class="display-block">FRI</span>
                                                <h2 class="mrg-top-10"><i class="ei-blizzard"></i></h2>
                                                <span>25°</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <div class="next-7day">
                                                <span class="display-block">SAT</span>
                                                <h2 class="mrg-top-10"><i class="ei-sunny-day"></i></h2>
                                                <span>27°</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <div class="next-7day">
                                                <span class="display-block">SUN</span>
                                                <h2 class="mrg-top-10"><i class="ei-partialy-cloudy"></i></h2>
                                                <span>24°</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <div class="next-7day">
                                                <span class="display-block">MON</span>
                                                <h2 class="mrg-top-10"><i class="ei-sunny-day"></i></h2>
                                                <span>26°</span>
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
    </div>
</div>

<?php include('footer_link.php'); ?>
</body>
</html>