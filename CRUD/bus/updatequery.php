<head>
    <link rel="stylesheet" href="/travel_and_transport/includes/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/themebus.php");?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/connection.php")?>
    <div class="form" Style="width:96%">
    <div id="left" Style="width:100%;height:auto ;padding:0px;"> <p Style="margin-top:0px;text-align:center;font-size:70px;color: #ff4d4d;opacity:0.7;">UPDATE</p></div>
<?php
    $sql = "SELECT * FROM bus";
    $result = mysqli_query($conn,$sql);
$TICK_NUM = 1;
    ?>
    <div class="view">
        <table>
        
        <tr id="header">
            <td>LICENSE</td>
            <td>BUS NUMBER</td>
            <td>DRIVER NAME</td>
            <td>BUS MODEL</td>
            <td>ROUTE FROM</td>
            <td>ROUTE TO</td>
        </tr>
            
    <?php
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>";
        echo $row['LICENSE'];
        echo "</td><td>";
        echo $row['BUS_NUMBER'];
        echo "</td><td>";
        echo $row['DRIVER_NAME'];
        echo "</td><td>";
        echo $row['BUS_MODEL'];
        echo "</td><td>";
        echo $row['ROUTE_FROM'];
        echo "</td><td>";
        echo $row['ROUTE_TO'];
        echo "</td><td>";
        $update = $row["BUS_NUMBER"];
        echo "<a style='color:#ff4d4d;' href='updating.php?id=".$update."'>UPDATE</a>";
        //echo "<button onclick='window.location.href='update.php'>Update</button>";
        echo "</td></tr>";
        
}    
        ?>
</table>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/footer.php");?>