<table cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr>
<td>

<table border=0 cellpadding=0 cellspacing=0 width=100% class=color3>
<tr>
<td style='padding:10;'>
    <table cellpadding=0 cellspacing=0 width=100%>
    <tr>
    <td nowrap width=45 class=thm7 style='padding-bottom:2;'><font class=thm7><b><?=$a_modify?>&nbsp;&nbsp;M</a> <?=$a_delete?>X</a></td>
    <td width=100%></td>
    </tr>
    <tr>
    <td colspan=2 valign=top style="padding-top:5;" align="justify">
<?
if($reply_data[is_secret]&&!$is_admin&&$data[ismember]!=$member[no]) echo"<b>¢¾¢¾¢¾</b>";
else echo $memo;
?>
    </td>
    </tr>
    </table>
</td>
</tr>
</table>

</td>
</tr>
</table>

<br>