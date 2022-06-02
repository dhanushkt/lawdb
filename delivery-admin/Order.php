<?php
include("./access/config.php");

if (isset($_POST['add'])) {
  error_reporting(-1);
  $Email = $_POST['email'];

  $sql = "select * from add_employee where email='$Email'";
  $result = mysqli_query($con, $sql);
  $count = mysqlI_num_rows($result);


  if ($count > 0) {

    echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
    //echo "<script> location.href='order.php'; </script>";
  } else {

    $Empid = $_POST['emp_id'];
    $Name = $_POST['emp_name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];


    // if ($_POST['password'] != $_POST['cpassword']) {
    // fail!

    // echo "<script>
    // 	alert('Password invalid.');
    // </script>"; 

    // } else {
    // success :(



    $query = "insert into add_employee (emp_id,emp_name,email,password) values (" . $Empid . ",'" . $Name . "','" . $Email . "','" . $Password . "')";

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .btn {
      background-color: none;
      /* Blue background */
      border: none;
      /* Remove borders */
      color: #fff;
      /* White text */
      padding: 12px 16px;
      /* Some padding */
      font-size: 16px;
      /* Set a font size */
      cursor: pointer;
      /* Mouse pointer on hover */
    }
  </style>
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
                  <form class="forms-sample" method="post">
                    <div class="row">
                      <div class="col-xl-2 mb-3">
                        <?php
                         $sql1 = "select emp_id from add_employee";
                         $result1 = mysqli_query($con, $sql1);
                         $count1 = mysqlI_num_rows($result1);
                         if ($count1 > 0)
                         {
                          while($row = mysqli_fetch_array($result1))
                          {
                            $empid=$row[0];
                          }
                         }
                         else
                         {
                          $empid='1000';
                         }
                         $empid++;
                        ?>
                        <label for="Inputempid">Emp id</label>
                        <input type="number" name="emp_id" value="<?php echo $empid; ?>" readonly class="form-control" id="Inputempid">
                      </div>
                      <div class="col-xl-2 mb-3">
                        <label for="Inputempname">Emp Name</label>
                        <input type="text" name="emp_name" class="form-control" id="Inputempname">
                      </div>
                      <div class="col-xl-2 mb-3">
                        <label for="Inputempemail">Email</label>
                        <input type="email" name="email" class="form-control" id="Inputempemail">
                      </div>
                      <div class="col-xl-2 mb-3;">
                        <label for="Inputpassword">Password</label>
                        <input type="password" name="password" class="form-control" id="Inputpassword">
                      </div>
                      <div class="col-sm-3" style="margin-top: 3%">
                        <button type="submit" name="add" class="btn btn-primary" style="background-color: rgb(151, 55, 0); border-width: 0px" ;>Save</button>
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
                          <th style="width:5%;">
                            Sl.No
                          </th>
                          <th style="width:10%;">
                            Emp ID
                          </th>
                          <th>
                            Emp Name
                          </th>
                          <th style="width:25%;">
                            Email
                          </th>
                          <th style="width:10%;">
                            Password
                          </th>
                          <th style="width:10%;"></th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      error_reporting(-1);
                      
                      $query1 = "SELECT * FROM add_employee";

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
                                <?php echo $get_data['emp_id']; ?>
                              </td>
                              <td>
                                <?php echo $get_data['emp_name']; ?>
                              </td>
                              <td>
                                <?php echo $get_data['email']; ?>
                              </td>
                              <td>
                                <?php echo $get_data['password']; ?>
                              </td>
                              <td>
                                <a href="?delid=<?php echo $get_data['id']; ?>"><button class="btn" style="color:red"><i class="fa fa-close"></i></button></a>
                              </td>
                            </tr>
                          <?php
                          
                        }
                      }
                      ?>

                        <!-- <tr>
                          <td>
                            2
                          </td>
                          <td>
                            E002
                          </td>
                          <td>
                            Vijay
                          </td>
                          <td>
                            vij@gmail.com
                          </td>
                          <td>
                            123
                          </td>
                          <td>
                            <button class="btn" style="color:red"><i class="fa fa-close"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            E003
                          </td>
                          <td>
                            Sunil
                          </td>
                          <td>
                            sun@gmail.com
                          </td>
                          <td>
                            123
                          </td>
                          <td>
                            <button class="btn" style="color:red"><i class="fa fa-close"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            E004
                          </td>
                          <td>
                            Varun
                          </td>
                          <td>
                            var@gmail.com
                          </td>
                          <td>
                            123
                          </td>
                          <td>
                            <button class="btn" style="color:red"><i class="fa fa-close"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            E005
                          </td>
                          <td>
                            Suresh
                          </td>
                          <td>
                            sur@gmail.com
                          </td>
                          <td>
                            123
                          </td>
                          <td>
                            <button class="btn" style="color:red"><i class="fa fa-close"></i></button>
                          </td>
                        </tr> -->
                      </tbody>
                    </table>
                    <?php
                    if(isset($_GET['delid']))
                    {
                      $delid=$_GET['delid'];
                      $query3 = "delete FROM add_employee where id='$delid'";
                      if(mysqli_query($con, $query3))
                      {
                        echo "<script>
                        alert('Deleted');
                      </script>";
                    echo "<script> location.href='Order.php'; </script>";
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- scripts.php contains all the script tags -->
  <?php include './assets/scripts.php'; ?>

</body>

</html>