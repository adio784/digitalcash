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
                                <h2><strong>Cash</strong> Deposit </h2>
                            </div>
                            <div class="body">
<!-- PAYMENT PROCESSING -->
<?php
if(isset($_POST['submit'])){

    $amount = $_POST['amount'];
    $account_number = $_POST['account_number'];
    $trans_type = 2;
    $bank_name = 'WestEnd';
    $reference = $_POST['reference'];

        $sq = dbConnect()->prepare("SELECT * FROM user_account WHERE account_number=?");$sq->execute([$account_number]);if($sq->rowcount()>0){$bal = $sq->fetch()['user_balance']; }else{$bal =0;}
        $new_balance = $bal + $amount;
        $ins = dbConnect()->prepare("UPDATE user_account SET user_balance ='$new_balance' WHERE account_number=?");
        $ins->execute([$account_number]);

        if($ins){
            $ins_sq = dbConnect()->prepare("INSERT INTO transaction(amount,account_number,bank_name,reference, trans_type) VALUES(?,?,?,?,?)");$ins_sq->execute([$amount,$account_number,$bank_name,$reference,$trans_type]);

          $e='Deposit Successful !!!';
                echo "<div class='form control success alert-success alert-dismissible fade show text-white' role='alert'>
                    <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Success!</strong> $e.
                </div>";
            }else{
                $e='Error processing request !!!';
                echo "<div class='form control alert alert-danger alert-dismissible fade show text-white' role='alert'>
                    <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Oops!</strong> $e.
                </div>";
            }
    }
  
?>

<!-- PAYMENT PROCESSING ENDS HERE -->
                                <div class="form_add_staff">
                                    <form id="paymentForm" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-6">
                                                <div class="mb-3">
                                                    <p>Enter Amount</p>
                                                    <input required type="number" class="form-control show-tick ms select2" name="amount" id="amount" >
                                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-6">
                                                <div class="mb-3">
                                                    <p>Account Number</p>
                                                    <input required type="text" class="form-control show-tick ms select2" name="account_number" placeholder="Input account number ">
                                                    <input type="hidden" class="form-control show-tick ms select2" name="reference" id="account_number" readonly>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-6">
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary" name="submit" onclick="payWithPaystack()">Submit</button>
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