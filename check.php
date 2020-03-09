<?php  
 //check.php  
 require_once('config.php');
 if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('Location: https:kagayajohn.com');
    exit;
}
 if(isset($_POST["input_value"], $_POST["input_type"]))  
 {  
      $type = strtolower(trim($_POST["input_type"]));  
      $value = trim($_POST["input_value"]);  
      if(in_array($type, array('username', 'email')))  
      {  
           if($type == 'username')  
           {  
                $sql = "SELECT * FROM tbl_register WHERE user = ? Limit 1 ";
                $stmtselect = $db->prepare($sql);
                $result = $stmtselect->execute([$value]); 
                if($result){
                    
                    if($stmtselect->rowCount() > 0 ){
                
                        echo("Username Exist");
                    }else{
                        //valid
                        echo("valid");
                    }
                
                
                }else {
                    echo("There is a error while connecting to database");
                } 
           }  
        
           
      }  

 }  
 ?>  