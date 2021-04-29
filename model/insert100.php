<?php  
  
 $conn = new mysqli('localhost', 'root', '', 'sms');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM student WHERE id LIKE '%$searchKey%'";
          $sql= "insert into student values('$_POST[name]','$_POST[id]','$_POST[semester]','$_POST[cgpa]');
     }else
     $sql = "SELECT * FROM student";
     $result = $conn->query($sql);
  
 

?>