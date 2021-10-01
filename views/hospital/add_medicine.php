<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include('header.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Add Medicine</title>
    <style>
        .day:hover {
            color: red;
        }

        .active.day {
            border-radius: 10px;
        }

        .disabled.day {
            color: gray;
            cursor: no-drop;
        }

        th.datepicker-swithc {
            margin-left: 20px;
        }

        label {
            color: #25272b;
            font-size: 16px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .form-group span {
            color: red;
        }
    </style>
</head>
<body>
<div class="app">
    <div class="layout">

        <?php include('navbar.php'); ?>

        <div class="page-container">

            <?php include('head.php'); ?>
            <div class="main-content">
                <div class="container-fluid">
                    <?php if ($this->session->flashdata('errors') != '') {
                        ?>
                        <div class="alert alert-primary" role="alert">
                            <?= $this->session->flashdata('errors'); ?>
                        </div>
                        <?php
                    } ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-heading border bottom">
                                    <h4 class="card-title">Add </h4>
                                </div>
                                <div class="card-block">
                                    <div class="mrg-top-40">
                                        <div class="row">
                                            <div class="col-md-8 ml-auto mr-auto">
                                                <form method="post"
                                                      action="" id="myform">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Medicine Name</label>
                                                                <select class="form-control p_name"
                                                                        name="medicine_name">
                                                                    <?php
                                                                    $mId = $this->input->get('id');
                                                                    if (isset($mId)) {
                                                                        $get = getRowById('tbl_medicine_name', 'id', $mId);
                                                                        ?>
                                                                        <option value="<?= $get[0]['id'] ?>"><?= $get[0]['medicine_name'] ?></option>
                                                                        <?php
                                                                    } else {
                                                                        $where = "(hospital_id=" . sessionId('hospitalId') . " AND type = '1')";
                                                                        $getName = getRowByMoreId('tbl_medicine_name', $where);
                                                                        echo "<option>Select Name</option>";
                                                                        foreach ($getName as $name) {
                                                                            ?>
                                                                            <option value="<?= $name['id'] ?>"><?= $name['medicine_name'] ?></option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <span id="p_name"><?= form_error('medicine_name'); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Quantity</label>
                                                                <input type="text"
                                                                       placeholder="Enter Quantity in packets"
                                                                       name="quantity"
                                                                       value="<?= set_value('quantity'); ?>"
                                                                       class="form-control p_name">
                                                                <span id="p_name"><?= form_error('quantity'); ?></span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 col-xs-6">
                                                            <div class="text-right mrg-top-5">

                                                                <button id="save" class="btn btn-danger">Save</button>
                                                                <button id="load" class="btn btn-danger" type="button">
                                                                    <i class="fa fa-spinner fa-spin"></i>Loading..
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
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
<script>

    $(document).ready(function () {
        $('#load').hide();
        $('#save').click(function () {

            var p_name = $('.p_name').val();


            if (p_name == '') {
                $('#p_name').html('<span>Product Name Required</span>');
                return false;
            } else {
                $('#load').show();
                $('#save').hide();
            }
        });
    });

</script>
</body>
</html>
