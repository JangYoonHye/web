<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>


<tr>
<td width=100% nowrap valign=top style='padding-top:13;padding-bottom:13;' align="justify">

<table border=0 cellpadding=0 cellspacing=0 width=100%>
<tr>
<br><td width=100% valign=top nowrap class=list><b><i><?=$date=date("F, d,  l, Y",$data[reg_date])?></i></b></font><br><b><i><?=$date=date("A H : i : s",$data[reg_date])?></i></b><br><br><br><font style='font-family:tahoma;font-size:5pt;'><?=$face_image?><font style='font-family:µ¸¿ò;font-size:8pt;'> <?=$name?> <font class=list><b><? if($data[homepage]){?><a href="<?=$data[homepage]?>" target="_blank" onfocus='this.blur()'>&nbsp;¡ã</a><? } else { ?><? } ?><?=$a_reply?>&nbsp;&nbsp;¡Ä</a> 
<?=$a_delete?>&nbsp;¡¿</a></td>
<?=$hide_cart_start?><td><input type=checkbox name=cart value="<?=$data[no]?>"></td><?=$hide_cart_end?>
</tr>
<tr>
<td colspan=4 valign=top style='padding:10 0 10 0;' class=thm7><?
if($data[is_secret]&&!$is_admin&&$data[ismember]!=$member[no]) echo"<b>THIS MESSEAGE IS SECRET</b>";
else echo $memo;
?>
</td>
</tr>
</table>
</td>
</tr>
</table>


<?
 include "include/get_reply.php";
?>