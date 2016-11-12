</td>
</tr>

<tr>
 <td>
<!-- 버튼 부분 -->
<table border=0 cellspacing=1 cellpadding=1 width=100%>
<tr>
 <td class=en>
  <?=$a_write?>Write</a>
<?=$a_setup?>admin </a>
 </td>
 <td align=right class=en>
  <?=$a_delete_all?>delete</a>
 </td>
</form>
</tr>
</table>

 </td>
</tr>
<tr>
<!-- 검색폼 부분 ---------------------->
<!-- 폼태그 부분;; 수정하지 않는 것이 좋습니다 -->
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
<!----------------------------------------------->
 <td>

<table border=0 width=100% cellspcing=0 cellpadding=0>
<!-- 페이지 출력 ---------------------->
<tr>
 <td align=right colspan=2>
   <?=$a_prev_page?>[prev]</a> <font color=white><?=$print_page?></font> <?=$a_next_page?>[next]</a>
 </td>
</tr>
</form>
</table>

</td></tr></table>

</td></tr></table>
