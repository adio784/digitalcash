<?php
session_start();
include 'auth/conn.php';
if(isset($_SESSION['email']) && isset($_SESSION['password'])){
    echo "<script> alert('Oop!, kindly logout');window.location= 'user_dashboard'; </script>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ThemeMakker">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>:: BigBucket :: Login</title>
    <link rel="stylesheet" href="assets/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
</head>

<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="assets/images/brand/icon_black.svg" width="48" height="48" alt="ArrOw"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="top">
                        <img src="assets/images/brand/icon_black.svg" alt="Lucid">
                         <span>West</span><strong>End</strong>
                    </div>
                    <div class="card">
                        <div class="header">
                            <p class="lead">Login to your account</p>
<!-- LOGIN QUERY GOES HERE ------------------- -->
<?php
if(isset($_POST['submit'])){
   
    if(!isset($_POST['username']) || empty($_POST['username'])){
        $e='Email/Username required';
        echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Oops!</strong> $e.
        </div>";
    }if(!isset($_POST['password']) || empty($_POST['password'])){
        $e='Password field required';
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Oops!</strong> $e.
        </div>";
    }else{

        $username = check_input($_POST['username']);
        $password = check_input($_POST['password']);
        // password_hash(check_input($_POST['password']), PASSWORD_DEFAULT);
        // echo "<script> alert($password) </script";
        // $remember = '';
        $query = dbConnect()->prepare("SELECT * FROM users WHERE email=?");
        $query->execute([$username]);
        // $q=$query->fetch()['password'];

        if($query->rowcount() > 0){

            $r = $query->fetch();
            $_SESSION['name'] = $r['firstname']." ".$r['lastname'];
            $_SESSION['uid'] = $r['id'];
            $_SESSION['email'] = $r['email'];
            $_SESSION['password'] = $r['password'];
            $_SESSION['fnam'] = $r['firstname'];
            $_SESSION['lnam'] = $r['lastname'];
            $_SESSION['role'] = $r['role']; 
            $_SESSION['active'] = $r['status'];
            $_SESSION['logout_menu'] = 'index';

            if(password_verify($password, $r['password']))
                {
                    $report = "loggedin"; 
                    $created = date('Y-m-d H-m-s');
                    $uid = $r['id'];
                    $ins2 = dbConnect()->prepare("INSERT INTO report(username,report,created)VALUES(?,?,?)");$ins2->execute([$uid, $report, $created]);
                    echo "<script>alert ('Success'); window.location='user_dashboard'; </script>";
           } else{
                $e='Invalid Password';
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Oops!</strong> $e.
                </div>". "<script> window.location='index' </script>";
            }
        }else{
            $e='The username/email could not be found';
            $p = $password;
            echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                    <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Oops! </strong> $e.
                </div>";
                
        }
       
    }
}

?> 



<!-- LOGIN QUERY ENDS HERE -------------------- -->

                        </div>
                        <!-- <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Oops!</strong> </div> -->
                        <div class="body">
                            <form class="form-auth-small" method="post">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signin-email" value="user@domain.com" placeholder="Email" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signin-password" value="thisisthepassword" placeholder="Password" name="password">
                                </div>
                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>Remember me</span>
                                    </label>                                
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">LOGIN</button>
                                <!-- <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="auth-forgot-password.html">Forgot password?</a></span>
                                    <span>Don't have an account? <a href="auth-register.html">Register</a>
                                    </span>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
    
<!-- Core -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/js/theme.js"></script>
</body>
</html>
