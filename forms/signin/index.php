<!doctype html>
<html>

<head>
    <title>TRAVEL AND TRANSPORT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="/travel_and_transport/includes/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body> <?php
if (isset($_GET['msg'])) {
    echo '<a href="/travel_and_transport/index.php">' . $_GET['msg'] . '</h1></a>';
}

?> <?php include $_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/forms/signin/form.php"?> <script
        src="/includes/javascript.js"></script>
</body>

</html>