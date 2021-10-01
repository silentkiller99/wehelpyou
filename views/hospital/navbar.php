<div class="side-nav">
    <div class="side-nav-inner">
        <div class="side-nav-logo">
            <a href="<?= base_url('dashboard'); ?>">
                <div class="logo logo-dark"
                     style="background-image: url('<?php echo base_url('Assets/shopkeeper/images/logo/logo.png'); ?>')"></div>
                <div class="logo logo-white"
                     style="background-image: url('<?php echo base_url('Assets/hospital/images/logo/logo-white.png'); ?>')"></div>
            </a>
            <div class="mobile-toggle side-nav-toggle">
                <a href="#">
                    <img src="<?= base_url('Assets/hospital/icon/back.svg'); ?>" height="25" width="25">
                </a>
            </div>
        </div>
        <ul class="side-nav-menu scrollable">
            <li class="nav-item">
                <a class="mrg-top-30" href="<?= base_url('hDashboard'); ?>">
                    <span class="icon-holder">
                       <i class="fa fa-home"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav - item">
                <a href=" <?= base_url('hProfile'); ?>">
                    <span class="icon-holder">
                        <img src="<?= base_url('Assets/hospital/icon/profile.svg') ?> " height="20" width="20">
                    </span>
                    <span class="title">Profile</span>
                </a>
            </li>
            <li class="nav - item">
                <a href=" <?= base_url('allName'); ?>">
                    <span class="icon-holder">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="title">Add Name</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="<?= base_url('allMedicine'); ?>">
                    <span class="icon-holder">
                        <img src="<?= base_url('Assets/hospital/icon/staff.svg') ?> " height="20" width="20">
                    </span>
                    <span class="title">Medicine Details</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="<?= base_url('allVaccine'); ?>">
                    <span class="icon-holder">
                        <img src="<?= base_url('Assets/hospital/icon/staff.svg') ?> " height="20" width="20">
                    </span>
                    <span class="title">Vaccine Details</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('appoDetails') ?>">
                    <span class="icon-holder">
                         <img src="<?= base_url('Assets/hospital/icon/blog.svg') ?> " height="20" width="20">
                    </span>
                    <span class="title">Appointment</span>

                </a>
            </li>

            <li class="nav-item  ">
                <a href="<?= base_url('logout'); ?>">
                    <span class="icon-holder">
                        <i class="fa fa-sign-out"></i>
                    </span>
                    <span class="title">Logout</span>
                </a>
            </li>


        </ul>
    </div>
</div>
