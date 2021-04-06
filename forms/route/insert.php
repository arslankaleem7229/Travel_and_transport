<?php
include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/connection.php");

$routeFrom = $routeTo = $model = $class = $fare =  " ";
    

    if($_SERVER["REQUEST_METHOD"] == 'POST')
    {
        
        if(empty($_POST['routeFrom']) || empty($_POST['routeTo']) )
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $routeFrom = $_POST['routeFrom'];
            $routeTo = $_POST['routeTo'];
        }
        if(empty($_POST['fare']) )
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $fare = $_POST['fare'];
        }
    
                
        if(empty($_POST['model']))
        {
           
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $model = $_POST['model'];
        }
        
        if(empty($_POST['class']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $class = $_POST['class'];
        }
        
        $sql = "INSERT INTO route (ROUTE_FROM,ROUTE_TO,BUS_MODEL,CLASS,FARE) VALUES ('$routeFrom','$routeTo','$model','$class','$fare')";
        mysqli_query($conn,$sql);
        
         if(isset($_POST['submit']) && 
       (!empty($_POST['routeFrom'])) &&
       (!empty($_POST['routeTo'])) &&
       (!empty($_POST['model'])) &&
       (!empty($_POST['class'])) &&
           (!empty($_POST['fare'])))
    {
             include("redirect.php");
    }
        else 
        {
            
            header("location:javascript://history.go(-1)");
        }
    }
   
?>
