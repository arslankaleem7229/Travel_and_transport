<?php
include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/connection.php");

$routeFrom = $routeTo = $model = $class = $fare =$ID=  " ";
    

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
        
        $sql = "UPDATE route SET ROUTE_FROM=$routeFrom ,ROUTE_TO=$routeTo, BUS_MODEL=$model, CLASS=$class, FARE=$fare WHERE ROUTE_NUMBER=$ID ";
        mysqli_query($conn,$sql);
        
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
   
?>