
<?php
session_start();

$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");

if(isset($_POST['id']){
    $id = $_POST['id'];
    
    $connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
    $sql=$connection->query("select * from employee where emp_id = '$id'");
    $data = $row->fetch_assoc();
    echo $row['email'];
    
    
    
}
?>