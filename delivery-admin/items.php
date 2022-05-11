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
                          <tr>
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
    <!-- Script tag -->
    <?php include './assets/scripts.php'; ?>  
  </body>

</html>
