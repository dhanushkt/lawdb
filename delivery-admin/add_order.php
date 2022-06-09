<!DOCTYPE html>
<html lang="en">

<head>
  <!-- head.php contains css and title -->
  <?php include './assets/head.php'; ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .autocomplete {
      /*the container must be positioned relative:*/
      position: relative;
      display: inline-block;
    }

    .autocomplete-items {
      position: absolute;
      border: 1px solid #d4d4d4;
      border-bottom: none;
      border-top: none;
      z-index: 99;
      /*position the autocomplete items to be the same width as the container:*/
      top: 100%;
      left: 0;
      right: 0;
    }

    .autocomplete-items div {
      padding: 10px;
      cursor: pointer;
      background-color: #fff;
      border-bottom: 1px solid #d4d4d4;
    }

    .autocomplete-items div:hover {
      /*when hovering an item:*/
      background-color: #e9e9e9;
    }

    .autocomplete-active {
      /*when navigating through the items using the arrow keys:*/
      background-color: DodgerBlue !important;
      color: #ffffff;
    }

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
                  <div class="row">

                    <div class="col-xl-3 mb-3">
                      <input type="date" class="form-control" id="order_date">
                    </div>
                    <div class="col-xl-3 mb-3">
                      <div class="autocomplete" style="width: 100%;">
                        <input class="form-control" id="myInput" type="text" name="myCountry" placeholder="Select Shop">
                      </div>
                    </div>
                    <div class="col-xl-3 mb-3">
                      <button onclick="add_order()" type="select" class="btn btn-primary" style="background-color: rgb(151, 55, 0); border-width: 0px" ;>select</button>
                    </div>

                    <div class="col-xl-3 col-sm-12 col-12 mb-3">
                      <p>Shop Name: <span id="disp_shop_name"></span></p>
                      <p>Date: <span id="disp_date"></span></p>
                    </div>
                  </div>
                  <div class="col-xl-12 mb-12">
                    <hr style="border:1px solid black;">
                    <br>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 mb-3">
                      <form class="forms-sample" autocomplete="off">
                        <div class="autocomplete" style="width: 100%;">
                          <input class="form-control" id="myInput2" type="text" name="myCountry" placeholder="Select Item">
                        </div>
                      </form>
                    </div>
                  </div>
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
                      <div class="col-xl-3 mb-3" style="margin-top: 0%">
                        <button type="add" class="btn btn-primary" style="background-color: rgb(151, 55, 0); border-width: 0px" ;>Add</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-12 stretch-card" style="padding-top: 4%;">
                      <div class="card">
                        <div class="card-body">
                          <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                              <thead>
                                <tr style="background-color: rgb(151, 55, 0);">
                                  <th>
                                    #
                                  </th>
                                  <th>
                                    Item name
                                  </th>
                                  <th style="width:10%;">
                                    Price
                                  </th>
                                  <th style="width:10%;">
                                    Qty
                                  </th>
                                  <th style="width:10%;">
                                    Total
                                  </th>
                                  <th style="width:5%;"></th>
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
                                  <td>
                                    20
                                  </td>
                                  <td>
                                    300
                                  </td>
                                  <td>
                                    <button class="btn" style="color:red"><i class="fa fa-close"></i></button>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    2
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
                                    <button class="btn" style="color:red"><i class="fa fa-close"></i></button>
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
                                  <td>
                                    10
                                  </td>
                                  <td>
                                    250
                                  </td>
                                  <td>
                                    <button class="btn" style="color:red"><i class="fa fa-close"></i></button>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="2">
                                    Total
                                  </td>
                                  <td colspan="4">800</td>
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
              <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
      <!-- </div> -->
      <!-- content-wrapper ends -->
      <!-- </div> -->
      <!-- main-panel ends -->
      <!-- </div> -->
      <!-- page-body-wrapper ends -->
      <!-- </div> -->
      <!-- container-scroller -->
      <!-- scripts.php contains all the script tags -->
      <?php include './assets/scripts.php'; ?>

      <script>
        //js code for viewing order info
        function display_order(s,o){
          document.getElementById("disp_shop_name").innerHTML=s;
          document.getElementById("disp_date").innerHTML=o;
        }
        
        // js code for adding order
        function add_order() {
          var orderdate = document.getElementById("order_date").value;
          console.log(orderdate);
          var shopname = document.getElementById("myInput").value;
          console.log(shopname);

          $.ajax({
            url: './assets/add_order.php',
            type: 'POST',
            data: {
              orderDate: orderdate,
              shopName: shopname
            },
            success: function(data) {
              var info = JSON.parse(data);
              var shop_name = info.shop_name;
              var order_date = info.order_date;
              //alert("success");
              display_order(shop_name, order_date);
            }
          });

        }






        let items_1;


        $.ajax({
          url: './assets/get_shop.php',
          type: 'GET',
          success: function(data) {
            //console.log(data);
            items_1 = JSON.parse(data);
            console.log(items_1);
            autocomplete(document.getElementById("myInput"), items_1);
          }
        });


        //window.onload = get_shops;

        function autocomplete(inp, arr) {
          /*the autocomplete function takes two arguments,
          the text field element and an array of possible autocompleted values:*/
          var currentFocus;
          /*execute a function when someone writes in the text field:*/
          inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) {
              return false;
            }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/

            for (i = 0; i < arr.length; i++) {
              /*check if the item starts with the same letters as the text field value:*/
              if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                  /*insert the value for the autocomplete text field:*/
                  inp.value = this.getElementsByTagName("input")[0].value;
                  /*close the list of autocompleted values or any other open lists of autocompleted values:*/
                  closeAllLists();
                });
                a.appendChild(b);
              }
            }
          });

          /*execute a function presses a key on the keyboard:*/
          inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
              /*If the arrow DOWN key is pressed,
              increase the currentFocus variable:*/
              currentFocus++;
              /*and and make the current item more visible:*/
              addActive(x);
            } else if (e.keyCode == 38) { //up
              /*If the arrow UP key is pressed,
              decrease the currentFocus variable:*/
              currentFocus--;
              /*and and make the current item more visible:*/
              addActive(x);
            } else if (e.keyCode == 13) {
              /*If the ENTER key is pressed, prevent the form from being submitted,*/
              e.preventDefault();
              if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
              }
            }
          });

          function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
          }

          function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
              x[i].classList.remove("autocomplete-active");
            }
          }

          function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
              if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
              }
            }
          }
          /*execute a function when someone clicks in the document:*/
          document.addEventListener("click", function(e) {
            closeAllLists(e.target);
          });
        }





        /*An array containing all the country names in the world:*/
        //var items_1 = ["Badiyadka Bakery", "Ayyangar sweets", "AZ Bakery", "Sweet shop"];
        var items_2 = ["Cup ice cream small", "Chips", "Potato Chips", "Cone ice cream", "Cone ice cream Big"];
        //var items_1 = items_temp;


        console.log(items_1);


        /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/

        autocomplete(document.getElementById("myInput2"), items_2);
      </script>
</body>

</html>