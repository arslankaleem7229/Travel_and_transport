<?php include(($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/forms/ticket/insert.php"));?>
<div class="form" Style="width:96%">
    <div id="left" Style="width:36%;height:1000px"> <p Style="margin-top:0px;text-align:center;font-size:62px;color: #ff4d4d;opacity:0.7;">T<br>I<br>C<br>K<br>E<br>T<br>B<br>O<br>O<br>K</p></div>
    
    
    
  <div id="right" Style="width:64%;height:1000px;"><form action="/travel_and_transport/forms/ticket/insert.php" method="post">
            
            
     <p>PASSENGER NAME:</p>
      <!-- FIRST NAME -->
<input type='text' placeholder="First Name e.g.john" name='first_name' value="" id="first_name" onblur='SC._VALIDATE_FIELD_STRING(this)'> 
      <label style="color:red;font-size:20px;">&#10006;</label>s
      <br><br>
      
      <!-- LAST NAME -->
          <input type='text' placeholder="Last Name e.g.doe" name='last_name' value="" id="last_name" onblur='SC._VALIDATE_FIELD_STRING(this)'> 
      <label style="color:red;font-size:20px;">&#10006;</label>
          

      <p> CNIC NUMBER: </p>
    <input type="text" placeholder="e.g. xxxx-xxxxxxxx" name="cnic" value="" id="cnic" onblur='SC._VALIDATE_FIELD_CNIC(this)'> 
      <label style="color:red;font-size:20px;">&#10006;</label>


       <p> DEPARTURE DATE: </p>
    <input type="date" placeholder="e.g. xxxx-xxxxxxxx" name="departure_date" value="" id="departure_date">

      
       <p> DEPARTURE TIME: </p>
    <input type="time" placeholder="e.g. xxxx-xxxxxxxx" name="departure_time" value="" id="departure_time">

      
      <p>ADDRESS:</p>
    <input type="text" placeholder="e.g.11 Street Near Sandiego Harbour,California" name="address" value="" id="address" onblur='SC._VALIDATE_FIELD_ADDRESS(this)'> 
      <label style="color:red;font-size:20px;">&#10006;</label>
     
      
         <p>NO OF SEATS:</p>
    <input type="text" placeholder="e.g.11 Street Near Sandiego Harbour,California" name="no_of_seats" value="" id="no_of_seats" onblur='SC._VALIDATE_FIELD_MONEY(this)'> 
      <label style="color:red;font-size:20px;">&#10006;</label>
     
      
      
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
      
      <input id="btn" type="submit" value="Create" name='submit' >
    <br><br><br>
</form>
</div>
</div>
<script src="../../includes/javascript.js"></script>