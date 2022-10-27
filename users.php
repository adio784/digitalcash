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
                    <a href="add_user" class="btn btn-primary">Add</a>
                    <!-- <a href="https://themeforest.net/user/wrraptheme/portfolio" title="Portfolio" class="btn btn-success ml-2">Portfolio</a> -->
            </div>
        </nav>
            <div class="container-fluid">            
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>User</strong> Records </h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Account Number</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Account Bal</th>
                                                <th>Mobile</th>
                                                <th>Default password</th>
                                                <th>Gender</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Staff_ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Account Bal</th>
                                                <th>Mobile</th>
                                                <th>Default password</th>
                                                <th>Gender</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                $sql = dbConnect()->prepare("SELECT * FROM users WHERE role=3");
                                                $sql->execute();
                                                $i =0;
                                                if($sql->rowcount() < 1){
                                                    echo "No record found ...";
                                                }else{
                                                while ($row = $sql->fetch()){
                                                    $i +=1;?>
                                                
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><span class="badge badge-primary">
                                                    <?php echo $row['unique_id']; ?> </span></td>
                                                <td><?php echo $row['firstname'].' '. $row['lastname']; ?> </td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td>
                                                    <span class="badge badge-info">
                                                        <?php 
                                                            $acc = dbConnect()->prepare("SELECT * FROM user_account WHERE user_email=?");
                                                            $acc->execute([$row['email']]);
                                                            $i =0;
                                                            if($sql->rowcount() < 1){
                                                                echo "No record found ...";
                                                            }else{
                                                                $ac = $acc->fetch()['user_balance'];
                                                                echo 'N'. number_format($ac);
                                                            }
                                                        ?> 
                                                    </span>
                                                </td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><span class="badge badge-info"><?php echo '12345'; ?> </span></td>
                                                <td><span class="badge badge-primary"><?php echo $row['gender']; ?> </span> </td>
                                                <!-- <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#depositModal">
                                                        <i class="fa fa-download"></i>Wid.
                                                    </button>

                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#withdrawalModal">
                                                        <i class="fa fa-upload"></i>Dep.
                                                    </button>
                                                </td> -->
                                            </tr>


                                            <!-- PROCESSING MODAL GOES HERE -->

    <!-- Deposit Modal -->
<div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">
            Depositor <?php echo $row['firstname'].' '.$row['lastname'];; ?>(<?php echo $row['unique_id']; ?>)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="depositForm" class="" method="post">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-6">
                    <div class="mb-3">
                        <p>Enter Amount</p>
                        <input type="number" class="form-control show-tick ms select2" name="number" id="amount">
                    </div>
                </div>
                <div class="col-lg-12  col-md-6 d-none" >
                    <div class="mb-3">
                        <p>Account Number</p>
                        <input type="text" name="account_number" value="<?php echo $row['unique_id']; ?> ">
                        <input type="text" name="user_id" value="<?php echo $row['id']; ?> ">
                        <input type="text" name="trans_type" value="1">
                    </div>
                </div>
                <div class="col-lg-12  col-md-6">
                    <div class="mb-3">
                        <button class="btn btn-primary" name="deposit">Deposit</button>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


<!-- Withdrawal Modal -->
<div class="modal fade" id="withdrawalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">
            Widthdrawal --
            <?php echo $row['firstname'].' '.$row['lastname'];; ?>(<?php echo $row['unique_id']; ?>)
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="depositForm" class="" method="post">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-6">
                    <div class="mb-3">
                        <p>Enter Amount</p>
                        <input type="number" class="form-control show-tick ms select2" name="number" id="amount">
                    </div>
                </div>
                <div class="col-lg-12  col-md-6 d-none">
                    <div class="mb-3">
                        <p>Account Number</p>
                        <input type="text" name="account_number" value="<?php echo $row['unique_id']; ?> ">
                        <input type="text" name="user_id" value="<?php echo $row['id']; ?> ">
                        <input type="text" name="trans_type" value="1">
                    </div>
                </div>
                <div class="col-lg-12  col-md-6">
                    <div class="mb-3">
                        <button class="btn btn-primary" name="process_with">Process</button>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

                                            <!-- PROCESSING MODALS ENDS HERE -->
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