<?php

require_once 'vendor/autoload.php';

$pages=new\app\Http\Controllers\pages();

?>

<!DOCTYPE html>
<html>
<head>
    <title> MangaStore </title>
</head>
<body>

<h1><?php echo $pages ->show(); ?></h1>

<pre><?php var_dump ($pages-> returnArray());?></pre>
</body>
</html>

