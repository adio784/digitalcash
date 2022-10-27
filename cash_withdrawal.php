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
                    <!-- <a href="users" class="btn btn-primary">Users</a> -->
            </div>
        </nav>
            <div class="container-fluid">            
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Cash </strong> Withdrawal </h2>
                            </div>
                            <div class="body">
<!--   ADDING USER SCRIPT GOES HERE ------------->


<?php 
if (isset($_POST['submit'])) {
    if(empty($_POST['amount'])){
        $e='Input Amount Required';
        echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Oops!</strong> $e.
        </div>";
    }elseif(empty($_POST['account_number'])){
        $e='Account Number Required';
        echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Oops!</strong> $e.
        </div>";
    }else{
        $amount = check_input($_POST['amount']);
        $account_number = check_input($_POST['account_number']);
        $reference = check_input($_POST['reference']);
        $trans_type = 1;

        // Check Staff Record
        $sql = dbConnect()->prepare("SELECT * FROM user_account WHERE account_number=?");
        $sql->execute([$account_number]);
        $balance = $sql->fetch()['user_balance'];
        if($balance > $amount){
            $new_balance = $balance - $amount;

            $sql_update=dbConnect()->prepare("UPDATE user_account SET user_balance=+'$new_balance' WHERE account_number=?");$sql_update->execute([$account_number]);
            
            if($sql_update){
                $ins_tran = dbConnect()->prepare("INSERT INTO transaction(user_id,reference,account_number,amount,trans_type) VALUES(?,?,?,?,?)");$ins_tran->execute([$uid,$reference,$account_number,$amount,$trans_type]);
                $e='Withdrawal of '. $amount. 'Successful !!!';
                echo "<div class='form control alert alert-success alert-dismissible fade show' role='alert'>
                    <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Success!</strong> $e.
                </div>";
            }else{
                $e='Error withdrawing from this account !!!';
                    echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
                    <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Oops!</strong> $e.
                </div>";
            }
            
        }else{
            $e='Error! Insufficient Fund !!!';
            echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
                <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Oops!</strong> $e.
            </div>";
        
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
                                                    <p>Enter Amount</p>
                                                    <input required type="number" class="form-control show-tick ms select2" name="amount" id="amount" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mb-3">
                                                    <p>Account Number</p>
                                                    <input required type="text" class="form-control show-tick ms select2" name="account_number" id="account_id" onkeydown="getUser()">
                                                    <input type="hidden" class="form-control show-tick ms select2" name="reference" id="account_number" readonly>
                                                    <!-- <input type="hidden" name="email" value="<?php //echo  $_SESSION['email'];?>"> -->
                                                </div>
                                            </div>
                                            <div class="card ">
                                                <div class="card-body" id="user_info">
                                                    
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