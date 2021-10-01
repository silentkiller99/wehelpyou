<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>All Merchants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <?php include('header_link.php'); ?>
</head>

<body class="boxed-layout">
<?php include('header.php'); ?>
<?php if ($this->session->flashdata('errors') != '') {
    ?>
    <div id="snackbar"><?= $this->session->flashdata('errors') ?></div>
    <?php
} ?>

<div class="wrapper">
    <div class="">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card-box">
                    <h4 style="text-align: center">All Hospital Details</h4>
                    <hr>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-10 text-sm-center form-inline">
                                <div class="form-group mr-2">
                                    <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                        <option value="">Show all</option>
                                        <option
                                                value="Active">Active
                                        </option>
                                        <option
                                                value="Deactive">Deactive
                                        </option>


                                    </select>
                                </div>
                                <div class="form-group">
                                    <input id="demo-foo-search" type="text" placeholder="Search"
                                           class="form-control form-control-sm" autocomplete="on">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0"
                               data-page-size="10">
                            <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Hospital Name</th>
                                <th>Address / Area</th>
                                <th>state / City</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $merchants = getAllRow('tbl_hospital_registration');
                            $i = 0;
                            foreach ($merchants as $item) {
                                $i = $i + 1;
                                $id = encryptId($item['hospital_registration_id']);
                                $where = "(tbl_book_prod.booking_status='2' or tbl_book_prod.booking_status='4')";
                                $shop_name = $item['name'];
                                ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $item['name'] ?></td>
                                    <td><?= $item['address'] ?><br><?= $item['area'] ?></td>
                                    <td><?= $item['state'] ?><br><?= $item['city'] ?></td>


                                </tr>
                                <?php
                            } ?>
                            </tbody>
                            <tfoot>
                            <tr class="active">
                                <td colspan="9">
                                    <div class="text-right">
                                        <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="rightbar-overlay"></div>
<?php include('footer_link.php'); ?>
</body>
<script>
    $(document).ready(function () {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);
    });
</script>
</html>
