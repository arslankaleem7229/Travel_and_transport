<?php
include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/connection.php");
$ID='bsdjhbdb';
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
    
    $sql = "UPDATE bus SET LICENSE=$license ,BUS_MODEL=$model, ROUTE_FROM=$routeFrom, ROUTE_TO=$routeTo, DRIVER_NAME=$drivername WHERE BUS_NUMBER=$ID ";
    if ($conn->query($sql) === TRUE) {
        header("Location:/travel_and_transport/CRUD/bus/index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }}
        ?> 