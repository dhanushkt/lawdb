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
                                    <form class="forms-sample">
                                        <div class="row">
                                            <div class="col-xl-4 mb-4">
                                                <input type="text" class="form-control" id="myInput" placeholder = "Select Location">
                                            </div>
                                            <div class="col-xl-4 mb-4">
                                              <input type="date" class="form-control">
                                            </div>
                                            <div class="col-sm-4" style="margin-bottom: 2%" ;>
                                            <button type="search" class="btn btn-primary" style="background-color: rgb(151, 55, 0); border-width: 0px" ;>Search</button>
                                            </div>
                                        </div>   
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 stretch-card" style="padding-top: 4%;">
                             <div class="card">
                                <div class="card-body">
                                    <div class="pt-3">
                                    <div class="row">
                                            <div class="col-xl-12">
                                                <div style="display:flex; align-items:right; justify-content:right;">
                                                <button>Freeze Data</button>
                                                </div>
                                            </div>
                                    </div>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="background-color: rgb(151, 55, 0);">
                                                    <th style="width:10%;">
                                                        Sl.No
                                                    </th>
                                                    <th style="width:10%;">
                                                        Shop ID
                                                    </th>
                                                    <th>
                                                         Shop Name
                                                    </th>
                                                    <th style="width:10%;">
                                                         Amount
                                                    </th>
                                                    <th style="width:10%;">
                                                         View/Edit
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
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
                                                <td>
                                                    2500
                                                </td>
                                                <td>
                                                <a href="view.php"><button>View</button></a>
                                                </td>
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
                                                <td>
                                                    12900
                                                </td>
                                                <td>
                                                <a href="view.php"><button>View</button></a>
                                                </td>
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
                                                <td>5900</td>
                                                <td>
                                                <a href="view.php"><button>View</button></a>
                                                </td>
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
                                                    4750
                                                </td>
                                                <td>
                                                <a href="view.php"><button>View</button></a>
                                                </td>
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
                                                    2300
                                                </td>
                                                <td>
                                                <a href="view.php"><button>View</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>                                
                                                  6
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
                                                <a href="view.php"><button>View</button></a>
                                                </td>
                                            </tr>
                                            <tr class="table-info">
                                            <td>
                                                7
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
                                            <a href="view.php"><button>View</button></a>
                                            </td>
                                            </tr>    
                                            <tr>
                                            <td>
                                                8
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
                                            <a href="view.php"><button>View</button></a>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td> 
                                                9
                                            </td>
                                            <td>
                                                SH003
                                            </td>
                                            <td>
                                                Ayyangar Sweets
                                            </td>
                                            <td>7450</td>
                                            <td>
                                            <a href="view.php"><button>View</button></a>
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
    <!-- container-scroller -->
    <!-- scripts.php contains all the script tags -->
    <?php include './assets/scripts.php'; ?>
    <script>
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
        var items_1 = ["Perla", "Badiyadka"];
        //var items_2 = ["Cup ice cream small", "Chips", "Potato Chips", "Cone ice cream", "Cone ice cream Big"];

        /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
        autocomplete(document.getElementById("myInput"), items_1);
        //autocomplete(document.getElementById("myInput2"), items_2);
    </script>

</body>

</html>