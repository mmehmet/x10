<html>
<head>
<link rel="icon" type="image/ico" href="x10.ico">
<style type="text/css">
body		{color:black; background:white; font-family:"Arial",sans-serif;}
a:link		{color:yellow; text-decoration:none;}
a:visited	{color:yellow; text-decoration:none;}
a:hover		{color:white; text-decoration:none;}
table		{background:black; font-size:64px; text-align:center;}
table	td.off	{background:#660000; border-top:10px solid #bb0000; border-left:10px solid #ff6633; border-right:10px solid #001; border-bottom:10px solid #300;}
table	td.on	{background:#0000cc; border-top:10px solid blue; border-left:10px solid #3366ff; border-right:10px solid black; border-bottom:10px solid #000033;}
table	td.stof	{background:#010; color:#000;}
table	td.ston	{background:#fef; color:#fff;}
</style>
</head>
<body>
<table align="center">
<tr>
	<td class="off"><a href="lon.php">lounge on</a></td>
	<td class="on"><a href="loff.php">lounge off</a></td>
<?php
$heat = file_get_contents('../lightstate', NULL, NULL, 0, 2);
if ($heat == 'of') {
        echo'<td class="stof">off</td>';
} else {
        echo'<td class="ston">on</td>';
}
?>
</tr><tr>
	<td class="off"><a href="porchon.php">room on</a></td>
	<td class="on"><a href="porchoff.php">room off</a></td>
<?php
$heat = file_get_contents('../rmstate', NULL, NULL, 0, 2);
if ($heat == 'of') {
        echo'<td class="stof">off</td>';
} else {
        echo'<td class="ston">on</td>';
}
?>
</tr><tr>
        <td class="off"><a href="hon.php">heat on</a></td>
        <td class="on"><a href="hoff.php">heat off</a></td>
<?php
$heat = file_get_contents('../hrstate', NULL, NULL, 0, 2);
if ($heat == 'of') {
        echo'<td class="stof">off</td>';
} else {
        echo'<td class="ston">on</td>';
}
?>
</tr>
<table>
</body>
</html>
