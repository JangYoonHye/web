<?
unset($size);
   $size[0]=$size[1]=0;
   $x_size=$img_w;
   $y_size=$img_h;
   $img_name=$dir."/no_img.gif";
   $view_img="<a href='#none' onFocus='this.blur()'>";

if ($data[file_name1]) {
   $size=@getimagesize($data[file_name1]);
   if($size[0] == 0 ) $size[0]=1;
   if($size[1] == 0 ) $size[1]=1;
   if($size[0]>$size[1]) { $per=$size_factor / $size[0]; }
    else                 { $per=$size_factor / $size[1]; }
   $x_size=$size[0]*$per;
   $y_size=$size[1]*$per;
   $img_name="$data[file_name1]";
   $win_width = $size[0] + 10;
   $win_height = $size[1] + 50;
   $view_img="<a href='view.php?id=$id&no=$data[no]' onFocus='this.blur()'>";
	
}

 if($data[sitelink2])
 {
    $home_url = $data[sitelink2];
 }
 if($data[sitelink1])
 {
	$alink="<a href='$data[sitelink1]' target='_blank' onfocus='this.blur();'>";
 }
$sub="<font title='$data[subject]'></font>";
?>

<td width=<?echo (100 / $max_show_image);?>% valign=top align=center style='padding:15 5 0 5;'>
   <table align=center border=1 cellpadding=0 cellspacing=0 bordercolordark="white" bordercolorlight="#EAEAEA">
   <tr valign=top>
   <td>
       <table align=center border=0 cellpadding=10 cellspacing=0 width=<?=$img_w?>>
       <tr>
       <td align=center style='padding:5;' class=line><a href=<?=$data[sitelink1]?> target=_blank onfocus=this.blur()><img src=<?=$data[sitelink2]?> width=<?=$img_w?>  height=<?=$img_h?> border=0 style="filter:gray" onmouseover="this.style.filter=''" onmouseout="this.style.filter='gray'"></a><br><font style=font-family:tahoma;font-size:6pt;><b><?=$data[subject]?></b><?=$hide_cart_start?><br><input type=checkbox name=cart value="<?=$data[no]?>"><?=$hide_cart_end?><b><?=$a_modify?>MOD</a>&nbsp;<b><?=$a_delete?>DEL</a>&nbsp;</td>
       </tr>
       </table>
   </td>
   </tr>
   </table>
</td>


<?
  $image_loop++;
  if($image_loop>=$max_show_image)
  {
     echo"
       	</tr>
	<tr align=center>";
     $image_loop=0;
  }
?>