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
                    <a href="add_staff" class="btn btn-primary">Add</a>
                    <a href="https://themeforest.net/user/wrraptheme/portfolio" title="Portfolio" class="btn btn-success ml-2">Portfolio</a>
            </div>
        </nav>
            <div class="container-fluid">            
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Staff</strong> Records </h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Staff_ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Default password</th>
                                                <th>Gender</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Staff_ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Default password</th>
                                                <th>Gender</th>
                                                <th>Date</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                $sql = dbConnect()->prepare("SELECT * FROM users WHERE role=2");
                                                $sql->execute();
                                                $i =0;
                                                if($sql->rowcount() < 1){
                                                    echo "No record found ...";
                                                }else{
                                                while ($row = $sql->fetch()){
                                                    $i +=1;?>
                                                
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><span class="badge badge-primary"><?php echo $row['unique_id']; ?> </span></td>
                                                <td><?php echo $row['firstname'].' '. $row['lastname']; ?> </td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><span class="badge badge-info"><?php echo '12345'; ?> </span></td>
                                                <td><span class="badge badge-primary"><?php echo $row['gender']; ?> </span> </td>
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