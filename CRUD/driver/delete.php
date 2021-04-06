<head>
    <link rel="stylesheet" href="/travel_and_transport/includes/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/themedriver.php");?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/connection.php")?>


<?php
    $search = $_POST['search'];
    $sql = "DELETE FROM driver WHERE CNIC = '$search'";
    if(mysqli_query($conn,$sql)){
        include("index.php");
           echo "Record deleted successfully";
   } else {
      echo "Error deleting record: " . mysqli_error($conn);
   }
    ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/footer.php");?>