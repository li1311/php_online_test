<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$timu=$_POST["timu"];
    $daan=$_POST["daan"];
     $kemu=$_POST["kemu"];
	ischongfu("select id from panduanti where timu='".$timu."' and kemu='".$kemu."'");
	$sql="insert into panduanti(kemu,timu,daan) values('$kemu','$timu','$daan') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='panduanti_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title><script language="javascript" src="js/hsgrili.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>����ж��⣺ ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.timu.value==""){alert("��������Ŀ");document.form1.timu.focus();return false;}
    if(document.form1.daan.value==""){alert("�������");document.form1.daan.focus();return false;}
    
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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
<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>��Ŀ��</td><td><textarea name='timu' cols='50' rows='8' id='timu' style='border:solid 1px #000000; color:#666666'></textarea>&nbsp;*</td></tr>
    <tr>
      <td>�γ̣�</td>
      <td><select name='kemu' id='kemu' >
        <?php getoption("kechengxinxi","kechengmingcheng")?>
      </select></td>
    </tr>
    <tr><td>�𰸣�</td><td><select name='daan' id='daan' style='border:solid 1px #000000; color:#666666'>
      <option value="��">��</option>
      <option value="��">��</option>
    </select>&nbsp;*</td></tr>
    

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
			echo "<script>javascript:alert('�Բ��𣬸���Ŀ�Ѿ����ڣ��뻻������Ŀ!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

