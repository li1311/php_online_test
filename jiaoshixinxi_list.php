<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ʦ��Ϣ</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>���н�ʦ��Ϣ�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: ���ţ�<input name="gonghao" type="text" id="gonghao" style='border:solid 1px #000000; color:#666666;width:80px' /> ������<input name="xingming" type="text" id="xingming" style='border:solid 1px #000000; color:#666666;width:80px' /> �Ա�<select name='xingbie' id='xingbie' style='border:solid 1px #000000; color:#666666;'><option value="">����</option><option value="��">��</option><option value="Ů">Ů</option></select> ���̿γ̣�<input name="zhujiaokecheng" type="text" id="zhujiaokecheng" style='border:solid 1px #000000; color:#666666;width:80px' /> ְ�ƣ�<input name="zhicheng" type="text" id="zhicheng" style='border:solid 1px #000000; color:#666666;width:80px' /> ��ϵ�绰��<input name="lianxidianhua" type="text" id="lianxidianhua" style='border:solid 1px #000000; color:#666666;width:80px' /> ����
  <select name="paixu" id="paixu">
    <option value="addtime">���ʱ��</option>
    
  </select>
  <select name="px" id="px">
    <option value="desc">����</option>
    <option value="asc">����</option>
  </select>
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>�Ա�</td>    <td bgcolor='#CCFFFF'>���̿γ�</td>    <td bgcolor='#CCFFFF'>��Ƭ</td>    <td bgcolor='#CCFFFF'>ְ��</td>    <td bgcolor='#CCFFFF'>��ϵ�绰</td>    
	
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
    <td width="120" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from jiaoshixinxi where 1=1";
  if ($_POST["gonghao"]!=""){$nreqgonghao=$_POST["gonghao"];$sql=$sql." and gonghao like '%$nreqgonghao%'";}if ($_POST["xingming"]!=""){$nreqxingming=$_POST["xingming"];$sql=$sql." and xingming like '%$nreqxingming%'";}if ($_POST["xingbie"]!=""){$nreqxingbie=$_POST["xingbie"];$sql=$sql." and xingbie like '%$nreqxingbie%'";}if ($_POST["zhujiaokecheng"]!=""){$nreqzhujiaokecheng=$_POST["zhujiaokecheng"];$sql=$sql." and zhujiaokecheng like '%$nreqzhujiaokecheng%'";}if ($_POST["zhicheng"]!=""){$nreqzhicheng=$_POST["zhicheng"];$sql=$sql." and zhicheng like '%$nreqzhicheng%'";}if ($_POST["lianxidianhua"]!=""){$nreqlianxidianhua=$_POST["lianxidianhua"];$sql=$sql." and lianxidianhua like '%$nreqlianxidianhua%'";}
  if($_POST["paixu"]!="")
  {
  	$sql=$sql." order by ".$_POST["paixu"]." ".$_POST["px"]."";
  }
  else
  {
  	$sql=$sql." order by id desc";
  }
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//ÿҳ������
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{




  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,gonghao);?></td>    <td><?php echo mysql_result($query,$i,xingming);?></td>    <td><?php echo mysql_result($query,$i,mima);?></td>    <td><?php echo mysql_result($query,$i,xingbie);?></td>    <td><?php echo mysql_result($query,$i,zhujiaokecheng);?></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,zhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,zhaopian) ?>' width='80' height='88' border='0'></a></td>    <td><?php echo mysql_result($query,$i,zhicheng);?></td>    <td><?php echo mysql_result($query,$i,lianxidianhua);?></td>        
	
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="120" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=jiaoshixinxi" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="jiaoshixinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a> <a href="jiaoshixinxi_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='jiaoshixinxi_listxls.php';" value="����EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="jiaoshixinxi_list.php?pagecurrent=1">��ҳ</a>, <a href="jiaoshixinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="jiaoshixinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="jiaoshixinxi_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

</body>
</html>

