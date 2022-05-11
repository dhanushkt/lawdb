<!DOCTYPE html>
<html lang="en">

<head>
    <!-- head.php contains css and title -->
    <?php include './assets/head.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-scroller">
        <!-- navbar.php contains partial:partials/_navbar.html -->
        <?php include './assets/navbar.php'; ?>


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- sidebar.php contains partial:partials/_sidebar.html -->
            <?php include './assets/sidebar.php'; ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- <div style="overflow-x: auto; width: 100%;"> -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <span style="color: black; font-weight: 900;">Shop id:SH006</span>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <span style="color:black; float:right; font-weight:900;">Date:10-02-2022</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <span style="color:black;font-weight:900;">shop name:Ice cream shop</span>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <button style="color:black; float:right; font-weight:900;">Freeze Data</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xl-12 stretch-card" style="padding-top: 4%;">

                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="background-color: rgb(151, 55, 0);">
                                                    <th style="width:10%;">
                                                        #
                                                    </th>
                                                    <th>
                                                        Item Name
                                                    </th>
                                                    <th style="width:10%;">
                                                        Price
                                                    </th>
                                                    <th style="width:10%;">
                                                        Qty
                                                    </th>
                                                    <th style="width:10%;">
                                                        Total
                                                    </th>
                                                    <th style="width:10%;">
                                                        Status
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr  style="background-color: rgb(0, 102, 0);">
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        Cup Ice Cream Big
                                                    </td>
                                                    <td>
                                                        15
                                                    </td>
                                                    <td>
                                                        20
                                                    </td>
                                                    <td>
                                                        300
                                                    </td>
                                                    <td>
                                                        Delivered
                                                    </td>
                                                </tr>
                                                <tr style="background-color: rgb(0, 102, 0);">
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        Cup Ice Cream Small
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td>
                                                        250
                                                    </td>
                                                    <td>
                                                        Delivered
                                                    </td>
                                                </tr>
                                                <tr style="background-color: rgb(204, 0, 0);">
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        Cone Ice Cream
                                                    </td>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        250
                                                    </td>
                                                    <td>
                                                        Not Delivered
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        Total
                                                    </td>
                                                    <td colspan="4">
                                                        800
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

</body>

</html>