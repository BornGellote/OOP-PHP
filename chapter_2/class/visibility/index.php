<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visibility</title>
</head>
<body>
<?php

    require 'FileReader.php';
    require 'CsvFileReader.php';

    $CsvFileReader = new CsvFileReader();
    $FileReader = new FileReader();

?>
<p><?php echo $CsvFileReader->getData(); ?></p>
<p><?php echo $FileReader->getData(); ?></p>
</body>
</html>

