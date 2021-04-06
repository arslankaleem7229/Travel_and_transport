<?php
include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/connection.php");

    $license = $model = $routeFrom = $routeTo = $number = $drivername = "";

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
        
        $sql = "INSERT INTO busdepot (MODEL,ROUTE_FROM,ROUTE_TO,BUS_NUMBER) VALUES ('$model' , '$routeFrom' ,  '$routeTo','$number')";
        mysqli_query($conn,$sql);
        
        if ($conn->query($sql) === TRUE) {
            header("Location:search.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
   
?>