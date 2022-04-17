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

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="row">
                                <div class="col-xl-4 mb-4">
                                    <input type="number" class="form-control" id="Inputid" placeholder = "Select Location">
                                </div>
                                <div class="col-xl-4 mb-4">
                                    <input type="text" class="form-control" id="Inputname" placeholder = "Select Date">
                                </div>
                                <div class="col-sm-4" style="margin-bottom: 2%" ;>
                                    <button type="search" class="btn btn-primary" style="background-color: rgb(151, 55, 0); border-width: 0px" ;>Search</button>
                                </div>
                                    <div class="container">
                                    <div class="center">
                                  <button>Freeze Data</button>
                                    </div>
                                    </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12 stretch-card" style="padding-top: 4%;">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
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
                                        <tr class="table-info">
                                            <td>
                                                <input type="number" id="snumber" value="1" contenteditable = "true"  style ="border : 0px solid transparent" class="table-info">
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
                                            <td>Print invoice </td>
                                        </tr>
                                        <tr class="table-warning">
                                            <td>
                                                <input type="number" id="snumber" value="2" contenteditable = "true"  style ="border : 0px solid transparent" class="table-warning">
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
                                            <td>Print Invoice</td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td> 
                                                <input type="number" id="snumber"value="3" contenteditable = "true" style=" border: 0px solid transparent" class="table-danger">
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
                                            <td>Print invoice</td>
                                        </tr>
                                        <tr class="table-success">
                                            <td>                                
                                               <input type="number" id="snumber" value="4" contenteditable = "true" style="border : 0px solid transparent" class="table-success">
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
                                            <td>Print invoice</td>
                                        </tr>
                                        <tr class="table-primary">
                                            <td>
                                                <input type="number" id="snumber" value="5" contenteditable = "true"  style="border : 0px solid transparent" class="table-primary">
                                                
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
                                            <td>Print invoice</td>
                                        </tr>
                                        <tr class="table-success">
                                            <td>                                
                                               <input type="number" id="snumber" value="6" contenteditable = "true" style="border : 0px solid transparent" class="table-success">
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
                                            <td>Print invoice</td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>
                                                <input type="number" id="snumber" value="7" contenteditable = "true"  style ="border : 0px solid transparent" class="table-info">
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
                                            <td>Print invoice </td>
                                        </tr>    
                                        <tr class="table-warning">
                                            <td>
                                                <input type="number" id="snumber" value="8" contenteditable = "true"  style ="border : 0px solid transparent" class="table-warning">
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
                                            <td>Print Invoice</td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td> 
                                                <input type="number" id="snumber"value="9" contenteditable = "true" style=" border: 0px solid transparent" class="table-danger">
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
                                            <td>Print invoice</td>
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
    <!-- container-scroller -->
    <!-- scripts.php contains all the script tags -->
    <?php include './assets/scripts.php'; ?>

</body>

</html>