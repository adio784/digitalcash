<?php

function dbConnect(){
    try{
        $username='root';
        $pass='';
        $con= new pdo("mysql:host=localhost; dbname=giditalcashsys", $username, $pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $con;
        
    } catch (PDOException $e) {
        echo 'ERROR', $e->getMessage();
    }
}

function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
function make($string){
        return password_hash($string, PASSWORD_DEFAULT);
    }
?>