<?php
include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/connection.php");

$first_name = $last_name = $password = $contact = $username = " ";
    

    if($_SERVER["REQUEST_METHOD"] == 'POST')
    {
        
        if(empty($_POST['first_name']) || empty($_POST['last_name']) )
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
        }
        if(empty($_POST['signincategory']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $category = $_POST['signincategory'];
        }
        if(empty($_POST['password']) )
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $password = $_POST['password'];
        }
    
                
        if(empty($_POST['contact']))
        {
           
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $contact = $_POST['contact'];
        }
        
        if(empty($_POST['username']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $username = $_POST['username'];
        }
        
        $sql = "INSERT INTO login (NAME, CONTACT, USERNAME, PASSCODE , CATEGORY) VALUES ('$first_name' ' ' '$last_name' , '$contact' , '$username','$password','$category')";
        mysqli_query($conn,$sql);
        
         if(isset($_POST['submit']) && 
       (!empty($_POST['first_name'])) &&
       (!empty($_POST['last_name'])) &&
       (!empty($_POST['username'])) &&
       (!empty($_POST['password'])) &&
            (!empty($_POST['signincategory'])) &&
           (!empty($_POST['contact'])))
    {
             include("redirect.php");
    }
        else 
        {
            
            header("location:javascript://history.go(-1)");
        }
    }
   
?>
