<?
  /*
  ���� �����ϰų� �Ҷ� ��й�ȣ�� ����� �κ��Դϴ�
 
  <?=$target?> : ���������� ����ŵ�ϴ�. �������� ������;;;
  <?=$title?> : Ÿ��Ʋ�� ����մϴ�

  <?=$a_list?> : ��Ϻ��� ��ũ
  <?=$a_view?> : ���뺸�� ��ũ

  <?=$invisible?> : ����� �����ڰ� ������ ���� ��ư�� ���Դϴ�;;

  <?=$input_password?> : ��й�ȣ�� ����� input=text ��� 
  */
?>

<br><br><br>
<div align=center>
<table border=0 width=300>
<form method=post name=delete action=<?=$target?>>
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
<input type=hidden name=c_no value=<?=$c_no?>>
<tr>
   <td align=center><b><?=$title?></b></td>
</tr>
<tr height=50>
   <td align=center>
     <?=$input_password?> <input type=submit value=' OK ' class=submit>
   </td>
</tr>
<tr align=center>
  <td colspan=2 class=en>
     <?=$a_list?>list</a> &nbsp; <?=$a_view?>view</a>
  </td>
</tr>
</table>

