
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!--=============== CSS ===============-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Responsive bottom navigation</title>
		<style>
			table {
			  border-collapse: collapse;
			  width: 100%;
			  color:black;
			}

			th {
			  text-align: left;
			  font-weight:900;
			  padding: 2px;
			  color:#000;
			}
			td {
			  text-align: left;
			  font-weight:400;
			  padding-left: 10px;
			  padding-right: 10px;
			  padding-top: 5px;
			  padding-bottom: 5px;
			}
			tr{
				 
			}
			#tbox:hover{
				border:1px solid #03291f;
			}
			a.button1{
				display:inline-block;
				padding:0.35em 1.2em;
				border:0.1em solid #FFFFFF;
				margin:0 0.3em 0.3em 0;
				border-radius:0.12em;
				box-sizing: border-box;
				text-decoration:none;
				font-family:'Roboto',sans-serif;
				font-weight:300;
				color:#FFFFFF;
				background-image:linear-gradient(to right,#03291f,#000);
				text-align:center;
				transition: all 0.2s;
				}
				a.button1:hover{
				color:#000000;
				background-image:linear-gradient(to right,#03291f,#000);
				}
				
			a.button2{
				display:inline-block;
				padding:0.35em 1.2em;
				border:0.1em solid #FFFFFF;
				margin:0 0.3em 0.3em 0;
				border-radius:0.12em;
				box-sizing: border-box;
				text-decoration:none;
				font-family:'Roboto',sans-serif;
				font-weight:300;
				color:#FFFFFF;
				background-image:linear-gradient(to right,#03291f,#000);
				text-align:center;
				transition: all 0.2s;
				border:1px solid #03291f; 
				border-radius:5px;
				box-shadow: 0.5px 0.5px 3px gray;
				}
				a.button2:hover{
				color:#ffffff;
				background-image:linear-gradient(to right,#03291f,#000);
				box-shadow: 0.5px 0.5px 3px white;
				}
				@media all and (max-width:30em){
				a.button1{
				display:block;
				margin:0.4em auto;
				}
				}
				
				#icon:hover{
					filter: drop-shadow(5px 5px 15px #000);
				}
				a:focus{
					outline:none;
				}
		</style>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header" style="background-image:linear-gradient(to right,#03291f,#000); height:60px;">
            <nav class="nav container">
                <a href="#" class="nav__logo" style="color:white;margin-top:15px;"><marquee direction="right" width="250px"><img src="assets/img/del.png" style="height:50px;"></marquee></img></a>

                <div class="nav__menu" id="nav-menu" style="background-image:linear-gradient(to right,#03291f,#000);">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="home.php" class="nav__link active-link">
							<img src="assets/img/1.png" id="icon"  style="height:25px;">
                                <span class="nav__name" style="color:white;">Home</span>
                            </a>
                        </li>
                        
                        <li class="nav__item">
                            <a href="received.php" class="nav__link">
							<img src="assets/img/2.png" id="icon" style="height:25px;">
                                <span class="nav__name" style="color:white;">Delivered</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="search.php" class="nav__link">
							<img src="assets/img/3.png" id="icon"  style="height:25px;">
                                <span class="nav__name" style="color:white;">Search</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="balance.php" class="nav__link">
                                <img src="assets/img/4.png" id="icon"  style="height:25px;">
                                <span class="nav__name" style="color:white;">Report</span>
                            </a>
                        </li>
						
						<li class="nav__item">
                            <a href="balance.php" class="nav__link">
                                <img src="assets/img/5.png" id="icon"  style="height:25px;">
                                <span class="nav__name" style="color:white;">Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
				
                <a href="profile.php" style="margin-top:10px;"><img src="assets/img/6.png" alt="" class="nav__img"></a>
            </nav>
        </header>

        <main style="padding:10px;">
            <!--=============== HOME ===============-->
           
						<form method="post" action="#" >
						
						<h3 class="section__title" style="color:#03291f; font-weight:800;">Delivered Shops</h3>
						<select name="location" class="w3-input w3-border w3-round-xxlarge" style="width:48%;display:inline-block;background-color:#edf7f5;" required>
						<option value="">Select your location</option>
						
							<option value="">Badyadka</option>
							<option value="">Kalladka</option>
							<option value="">Bayar</option>
							
						</select>
						<input type="date" name="date" class="w3-input w3-border w3-round-xxlarge" style="width:48%;display:inline-block;background-color:#edf7f5;" required/>
						<input type="submit" name="search" class="w3-input w3-border w3-round-xxlarge"  style="margin-top:5px;background-image:linear-gradient(to right,#03291f,#000);color:white;font-weight:900;" value="SEARCH">
						</form>
						
						
			<br>


			
				<span style="color:black;font-weight:900;">Date : 12-03-2022</span>
                <span style="color:black;float:right;font-weight:900;">location : Badyadka</span>
				
				<!--search bar start-->
				<input class="w3-input" style="border:1px solid #03291f" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search here..">
				<!--search bar start-->	
					<div style="overflow-x:auto;">
					<br>
					  <table id="myTable" style="white-space:nowrap; color:#03291f;">
						<tr style="box-shadow: 0px 3px 1px #03291f; border-top:3px solid #03291f;">
						  <th> </th>
						  <th>#</th>
						  <th>ID</th>
						  <th>Shop Name</th>
						  <th>Address</th>
						  <th>Phone</th>
						  <th>Owner</th>
						  
						</tr>
						
						<tr style="box-shadow: 0px 0.5px 1px black;">
						  <td><a href="view.php?viewid" class="button2" style="text-align:center;">Edit</a></td>
						  <td>1.</td>
						  <td>S001</td>
						  <td>Sweet Bakery</td>
						  <td>Badyadka Junction, main road</td>
						  <td>9947654434</td>
						  <td>Ramesh</td>
						  
						</tr>
						<tr style="box-shadow: 0px 0.5px 1px black;">
						  <td><a href="view.php?viewid" class="button2" style="">Edit</a></td>
						  <td>2.</td>
						  <td>S002</td>
						  <td>Sweet Bakery</td>
						  <td>Badyadka Junction, main road</td>
						  <td>9947654434</td>
						  <td>Ramesh</td>
						  
						</tr>
						<tr style="box-shadow: 0px 0.5px 1px black;">
						  <td><a href="view.php?viewid" class="button2" style="">Edit</a></td>
						  <td>3.</td>
						  <td>S003</td>
						  <td>Sweet Bakery</td>
						  <td>Badyadka Junction, main road</td>
						  <td>9947654434</td>
						  <td>Ramesh</td>
						  
						</tr>
						<tr style="box-shadow: 0px 0.5px 1px black;">
						  <td><a href="view.php?viewid" class="button2" style="">Edit</a></td>
						  <td>4.</td>
						  <td>S004</td>
						  <td>Sweet Bakery</td>
						  <td>Badyadka Junction, main road</td>
						  <td>9947654434</td>
						  <td>Ramesh</td>
						  
						</tr>
						<tr style="box-shadow: 0px 0.5px 1px black;">
						  <td><a href="view.php?viewid" class="button2" style="">Edit</a></td>
						  <td>5.</td>
						  <td>S005</td>
						  <td>Sweet Bakery</td>
						  <td>Badyadka Junction, main road</td>
						  <td>9947654434</td>
						  <td>Ramesh</td>
						  
						</tr>
						
						<tr style="box-shadow: 0px 0.5px 1px black;">
						  <td><a href="view.php?viewid" class="button2" style="">Edit</a></td>
						  <td>6.</td>
						  <td>S006</td>
						  <td>Sweet Bakery</td>
						  <td>Badyadka Junction, main road</td>
						  <td>9947654434</td>
						  <td>Ramesh</td>
						  
						</tr>
						<tr style="box-shadow: 0px 0.5px 1px black;">
						  <td><a href="view.php?viewid" class="button2" style="">Edit</a></td>
						  <td>7.</td>
						  <td>S007</td>
						  <td>Sweet Bakery</td>
						  <td>Badyadka Junction, main road</td>
						  <td>9947654434</td>
						  <td>Ramesh</td>
						  
						</tr>
						<tr style="box-shadow: 0px 0.5px 1px black;">
						  <td><a href="view.php?viewid" class="button2" style="">Edit</a></td>
						  <td>8.</td>
						  <td>S008</td>
						  <td>Sweet Bakery</td>
						  <td>Badyadka Junction, main road</td>
						  <td>9947654434</td>
						  <td>Ramesh</td>
						  
						</tr>
						<tr style="box-shadow: 0px 0.5px 1px black;">
						  <td><a href="view.php?viewid" class="button2" style="">Edit</a></td>
						  <td>9.</td>
						  <td>S009</td>
						  <td>Sweet Bakery</td>
						  <td>Badyadka Junction, main road</td>
						  <td>9947654434</td>
						  <td>Ramesh</td>
						  
						</tr>
						
						<tr style="box-shadow: 0px 0.5px 1px black;">
						  <td><a href="view.php?viewid" class="button2" style="">Edit</a></td>
						  <td>10.</td>
						  <td>S010</td>
						  <td>Sweet Bakery</td>
						  <td>Badyadka Junction, main road</td>
						  <td>9947654434</td>
						  <td>Ramesh</td>
						  
						</tr>
						<tr style="box-shadow: 0px 0.5px 1px black;">
						  <td><a href="view.php?viewid" class="button2" style="">Edit</a></td>
						  <td>11.</td>
						  <td>S011</td>
						  <td>Sweet Bakery</td>
						  <td>Badyadka Junction, main road</td>
						  <td>9947654434</td>
						  <td>Ramesh</td>
						  
						</tr>
						<tr style="box-shadow: 0px 0.5px 1px black;">
						  <td><a href="view.php?viewid" class="button2" style="">Edit</a></td>
						  <td>12.</td>
						  <td>S012</td>
						  <td>Sweet Bakery</td>
						  <td>Badyadka Junction, main road</td>
						  <td>9947654434</td>
						  <td>Ramesh</td>
						  
						</tr>
						<tr style="box-shadow: 0px 0.5px 1px black;">
						  <td><a href="view.php?viewid" class="button2" style="">Edit</a></td>
						  <td>13.</td>
						  <td>S013</td>
						  <td>Sweet Bakery</td>
						  <td>Badyadka Junction, main road</td>
						  <td>9947654434</td>
						  <td>Ramesh</td>
						  
						</tr>
						
						
						
					  </table>
					  									<script>
function myFunction() {
  var input, filter, table, tr, td, cell, i, j;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    // Hide the row initially.
    tr[i].style.display = "none";
  
    td = tr[i].getElementsByTagName("td");
    for (var j = 0; j < td.length; j++) {
      cell = tr[i].getElementsByTagName("td")[j];
      if (cell) {
        if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
          break;
        } 
      }
    }
  }
}
</script>
					</div>
					
            </section>
			
			<section class="container section " id="about">
            </section>
        </main>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
