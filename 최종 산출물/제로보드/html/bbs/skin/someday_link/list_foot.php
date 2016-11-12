<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?> style="padding-top:20;padding-bottom:20;">
  <tr>
    <td align=left><font style=font-family:tahoma;font-size:6pt;><b><?=$a_1_prev_page?>PREV</a></B><?=$print_page?>&nbsp;
<font style=font-family:tahoma;font-size:6pt;><B><?=$a_1_next_page?>NEXT</a></B>
<font style=font-family:tahoma;font-size:6pt;><B><?=$a_write?>&nbsp;WRITE</a>
<?=$hide_cart_start?>
<font style=font-family:tahoma;font-size:6pt;><B><?=$a_delete_all?>&nbsp;DELETE</a>
<?=$hide_cart_end?>
    </td>
    </form>

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
    </td>
<td align=right><font style=font-family:tahoma;font-size:6pt;><B><?=$a_member_join?>JOIN</a>
<?=$a_login?>&nbsp;LOGIN</a>
<?=$a_member_modify?>&nbsp;INFO</a>
<?=$a_logout?>&nbsp;LOGOUT</a>
<?=$a_setup?>&nbsp;SETUP</a></td></tr>
</table>
