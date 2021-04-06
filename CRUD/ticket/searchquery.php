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
<div class="form" Style="width:100%;height:auto;">
<div class="manage">
     <div id="right" Style="width:100%;height:auto;"><form action="\travel_and_transport\CRUD\ticket\search.php" method="post">
            
                    <form method="post" action="\travel_and_transport\CRUD\ticket\search.php">
                <p>FIND TICKET INFO</p>
                <input type="text" name="search" id="search" placeholder="Enter CNIC i.e xx" onblur='SC._VALIDATE_FIELD_CNIC(this)'
                       onkeyup='SEARCH_CNIC(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>
                    <input type="submit" value="search">
                    </form>
             <div class="view"></div>
         </form>
    </div>
</div>
</div>
<script src="../../includes/javascript.js"></script>