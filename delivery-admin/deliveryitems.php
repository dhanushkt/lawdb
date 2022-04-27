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
                                    <div class="row"> 
                                        <div class="col-xl-3 mb-3">
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-xl-3 mb-3">
                                            <form class="forms-sample" autocomplete="off">
                                                <div class="autocomplete" style="width: 100%;">
                                                    <input class="form-control" id="myInput" type="text" name="myCountry" placeholder="Select location">
                                                </div>
                                            </form>
                                        </div> 
                                        <div class="col-xl-3 mb-3">
                                            <button type="select" class="btn btn-primary" style="background-color: rgb(151, 55, 0); border-width: 0px" ;>select</button>
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
                                                                    serial.No
                                                                </th>
                                                                <th>
                                                                    Product
                                                                </th>
                                                                <th>
                                                                    Qty
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
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                Cup Ice Cream Small                                                            </td>
                                                            <td>
                                                                10
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
        </div>
    </div>







   <!-- scripts.php contains all the script tags -->
   <?php include './assets/scripts.php'; ?>

</body>

</html>