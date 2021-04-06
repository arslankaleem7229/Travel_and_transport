
<html>
    <head>
        <title> EverythingAboutAnything</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
           <link rel="stylesheet" href="/travel_and_transport/includes/style.css">  
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    
        </head>
    
     <body>
      <?php include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/themeticket.php")?>
         <?php include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/connection.php")?>
         
        <div class="body" Style="width:90%;height:1000px;" >
            <h1 Style="font-family:moodyrock;font-size:70px;">Ticket Booked</h1>
            <h1>Your Time is : <span style="font-family:'moodyrock';color: #ff4d4d;"><?php echo $departure_date . '<b> ON DATE </b>' . $departure_time; ?> </span>
                <?php
                $sql = "SELECT PASSENGERNAME,TICKET_NUMBER FROM ticket WHERE CNIC LIKE '%$cnic%'";
                 $result = mysqli_query($conn,$sql);
                ?>
                <div class="view">
    <table>
         
            <tr>
             <td colspan="7"> <h1>PASSENGER : <?php echo "$cnic"; ?></h1></td>
            </tr>
        
        <tr id="header">
            <td>PASSENGER NAME</td>
            <td>TICKET NUMBER</td>
        </tr>
     <?php 
    echo "<table>";
while ( $row = mysqli_fetch_assoc($result) ) {
	echo "<tr><td>";
	echo $row['PASSENGERNAME'];
	echo "</td><td>";
	echo $row['TICKET_NUMBER'];
	echo "</td></tr>";
	
}
        ?>
</table>
</div>
                 </div>
    </body>
          <?php include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/footer.php")?>
        