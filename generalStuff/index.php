<html>
<head>
    <title>General Data Index</title>
</head>
<body>
<div>
<?php
if($handle = opendir('C:\xampp\htdocs\general_stuff\generalStuff')){
    $baseUrl = 'http://localhost/general_stuff/generalStuff/';
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry != 'index.php') { ?>
        <a href="<?=$baseUrl.$entry;?>" target="_blank"><?=$entry; ?></a><br>
    <?php
        }
    }
}
?>
</div>
</body>
</html>