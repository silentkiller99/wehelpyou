<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include('header.php'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <style>
        .modal-content {
            width: 550px;
        }

        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }

        .table-lg > tbody > tr > td, .table-lg > tbody > tr > th, .table-lg > tfoot > tr > td, .table-lg > tfoot > tr > th, .table-lg > thead > tr > td, .table-lg > thead > tr > th {
            padding: 10px;
        }

        table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child:before, table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child:before {
            top: 40px;
            left: 20px;
            height: 20px;
            width: 20px;
            display: block;
            position: absolute;
            color: white;
            border: 2px solid white;
            border-radius: 14px;
            box-shadow: 0 0 3px #444;
            box-sizing: content-box;
            text-align: center;
            cursor: pointer;
            text-indent: 0 !important;
            font-family: 'Courier New', Courier, monospace;
            line-height: 18px;
            content: '+';
            background-color: #31b131;
        }

        @media screen and (max-width: 640px) {
            .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter {
                float: left;
                text-align: left;
            }

            .col-sm-12 .dataTables_filter {
                margin-top: -80px;
                width: 51%;

            }

            .dataTables_wrapper .dataTables_filter input {
                margin-left: -5px;
            }

        }

        @media screen and (max-width: 420px) {
            .dataTables_wrapper .dataTables_paginate .paginate_button {

                min-width: auto;
            }

            .page-link {
                margin-right: -12px;
                margin-left: -12px;
            }

            .pagination {
                overflow: scroll;
            }

            .table-overflow {
                overflow: hidden;
            }

        }

        @media screen and (max-width: 767px) {
            .dataTables_wrapper .dataTables_paginate .paginate_button {

                min-width: auto;
            }

            .page-link {
                margin-right: -12px;
                margin-left: -12px;
            }

            .pagination {
                overflow: scroll;
            }

            .table-overflow {
                overflow: hidden;
            }

        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            border: none;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid lightgrey;

        }

        .page-link {
            margin-right: -12px;
            margin-left: -12px;
            background-color: white;
        }

        .paginate_button page-item:hover {
            border: none;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: white;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            background: white;
        }
    </style>
</head>
<body>

<?php
if ($this->session->flashdata('errors') != '') {
    ?>
    <div id="snackbar"><?= $this->session->flashdata('errors') ?></div>
    <?php
} ?>

<div class="app">
    <div class="layout">
        <?php include('navbar.php'); ?>
        <div class="page-container">
            <!-- Header START -->
            <?php include('head.php'); ?>
            <div class="main-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h4>Show All Vaccine details</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="table-overflow">
                                        <a href="<?= base_url('addVeccine') ?>" class="btn btn-danger"
                                           style="float: right">Add Vaccine</a>
                                        <table id="d_table" class="table table-lg table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Medicine Name</th>
                                                <th>Total Quantity</th>
                                                <th>Remaining</th>
                                                <th>Update</th>
                                                <th>History</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $i = 0;
                                            $vid = sessionId('hospitalId');
                                            $where3 = "(hospital_id = $vid AND type = '2')";
                                            $getAll = getRowByMoreIdInOrder('tbl_medicine_name', $where3, 'medicine_name', 'ASC');
                                            foreach ($getAll as $all) {
                                                $data = getRowByIdWithGroup('tbl_add_medicine', 'medicine_name', $all['id'], 'medicine_name');
                                                foreach ($data as $d) {
                                                    $id = encryptId($d['id']);
                                                    $i++;
                                                    $t = 0;
                                                    $name = getRowById('tbl_medicine_name', 'id', $d['medicine_name']);
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="relative mrg-top-15">

                                                                <span><?= $i; ?></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <span><?= $name[0]['medicine_name']; ?></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <?php
                                                                $q = 0;
                                                                $where2 = "(medicine_name = " . $all['id'] . " AND hospital_id = $vid)";
                                                                $getQuantity = getRowByMoreId('tbl_add_medicine', $where2);
                                                                foreach ($getQuantity as $g) {
                                                                    $q = $q + $g['quantity'];
                                                                }
                                                                ?>
                                                                <span class=""><?= $q; ?> packets</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <?php
                                                                $where = "(medicine_id = " . $all['id'] . " AND hospital_id = $vid)";
                                                                $get = getNumRows('tbl_book_appointment', $where);
                                                                if ($get < 0) {
                                                                    ?>
                                                                    <span class=""><?= $q; ?> packet</span>
                                                                    <?php
                                                                } else {

                                                                    ?>
                                                                    <span class=""><?= $q - $get; ?>
                                                                        packets</span>
                                                                    <?php
                                                                }
                                                                ?>

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $a = $q - $t;
                                                            if ($a != 0) {
                                                                ?>
                                                                <a class="btn btn-info"
                                                                   href="<?= base_url("addMedicine?id=" . $d['medicine_name'] . "") ?>">Update</a>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <span>Not available</span>
                                                                <?php
                                                            }
                                                            ?>

                                                        </td>
                                                        <td>
                                                            <button data-toggle="modal"
                                                                    data-target="#default-modal<?= $i ?>"
                                                                    class="btn btn-sm btn-primary">View
                                                            </button>
                                                            <div class="modal fade" id="default-modal<?= $i ?>">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4>Modal Template</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table table-overflow">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>Sr. No.</th>
                                                                                    <th>Date</th>
                                                                                    <th>Quantity</th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <?php

                                                                                $j = 0;
                                                                                foreach ($getQuantity as $history) {
                                                                                    ++$j;

                                                                                    ?>
                                                                                    <tr>
                                                                                        <td><?= $j; ?></td>
                                                                                        <td><?= $history['create_date'] ?></td>
                                                                                        <td><?= $history['quantity'] ?></td>

                                                                                    </tr>
                                                                                    <?php
                                                                                }
                                                                                ?>

                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                        <div class="modal-footer no-border">
                                                                            <div class="text-right">
                                                                                <button class="btn btn-default btn-sm"
                                                                                        data-dismiss="modal">Cancel
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }

                                            ?>
                                            </tbody>
                                        </table>
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
</div>
</body>
<?php include('footer_link.php'); ?>
<script>
    $(document).ready(function () {


        var table = $('#d_table').DataTable({});


        $('[data-toggle="popover"]').popover();
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);
    });


</script>
</html>


