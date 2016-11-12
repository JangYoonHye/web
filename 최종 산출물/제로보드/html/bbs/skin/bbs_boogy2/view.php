<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr><td height=1 colspan=2 class=line></td></tr>
<tr><td colspan=6 height=3 background="<?=$dir?>/line2.png"></td></tr>
<tr><td colspan=6 height=1 class=line></td></tr>

<tr>
<td height=45 width=100% nowrap align=center><font class=small><b>SUBJECT .&nbsp;</b></font><?=$subject?></td>
</tr>
<tr><td height=1 colspan=2 class=line></td></tr>
<tr><td colspan=6 height=3 background="<?=$dir?>/line2.png"></td></tr>
<tr><td colspan=6 height=1 class=line></td></tr>

<tr bgcolor=f0f0f0>
<td align=center height=45 width=100% style="padding-top:3;"><font class=small><b>WRITTEN BY .</b></font>&nbsp;<?=$name?><font class=small>&nbsp;&nbsp;&nbsp;&nbsp;<b>DATE .</b>&nbsp;<s><?=$date=date("ymd",$data[reg_date])?></s></td>
</tr>

<tr><td height=1 colspan=2 class=line></td></tr>
</table>

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
<td style='padding:15 10 15 10;'>
<?=$upload_image2?>
<p><?=$memo?></p>
</td>
</tr>
<tr><td height=1 colspan=2 class=line></td></tr>
</table>
<?=$hide_comment_start?> 
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>> 
<?=$hide_comment_end?>