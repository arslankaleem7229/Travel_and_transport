<?php
    if(isset($_GET['CNIC']))
    {
        include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/connection.php");
        $CNIC = $_GET['CNIC'];
        $sql = "SELECT ticket.PASSENGERNAME, ticket.CNIC, ticket.ROUTE_FROM, ticket.ROUTE_TO, ticket.DEPARTURE_DATE, ticket.DEPARTURE_TIME, ticket.ADDRESS, ticket.NO_OF_SEATS, ticketprice.PRICE FROM ticket, ticketprice WHERE ticket.CNIC LIKE '%$CNIC%' AND ticketprice.ROUTE_FROM=ticket.ROUTE_FROM AND ticketprice.ROUTE_TO=ticket.ROUTE_TO ";
        $result = mysqli_query($conn,$sql);
    ?>
        <table>     
            <tr id="header">
            <td>PASSENGER NAME</td>
            <td>CNIC</td>
            <td>ROUTE FROM</td>
            <td>ROUTE TO</td>
            <td>DEP_DATE</td>
            <td>DEP_TIME</td>
            <td>ADDRESS</td>
            <td>NO_OF_SEATS</td>
            <td>PRICE</td>
        </tr>            
    <?php    
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo"<td>";
        echo $row['PASSENGERNAME'];
        echo "</td><td>";
        echo $row['CNIC'];
        echo "</td><td>";
        echo $row['ROUTE_FROM'];
        echo "</td><td>";
        echo $row['ROUTE_TO'];
        echo "</td><td>";
        echo $row['DEPARTURE_DATE'];
        echo "</td><td>";
        echo $row['DEPARTURE_TIME'];
        echo "</td><td>";
        echo $row['ADDRESS'];
        echo "</td><td>";
        echo $row['NO_OF_SEATS'];
        echo "</td><td>";
        $num = $row['NO_OF_SEATS'];
        $price = $num* $row['PRICE'];
        echo $price;
        $cnic = $row['CNIC'];
        echo "<br><a href='/travel_and_transport/download/index.php?id=".$cnic."'>Print</a>";
        echo "</td></tr>";
        
}
?>
</table>
<?php
    }
?>