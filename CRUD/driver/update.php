<?php
include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/connection.php");

    $first_name = $last_name = $address = $license = $phone =$number= "";
    


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
                
        if(empty($_POST['address']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $address = $_POST['address'];
        }
         if(empty($_POST['phone']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $phone = $_POST['phone'];
        }
        if(empty($_POST['license']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $license = $_POST['license'];
        }
        if(empty($_POST['license']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $cnic = $_POST['cnic'];
        }
        if(empty($_POST['cnic']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $salary = $_POST['salary'];
        }
        if(empty($_POST['busnumber']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $number = $_POST['busnumber'];
        }
        if(empty($_POST['license']))
        {
            header("location:javascript://history.go(-1)");
        }
        else 
        {
            $rating = $_POST['rating'];
        }  
        $sql = "UPDATE driver SET DRIVER_NAME=$first_name' '$last_name ,ADDRESS=$address, CONTACT_NUMBER=$phone, LICENSE=$license, SALARY=$salary , RATING=$rating, BUS_NUMBER=$number WHERE CNIC=$cnic ";
        mysqli_query($conn,$sql);
        
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
   
?>