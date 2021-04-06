<!doctype html>
<html>
    <head>
        <title> TRAVEL AND TRANSPORT </title>
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
        
    </body>
</html>


<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/connection.php"); ?>

<div class="selectQuries"><form method="POST" action="/travel_and_transport/index.php">
     
    <table>
       
        <tr id="header">
            <td colspan='3' ><h1 Style="margin-top:-30px;font-size:40px;height:0px;">Manage Tickets</h1></td>
        </tr>
       
        <tr id="singleLink">
            <td><a href="\travel_and_transport\CRUD\manageticket\verify.php">Verify Tickets</a></td>
            </tr>
        <tr id="singleLink">
            <td><a href="\travel_and_transport\CRUD\manageticket\updatequery.php">UPDATE Prices</a></td>
        </tr>
        <tr id="singleLink">
            <td><a href="\travel_and_transport\CRUD\manageticket\search.php">Veiw All TICKET</a></td>
        </tr>
        <tr id="singleLink">
            <td><a href="\travel_and_transport\forms\ticket\addprice.php">ENTER PRICES</a></td>
        </tr>
        <tr id="singleLink" style="background-color:#ff4d4d;">
            <td><a style="" href="\travel_and_transport\">LogOut</a></td>
<!--            <td><a href="#">TODAY'S INCOME</a></td>-->
        </tr>
    </table>
    <br>
    
    </form>
</div>
<script src="../../includes/javascript.js"></script>