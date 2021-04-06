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
<div class="form" Style="width:100%">

<div class="manage">
     <div id="right" Style="width:100%;height:100px;"><form action="\travel_and_transport\CRUD\route\delete.php" method="post">
    <table>
       
        <tr>
            <td colspan="10" Style="text-align:center;font-size:16px;">DELETE ROUTE INFO<br>
                    <form method="post" action="\travel_and_transport\CRUD\driver\delete.php">
                <input type="text" name="search" placeholder="i.e. BA-0123" onblur='SC._VALIDATE_FIELD_FORMAT(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>
                    <input type="submit" value="Search">
                    </form>
            </td>
        </tr>
    </table>
         </form>
    </div>
</div>
</div>
<script src="../../includes/javascript.js"></script>