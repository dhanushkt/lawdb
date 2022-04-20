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
			<div style="overflow-x: auto;">
			<div class="row">
               <div class="col-xl-6 mb-4">
			   <span style="color:black;font-weight:900;">Shop id:SH006</span>
				</div>
                <div class="col-xl-6 mb-4">
					<span style="color:black;float:right;font-weight:900;">Date:10-02-2022</span>  
                </div>
			</div>
			<div class="row">
               <div class="col-xl-6 mb-4">
			   <span style="color:black;font-weight:900;">shop name:Ice cream shop</span>
				</div>
                <div class="col-xl-6 mb-4">
					<span style="color:black;float:right;font-weight:900;">Date:10-02-2022</span>  
                </div>
			</div>
			</div>
		</div>
    </div>
</body>
</html>