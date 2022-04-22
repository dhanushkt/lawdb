<!DOCTYPE html>
<html lang="en">

<head>
    <!-- head.php contains css and title -->
    <?php include './assets/head.php'; ?>
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
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form class="forms-sample">
                                        <div class="row">
                                            <div class="col-xl-2 mb-2">
                                            <label for="Inputid">Shop id</label>
                                            <input type="number" class="form-control" id="Inputid">
                                            </div>
                                            <div class="col-xl-2 mb-2">
                                            <label for="Inputname">Shop Name</label>
                                            <input type="text" class="form-control" id="Inputname">
                                            </div>
                                            <div class="col-xl-2 mb-2">
                                            <label for="Inputaddress">Address</Address></label>
                                            <input type="text" class="form-control" id="address">
                                            </div>
                                            <div class="col-xl-2 mb-2">
                                            <label for="Inputlocation">Location</label>
                                            <input type="text" class="form-control" id="Inputlocation">
                                            </div>
                                            <div class="col-xl-2 mb-2">
                                            <label for="Inputnumber">Phone Number</label>
                                            <input type="text" class="form-control" id="Inputnumber">
                                            </div>
                                            <div class="col-sm-2" style="margin-top: 2%" ;>
                                            <button type="save" class="btn btn-primary" style="background-color: rgb(151, 55, 0); border-width: 0px" ;>Save</button>
                                            </div>
                                        </div>
                                    </form>
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
                                                    <th>
                                                        Sl.No
                                                    </th>
                                                    <th>
                                                        Shop ID
                                                    </th>
                                                    <th>
                                                        Shop Name
                                                    </th>
                                                    <th>
                                                        Location
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                     1
                                                    </td>
                                                    <td>
                                                        SH001
                                                    </td>
                                                    <td>
                                                        Malavika Ice Cream
                                                    </td>
                                                    <td>
                                                        Perla
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                     2
                                                    </td>
                                                    <td>
                                                        SH002
                                                    </td>
                                                    <td>
                                                        Badiyadka Bakery
                                                    </td>
                                                    <td>
                                                        Badiyadka
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                     3
                                                    </td>
                                                    <td>
                                                        SH003
                                                    </td>
                                                    <td>
                                                        Ayyangar Sweets
                                                    </td>
                                                    <td>Perla
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                     4
                                                    </td>
                                                    <td>
                                                        SH004
                                                    </td>
                                                    <td>
                                                        AZ Bakery
                                                    </td>
                                                    <td>
                                                        Perla
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                     5
                                                    </td>
                                                    <td>
                                                        SH005
                                                    </td>
                                                    <td>
                                                        Sweet Shop
                                                    </td>
                                                    <td>
                                                        Perla
                                                    </td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
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