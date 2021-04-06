<head>
    <link rel="stylesheet" href="/travel_and_transport/includes/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/themeticket.php");?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/connection.php")?>

<?php
    $search = "pending";
    $sql = "SELECT * FROM ticket WHERE STATUS LIKE '%$search%'";
    $result = mysqli_query($conn,$sql);
    ?>
    <div class="view">
        <table>
            <tr>
             <td colspan="10"> <h1>Pending Tickets</h1></td>
            </tr>
        
        <tr id="header">
            <td>TICKET_NUMBER</td>
            <td>PASSENGERNAME</td>
            <td>DEPARTURE_DATE</td>
            <td>DEPARTURE_TIME</td>
            <td>NO_OF_SEATS</td>
            <td>ROUTE_FROM</td>
            <td>ROUTE_TO</td>
            <td>STATUS</td>
            <td>Verify</td>
        </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo"<td>";
        echo $row['TICKET_NUMBER'];
        echo "</td><td>";
        echo $row['PASSENGERNAME'];
        echo "</td><td>";
        echo $row['DEPARTURE_DATE'];
        echo "</td><td>";
        echo $row['DEPARTURE_TIME'];
        echo "</td><td>";
        echo $row['NO_OF_SEATS'];
        echo "</td><td>";
        echo $row['ROUTE_FROM'];
        echo "</td><td>";
        echo $row['ROUTE_TO'];
        echo "</td><td>";
        echo $row['STATUS'];
        echo "</td><td>";
        $TICK_NUM = $row['TICKET_NUMBER'];
        echo "<a href='verifyquery.php?id=".$TICK_NUM."'>Yes/</a>";
        echo "<a href='dontverify.php?id=".$TICK_NUM."'>No</a>";
        echo "</td></tr>";
}
        ?>
            
</table>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/footer.php");?>