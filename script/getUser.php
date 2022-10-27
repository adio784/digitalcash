<?php
if(isset($_POST['account_id'])){
    include '../auth/conn.php';
    $id = $_POST['account_id'];
    $sq = dbConnect()->prepare("SELECT * FROM users WHERE unique_id=?");$sq->execute([$id]);
    if($sq->rowcount() >0 ){
        $fet = $sq->fetch();
        $fname = $fet['firstname']. ' '. $fet['lastname'];
        $email = $fet['email'];
        // $output = json_encode($fet);
        echo "<p>Fullname: <span id='fname_us'> <strong> $fname </strong></span></p>".
            "<p>Email: <span id='email_us'> <strong> $email </strong></span></p>";
    }
}

?>