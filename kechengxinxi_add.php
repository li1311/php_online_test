<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$kechengmingcheng=$_POST["kechengmingcheng"];$xueshi=$_POST["xueshi"];$xuefen=$_POST["xuefen"];$leixing=$_POST["leixing"];$beizhu=$_POST["beizhu"];
	//ischongfu("select id from kechengxinxi where kechengmingcheng='".$kechengmingcheng."'");
	$sql="insert into kechengxinxi(kechengmingcheng,xueshi,xuefen,leixing,beizhu) values('$kechengmingcheng','$xueshi','$xuefen','$leixing','$beizhu') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='kechengxinxi_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
<p>��ӿγ���Ϣ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.kechengmingcheng.value==""){alert("������γ�����");document.form1.kechengmingcheng.focus();return false;}if(document.form1.xueshi.value==""){alert("������ѧʱ");document.form1.xueshi.focus();return false;}if(document.form1.xuefen.value==""){alert("������ѧ��");document.form1.xuefen.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
 <?php
//islbdq $sql="select * from melieibaoduqubiaoiguo where id=".$_GET["id"];
//islbdq $query=mysql_query($sql);
//islbdq $rowscount=mysql_num_rows($query);
//islbdq if($rowscount>0)
//islbdq {
//islbdq 	lelelelelele
//islbdq }
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>�γ����ƣ�</td><td><input name='kechengmingcheng' type='text' id='kechengmingcheng' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr><tr><td>ѧʱ��</td><td><input name='xueshi' type='text' id='xueshi' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><tr><td>ѧ�֣�</td><td><input name='xuefen' type='text' id='xuefen' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><tr><td>���ͣ�</td><td><select name='leixing' id='leixing' style='border:solid 1px #000000; color:#666666'>
	  <option value="ѡ��">ѡ��</option>
	  <option value="����">����</option>
	</select></td></tr><tr><td>��ע��</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="���" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="����" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('�Բ��𣬸ÿγ������Ѿ����ڣ��뻻�����γ�����!');history.back();</script>";
		}
		
	}
?>
</body>
</html>

