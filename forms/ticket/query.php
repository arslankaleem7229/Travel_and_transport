<?php
include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/connection.php");

$first_name = $last_name = $address = $departure_date = $departure_time = $cnic = $routeFrom = $routeTo = $no_of_seats = "";


    if($_SERVER["REQUEST_METHOD"] == 'POST')
    {
        
       
        if(empty($_POST['price']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $price = $_POST['price'];
        }
        if(empty($_POST['model']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $model = $_POST['model'];
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
            
        $sql = 
        "INSERT INTO ticketprice (ROUTE_FROM,BUS_MODEL,PRICE,ROUTE_TO) 
        VALUES ('$routeFrom','$model','$price','$routeTo') ";
        mysqli_query($conn,$sql);
        
        if(isset($_POST['submit']) &&
           (!empty($_POST['routeFrom'])) &&
           (!empty($_POST['model'])) &&
           (!empty($_POST['routeTo'])) &&
           (!empty($_POST['price'])))
    {
        header("LOCATION:/travel_and_transport/CRUD/manageticket");
    }
       else 
        {
            
            header("location:javascript://history.go(-1)");
        }
    }
   
?>