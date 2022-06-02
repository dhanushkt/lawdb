<?php
include("./access/config.php");

if (isset($_POST['add'])) {
  error_reporting(-1);

  $shopname = $_POST['shop_name'];

  $sql = "select * from shop_det where shop_name='$shopname'";
  $result = mysqli_query($con, $sql);
  $count = mysqlI_num_rows($result);


  if ($count > 0) {

    echo "<script>
				alert('There is an existing account associated with this shop name.');
			</script>";
    //echo "<script> location.href='order.php'; </script>";
  } else {

    $Shopid = $_POST['shop_id'];
    $Shopname = $_POST['shop_name'];
    $Address = $_POST['address'];
    $Location = $_POST['location'];
    $Phonenumber = $_POST['phone_no'];


    // if ($_POST['password'] != $_POST['cpassword']) {
      // fail!

      // echo "<script>
			// 	alert('Password invalid.');
			// </script>"; 

    // } else {
      // success :(



      $query = "insert into shop_det (shop_id,shop_name,address,location,phone_no) values ('" . $Shopid . "','" . $Shopname . "','" . $Address . "','" . $Location . "','" . $Phonenumber . "')";

      mysqli_query($con, $query) or die(mysqli_error($con));


      echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
      //echo "<script> location.href='index.php'; </script>";
    // }
  }
}
?>
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
                                    <form class="forms-sample" method="POST">
                                        <div class="row">
                                            <div class="col-xl-2 mb-2">
                                            <?php
                                            $sql1 = "select shop_id from shop_det";
                                            $result1 = mysqli_query($con, $sql1);
                                            $count1 = mysqlI_num_rows($result1);
                                            if ($count1 > 0)
                                            {
                                            while($row = mysqli_fetch_array($result1))
                                            {
                                                $Shopid=$row[0];
                                            }
                                            }
                                            else
                                            {
                                            $Shopid='1000';
                                            }
                                            $Shopid++;
                                             ?>
                                            <label for="Inputid">Shop id</label>
                                            <input type="text" class="form-control" name="shop_id" value="<?php echo $Shopid; ?>" readonly class="form-control" id="Inputid">
                                            </div>
                                            <div class="col-xl-2 mb-2">
                                            <label for="Inputname">Shop Name</label>
                                            <input type="text" class="form-control" name="shop_name" id="Inputname">
                                            </div>
                                            <div class="col-xl-2 mb-2">
                                            <label for="Inputaddress">Address</Address></label>
                                            <input type="text" class="form-control" name="address" id="address">
                                            </div>
                                            <div class="col-xl-2 mb-2">
                                            <label for="Inputlocation">Location</label>
                                            <input type="text" class="form-control" name="location" id="Inputlocation">
                                            </div>
                                            <div class="col-xl-2 mb-2">
                                            <label for="Inputnumber">Phone Number</label>
                                            <input type="text" class="form-control" name="phone_no" id="Inputnumber">
                                            </div>
                                            <div class="col-sm-2" style="margin-top: 2%" ;>
                                            <button type="submit" class="btn btn-primary" name="add" style="background-color: rgb(151, 55, 0); border-width: 0px" ;>Save</button>
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
                                                    <th style= "width:5%;">
                                                        Sl.No
                                                    </th>
                                                    <th style= "width:10%;">
                                                        Shop ID
                                                    </th>   
                                                    <th>
                                                        Shop Name
                                                    </th>
                                                    <th>
                                                        Address
                                                    </th>
                                                    <th style= "width:15%;">
                                                        Location
                                                    </th>
                                                    <th>
                                                        Phone Number
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            error_reporting(-1);
                                            
                                            $query1 = "SELECT * FROM shop_det";

                                            $result=mysqli_query($con, $query1);
                                            // $get_data = mysqli_query($con, "SELECT * FROM add_employee");
                                            $count=mysqli_num_rows($result);
                                            if($count>0)
                                            {
                                                $sl=0;
                                                while($get_data = mysqli_fetch_array($result))
                                                {
                                                $sl+=1;
                                                ?>
                                                    <tr>

                                                        <td>
                                                            <?php echo $sl; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $get_data['shop_id']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $get_data['shop_name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $get_data['address']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $get_data['location']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $get_data['phone_no']; ?>
                                                        </td>
                                                        </tr>
                                                    <?php
                                                    
                                                    }
                                                }
                                                ?>
                                                <!--
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
                                                    <td> Kumbla</td>
                                                    <td>
                                                        Perla
                                                    </td>
                                                    <th>
                                                        9876534576
                                                    </th>
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
                                                    <td>Kumbla</td>
                                                    <td>
                                                        Badiyadka
                                                    </td>
                                                    <td>9865356543</td>
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
                                                    <td>Kumbla</td>
                                                    <td>
                                                        Perla
                                                    </td>
                                                    <td>9865356543</td>
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
                                                        Kumbla
                                                    </td>
                                                    <td>
                                                        Perla
                                                    </td>
                                                    <td>9865356543</td>
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
                                                        Kumbla
                                                    </td>
                                                    <td>
                                                        Perla
                                                    </td>
                                                    <td>9865356543</td>
                                                </tr>-->
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