<?php
session_start();
if (!isset($_SESSION['registered'])){
    header('Location: /register');
    //echo "not registered";
}
if (!isset($_SESSION['logged'])){
    header('Location: /login');
    //echo "not logged";
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log out</title>
</head>
<body>
<?php
session_destroy();
echo "
<p>Uspesne odhlasen</p>
<a href='register.php'>Registrovat</a>
"
?>
</body>
</html>