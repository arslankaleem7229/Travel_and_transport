<head>
    <link rel="stylesheet" href="/travel_and_transport/includes/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/themedriver.php");?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/connection.php")?>
    <div class="form" Style="width:96%">
    <div id="left" Style="width:36%;height:650px;padding:0px;"> <p Style="margin-top:0px;text-align:center;font-size:70px;color: #ff4d4d;opacity:0.7;">U<br>P<br>D<br>A<br>T<br>E</p></div>
    
    
    
   
  <div id="right" Style="width:64%;height:1000px;"><form action="/travel_and_transport/CRUD/driver/update.php" method="post">
      
     
   <p>DRIVER NAME:</p>
      <!-- FIRST NAME -->
<input type='text' placeholder="First Name e.g.john" name='first_name' value="" id="fname" onkeyup="check(this,id,'#fnameValid','#fnameInvalid')">

    <span Style="padding:10px;">
      <span><img class="valid" id='fnameValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='fnameInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>
      <br><br>
      
      <!-- LAST NAME -->
          <input type="text" placeholder="Last Name e.g.doe" name="last_name" value="" id="lname" onkeyup="check(this,id,'#lnameValid','#lnameInvalid')">
           
      
    <span Style="padding:10px;">
      <span><img class="valid" id='lnameValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='lnameInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>
      
      
    <p>HOME ADDRESS:</p>
    <input type="text" placeholder="e.g.11 Street Near Sandiego Harbour,California" name="address" id="address" value="" onkeyup="check(this,id,'#addressValid','#addressInvalid')">
      
           
      <span Style="padding:10px;">
      <span><img class="valid" id='addressValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='addressInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>

      <p> PHONE NUMBER: </p>
    <input type="text" placeholder="e.g. xxx-xxxxxxxx" name="phone" id="phone" value="" onkeyup="check(this,id,'#phValid','#phInvalid')"> 
      
           
      <span Style="padding:10px;">
      <span><img class="valid" id='phValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='phInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>
      
    <p> CNIC: </p>
      <input type="text" placeholder="e.g. xxxxx-xxxxxxx-x" name="cnic" id="cnic" value="" onkeyup="check(this,id,'#cnicValid','#cnicInvalid')"> 
           
      <span Style="padding:10px;">
      <span><img class="valid" id='cnicValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='cnicInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>
      <p> License: </p>
      <input type="text" placeholder="e.g. xxx-xxxx" name="license" id="license" value="" onkeyup="check(this,id,'#licenseValid','#licenseInvalid')"> 
           
      <span Style="padding:10px;">
      <span><img class="valid" id='licenseValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='licenseInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>
      <p> SALARY: </p>
      <input type="text" placeholder="e.g. 123456" name="salary" id="salary" value="" onkeyup="check(this,id,'#salaryValid','#salaryInvalid')"> 
           
      <span Style="padding:10px;">
      <span><img class="valid" id='salaryValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='salaryInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>
      
      <p> BUS NUMBER: </p>
      <input type="text" placeholder="e.g. 123456" name="busnumber" id="busunmber" value="" onkeyup="check(this,id,'#busnumberValid','#busnumberInvalid')"> 
           
      <span Style="padding:10px;">
      <span><img class="valid" id='busnumberValid' src="/travel_and_transport/icons/checkedGreen.png"/></span>
     <span><img class="invalid" id='busnumberInvalid' src="/travel_and_transport/icons/checkedRed.png" ></span>
    </span>
      
    <p> CHOOSE Rating: </p>
      <select name="rating">
          <option value="1">1</option>
          <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
      </select>

           
      <br><br><br>
    <input type="submit" value="UPDATE" name='submit'>
    <br><br><br>
</form>
</div>
</div>
<script>
      var valid = document.getElementById("icons");
    var invalid = document.getElementById("invalid"); 
    
    function check(x,id,a,b)
    {
        
        var id = document.getElementById(id).value.length;
      
        if(id==0) 
        {
        $(a).css('opacity',0);
        $(b).css('opacity',1);
        }
        else
        {
        $(a).css('opacity',1);
        $(b).css('opacity',0);
        }
    }
       
    
</script>

<script src="../../includes/javascript.js"></script>
