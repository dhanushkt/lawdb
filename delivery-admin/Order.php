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
      
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample">
              <div class="row">
                <div class="col-xl-2 mb-3">
                  <label for="Inputempid">Emp id</label>
                  <input type="number" class="form-control" id="Inputempid" >
                </div>
                <div class="col-xl-2 mb-3">
                  <label for="Inputempname">Emp Name</label>
                  <input type="text" class="form-control" id="Inputempname">
                </div>
                <div class="col-xl-2 mb-3">
                  <label for="Inputempemail">Email</label>
                  <input type="email" class="form-control" id="Inputempemail">
                </div>
                <div class="col-xl-2 mb-3;">
                  <label for="Inputpassword">Password</label>
                  <input type="pasword" class="form-control" id="Inputpassword">
                </div>
                <div class="col-sm-3" style="margin-top: 2%">
                  <button type="save" class="btn btn-primary" style="background-color: rgb(151, 55, 0); border-width: 0px";>Save</button>
                </div>
              </div>
            </form>
            <div class="col-lg-12 stretch-card" style="padding-top: 5%;">
              <div class="main-panel">
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
                              Emp ID
                            </th>
                            <th>
                              Item Name
                            </th>
                            <th>
                              Email
                            </th>
                            <th>
                              Password
                            </th>
                            <th>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="table-info">
                            <td>
                              <input type="number" id="snumber" value="1" contenteditable = "true"  style="border: 0px solid transparent" class="table-info" >
                            </td>
                            <td>
                              E001
                            </td>
                            <td>
                              Ramesh
                            </td>
                            <td>
                              ram@gmail.com
                            </td>
                            <td>
                              123
                            </td>
                            <td>
                              <div style="color:red;">X</div>
                            </td>
                          </tr>
                          <tr class="table-warning">
                            <td>
                              <input type="number" id="snumber" value="2" contenteditable = "true"  style=" border : 0px solid transparent" class="table-warning">
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
                              <div style="color:red;">X</div>
                            </td>
                          </tr>
                          <tr class="table-danger">
                            <td>
                              <input type="text" id="number" value="3" contenteditable = "true" style=" border: 0px solid transparent" class="table-danger">
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
                              <div style="color:red;">X</div>
                            </td>
                          </tr>
                          <tr class="table-success">
                            <td>
                            <input type="number" id="snumber" value="4" contenteditable = "true"  style=" border: 0px solid transparent" class="table-success">
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
                              <div style="color:red;">X</div>
                            </td>
                          </tr>
                          <tr class="table-primary">
                            <td>
                              <input type="number" id="snumber" value="5" contenteditable = "true" style=" border: 0px solid transparent" class="table-primary">
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
                              <div style="color:red;">X</div>
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
