<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email               = $_POST["email"];
        $username            = $_POST["username"];
        $password            = $_POST["password1"];
        $Confirm_Password    = $_POST["confirm-password"];

        
        //echo "USER email is " .$email. "<br>";
        //echo "USER username is" . $username;
        //echo "USER password is" .$password;
        //echo "USER confirmed password is" .$confirm_password;
        if(trim($username) != ""){
            echo "USER username is NOT Empty <br>";
        } else{
            echo "field username is empty<br>";
        }

        if(trim($email) != ""){
            echo "USER email is NOT Empty <br>";
        } else{
            echo "field email is empty<br>";
        }

        if(trim($password) != ""){
            echo "USER password is NOT Empty <br>";
        } else{
            echo "field password is empty<br>";
        }
        
        if(trim($Confirm_Password) != ""){
            echo "USER comfirm_password is NOT Empty <br>";
        } else{
            echo "field confirm_password is empty<br>";
        }

    }

        //test($username);

    function test($fieldName){
        if(trim($fieldName) !=""){
            echo "USER field is NOT EMPTY <br>";
        } else {
            echo "field $$fieldName is Empty<br>";
        }
    }
    

    if($password ==  $Confirm_Password){
        //echo "registration Successful";
        header("location: demo1.php?success=registration successful");
    }else{
        //echo "mismatched password";
        header("location: demo1.php?error=mismatched password");
        exit;
    }
    
        
?>