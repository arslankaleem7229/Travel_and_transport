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
        "INSERT INTO ticket (PASSENGERNAME,CNIC,DEPARTURE_DATE,DEPARTURE_TIME,ADDRESS,ROUTE_FROM,NO_OF_SEATS,ROUTE_TO) 
        VALUES ('$first_name' ' ' '$last_name','$cnic' ,'$departure_date','$departure_time','$address','$routeFrom','$no_of_seats','$routeTo') ";
        mysqli_query($conn,$sql);
        
        if(isset($_POST['submit']) &&
           (!empty($_POST['first_name'])) &&
           (!empty($_POST['last_name'])) &&
           (!empty($_POST['departure_date'])) &&
           (!empty($_POST['address'])) &&
           (!empty($_POST['no_of_seats'])) &&
           (!empty($_POST['cnic'])) &&
           (!empty($_POST['routeFrom'])) &&
           (!empty($_POST['routeTo'])) &&
           (!empty($_POST['departure_time'])))
    {
        include("redirect.php");
    }
       else 
        {
            
            header("location:javascript://history.go(-1)");
        }
    }
   
?>
