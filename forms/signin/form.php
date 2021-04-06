<html>
    <head>
           <link rel="stylesheet" href="/travel_and_transport/includes/style.css">  
    </head>

    
    <div class="_FORM form">
        
    <div class="LEFT">  <form action="/travel_and_transport/forms/signin/insert.php" method="post">
        <div class="logo">
          <b><p Style="text-align:center;font-size:25px;color: #ff4d4d;opacity:0.7;">SIGNUP</p></b></div>
     <p>FIRST NAME:</p>
<input type='text' placeholder="First Name e.g.john" name='first_name' value="" id="first_name" onblur='SC._VALIDATE_FIELD_STRING(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>

      <br>
      
      <p>LAST NAME:</p>
          <input type='text' placeholder="Last Name e.g.doe" name='last_name' value="" id="last_name" onblur='SC._VALIDATE_FIELD_STRING(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>

           <p>EMAIL:</p>
       <input type='text' placeholder="e.g username@something.com" name='username' id="username" value="" onblur='SC._VALIDATE_FIELD_EMAIL(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>

   
      <p>Password:</p>
    <input type='password' placeholder="e.g.***********" name='password' id="password" value=""  style = "background-color: #333333;
    border: none; color: #666666;padding: 10px;width: 42%;border-radius: 3px;" onblur='SC._VALIDATE_FIELD_PASSWORD(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>
       <p>Re-Type Password:</p>
    <input type='password' placeholder="e.g.***********" name='repassword' id="repassword" value=""  style = "background-color: #333333;border: none;color: #666666;padding: 10px;width: 42%;border-radius: 3px;" onblur='SC._VALIDATE_FIELD_PASSWORD(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>
      
       <p> CONTACT NUMBER: </p>
    <input type="text" placeholder="e.g. xxxx-xxxxxxxx" name="contact" value="" id="contact" onblur='SC._VALIDATE_FIELD_CONTACT(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>

    <p>Category: </p>
         <select id="signincategory" name="signincategory">
             <option value="user">User</option>
         <option value="Admin">Administrator</option>
    </select>
      <br><br>
      
      <input id="btn" type="submit" value="Create" name='submit' >
    <br><br><br>
</form>
</div> 
    <!--===========================================================================================================================-->

  <div class="RIGHT"><form action="/travel_and_transport/forms/signin/admincheck.php" method="post">
      <br>
  <div class="partition">
      <div class="logo">
          <b><p Style="text-align:center;font-size:25px;color: #ff4d4d;opacity:0.7;">ADMIN LOGIN</p></b></div>
     <p>EMAIL:</p>
       <input type='text' placeholder="bhutta123@gmail.com" name='loginusername' id="loginusername" value="" onblur='SC._VALIDATE_FIELD_EMAIL(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>
      <p>Password:</p>
    <input type='password'  placeholder="123" name='loginpassword' id="loginpassword" value=""  style = "background-color: #333333;
    border: none;
    color: #666666;
    padding: 10px;
    width: 50%;
    border-radius: 3px;" onblur='SC._VALIDATE_FIELD_PASSWORD(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>
      <br><br>
      <input id="btn" type="submit" value="LogIn" name="submit" >
      <a href="#">Reset password ?</a>
      <br><br>
      </div>
      <br>
      </form>
      <div class="partition"><form action="/travel_and_transport/forms/signin/usercheck.php" method="post">
          <div class="logo">
          <b><p Style="text-align:center;font-size:25px;color: #ff4d4d;opacity:0.7;">USER LOGIN</p></b></div>
     <p>EMAIL:</p>
       <input type='text'  placeholder="arslankaleem71@gmail.com" name='login2username' id="login2username" value="" onblur='SC._VALIDATE_FIELD_EMAIL(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>
      <p>Password:</p>
    <input type='password' placeholder="123456789" name='login2password' id="login2password" value=""  style = "background-color: #333333;
    border: none;
    color: #666666;
    padding: 10px;
    width: 50%;
    border-radius: 3px;" onblur='SC._VALIDATE_FIELD_PASSWORD(this)'> 
      <label style="color:red;font-size:20px;">&#10003;</label>
          <br><br>
          
      <input id="btn" type="submit" value="LogIn" name="submit" >
      <a href="#">Reset password ?</a>
          <br>
          <br>
</form>
</div>
</div>
    </div>
</html>