<table cellpadding="0" cellspacing="0" width=<?=$width?>>
<tr>
<td width=1>
<form method=post name=write action=write_ok.php enctype=multipart/form-data>
<input type=hidden name=page value=<?=$page?>>
<input type=hidden name=id value=<?=$id?>>
<input type=hidden name=no value=<?=$no?>>
<input type=hidden name=select_arrange value=<?=$select_arrange?>>
<input type=hidden name=desc value=<?=$desc?>>
<input type=hidden name=page_num value=<?=$page_num?>>
<input type=hidden name=keyword value="<?=$keyword?>">
<input type=hidden name=category value="<?=$category?>">
<input type=hidden name=sn value="<?=$sn?>">
<input type=hidden name=ss value="<?=$ss?>">
<input type=hidden name=sc value="<?=$sc?>">
<input type=hidden name=mode value="<?=$mode?>">
</td></tr>

<tr>
<td valign=top>

<table border=0 cellsapcing=0 cellpadding=0 width=100%>
<tr><td><input type=hidden name=subject value="Guest" class=input></td></tr>

<tr>
<td width=100% align=left><br><textarea name=memo style="width:100%;height:70;" class=input><?=$memo?></textarea></td>
</tr>


<tr>
<td width=50% class=guest align=left valign=top><input type=submit value=" ¥× " class=guestbutton><input type=button value=" N " class=guestbutton onclick=history.back()>&nbsp;&nbsp;<?=$hide_notice_start?><input type=checkbox name=notice <?=$notice?> value=1>NOTICE&nbsp;<?=$hide_notice_end?>
<?=$hide_html_start?><input type=checkbox name=use_html <?=$use_html?> value=1>HTML&nbsp;<?=$hide_html_end?>
<?=$hide_secret_start?>
<? if($member[level] < 10) { ?>
<input type=checkbox name=is_secret <?=$secret?> value=1 checked>SHEE
<? } ?>
<?=$hide_secret_end?>
</td>
</td>
</tr>
</form>
</table>

</td>
</tr>
</table>

<br><br>
