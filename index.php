<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <h1><? echo 'Hello World!'; ?> </h1>
    I`m <? echo $_REQUEST['name'] ?? 'Noname'; ?>
</body>
</html>
<?php

