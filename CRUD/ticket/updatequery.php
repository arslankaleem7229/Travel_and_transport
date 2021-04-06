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
    <div class="form" Style="width:96%">
    <div id="left" Style="width:36%;height:650px;padding:0px;"> <p Style="margin-top:0px;text-align:center;font-size:70px;color: #ff4d4d;opacity:0.7;">U<br>P<br>D<br>A<br>T<br>E</p></div>
    
    
    
  <div id="right" Style="width:64%;height:1000px;"><form action="/travel_and_transport/CRUD/ticket/update.php" method="post">
            
            
     <p>PASSENGER NAME:</p>
      <!-- FIRST NAME -->
<input type='text' placeholder="First Name e.g.john" name='first_name' value="" id="first_name" onkeyup="check(this,id,'#first_nameValid','#first_nameInvalid')">

    <span Style="padding:10px;">
      <span><img class="valid" id='first_nameValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='first_nameInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>
      <br><br>
      
      <!-- LAST NAME -->
          <input type='text' placeholder="Last Name e.g.doe" name='last_name' value="" id="last_name" onkeyup="check(this,id,'#last_nameValid','#last_nameInvalid')">
          
    <span Style="padding:10px;">
      <span><img class="valid" id='last_nameValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='last_nameInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>

      <p> CNIC NUMBER: </p>
    <input type="text" placeholder="e.g. xxxx-xxxxxxxx" name="cnic" value="" id="cnic" onkeyup="check(this,id,'#cnicValid','#cnicInvalid')">

       <span Style="padding:10px;">
      <span><img class="valid" id='cnicValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='cnicInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>

       <p> DEPARTURE DATE: </p>
    <input type="text" placeholder="e.g. xxxx-xxxxxxxx" name="departure_date" value="" id="departure_date" onkeyup="check(this,id,'#depdateValid','#depdateInvalid')">

      <span Style="padding:10px;">
      <span><img class="valid" id='depdateValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='depdateInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>
      
       <p> DEPARTURE TIME: </p>
    <input type="text" placeholder="e.g. xxxx-xxxxxxxx" name="departure_time" value="" id="departure_time" onkeyup="check(this,id,'#deptimeValid','#deptimeInvalid')">

      <span Style="padding:10px;">
      <span><img class="valid" id='deptimeValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='deptimeInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>
      
      <p>ADDRESS:</p>
    <input type="text" placeholder="e.g.11 Street Near Sandiego Harbour,California" name="address" value="" id="address" onkeyup="check(this,id,'#addressValid','#addressInvalid')">
     
       <span Style="padding:10px;">
      <span><img class="valid" id='addressValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='addressInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>
      
         <p>NO OF SEATS:</p>
    <input type="text" placeholder="e.g.11 Street Near Sandiego Harbour,California" name="no_of_seats" value="" id="no_of_seats" onkeyup="check(this,id,'#seatValid','#seatInvalid')">
     
      <span Style="padding:10px;">
      <span><img class="valid" id='seatValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='seatInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>
      
      
      <p> ROUTE: </p>
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
      <br><br><br>
      
      <input id="btn" type="submit" value="UPDATE" name='submit' >
    <br><br><br>
</form>
</div>
</div>
<script src="../../includes/javascript.js"></script>