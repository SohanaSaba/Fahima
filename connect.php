<?php 
 $name=$_POST['name']; 
 $email=$_POST['email']; 
 $mobile=$_POST['mobile']; 
 $date=$_POST['date']; 
 $time=$_POST['time']; 
  

  
 $conn = new mysqli('localhost','root','','book');

if ($conn->connect_error) 
{ 
     die('Connection Failed : ' .$conn->connect_error);

} 
else  
{ 
    $stmt = $conn->prepare("insert into book(name,email,mobile,date,time) 
    values(?,?,?,?,?)"); 
     
    $stmt->bind_param("ssiss",$name, $email, $mobile, $date, $time); 
    $stmt->execute();  

    echo "Booking Succesfull..." ;  

    $stmt->close();  

    $conn->close();
}

?>