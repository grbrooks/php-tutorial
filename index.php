<!DOCTYPE html>
<?php include('include/config.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('templates/header.php');?>
    <?php include('templates/menu.php');?>
    <?php
    $query =mysqli_query($sql,"SELECT * FROM tbl_articles");
    while($row =mysqli_fetch_assoc($query))
    {
        $title = $row['title'];
        $content = $row['content'];
    }?>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $content; ?></p>
    <?php include('templates/footer.php');?>
    <?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo readfile("webdictionary.txt");
?>
</body>
</html>