<head>
    <link rel="stylesheet" href="/travel_and_transport/includes/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/themeroute.php");?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/connection.php")?>


<?php
    $search = $_POST['search'];
    $sql = "SELECT * FROM route WHERE BUS_NUMBER LIKE '%$search%'";
    $result = mysqli_query($conn,$sql);
    ?>
    <div class="view">
        <table>
            <tr>
             <td colspan="7"> <h1>ROUTE NUMBER : <?php echo $search; ?></h1></td>
            </tr>
        
        <tr id="header">
            <td>BUS MODEL</td>
            <td>ROUTE FROM</td>
            <td>ROUTE TO</td>
            <td>CLASS</td>
            <td>FARE</td>
        </tr>
    <?php
            echo "<table>";
    while($row = mysqli_fetch_assoc($result)){
        
	   echo "<tr><td>";
	   echo $row['BUS_MODEL'];
        echo "</td><td>";
	echo $row['ROUTE_FROM'];
	echo "</td></tr>";
        echo $row['ROUTE_TO'];
	echo "</td></tr>";
        echo $row['CLASS'];
	echo "</td></tr>";
        echo $row['FARE'];
	echo "</td></tr>";
	
}
echo "</table>";
        ?>
</table>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/footer.php");?>