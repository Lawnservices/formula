<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">
     <input type="text" placeholder="name" name="name">
     <input type="email" placeholder="email" name="email">
     <input type="text" placeholder="asunto" name="asunto">
     <textarea  name="msg" placeholder="mensage"></textarea>
     <input type="submit">

    </form>
    <?php
    include("correo.php");
    ?>
</body>
</html>