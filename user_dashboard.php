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
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon traffic">
                        <div class="body">
                            <h6>Traffic</h6>
                            <h2>20 <small class="info">of 1Tb</small></h2>
                            <small>2% higher than last month</small>
                            <div class="progress mb-0">
                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon sales">
                        <div class="body">
                            <h6>Sales</h6>
                            <h2>12% <small class="info">of 100</small></h2>
                            <small>6% higher than last month</small>
                            <div class="progress mb-0">
                                <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon email">
                        <div class="body">
                            <h6>Email</h6>
                            <h2>39 <small class="info">of 100</small></h2>
                            <small>Total Registered email</small>
                            <div class="progress mb-0">
                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon domains">
                        <div class="body">
                            <h6>Domains</h6>
                            <h2>8 <small class="info">of 10</small></h2>
                            <small>Total Registered Domain</small>
                            <div class="progress mb-0">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row clearfix">
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Revenue Statistics</h2>
                        </div>
                        <div class="body">
                            <div class="d-flex bd-highlight mb-4">
                                <div class="flex-fill bd-highlight">
                                    <h5 class="mb-0">21,521 <i class="fa fa-angle-up"></i></h5>
                                    <small>Today</small>
                                </div>
                                <div class="flex-fill bd-highlight">
                                    <h5 class="mb-0">%12.35 <i class="fa fa-angle-down"></i></h5>
                                    <small>Last month %</small>
                                </div>
                            </div>
                            <div id="chart-bar-rotated" class="c3_chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Products Monthly Sales</h2>
                        </div>
                        <div class="body">
                            <div class="d-flex bd-highlight mb-4">
                                <div class="flex-fill bd-highlight">
                                    <h5 class="mb-0">2,521 <i class="fa fa-angle-up"></i></h5>
                                    <small>Today</small>
                                </div>
                                <div class="flex-fill bd-highlight">
                                    <h5 class="mb-0">18.35 <i class="fa fa-angle-down"></i></h5>
                                    <small>Last month %</small>
                                </div>
                            </div>
                            <div id="chart-area-step" class="c3_chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>ToDo List</h2>
                        </div>
                        <div class="body todo_list">
                            <div class="form-group d-flex mb-1">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type your task here...">
                                </div>
                                <button class="btn btn-primary ml-2" type="button" id="button-addon2">Add</button>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Walk the dog this evening
                                    <span class="badge badge-primary badge-pill">x</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Go shopping at 3 PM
                                    <span class="badge badge-primary badge-pill">x</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Keep coding 'till you're dead
                                    <span class="badge badge-primary badge-pill">x</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Enjoy every moment you have
                                    <span class="badge badge-primary badge-pill">x</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Sleep well tonight
                                    <span class="badge badge-primary badge-pill">x</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Sleep well tonight
                                    <span class="badge badge-primary badge-pill">x</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Latest Transactions ...</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover c_table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
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
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <?php 
                                            if($urole ==1 || $urole==2){
                                            $sql = dbConnect()->prepare("SELECT u.firstname, u.lastname, u.unique_id, t.user_id, t.reference, t.account_number, t.amount, t.bank_name, t.trans_type, t.created FROM transaction as t INNER JOIN users as u on u.unique_id=t.account_number ORDER BY t.id DESC");
                                                $sql->execute();
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
                                                    } 
                                                }
                                            }else{

                                                $sql = dbConnect()->prepare("SELECT u.firstname, u.lastname, u.unique_id, t.user_id, t.reference, t.account_number, t.amount, t.bank_name, t.trans_type, t.created FROM transaction as t INNER JOIN users as u on u.unique_id=t.account_number WHERE u.id=? ORDER BY t.id DESC");
                                                $sql->execute([$uid]);
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
                                                    <td><?php echo number_format($row['amount']); ?></td>
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
                                                         }

                                                    }
                                                }
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