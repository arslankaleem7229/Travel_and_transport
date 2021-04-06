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
    $sql = "SELECT * FROM driver WHERE CNIC LIKE '%$search%'";
    $result = mysqli_query($conn,$sql);
    ?>
    <div class="view">
        <table>
            <tr>
             <td colspan="7"> <h1>BUS NUMBER : <?php echo $search; ?></h1></td>
            </tr>
        
        <tr id="header">
            <td>DRIVER ID</td>
            <td>DRIVER NAME</td>
            <td>ADDRESS</td>
            <td>CONTACT NUMBER</td>
            <td>CNIC</td>
            <td>SALARY</td>
            <td>LICENSE</td>
            <td>RATING</td>
            <td>BUS NUMBER</td>
        </tr>
    <?php
            echo "<table>";
    while($row = mysqli_fetch_assoc($result)){
    
        echo "<tr>";
	   echo "<td>";
	   echo $row['DRIVER_ID'];
        echo "</td><td>";
	echo $row['DRIVER_NAME'];
	echo "</td><td>";
        echo $row['ADDRESS'];
	echo "</td><td>";
        echo $row['CONTACT_NUMBER'];
	echo "</td><td>";
        echo $row['CNIC'];
	echo "</td><td>";
        echo $row['SALARY'];
	echo "</td><td>";
        echo $row['LICENSE'];
	echo "</td><td>";
        echo $row['RATING'];
	echo "</td><td>";
        echo $row['BUS_NUMBER'];
	echo "</td>";
        echo "</tr>";
	
}
echo "</table>";
        ?>
</table>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/footer.php");?>