<?php
include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/connection.php");

 $routeFrom = $routeTo = $price =$model= "";


    if($_SERVER["REQUEST_METHOD"] == 'POST')
    {
        if(empty($_POST['model']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $model = $_POST['model'];
        }
           
       
        if(empty($_POST['price']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $price = $_POST['price'];
        }
                
        if(empty($_POST['routeFrom']) || empty($_POST['routeTo']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $routeFrom = $_POST['routeFrom'];
            $routeTo = $_POST['routeTo'];
        }
            
        $sql = "INSERT INTO ticketprice (PRICE, ROUTE_FROM, ROUTE_TO, BUS_MODEL) VALUES ('$price','$routeFrom','$routeTo','$model')";
        mysqli_query($conn,$sql);
        
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header('Location:index.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
   
?>