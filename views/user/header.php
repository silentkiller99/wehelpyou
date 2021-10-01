<header id="header-container">
    <div id="header">
        <div class="container">
            <div class="left-side">
                <div id="logo">
                    <a href="index.html"><img src="images/logo2.png" data-sticky-logo="images/logo.png" alt=""></a>
                </div>

                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                    </button>
                </div>
                <?php
                $directoryURI = $_SERVER['REQUEST_URI'];
                $path = parse_url($directoryURI, PHP_URL_PATH);
                $components = explode('/', $path);
                $first_part = $components[2];
                ?>

                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li>
                            <a class="<?php if ($first_part == '' or $first_part == 'home') {
                                echo "current";
                            } ?>" href="<?= base_url() ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?= base_url("allHospital") ?>"
                               class="<?php if ($first_part == 'allHospital' or $first_part == 'vSHospital') {
                                   echo "current";
                               } ?>">All Hospital</a>
                        </li>
                        <li>
                            <a class="<?php if ($first_part == 'history') {
                                echo "current";
                            } ?>" href="<?= base_url("history") ?>">History</a>
                        </li>


                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
            <div class="right-side">
                <div class="header-widget">


                    <?php
                    if (sessionId('userId') == '') {
                        ?>
                        <a href="<?= base_url("userLogin") ?>" class="button border with-icon">Login </a>
                        <?php
                    } else {
                        ?>
                        <a class="button "><?= sessionId('name') ?></a>
                        <a href="<?= base_url('userLogout') ?>" class="button">Logout</a>

                        <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
    <!-- Header / End -->

</header>