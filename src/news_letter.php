<?php
    session_start ();
    require_once ("connect.php");

      if ($connect == true) 

       {

        echo "connected";
    }
    if (isset ($_POST ['subscribe']) )
    {

        $name = $_POST ['name'];
        $email=$_POST ['email'];
        
        $insertQuery = "INSERT INTO news_letter (name,email) VALUES ('$name',' $email')";
        $runQuery == mysqli_query ($connect,$insertQuery);
        
        
        if ($runQuery ==  "true" || $num = 1 ) 
    {
        $_SESSION['status'] = "Registerd Successfully";
        $_SESSION['status_code'] = "success";
        header ("location: index.php?action = true");
        

    } else 
    
    {
        $_SESSION['status'] = "Registerd fail";
        $_SESSION['status_code'] = "error";
        header ("location: index.php?action = false");
    } 
            
            
}

    
?>