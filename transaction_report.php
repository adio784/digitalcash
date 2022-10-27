<?php include 'head.php'; ?>
<?php
if(isset($_POST['search'])){
    if(isset($_POST['account_type'])){
        $account_type = $_POST['account_type'];
        $sql = dbConnect()->prepare("SELECT u.firstname, u.lastname, u.unique_id, t.user_id, t.reference, t.account_number, t.amount, t.bank_name, t.trans_type, t.created FROM transaction as t INNER JOIN users as u on u.unique_id=t.account_number WHERE t.trans_type = ?");
        $sql->execute([$account_type]);
    }elseif(isset($_POST['month'])){
        $month = $_POST['month'];
        $sql = dbConnect()->prepare("SELECT u.firstname, u.lastname, u.unique_id, t.user_id, t.reference, t.account_number, t.amount, t.bank_name, t.trans_type, t.created FROM transaction as t INNER JOIN users as u on u.unique_id=t.account_number WHERE MONTH(t.created) = ?");
        $sql->execute([$month]);
    }elseif(isset($_POST['year'])){
        $year = $_POST['year'];
        $sql = dbConnect()->prepare("SELECT u.firstname, u.lastname, u.unique_id, t.user_id, t.reference, t.account_number, t.amount, t.bank_name, t.trans_type, t.created FROM transaction as t INNER JOIN users as u on u.unique_id=t.account_number WHERE YEAR(t.created ) = ?");
        $sql->execute([$year]);
    }elseif(isset($_POST['account_type']) && isset($_POST['month'])){
        $account_type = $_POST['account_type'];
        $month = $_POST['month'];
        $sql = dbConnect()->prepare("SELECT u.firstname, u.lastname, u.unique_id, t.user_id, t.reference, t.account_number, t.amount, t.bank_name, t.trans_type, t.created FROM transaction as t INNER JOIN users as u on u.unique_id=t.account_number WHERE t.trans_type = ? AND MONTH(t.created)=?");
        $sql->execute([$account_type, $month]);
    }elseif(isset($_POST['account_type']) && isset($_POST['year'])){
        $account_type = $_POST['account_type'];
        $year = $_POST['year'];
        $sql = dbConnect()->prepare("SELECT u.firstname, u.lastname, u.unique_id, t.user_id, t.reference, t.account_number, t.amount, t.bank_name, t.trans_type, t.created FROM transaction as t INNER JOIN users as u on u.unique_id=t.account_number WHERE t.trans_type = ? AND YEAR(t.created)=?");
        $sql->execute([$account_type, $year]);
    }elseif(isset($_POST['month']) && isset($_POST['year'])){
        $month = $_POST['month'];
        $year = $_POST['year'];
        $sql = dbConnect()->prepare("SELECT u.firstname, u.lastname, u.unique_id, t.user_id, t.reference, t.account_number, t.amount, t.bank_name, t.trans_type, t.created FROM transaction as t INNER JOIN users as u on u.unique_id=t.account_number WHERE MONTH(t.created)=? AND YEAR(t.created)=?");
        $sql->execute([$month, $year]);
    }elseif(isset($_POST['account_type']) && isset($_POST['month']) && isset($_POST['year'])){
        $account_type = $_POST['account_type'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $sql = dbConnect()->prepare("SELECT u.firstname, u.lastname, u.unique_id, t.user_id, t.reference, t.account_number, t.amount, t.bank_name, t.trans_type, t.created FROM transaction as t INNER JOIN users as u on u.unique_id=t.account_number WHERE t.trans_type = ? AND MONTH(t.created)=? AND YEAR(t.created)=?");
        $sql->execute([$account_type, $month, $year]);
    } 
    else{
        $sql = dbConnect()->prepare("SELECT u.firstname, u.lastname, u.unique_id, t.user_id, t.reference, t.account_number, t.amount, t.bank_name, t.trans_type, t.created FROM transaction as t INNER JOIN users as u on u.unique_id=t.account_number");
        $sql->execute();
    }
}else{
        $sql = dbConnect()->prepare("SELECT u.firstname, u.lastname, u.unique_id, t.user_id, t.reference, t.account_number, t.amount, t.bank_name, t.trans_type, t.created FROM transaction as t INNER JOIN users as u on u.unique_id=t.account_number");
        $sql->execute();
    }






?>
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
            </div>
        </nav>
            <div class="container-fluid">            
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Transaction</strong> Records </h2>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-row" method="post">
                                        <div class="col-4">
                                            <label> Account type</label>
                                            <select class="form-control" name="account_type">
                                                <option>-- --</option>
                                                <option value="2"> Deposit </option>
                                                <option value="1"> Withdrawal </option>
                                                <option value="3"> Transfer </option>
                                            </select>
                                        </div>
                                      <!--   <div class="col-4">
                                            <label> Month</label>
                                            <select class="form-control" name="month">
                                                <option>-- --</option>
                                                <option value="01"> Jan </option>
                                                <option value="02"> Feb </option>
                                                <option value="03"> Mar </option>
                                                <option value="04"> Apr </option>
                                                <option value="05"> May </option>
                                                <option value="06"> Jun </option>
                                                <option value="07"> Jul </option>
                                                <option value="08"> Aug </option>
                                                <option value="09"> Sep </option>
                                                <option value="10"> Oct </option>
                                                <option value="11"> Nov </option>
                                                <option value="12"> Dec </option>
                                            </select>
                                        </div> -->
                                        <!-- <div class="col-4">
                                            <label> Year</label>
                                            <select class="form-control" name="year">
                                                <option>-- --</option>
                                                <?php 
                                                // for($yr = 2021; $yr<=date('Y'); $yr++){
                                                //     echo "<option>". $yr ."</option>";
                                                // }
                                                ?>
                                            </select>
                                        </div> -->
                                        <div class="col-12">
                                            <button class="btn btn-info" name="search"> Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Customer</th>
                                                <th>Reference</th>
                                                <th>Account Number</th>
                                                <th>Amount</th>
                                                <th>Bank Name</th>
                                                <th>Transaction</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Customer</th>
                                                <th>Reference</th>
                                                <th>Account Number</th>
                                                <th>Amount</th>
                                                <th>Bank Name</th>
                                                <th>Transaction</th>
                                                <th>Date</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                $i =0;
                                                if($sql->rowcount() < 1){
                                                    echo "No record found ...";
                                                }else{
                                                while ($row = $sql->fetch()){
                                                    $i +=1;?>
                                                
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['firstname'].' '. $row['lastname']; ?> </td>
                                                <td><span class="badge badge-primary"><?php echo $row['reference']; ?> </span></td>
                                                
                                                <td><?php echo $row['account_number']; ?></td>
                                                <td><?php echo $row['amount']; ?></td>
                                                <td><span class="badge badge-info"><?php echo $row['bank_name']; ?> </span></td>
                                                <td><span class="badge badge-primary">
                                                    <?php 
                                                    $type = '';
                                                    if($row['trans_type'] == 1){$type='Withdrawal'; 
                                                    }elseif($row['trans_type'] == 2){$type='Deposit';
                                                    }else{$type='Transfer';}
                                                    echo $type; 
                                                    ?> </span> </td>
                                                <td><?php echo $row['created']; ?></td>
                                            </tr>
                                            <?php 
                                                } }
                                            ?>
                                        </tbody>
                                    </table>
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