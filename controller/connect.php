<?php   
 $conn = new mysqli('localhost', 'sms11', '123456','sms');  
 if (!$conn) {  
    echo 'Connection failed:' . mysqli_connect_error();  
     }  
 
  echo "Connected successfully";  
   
   $sql= 'SELECT * FROM student';
   
    $result=mysqli_query($conn,$sql);
     $scholarshiplist=mysqli_fetch_all($result,MYSQLI_ASSOC); 
   
    print_r($scholarshiplist);  
     ?>
