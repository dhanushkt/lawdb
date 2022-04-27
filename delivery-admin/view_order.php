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

                        <div class="col-xl-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form class="forms-sample">
                                        <div class="row">
                                            <div class="col-xl-5 mb-4">
                                                <input type="number" class="form-control" id="Inputid" placeholder="Select Location">
                                            </div>
                                            <div class="col-xl-5 mb-4">
                                                <input type="text" class="form-control" id="Inputname" placeholder="Select Date">
                                            </div>
                                            <div class="col-xl-2" style="margin-bottom: 2%;">
                                                <button type="search" class="btn btn-primary" style="background-color: rgb(151, 55, 0); border-width: 0px;">Search</button>
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
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div style="display:flex; align-items:right; justify-content:right;">
                                                <button>Freeze Data</button>
                                                </div>
                                            </div>
                                        </div>
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
                                                        Amount
                                                    </th>
                                                    <th>
                                                        View/Edit
                                                    </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="number" id="snumber" value="1">
                                                    </td>
                                                    <td>
                                                        SH001
                                                    </td>
                                                    <td>
                                                        Malavika Ice Cream
                                                    </td>
                                                    <td>
                                                        2500
                                                    </td>
                                                    <td>
                                                        <button>View</button>
                                                    </td>
                                                    <td>
                                                        <button>Print invoice</button></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="number" id="snumber" value="2">
                                                    </td>
                                                    <td>
                                                        SH002
                                                    </td>
                                                    <td>
                                                        Badiyadka Bakery
                                                    </td>
                                                    <td>
                                                        12900
                                                    </td>
                                                    <td>
                                                        <button>View</button>
                                                    </td>
                                                    <td><button>Print Invoice</button></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="number" id="snumber" value="3">
                                                    </td>
                                                    <td>
                                                        SH003
                                                    </td>
                                                    <td>
                                                        Ayyangar Sweets
                                                    </td>
                                                    <td>5900</td>
                                                    <td>
                                                        <button>View</button>
                                                    </td>
                                                    <td><button>Print invoice</button></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="number" id="snumber" value="4">
                                                    </td>
                                                    <td>
                                                        SH004
                                                    </td>
                                                    <td>
                                                        AZ Bakery
                                                    </td>
                                                    <td>
                                                        4750
                                                    </td>
                                                    <td>
                                                        <button>View</button>
                                                    </td>
                                                    <td><button>Print invoice</button></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="number" id="snumber" value="5">

                                                    </td>
                                                    <td>
                                                        SH005
                                                    </td>
                                                    <td>
                                                        Sweet Shop
                                                    </td>
                                                    <td>
                                                        2300
                                                    </td>
                                                    <td>
                                                        <button>View</button>
                                                    </td>
                                                    <td><button>Print invoice</button></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="number" id="snumber" value="6">
                                                    </td>
                                                    <td>
                                                        SH006
                                                    </td>
                                                    <td>
                                                        Ice cream shop
                                                    </td>
                                                    <td>
                                                        7800
                                                    </td>
                                                    <td>
                                                        <button>View</button>
                                                    </td>
                                                    <td><button>Print invoice</button></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="number" id="snumber" value="7">
                                                    </td>
                                                    <td>
                                                        SH001
                                                    </td>
                                                    <td>
                                                        Malavika Ice Cream
                                                    </td>
                                                    <td>
                                                        1275
                                                    </td>
                                                    <td>
                                                        <button>View</button>
                                                    </td>
                                                    <td><button>Print invoice</button></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="number" id="snumber" value="8">
                                                    </td>
                                                    <td>
                                                        SH002
                                                    </td>
                                                    <td>
                                                        Badiyadka Bakerys
                                                    </td>
                                                    <td>
                                                        3490
                                                    </td>
                                                    <td>
                                                        <button>View</button>
                                                    </td>
                                                    <td><button>Print Invoice</button></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="number" id="snumber" value="9">
                                                    </td>
                                                    <td>
                                                        SH003
                                                    </td>
                                                    <td>
                                                        Ayyangar Sweets
                                                    </td>
                                                    <td>7450</td>
                                                    <td>
                                                        <button>View</button>
                                                    </td>
                                                    <td><button>Print invoice</button></td>
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