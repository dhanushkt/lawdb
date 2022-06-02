<?php
include("./access/config.php");

if (isset($_POST['save'])) {
  error_reporting(-1);
  $itemname = $_POST['item_name'];

  $sql = "select * from item where item_name='$itemname'";
  $result = mysqli_query($con, $sql);
  $count = mysqlI_num_rows($result);


  if ($count > 0) {

    echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
    //echo "<script> location.href='order.php'; </script>";
  } else {

    $itemid = $_POST['item_id'];
    $itemname = $_POST['item_name'];
    $Price = $_POST['price'];
    


    // if ($_POST['password'] != $_POST['cpassword']) {
    // fail!

    // echo "<script>
    // 	alert('Password invalid.');
    // </script>"; 

    // } else {
    // success :(



    $query = "insert into item (item_id,item_name,price) values (" . $itemid . ",'" . $itemname . "','" . $Price . "')";

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
        <!-- partial:../../partials/_sidebar.html -->
        <?php include './assets/sidebar.php'; ?>

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">

              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" method="POST">
                      <div class="row">
                        <div class="col-xl-3 mb-3">
                        <?php
                         $sql1 = "select item_id from item";
                         $result1 = mysqli_query($con, $sql1);
                         $count1 = mysqlI_num_rows($result1);
                         if ($count1 > 0)
                         {
                          while($row = mysqli_fetch_array($result1))
                          {
                            $itemid=$row[0];
                          }
                         }
                         else
                         {
                          $itemid='1000';
                         }
                         $itemid++;
                        ?>
                          <label for="Inputid">Item id</label>
                          <input type="number" name="item_id" value="<?php echo $itemid; ?>" readonly class="form-control" id="Inputid" >
                        </div>
                        <div class="col-xl-3 mb-3">
                          <label for="Inputname">Item Name</label>
                          <input type="text" name="item_name" class="form-control" id="Inputname">
                        </div>
                        <div class="col-xl-3 mb-3">
                          <label for="Inputprice">Price</label>
                          <input type="text" name="price" class="form-control" id="Inputprice">
                        </div>
                        <div class="col-sm-3" style="margin-top: 2%">
                          <button type="submit" class="btn btn-primary" name="save" style="background-color: rgb(151, 55, 0); border-width: 0px";>Save</button>
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
                              Item ID
                            </th>
                            <th>
                              Item Name
                            </th>
                            <th style= "width:15%;">
                              Price
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                      error_reporting(-1);
                      
                      $query1 = "SELECT * FROM item";

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
                                <?php echo $get_data['item_id']; ?>
                              </td>
                              <td>
                                <?php echo $get_data['item_name']; ?>
                              </td>
                              <td>
                                <?php echo $get_data['price']; ?>
                              </td>
                            </tr>
                          <?php
                          
                        }
                      }
                      ?>

                       <!--   <tr>
                            <td>
                              1
                            </td>
                            <td>
                              P001
                            </td>
                            <td>
                              Cup Ice Cream Small
                            </td>
                            <td>
                              10
                            </td>
                          </tr>
                          <tr>
                            <td>
                              2
                            </td>
                            <td>
                              P002
                            </td>
                            <td>
                              Chips
                            </td>
                            <td>
                              30
                            </td>
                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td>
                              P003
                            </td>
                            <td>
                              Potato Chips
                            </td>
                            <td>
                              40
                            </td>
                          </tr>
                          <tr>
                            <td>
                              4
                            </td>
                            <td>
                              P004
                            </td>
                            <td>
                              Cone Ice Cream
                            </td>
                            <td>
                              25
                            </td>
                          </tr>
                          <tr>
                            <td>
                              5
                            </td>
                            <td>
                              P005
                            </td>
                            <td>
                              Cup Ice Cream Big
                            </td>
                            <td>
                              15
                            </td>
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
    <!-- Script tag -->
    <?php include './assets/scripts.php'; ?>  
  </body>

</html>
