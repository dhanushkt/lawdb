<!DOCTYPE html>
<html lang="zxx">
    <head>
         <!-- head.php contains css and title -->
         <?php include "./assets/head.php";  ?>
    </head>

    <body>
        
        <!-- header.php contains Preloder Area, Header Area, Search Overlay -->
        <?php include "./assets/header.php"; ?>

        <!-- Page banner Area -->
        <div class="page-banner bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-content">
                            <h2>Sign Up</h2>
                            <ul>
                                <li><a href="index.php">Home <i class="las la-angle-right"></i></a></li>
                                <li>Sign Up</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page banner Area -->

        <!-- Start Sign up Area -->
        <div class="sign-up-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Create an Account!</h2>
                
                </div>
 
                <div class="sign-up-form">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <!--<div class="form-group">
                                    <input type="text" class="form-control" id="first_name" placeholder="First name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="last_name" placeholder="Last name">
                                </div>
                            </div>-->
                        </div>

                        <div class="form-group">
                         Username:<input type="text" class="form-control" id="username" placeholder="Enter your Username">
                        </div>
                        <div class="form-group">
                           Email:<input type="email" class="form-control" id="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                          Password:<input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                           Confirm Password:<input type="password" class="form-control" id="password" placeholder="Confirm Password">
                        </div>

                        <div class="form-group form-check text-center">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree with <a href="terms-condition.html"> Terms & Conditions</a></label>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn default-btn-one">Sign Up</button>

                            <p class="account-decs">
                                Already have an account? <a href="sign-in.php">Sign In</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Sign up  Area -->

     <!-- footer.php contains Footer Area, Footer bottom Area, Go Top -->
     <?php include "./assets/footer.php"; ?>
    
    <!-- script.php contains javascript -->
    <?php include "./assets/script.php"; ?>
            
    </body>
</html>