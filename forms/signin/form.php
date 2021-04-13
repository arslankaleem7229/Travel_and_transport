<html>

<head>
    <link rel="stylesheet" href="forms\signin\signinstyle.css">
</head>
<div class="_FORM form">
    <div class="LEFT">
        <form action="/travel_and_transport/forms/signin/insert.php" method="post">
            <div class="logo">
                <b>
                    <p class="formheader">SIGNUP</p>
                </b>
            </div>
            <p>FIRST NAME:</p>
            <input type='text' placeholder="First Name e.g.john" name='first_name' value="" id="first_name"
                onblur='SC._VALIDATE_FIELD_STRING(this)'>
            <label id="redtick">&#10003;</label>
            <br>
            <p>LAST NAME:</p>
            <input type='text' placeholder="Last Name e.g.doe" name='last_name' value="" id="last_name"
                onblur='SC._VALIDATE_FIELD_STRING(this)'>
            <label id="redtick">&#10003;</label>
            <p>EMAIL:</p>
            <input type='text' placeholder="e.g username@something.com" name='username' id="username" value=""
                onblur='SC._VALIDATE_FIELD_EMAIL(this)'>
            <label id="redtick">&#10003;</label>
            <p>Password:</p>
            <input type='password' placeholder="e.g.***********" name='password' id="password" value=""
                onblur='SC._VALIDATE_FIELD_PASSWORD(this)'>
            <label id="redtick">&#10003;</label>
            <p>Re-Type Password:</p>
            <input type='password' placeholder="e.g.***********" name='repassword' id="repassword" value=""
                onblur='SC._VALIDATE_FIELD_PASSWORD(this)'>
            <label id="redtick">&#10003;</label>
            <p> CONTACT NUMBER: </p>
            <input type="text" placeholder="e.g. xxxx-xxxxxxxx" name="contact" value="" id="contact"
                onblur='SC._VALIDATE_FIELD_CONTACT(this)'>
            <label id="redtick">&#10003;</label>
            <p>Category: </p>
            <select id="signincategory" name="signincategory">
                <option value="user">User</option>
                <option value="admin">Administrator</option>
            </select>
            <br><br>
            <input id="btn" type="submit" value="Create" name='submit'>
            <br><br><br>
        </form>
    </div>
    <!--===========================================================================================================================-->
    <div class="RIGHT">
        <form action="/travel_and_transport/forms/signin/admincheck.php" method="post">
            <br>
            <div class="partition">
                <div class="logo">
                    <b>
                        <p class="formheader">ADMIN LOGIN</p>
                    </b>
                </div>
                <div class="subpartition">
                    <p>EMAIL:</p>
                    <input type='text' placeholder="Enter Email" name='loginusername' id="loginusername"
                        onblur='SC._VALIDATE_FIELD_EMAIL(this)'>
                    <label id="redtick">&#10003;</label>
                    <p>Password:</p>
                    <input type='password' placeholder="Enter password" name='loginpassword' id="loginpassword"
                        onblur='SC._VALIDATE_FIELD_PASSWORD(this)'>
                    <label id="redtick">&#10003;</label>
                    <br><br>
                    <input id="btn" type="submit" value="LogIn" name="submit">
                    <a href="#">Reset password ?</a>
                    <br><br>
                </div>
            </div>
            <br>
        </form>
        <div class="partition">
            <form action="/travel_and_transport/forms/signin/usercheck.php" method="post">
                <div class="logo">
                    <b>
                        <p class="formheader">USER LOGIN</p>
                    </b>
                </div>
                <div class="subpartition">
                    <p>EMAIL:</p>
                    <input type='text' placeholder="Enter Email" name='login2username' id="login2username"
                        onblur='SC._VALIDATE_FIELD_EMAIL(this)'>
                    <label id="redtick">&#10003;</label>
                    <p>Password:</p>
                    <input type='password' placeholder="Enter password" name='login2password' id="login2password"
                        onblur='SC._VALIDATE_FIELD_PASSWORD(this)'>
                    <label id="redtick">&#10003;</label>
                    <br><br>
                    <input id="btn" type="submit" value="LogIn" name="submit">
                    <a href="#">Reset password ?</a>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
</div>

</html>