<?php
include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/connection.php");

$first_name = $last_name = $address = $departure_date = $departure_time = $cnic = $routeFrom = $routeTo = $no_of_seats = "";


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
        if(empty($_POST['departure_time']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $departure_time = $_POST['departure_time'];
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
        if(empty($_POST['cnic'])) 
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $cnic = $_POST['cnic'];
        }
            
        if(empty($_POST['address'])) 
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $address = $_POST['address'];
        }
            
        if(empty($_POST['no_of_seats']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $no_of_seats = $_POST['no_of_seats'];
        }
        if(empty($_POST['departure_date']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $departure_date = $_POST['departure_date'];
        }
            
            
            
        
        $sql = 
        ("UPDATE ticket SET PASSENGERNAME=$first_name ' ' $last_name , DEPARTURE_DATE=$departure_date , DEPARTURE_TIME=$departure_time , ADDRESS = $address,ROUTE_FROM=$routeFrom,NO_OF_SEATS=$no_of_seats,ROUTE_TO=$routeTo  WHERE CNIC = $cnic ");
        mysqli_query($conn,$sql);
        
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
   
?>