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
                <div class="col-xl-3 mb-3">
                  <input type="text" class="form-control" id="Inputname" placeholder="Item Name">
                </div>
                <div class="col-xl-3 mb-3">
                  <input type="number" class="form-control" id="Inputprice" placeholder="Item Price">
                </div>
                <div class="col-xl-3 mb-3">
                  <input type="number" class="form-control" id="Inputqty" placeholder="Item Qty">
                </div>
                <div class="col-sm-3" style="margin-top: 0%">
                  <button type="add" class="btn btn-primary" style="background-color: rgb(151, 55, 0); border-width: 0px" ;>Add</button>
                </div>
            </form>
          </div>
        </div>
        <div class="col-lg-12 stretch-card" style="padding-top: 5%;">
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
                      <th>
                        
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-info">
                      <td>
                      <input type="number" id="snumber" value="1" contenteditable = "true" style=" border: 0px solid transparent" class="table-info">
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
                      <td>
                          <div style="color:red;">X</div>
                      </td>
                    </tr>
                    <tr class="table-warning">
                      <td>
                      <input type="number" id="snumber" value="2" contenteditable = "true" style=" border: 0px solid transparent"  class="table-warning">
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
                      <td>
                          <div style="color:red;">X</div>
                      </td>
                    </tr>
                    <tr class="table-danger">
                      <td>
                      <input type="text" id="snumber" value="3" contenteditable = "true" style=" border: 0px solid transparent" class="table-danger">
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
                      <td>
                           <div style="color:red;">X</div>
                      </td>
                    </tr>
                    <tr class="table-success">
                      <td>
                        Total
                      </td>
                      <td></td>
                      <td></td>
                      <td>
                        800
                      </td>
                      <td>
                          
                      </td>
                      <td> </td>
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