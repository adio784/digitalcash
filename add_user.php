<?php include 'head.php'; ?>
        <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="javascript:void(0);">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-align-justify"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">                        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;</a>
                        <div class="dropdown-menu">
                            
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        &nbsp;
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;</a>
                       
                    </li>
                </ul>
                    <a href="users" class="btn btn-primary">Users</a>
            </div>
        </nav>
            <div class="container-fluid">            
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Create User </strong> Account </h2>
                            </div>
                            <div class="body">
<!--   ADDING USER SCRIPT GOES HERE ------------->


<?php 
if (isset($_POST['submit'])) {
    if(empty($_POST['firstname'])){
        $e='Firstname required';
        echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Oops!</strong> $e.
        </div>";
    }elseif(empty($_POST['lastname'])){
        $e='Lastname required';
        echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Oops!</strong> $e.
        </div>";
    }elseif(empty($_POST['gender'])){
        $e='Gender required';
        echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Oops!</strong> $e.
        </div>"; 
    }elseif(empty($_POST['marital_status'])){
        $e='Email required';
        echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Oops!</strong> $e.
        </div>";
    }elseif(empty($_POST['email'])){
        $e='Email required';
        echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Oops!</strong> $e.
        </div>";
    }elseif(empty($_POST['mobile'])){
        $e='Mobile required';
        echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Oops!</strong> $e.
        </div>";
    }elseif(empty($_POST['address'])){
        $e='Address required';
        echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Oops!</strong> $e.
        </div>";
    }else{
        $fname = check_input($_POST['firstname']);
        $lname = check_input($_POST['lastname']);
        $gender = check_input($_POST['gender']);
        $mstatus = check_input($_POST['marital_status']);
        $email = check_input($_POST['email']);
        $password = make('12345');
        $mobile = check_input($_POST['mobile']);
        $acctID = check_input($_POST['account_number']);
        $address = check_input($_POST['address']);
        $role = 3;
        $Active = 1;
        $created = date('Y-m-d H-m-s');

        // Check Staff Record
        $sql = dbConnect()->prepare("SELECT firstname, lastname FROM users WHERE email=? AND firstname=?");
        $sql->execute([$email,$fname]);
        if($sql->rowcount() >0){
            $e='User Account Already Exist !!!';
            echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
                <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Oops!</strong> $e.
            </div>". "<script> window.location='staffs'; </script>";
        }else{
            $insert = dbConnect()->prepare("INSERT INTO users(firstname,lastname,unique_id,gender,mstatus,email,phone,password,address,role,status)VALUES(?,?,?,?,?,?,?,?,?,?,?)");
            $insert->execute([$fname,$lname,$acctID,$gender,$mstatus,$email,$mobile,$password,$address,$role,$Active]);
                    if($insert){
                        $insert_q = dbConnect()->prepare("INSERT INTO user_account(user_email,account_number,user_balance,status)VALUES(?,?,?,?)");
                        $insert_q->execute([$email,$acctID, 0, 1]);
                        $e='User Account Opening Completed !!!';
                        echo "<div class='form control success alert-success alert-dismissible fade show' role='alert'>
                            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Success!</strong> $e.
                        </div>". "<script> window.location='users'; </script>";
                    }else{
                        $e='Error processing request !!!';
                        echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
                            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Oops!</strong> $e.
                        </div>". "<script> window.location='add_user'; </script>";
                    }
        }
    }
}

// Updating record
if(isset($_POST['updateBtn'])){
    if(isset($_POST['firstname'])){
        $updID = $_GET['update_id'];
        $up_date = date('Y-m-d, H-m-s');
    $sql_update=dbConnect()->prepare("UPDATE `users` SET 
    firstname='$_POST[firstname]',
    lastname='$_POST[lastname]',
    email='$_POST[email]',
    mobile='$_POST[mobile]',
    qualification='$_POST[qualification]',
    mstatus='$_POST[maritalstatus]',
    address='$_POST[address]',
    city='$_POST[city]',
    state='$_POST[state]',
    zip='$_POST[zip]',
    office='$_POST[role]',
    department='$_POST[department]',
    school = '$_POST[school]',
    updated='$up_date'
    where id=?");  
    $sql_update->execute([$updID]);
    if($sql_update){
        $e='Staff Record Updated !!!';
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Success!</strong> $e.
        </div>". "<script> window.location='staff'; </script>";
        }
    }
}


?>

<!-- ADDING USER SCRIPT ENDS HERE ------------------ -->

                                <div class="form_add_staff">
                                    <form class="" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mb-3">
                                                    <p>First Name</p>
                                                    <input type="text" class="form-control show-tick ms select2" name="firstname">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mb-3">
                                                    <p>Last Name</p>
                                                    <input type="text" class="form-control show-tick ms select2" name="lastname">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mb-3">
                                                    <p>Gender</p>
                                                    <select class="form-control show-tick ms select2" data-placeholder="Select" name="gender">
                                                        <option selected value="">-- --</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mb-3">
                                                    <p>Marital Status</p>
                                                    <select class="form-control show-tick ms select2" data-placeholder="Select" name="marital_status">
                                                        <option selected value="">-- --</option>
                                                        <option>Single</option>
                                                        <option>Married</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mb-3">
                                                    <p>Email Address</p>
                                                    <input type="text" class="form-control show-tick ms select2" name="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mb-3">
                                                    <p>Mobile Number</p>
                                                    <input type="tel" class="form-control show-tick ms select2" name="mobile">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-6">
                                                <div class="mb-3">
                                                    <p>Account Number</p>
                                                    <input type="text" class="form-control show-tick ms select2" name="account_number" id="account_number" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-6">
                                                <div class="mb-3">
                                                    <p>Address</p>
                                                    <textarea class="form-control show-tick ms" name="address"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mb-3">
                                                    <button class="btn btn-primary" name="submit">Submit</button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'foot.php'; ?>


</body>
</html>