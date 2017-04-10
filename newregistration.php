

 <?php
//connection
 
        $dsn = "mysql:host=localhost;dbname=login" ;
        $user = "root";
        $password = null;
        $options = null;
        
        $pdo = new PDO("mysql:host=localhost;dbname=MyDB" ,"root",null,null);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//important setup
        
    
    // prepare sql and bind parameters
    
    $stmt = $pdo->prepare("INSERT INTO login.CREDENTIALS(firstname,lastname, username, password, emailid) 
                                                 VALUES (:firstname,:lastname, :username, :password, :emailid);");
     
    
    $stmt->bindParam(':firstname', $_POST['firstname']);
    $stmt->bindParam(':lastname', $_POST['lastname']);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->bindParam(':emailid', $_POST['emailid']);
   
        
    
    $success=$stmt->execute();
    
    if($success){
        echo "You have been registered successfully :)";
    }

?>