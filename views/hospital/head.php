<div class="header navbar">
    <div class="header-container">
        <ul class="nav-left">
            <li>
                <a class="side-nav-toggle" href="javascript:void(0);">
                    <i class="fa fa-bars"></i>
                </a>
            </li>
        </ul>
        <ul class="nav-right">
            <li class="user-profile dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                            style="color: black; font-weight: 400"></span>
                    <div class="user-info">
                        <span class="name pdd-right-5"><?php echo $this->session->userdata('hname'); ?></span>
                        <i class="ti-angle-down font-size-10"></i>
                    </div>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?= base_url("hProfile") ?>">
                            <i class="ti-user pdd-right-10"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="<?= base_url('vendorLogout'); ?>">
                            <i class="ti-power-off pdd-right-10"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>
</div>

