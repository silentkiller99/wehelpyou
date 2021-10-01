<link rel="shortcut icon" href="<?php echo base_url('Assets/hospital/images/logo/logo.png'); ?>">
<!-- plugins css -->
<link rel="stylesheet"
      href="<?php echo base_url('Assets/hospital/vendors/bootstrap/dist/css/bootstrap.css'); ?>"/>

<link rel="stylesheet"
      href="<?php echo base_url('Assets/hospital/vendors/selectize/dist/css/selectize.default.css'); ?>"/>
<link rel="stylesheet"
      href="<?php echo base_url('Assets/hospital/vendors/PACE/themes/blue/pace-theme-minimal.css'); ?>"/>
<link rel="stylesheet"
      href="<?php echo base_url('Assets/hospital/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css'); ?>"/>
<!-- page plugins css -->
<link rel="stylesheet"
      href="<?php echo base_url('Assets/hospital/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.css'); ?>"/>
<link rel="stylesheet" href="<?php echo base_url('Assets/hospital/vendors/nvd3/build/nv.d3.min.css'); ?>"/>
<!-- core css -->
<link href="<?php echo base_url('Assets/hospital/css/ei-icon.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('Assets/hospital/css/themify-icons.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('Assets/hospital/css/font-awesome.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('Assets/hospital/css/animate.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('Assets/hospital/css/app.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('Assets/hospital/vendors/datatables/media/css/jquery.dataTables.css'); ?>"
      rel="stylesheet">
<link href="<?php echo base_url('Assets/hospital/vendors/bootstrap-daterangepicker/daterangepicker.css'); ?>"
      rel="stylesheet">
<link href="<?php echo base_url('Assets/hospital/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css'); ?>"


<link href="<?php echo base_url('Assets/hospital/css/my.css'); ?>" rel="stylesheet">

<style>
    @media only screen and (max-width: 420px) {
        .galaxypoupup .modal-dialog {
            top: 250px;
        }
    }

    @media only screen and (min-width: 421px) {
        .galaxypoupup .modal-dialog {
            top: 150px;
        }
    }

    .galaxypoupup .modal-content {
        margin: 15px;
    }

    .galaxypoupup .modal-header h3 {
        padding-top: 15px;
        text-align: center;
        color: #4472b9;
    }

    .galaxypoupup .modal-header p {
        padding-top: 7px;
        text-align: center;
        color: #9f9f9f;
        font-size: 13px;
    }

    .galaxypoupup .modal-header {
        margin: 0px 15px;
        padding-bottom: 5px;
    }

    .galaxypoupup .modal-body {
        text-align: center;
    }

    .galaxypoupup .modal-body p {
        font-size: 18px;
        line-height: 0;
        margin-top: 10px;
    }

    .galaxypoupup .modal-body h3 {
        line-height: 18px;
        font-weight: 600;
        font-size: 22px;
        color: #000;
    }

    .galaxypoupup .modal-content {
        border-radius: 20px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: none;
        border: none;
        padding-bottom: 25px;
    }

    .modal-backdrop {
        background-color: #5a93ce;
    }

    .modal-backdrop.in {
        filter: alpha(opacity=70);
        opacity: .7;
    }

    .file-upload {
        display: block;
        text-align: center;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 12px;
    }

    .file-upload .file-select {
        display: block;
        border: 2px solid #dce4ec;
        color: #34495e;
        cursor: pointer;
        height: 40px;
        line-height: 40px;
        text-align: left;
        background: #FFFFFF;
        overflow: hidden;
        position: relative;
    }

    .file-upload .file-select .file-select-button {
        background: #dce4ec;
        padding: 0 10px;
        display: inline-block;
        height: 40px;
        line-height: 40px;
    }

    .file-upload .file-select .file-select-name {
        line-height: 40px;
        display: inline-block;
        padding: 0 10px;
    }

    .file-upload .file-select:hover {
        border-color: #34495e;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload .file-select:hover .file-select-button {
        background: #34495e;
        color: #FFFFFF;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload.active .file-select {
        border-color: #3fa46a;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload.active .file-select .file-select-button {
        background: #3fa46a;
        color: #FFFFFF;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload .file-select input[type=file] {
        z-index: 100;
        cursor: pointer;
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        filter: alpha(opacity=0);
    }

    .file-upload .file-select.file-select-disabled {
        opacity: 0.65;
    }

    .file-upload .file-select.file-select-disabled:hover {
        cursor: default;
        display: block;
        border: 2px solid #dce4ec;
        color: #34495e;
        cursor: pointer;
        height: 40px;
        line-height: 40px;
        margin-top: 5px;
        text-align: left;
        background: #FFFFFF;
        overflow: hidden;
        position: relative;
    }

    .file-upload .file-select.file-select-disabled:hover .file-select-button {
        background: #dce4ec;
        color: #666666;
        padding: 0 10px;
        display: inline-block;
        height: 40px;
        line-height: 40px;
    }

    .file-upload .file-select.file-select-disabled:hover .file-select-name {
        line-height: 40px;
        display: inline-block;
        padding: 0 10px;
    }

    .form-group p {
        font-size: 16px;
    }

</style>







