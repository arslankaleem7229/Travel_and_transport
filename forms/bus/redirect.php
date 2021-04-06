
<html>
    <head>
        <title> Travel and Transport</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
           <link rel="stylesheet" href="/travel_and_transport/includes/style.css">  
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    
        </head>
    
    <body>
      <?php include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/themebus.php")?>
        <div class="body" Style="width:90%;height:700px;" >
            <h1 Style="font-family:moodyrock;font-size:70px;">DATA INSERTED SUCCESSFULLY</h1>
    <form>
        <div class="form">
            <h3>SELECT ROUTE TO SHOW AVAILABLE BUSES</h3>
            <span> FROM
      <select name="routeFrom">
         <option value="peshawar">PESHAWAR</option>
         <option value="mardan">MARDAN</option>
         <option value="sawabi">SAWABI</option>
         <option value="tarnol">TARNOL</option>
         <option value="islamabad">ISLAMABAD(CAPITAL)</option>
         <option value="faisalabad">FAISALABAD</option>
         <option value="taxila">TAXILA</option>
         <option value="ghazi barod">GHAZI BAROD</option>
         <option value="muzafarabad">MUZAFARABAD</option>
         <option value="fateh jang">FATEH JANG</option>
         <option value="multan">MULTAN</option>
         <option value="lahore">LAHORE</option>
         <option value="karachi">KARACHI</option>
    </select>
         <span> TO </span>

      <select name="routeTo">
         <option value="peshawar">PESHAWAR</option>
         <option value="mardan">MARDAN</option>
         <option value="sawabi">SAWABI</option>
         <option value="tarnol">TARNOL</option>
         <option value="islamabad">ISLAMABAD(CAPITAL)</option>
         <option value="faisalabad">FAISALABAD</option>
         <option value="taxila">TAXILA</option>
         <option value="ghazi barod">GHAZI BAROD</option>
         <option value="muzafarabad">MUZAFARABAD</option>
         <option value="fateh jang">FATEH JANG</option>
         <option value="multan">MULTAN</option>
         <option value="lahore">LAHORE</option>
         <option value="karachi">KARACHI</option>
    </select>
      </span>
            <input type="submit" value="Go" name="routeBuses" style="width: 90px; height: 42px;">
            <br><br>
            <div class="insertedData">
            <div class="img"> <img src="/travel_and_transport/icons/busAuthorized.png" width="120px"> </div>
            <h1>BUS LICENSE NUMBER: <span style="font-family:'moodyrock';color: #ff4d4d;"><?php echo $license; ?> </span></h1> <br>
            <h1>MODEL: <span style="font-family: 'moodyrock';color: #ff4d4d;"><?php echo $model; ?> </span> </h1><br><br>
            <p><b>NOTE:</b> This is bus will only operate in the routes between <span style="color: #ff4d4d;"><?php echo $routeFrom?></span> and <span style="color: #ff4d4d;"><?php echo $routeTo; ?></span>.</p>

            </div>
            
        </div>
            </form>
        </div>
        
        <?php include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/includes/footer.php")?>
    </body>
</html>