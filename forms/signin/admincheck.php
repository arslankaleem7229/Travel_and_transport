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
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/connection.php")?>
<?php
    
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST['loginusername'];
    $password = $_POST['loginpassword'];
        $category = "admin";
    $sql = "SELECT * FROM login WHERE USERNAME LIKE '%$username%' and CATEGORY LIKE '%$category%' and PASSCODE LIKE '%$password%'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    }
    session_start();
    include("functions.php");
    $message="";
    if($row==0){
        header('location: /travel_and_transport/index.php?msg="ID or Password dont match!"');
    }
    else{
        $_SESSION["id"] = 1001;
		$_SESSION["loginusername"] = $_POST["loginusername"];
		$_SESSION['loggedin_time'] = time(); 
    }
if(isset($_SESSION["id"])) {
	if(!isLoginSessionExpired()) {
		header('location: /travel_and_transport/forms/Administrator');
        
	} else {
		header("Location:/travel_and_transport/logout.php?session_expired=1");
	}
}
if(isset($_GET["session_expired"])) {
	$message = "Login Session is Expired. Please Login Again";
}
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/footer.php");?>
</html>
<script src="../../includes/javascript.js"></script>