<html>
<head>
<title>ICON SELECT</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script language language="JavaScript">
<!--
function chgicon(num)
{
window.opener.document.write.sitelink1.selectedIndex = num-1;
window.opener.back_c();
self.close();
}
//-->
</script>
</head>

<body>

<center></center>

<table border=0 cellspacing=0 cellpadding=0 align=center width=100%>
<tr>
<td width=100% align=center style="padding-top:20;">
<?
for($i=1;$i<10;$i++) echo "<a href='javascript:chgicon(0$i)' onfocus='this.blur()'><img src='icon/icon_0$i.gif' border=0></a> ";
?>
<?
for($j=10;$j<65;$j++) echo "<a href='javascript:chgicon($j)' onfocus='this.blur()'><img src='icon/icon_$j.gif' border=0></a> ";
?>
</td>
</tr>
</table>

</body>
</html>