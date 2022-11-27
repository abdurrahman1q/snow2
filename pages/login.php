<?php

$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('dbconnect.php');
  $username = $_POST["username"];
  $password = $_POST["password"];


  $sql = "Select * from users where username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $login = true;

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    echo '<script>location.href =" ?p=home"</script>';
  } else {
    $showError = "Invalid Credentials";
  }
}

?>

<main class="main-content">
<?php
  if ($login) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You are logged in
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
  }
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
                            <li class="breadcrumb-item active" aria-current="page">Login-Register</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="page-header-thumb">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/Please_log_in_image.png" alt="Image-HasTech" width="546" height="281">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->


   <!--== Start Login Wrapper ==-->
   <div class="login-register-area section-space ">
        <div class="container">
            <div class="row">
                <div class="col-md-5 login-register-border ">
                    <div class="login-register-content">
                        <div class="login-register-title mb-30">
                            <h3>Login</h3>
                            <p>Welcome back! Please enter your username and password to login. </p>
                        </div>
                        <div class="login-register-style login-register-pr">
                            <form action="?p=login" method="post">
                                <div class="login-register-input">
                                    <input type="text" name="username" placeholder="Username or email address">
                                </div>
                                <div class="login-register-input">
                                    <input type="password" name="password" placeholder="Password">
                                    <div class="forgot">
                                        <a href="login-register.html">Forgot?</a>
                                    </div>
                                </div>
                                <div class="remember-me-btn">
                                    <input id="remember-me-checkbox" type="checkbox">
                                    <label for="remember-me-checkbox">Remember me</label>
                                </div>
                                <div class="btn-register">
                                <input type="submit" class="btn-register-now" value="Login">

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-7 text-center">
                    <img src="https://partner-cons.com/files/73810-business-idea-animation.gif" alt="urraaaa" style="height: 550px">
                </div>
            </div>
        </div>
   </div>
</main>