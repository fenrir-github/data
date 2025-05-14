<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="refresh" content="10;" />
        <title>php env</title>
</head>
<body>
<ul>
  <li>SERVER_ADDR: <?php echo $_SERVER['SERVER_ADDR']; ?></li>
  <li>SERVER_NAME: <?php echo $_SERVER['SERVER_NAME']; ?></li>
  <li>REMOTE_ADDR: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
  <li>HTTP_X_FORWARDED_FOR: <?php echo $_SERVER['HTTP_X_FORWARDED_FOR']; ?></li>
</ul>
<pre>
<?php
print_r($_SERVER);
?>
</body>
</html>


