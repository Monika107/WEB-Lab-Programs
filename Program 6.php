<?php
$handle = fopen("counter.txt", "r") or die("Unable to open file");
$count = fread($handle, 16);
fclose($handle);
$handle = fopen("counter.txt", "w") or die("Unable to open file");
fwrite($handle, ++$count);
fclose($handle);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Visitor count</title>
    <style>
        h1, h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Welcome to the website</h1>
    <h2>total Visitors so far: <?php echo $count ?></h2>
</body>
</html>
