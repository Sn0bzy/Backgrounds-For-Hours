<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	h1 {color:white; font-family: tahoma; text-align:center;}
</style>

<?php 
if("06:00"< date("H:i") && date("H:i")<"12:00"){ 
    echo "<style type='text/css'>body {background: #3e3e3e url('img/morning.jpg')
    no-repeat fixed center;
    -webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}</style>"; // morning 
}elseif("12:00"<date("H:i")&& date("H:i")<"18:00"){ 
    echo "<style type='text/css'>body {background: #3e3e3e url('img/afternoon.jpg')
    no-repeat fixed center;
    -webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}</style>"; // afternoon 
}elseif("18:00"<date("H:i")&& date("H:i")<"24:00"){ 
    echo "<style type='text/css'>body {background: #3e3e3e url('img/evening.jpg')
    no-repeat fixed center;
    -webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}</style>"; // evening 
}else{ 
    echo "<style type='text/css'>body {background: #3e3e3e url('img/night.jpg')
    no-repeat fixed center;
    -webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}</style>"; // night 
}  
?>

</head>
<body>
<?php 
if("06:00"< date("H:i") && date("H:i")<"12:00"){ 
    echo "<h1> 06:00 - 12:00 = Morning Picture</h1>"; // morning 
}elseif("12:00"<date("H:i")&& date("H:i")<"18:00"){ 
    echo "<h1>12:00 - 18:00 = Afternoon Picture</h1>"; // afternoon 
}elseif("18:00"<date("H:i")&& date("H:i")<"24:00"){ 
    echo "<h1>18:00 - 24:00 = Evening Picture</h1>"; // evening 
}else{ 
    echo "<h1>After that 24:00 = Night Picture</h1>"; // night 
}  
?>

</body>
</html>
