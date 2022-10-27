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
                                <h2><strong>Cash</strong> Transfer </h2>
                            </div>
                            <div class="body">
<!-- PAYMENT PROCESSING   1011071010112--> 
<?php
if(isset($_POST['submit'])){
    $amount = $_POST['amount'];
    $account_number = $_POST['account_number'];
    $account_name = $_POST['account_name'];
    $bank_name = $_POST['bank_name'];
    $reference = $_POST['reference'];
    $trans_type = 3;

    if($bank_name == 'WestEnd Bank'){
        $sq = dbConnect()->prepare("SELECT * FROM user_account WHERE account_number=?");$sq->execute([$account_number]);if($sq->rowcount()>0){$bal = $sq->fetch()['user_balance']; }else{$bal =0;}
        $new_balance = $bal + $amount;
        $ins = dbConnect()->prepare("UPDATE user_account SET user_balance ='$new_balance' WHERE account_number=?");
        $ins->execute([$account_number]);

        if($ins){
            $ins_sq = dbConnect()->prepare("INSERT INTO transaction(amount,account_number,bank_name,reference, trans_type) VALUES(?,?,?,?,?)");$ins_sq->execute([$amount,$account_number,$bank_name,$reference,$trans_type]);

          $e='Transfer Successful !!!';
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
    }else{
        $ins = dbConnect()->prepare("INSERT INTO transaction(amount,account_number,bank_name,reference, trans_type) VALUES(?,?,?,?,?)");$ins->execute([$amount,$account_number,$bank_name,$reference,$trans_type]);

        if($ins){
          $e='Transfer Successful !!!';
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
    
}
  
?>

<!-- PAYMENT PROCESSING ENDS HERE -->
                                <div class="form_add_staff">
                                    <form id="paymentForm" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-6">
                                                <div class="mb-3">
                                                    <p>Enter Amount</p>
                                                    <input type="number" class="form-control show-tick ms select2" name="amount" id="amount"  required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-6">
                                                <div class="mb-3">
                                                    <p>Account Number</p>
                                                    <input required type="text" id="account_id" onkeydown="getUser()" class="form-control show-tick ms select2" name="account_number" placeholder="Input account number of recipient ..." required>
                                                    <input type="hidden" class="form-control show-tick ms select2" name="reference" id="account_number" readonly>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-6">
                                                <div class="mb-3">
                                                    <p>Account Name</p>
                                                    <input required type="text" class="form-control show-tick ms select2" name="account_name" placeholder="Input name of recipient ..." required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-6">
                                                <div class="mb-3">
                                                    <p>Select Bank</p>
                                                    <select class="form-control show-tick ms select2" name="bank_name" required>
                                                        <option> -- Select bank --</option>
                                                        <option> Access Bank </option>
                                                        <option> First Bank</option>
                                                        <option> GTB </option>
                                                        <option> United Bank for Africa </option>
                                                        <option> Zenith Bank </option>
                                                        <option> WestEnd Bank</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="card ">
                                                <div class="card-body" id="user_info">
                                                    
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