<?php include(($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/forms/bus/insert.php"));?>

<div class="form" Style="width:96%">
    <div id="left" Style="width:36%;height:650px;padding:0px;"> <p Style="margin-top:0px;text-align:center;font-size:70px;color: #ff4d4d;opacity:0.7;">A<br>D<br>D<br>B<br>U<br>S</p></div>
    
    
    
  <div id="right" Style="width:64%;height:650px;"><form action="/travel_and_transport/forms/bus/insert.php" method="post">
      
     
    <p>BUS LICENSE NUMBER:</p>
    <input type='text' placeholder="e.g.AB-0234" name='license' id="license" value="" 
    onblur='SC._VALIDATE_FIELD_FORMAT(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>
      
      
      <p>BUS NUMBER:</p>
    <input type='text' placeholder="e.g.AB-0234" name='number' id="number" value="" onblur='SC._VALIDATE_FIELD_FORMAT(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label> 
    
      
      <p>DRIVER NAME:</p>
    <input type='text' placeholder="e.g.AB-0234" name='drivername' id="drivername" value="" onblur='SC._VALIDATE_FIELD_STRING(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>


      <p> BUS MODEL: </p>
         <select name="model">
         <option value="VOLVO">VOLVO</option>
         <option value="DAEWOO">DAEWOO</option>
         <option value="SCANNIA">SCANNIA</option>
         <option value="CONVOY">CONVOY</option>
         <option value="COASTER">COASTER</option>
         <option value="CITELIS">CITELIS</option>
         <option value="HINO">HINO</option>
         <option value="TOYOTA">TOYOTA</option>
    </select>
  
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
    <input type="submit" value="Create" name='submit'>
    <br><br><br>
</form>
</div>
</div>
<script src="../../includes/javascript.js"></script>