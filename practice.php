<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./Script/script.js"></script>
    <title>Practicing JavaScript</title>
    <style>:root{--themecolor:#fff;background:#1F1F1F;color:#fff}::-webkit-scrollbar{width:10px}::-webkit-scrollbar-track{background:#68557d4a}::-webkit-scrollbar-thumb{background:#68557dbc}::-webkit-scrollbar-thumb:hover{background:#555}body{margin:0;padding:2rem 2rem 0;font-family:sans-serif;font-size:1.4rem;letter-spacing:.6px;background-color:#202020a1;-webkit-backdrop-filter:blur(10rem);backdrop-filter:blur(10rem);height:calc(100vh - 2rem);display:flex;justify-content:center;align-items:center; flex-direction:column}

</style>

</head>
<body class="darkBody">
   <?php
    $password = "anand";
    $passwordHashed = password_hash($password,PASSWORD_BCRYPT);
    echo $passwordHashed."<br>";
    $passwordUnhashing = password_verify($password, $passwordHashed);
   ?>
</body>
</html>