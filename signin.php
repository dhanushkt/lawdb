<!DOCTYPE html>
<html lang="eng">
    <head>
        <!-- head.php contains css and title -->
        <?php include "./assets/head.php";  ?>
    </head>

    <body>
        <!-- header.php contains Preloder Area, Header Area, Search Overlay -->
        <?php include "./assets/header.php"; ?>

        <!-- Page banner Area 
        <div class="page-banner bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-content">
                            <h2>Sign In</h2>
                            <ul>
                                <li><a href="index.php">Home <i class="las la-angle-right"></i></a></li>                         
                                <li>Sign In</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
        <!-- End Page banner Area -->

        <!-- Start Sign in Area -->
        <div class="sign-in-area ptb-100">
            <div class="container">
                <div class="section-title" style="padding-top: 10px;">
                    <h2>Sign in to Your Account!</h2>
                </div>
 
                <div class="sign-in-form">
                    <form>
                        <div class="form-group">
                          Username/Email:<input type="email" class="form-control" id="email" placeholder="Username or Email">
                        </div>

                        <div class="form-group">
                           Password:<input type="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <div class="form-group form-check text-center">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                    
                        <div class="text-center">
                            <button type="submit" class="btn default-btn-one">Sign In</button>

                            <p class="account-decs">
                                Not a member?  <a href="sign-up.php">Sign Up</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Sign in  Area -->

       <!-- footer.php contains Footer Area, Footer bottom Area, Go Top -->
       <?php include "./assets/footer.php"; ?>

        <!-- script.php contains javascript -->
        <?php include "./assets/script.php"; ?>
    </body>
</html>