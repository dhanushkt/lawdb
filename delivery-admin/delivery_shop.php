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
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <span style="color: black; font-weight: 900;">Shop id:SH006</span>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6">
                            <span style="color:black; float:right; font-weight:900;">Date:10-02-2022</span>
                        </div>
                    </div>
                    <div class="row">
                        <div  class="col-lg-6 col-sm-6 col-6">
                            <span style="color:black;font-weight:900;">shop name:Ice cream shop</span>
                        </div>
                        <div  class="col-lg-6 col-sm-6 col-6">
                            <button style="color:black; float:right; font-weight:900;">Freeze Data</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 stretch-card" style="padding-top: 4%;">

                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>
                                                        Item Name
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
                                                    <th>
                                                        Status
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="table-info">
                                                    <td>
                                                        <input type="number" id="snumber" value="1" contenteditable="true" style="border : 0px solid transparent" class="table-info">
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
                                                <tr class="table-warning">
                                                    <td>
                                                        <input type="number" id="snumber" value="2" contenteditable="true" style="border : 0px solid transparent" class="table-warning">
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
                                                <tr class="table-danger">
                                                    <td>
                                                        <input type="number" id="snumber" value="3" contenteditable="true" style=" border: 0px solid transparent" class="table-danger">
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
                                                <tr class="table-success">
                                                    <td>
                                                        <input type="number" id="snumber" value="4" contenteditable="true" style="border : 0px solid transparent" class="table-success">
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
                                                <tr class="table-primary">
                                                    <td>
                                                        <input type="number" id="snumber" value="5" contenteditable="true" style="border : 0px solid transparent" class="table-primary">

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
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>