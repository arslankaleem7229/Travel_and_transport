<?php include($_SERVER['DOCUMENT_ROOT']. "/travel_and_transport/forms/driver/insert.php");?>

<div class="form" Style="width:96%">
    <div id="left" Style="width:36%;height:1000px;padding:0px;"> <p Style="margin-top:0px;text-align:center;font-size:70px;color: #ff4d4d;opacity:0.7;">B<br>U<br>S<br>D<br>R<br>I<br>V<br>E<br>R</p></div>
    
    
    
  <div id="right" Style="width:64%;height:1000px;"><form action="/travel_and_transport/forms/driver/insert.php" method="post">
      
     
   <p>DRIVER NAME:</p>
      <!-- FIRST NAME -->
<input type='text' placeholder="First Name e.g.john" name='first_name' value="" id="fname" onblur='SC._VALIDATE_FIELD_STRING(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>

      <br><br>
      
      <!-- LAST NAME -->
          <input type="text" placeholder="Last Name e.g.doe" name="last_name" value="" id="lname" onblur='SC._VALIDATE_FIELD_STRING(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>
      
      
    <p>HOME ADDRESS:</p>
    <input type="text" placeholder="e.g.11 Street Near Sandiego Harbour,California" name="address" id="address" value="" onblur='SC._VALIDATE_FIELD_ADDRESS(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>


      <p> PHONE NUMBER: </p>
    <input type="text" placeholder="e.g. xxx-xxxxxxxx" name="phone" id="phone" value="" onblur='SC._VALIDATE_FIELD_CONTACT(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>
      
      
    <p> CNIC: </p>
      <input type="text" placeholder="e.g. xxxxx-xxxxxxx-x" name="cnic" id="cnic" value="" onblur='SC._VALIDATE_FIELD_CNIC(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>

      <p> License: </p>
      <input type="text" placeholder="e.g. xxx-xxxx" name="license" id="license" value="" onblur='SC._VALIDATE_FIELD_FORMAT(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>
           
      <p> SALARY: </p>
      <input type="text" placeholder="e.g. 123456" name="salary" id="salary" value="" onblur='SC._VALIDATE_FIELD_MONEY(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>
           
      <p> BUS NUMBER: </p>
      <input type="text" placeholder="e.g. 123456" name="busnumber" id="busunmber" value="" onblur='SC._VALIDATE_FIELD_FORMAT(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>

    <p> CHOOSE Rating: </p>
      <select name="rating">
          <option value="1">1</option>
          <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
      </select>

           
      <br><br><br>
    <input type="submit" value="Create" name='submit'>
    <br><br><br>
</form>
</div>
</div>
<script src="../../includes/javascript.js"></script>
