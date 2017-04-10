
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 
 
        $dsn = "mysql:host=localhost;dbname=login" ;
        $user = "root";
        $password = null;
        $options = null;
        
        $pdo = new PDO("mysql:host=localhost;dbname=MyDB" ,"root",null,null);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//important setup
        
        

 $stmt = $pdo->prepare("SELECT password
 FROM   login.CREDENTIALS 
 WHERE  username = :username");
 $stmt->bindParam(':username',$_POST['username']);//form
 

 $password = $stmt->execute();
 
 
$rows = $stmt->fetchAll();
 
 $passwordFromDB = "";
 
 foreach ($rows as $row){
 
     $passwordFromDB = $row['password'];
 }
  
 
    
 if ($passwordFromDB == $_POST['password']){
     
    echo 'welcome to grandma life ...' ;  
    
    // my friends code for rest of website goes here ...
    // at this point user is authenticated successfully
 }
 else {
     
     //incorrect username or password
     
     if($passwordFromDB == ""){
         //username is wrong, take user to registration page
         header("Location: registrationForm.php");
     }
     else{
   
         //password is wrong, ask user to login again
         header("Location: IncorrectPassword.php");
      
     }
die();    
 }
        

 
// echo 'Got from DB'.$passwordFromDB;
 
 
  ?>
  
  
  
  