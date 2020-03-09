<?php  
 //check.php  
 if(isset($_POST["input_value"], $_POST["input_type"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "testing");  
      $type = strtolower(trim($_POST["input_type"]));  
      $value = trim($_POST["input_value"]);  
      //$query = '';  
      if(in_array($type, array('username', 'email')))  
      {  
           if($type == 'username')  
           {  
                $query = "SELECT * FROM tbl_register WHERE user = '$value'";  
           }  
           if($type == "email")  
           {  
                $query = "SELECT * FROM tbl_register WHERE email = '$value'";  
           }  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                echo '* This data already exits';  
           }  
      }  
 }  
 ?>  