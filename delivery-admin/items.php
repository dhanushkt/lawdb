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
                    <label for="Inputid">Item id</label>
                    <input type="number" class="form-control" id="Inputid" >
                  </div>
                  <div class="col-xl-3 mb-3">
                    <label for="Inputname">Item Name</label>
                    <input type="text" class="form-control" id="Inputname">
                  </div>
                  <div class="col-xl-3 mb-3">
                    <label for="Inputprice">Price</label>
                    <input type="text" class="form-control" id="Inputprice">
                  </div>
                  <div class="col-sm-3" style="margin-top: 2%">
                    <button type="submit" class="btn btn-primary" style="background-color: rgb(151, 55, 0); border-width: 0px";>Save</button>
                  </div>
                </div>
              </form>
            </div>
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
                                Item ID
                              </th>
                              <th>
                                 Item Name
                              </th>
                              <th>
                                Price
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="table-info">
                              <td>
                                <input type="text" id="number" value="1" contenteditable = "true" style = "border: 0px solid transparent" class="table-info">
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
                            <tr class="table-warning">
                              <td>
                                <input type="text" id="number" value="2" contenteditable = "true" style =" border: 0px solid transparent" class="table-warning">
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
                            <tr class="table-danger">
                              <td>
                                <input type="number" id="snumber" value="3" contenteditable = "true"  style = "border: 0px solid transparent" class="table-danger">
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
                            <tr class="table-success">
                              <td>
                                <input type="number" id="snumber" value="4" contenteditable = "true"  style="border: 0px solid transparent"  class="table-success">
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
                            <tr class="table-primary">
                              <td>
                                <input type="number" id="snumber" value="5" contenteditable = "true"  style="border: 0px solid transparent" class="table-primary">
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
    <!-- Script tag -->
    <?php include './assets/scripts.php'; ?>  
  </body>

</html>
