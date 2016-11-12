<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>


<tr>
<td align=center style="padding-top:7;" class=list><BR>
<?=$a_prev_page?>£¼</a> <span style="font-size:5pt;"><font face=tahoma><?=$print_page?></font></span> <?=$a_next_page?>¢º</a>
</td></tr><tr>
 <td align=right style="padding-top:5;" valign=top class=list2><BR>
<?=$a_list?>££</a>&nbsp;&nbsp;<?=$a_write?>¥×</a>&nbsp;&nbsp;<?=$a_delete_all?>¡¿</a></td>
</form>
</tr>
</table>

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr><td width=1>
<form method=post name=search action=<?=$PHP_SELF?>>
<input type=hidden name=page value=<?=$page?>>
<input type=hidden name=id value=<?=$id?>>
<input type=hidden name=select_arrange value=<?=$select_arrange?>>
<input type=hidden name=desc value=<?=$desc?>>
<input type=hidden name=page_num value=<?=$page_num?>>
<input type=hidden name=selected>
<input type=hidden name=exec>
<input type=hidden name=sn value="<?=$sn?>">
<input type=hidden name=ss value="<?=$ss?>">
<input type=hidden name=sc value="<?=$sc?>">
<input type=hidden name=category value="<?=$category?>">
</td></tr>

<tr>
<td align=right>
<input type=text name=keyword value="<?=$keyword?>" style="width:150;height:18;" class=search>
</td>
</tr>

</form>
</table>