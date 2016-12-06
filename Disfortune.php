<?php

$hour=date("H");

if($hour>=6 && $hour<12){
	$img='morning';
}
elseif($hour>=12 && $hour<18){
	$img='day';
}
elseif($hour>=18 && $hour<23){
	$img='evening';
}
else{
	$img='night';
}

?>

<DOCTYPE html>
<html>

<title>me</title>
<meta charset="cp1251"/>
 <head>

<style>
            ul.nav{
                margin-left: 120px;
                margin-top: 50px;
                padding-left: 0px;
                list-style: none;
                display: block;
            }
            .nav li { 
                float: left;
                display: block;
                overflow: hidden;
            }
            ul.nav a {
                display: block;
                width: 15em;
                padding:15px;
                margin: 0 5px;
                background-color: #3f3e3e;
                border: 1px dashed #333;
                text-decoration: none;
                color: #A9A9A9;
                text-align: center;
            }
            ul.nav a:hover{
                background-color: #333;
                color: #90EE90;
            }
             
.content{
	display: block;
	background: rgba(255,255,255,0.6);
	margin: 15px 125px;
	height: 550px;
	width: 1120;
	float: left;
}


        </style>
</head>

 <body style= "width: 100%; height: 760px;
 background: url(img/<?php echo $img; ?>.jpg);
 background-size: cover;">
 <ul class="nav">
            <li><a href="Disfortune.php">Disfortune</a></li>
            <li><a href="game.php">Game</a></li>
            <li><a href="index.php">News</a></li>
            <li><a href="video.php">Video</a></li>
        </ul>
        
<ul class="content">

<?php
$connection=mysql_connect("localhost","mybd_user","admin123");
$db=mysql_select_db("my_bd");
mysql_query("SET NAMES 'cp1251'");
if(! $connection|| ! $db)
{
exit(mysql_error());
}
$result=mysql_query("SELECT * FROM dis");
mysql_close();
while($row=mysql_fetch_array($result))
{?>


<p> <?php echo $row['new'] ?></p>
<hr/>

<?php } ?>


 </body>
</html>