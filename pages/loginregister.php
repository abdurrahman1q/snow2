<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('dbconnect.php');
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists = false;
    if (($password == $cpassword) && $exists == false) {
        $sql = "INSERT INTO `users` ( `username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            
                echo '<script>location.href ="?p=login&?valid=1"</script>';
                
    
          
        }
    } else {
        $showError = "Passwords do not match";
    }
}
?>

<main class="main-content">
<?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is now created and you can login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> ' . $showError . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
    };
    ?>

    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-header-content">
                        <h2 class="page-header-title">Login / Register</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?p=home">Home //</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Register</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="page-header-thumb">
                        <img src="https://st2.depositphotos.com/3837271/8402/i/950/depositphotos_84020488-stock-photo-hand-with-marker-writing-text.jpg" alt="Image-HasTech" width="546" height="281">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Login Wrapper ==-->
    <div class="login-register-area section-space">
        <div class="container">
            <div class="row">
               

    
                <div class="col-md-7">
                    <div class="login-register-content login-register-pl">
                        <div class="login-register-title mb-30">
                            <h3>Register</h3>
                            <p>Create new account today to reap the benefits of a personalized shopping experience. </p>
                        </div>
                        <div class="login-register-style">
                            <form action="?p=loginregister" method="post">
                                <div class="login-register-input">
                                    <input type="text" name="username" placeholder="Username">
                                </div>
                                <div class="login-register-input">
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-register-input">
                                    <input type="password" name="cpassword" placeholder="COnfirm Password">
                                </div>
                                <div class="login-register-paragraph">
                                    <p>Your personal data will be used to support your experience throughout this
                                        website, to manage access to your account, and for other purposes described in
                                        our <a href="login-register.html">privacy policy.</a></p>
                                </div>
                                <div class="btn-register">
                                    <input type="submit" class="btn-register-now" value="Register">
                                </div>
                            </form>
                            <div class="register-benefits">
                                <h4>Sign up today and you will be able to :</h4>
                                <p>The Loke Buyer Protection has you covered from click to delivery. Sign up <br>or sign
                                    in and you will be able to:</p>
                                <ul>
                                    <li><i class="fa fa-check-circle-o"></i> Speed your way through checkout</li>
                                    <li><i class="fa fa-check-circle-o"></i> Track your orders easily</li>
                                    <li><i class="fa fa-check-circle-o"></i> Keep a record of all your purchases</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 text-center">
                    <img src="https://partner-cons.com/files/73810-business-idea-animation.gif" alt="urraaaa" style="height: 550px">
                </div>
            </div>
        </div>
    </div>
    <!--== End Login Wrapper ==-->

</main>