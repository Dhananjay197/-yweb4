<?php 
 $stu_id =$_GET['id'];
  $conn =mysqli_connect("localhost","root","","crud1")or die("connection failed");
  
  
    
  $sql ="DELETE FROM student WHERE sid = {$stu_id}";
 $result= mysqli_query($conn,$sql) or die("query unsuccessful.");

header("Location: http://localhost/crud/index.php");
mysqli_close($conn);
?>
