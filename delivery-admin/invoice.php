<!DOCTYPE html>
<html lang="en">

<head>
    <!-- head.php contains css and title -->
    <?php include './assets/head.php'; ?>

    <style>
        td {
            border: none !important;
        }
    </style>
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

                    <div class="row">
                        <div class="col-xl-12 stretch-card" style="padding-top: 4%;">

                            <div class="card">
                                <div class="card-body">
                                    <div class=" pt-3">
                                        <!-- table-responsive -->
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <h3>Skanda Sales</h3>
                                            </div>
                                            <div class="col-xl-6">
                                                <p style="float:right;">#20-12, market road<br>
                                                    Near badiyadka Bus stand<br>Badyadka kerala</p>
                                            </div>
                                            <div class="col-xl-12">
                                                <hr style="border:1px solid black;">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-6">
                                                <span style="color:black;font-weight:900;">shop no: S001</span>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-6">
                                                <span style="color:black;float:left;font-weight:900;">Invoice # : 1</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-6">
                                                <span style="color:black;font-weight:900;">shop Name : Sweet bakery</span>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-6">
                                                <span style="color:black;float:left;font-weight:900;">Date : 12-03-2022</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-6">
                                                <span style="color:black;font-weight:900;">Phone No : 9854132510</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-6">
                                                <span style="color:black;font-weight:900;">location : Badiyadka</span>
                                            </div>
                                            </table>
                                        </div>
                                        <table class="table">
                                            <thead>
                                                <tr style="background-color: rgb(128,128,128);">
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>
                                                        Item name
                                                    </th>
                                                    <th>
                                                        Price
                                                    </th>
                                                    <th>
                                                        Qty
                                                    </th>
                                                    <th>
                                                        Total
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
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

                                                </tr>
                                                <tr>
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

                                                </tr>
                                                <tr>
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

                                                </tr>
                                                <tr>
                                                    <td>
                                                        Grand Total
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        800
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <label>Note:</label>
                                        <p> note note note note</p>
                                        <button style="color:black; float:right; font-weight:900;">Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- container-scroller -->

    <!-- scripts.php contains all the script tags -->
    <?php include './assets/scripts.php'; ?>

</body>

</html>