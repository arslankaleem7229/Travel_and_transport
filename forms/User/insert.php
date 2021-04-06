<?php
include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/connection.php");

    $license = $model = $routeFrom = $routeTo = $number = $drivername = "";

    if($_SERVER["REQUEST_METHOD"] == 'POST')
    {
        if(empty($_POST['license']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $license = $_POST['license'];
        }
        if(empty($_POST['model']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $model = $_POST['model'];
        }
        
        if(empty($_POST['routeFrom']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $routeFrom = $_POST['routeFrom'];
        }
        
        if(empty($_POST['routeTo']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $routeTo = $_POST['routeTo'];
        }
        if(empty($_POST['number']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $number = $_POST['number'];
        }
        if(empty($_POST['drivername']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $drivername = $_POST['drivername'];
        }
        
        $sql = "INSERT INTO bus (LICENSE,BUS_MODEL,ROUTE_FROM,ROUTE_TO,BUS_NUMBER,DRIVER_NAME) VALUES ('$license' , '$model' , '$routeFrom' ,  '$routeTo','$number','$drivername')";
        mysqli_query($conn,$sql);
        
         if(isset($_POST['submit']) && 
       (!empty($_POST['license'])) &&
       (!empty($_POST['model'])) &&
       (!empty($_POST['routeFrom'])) &&
            (!empty($_POST['drivername']))&&
            (!empty($_POST['number']))&&
       (!empty($_POST['routeTo'])))
    {
            include("redirect.php");
    }
        else 
        {
            
            header("location:javascript://history.go(-1)");
        }
    }
   
?>
