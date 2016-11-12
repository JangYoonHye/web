<tr onMouseOver=this.style.backgroundColor='f0f0f0' onMouseOut=this.style.backgroundColor=''>
  <td height=45 width=45 nowrap align=center class=small style="padding-top:2;"><s><?=$date=date("ymd",$data[reg_date])?></s></td>
  <td align=left style="padding-top:3;" colspan="2"><?=$insert?><?=$subject?>&nbsp;&nbsp;<?=$icon?></td>
  <td style="padding-right:10" nowrap colspan=2 width=40 align=center class=small style="padding-top:2;"><b>COMMENT.&nbsp;</b><?$comment_num="$data[total_comment]";
if($data[total_comment]==0) {
  $comment_num="0";}
echo "$comment_num";?></td>
<?=$hide_cart_start?>
<td><input type=checkbox name=cart value="<?=$data[no]?>"></td>
<?=$hide_cart_end?>
</tr>

<tr><td colspan=6 height=1 class=line></td></tr>