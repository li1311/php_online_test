<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$yonghuming=$_POST["yonghuming"];    $mima=$_POST["mima"];    $xingming=$_POST["xingming"];    $xingbie=$_POST["xingbie"];    $nianling=$_POST["nianling"];    $banji=$_POST["banji"];    $lianxifangshi=$_POST["lianxifangshi"];    $youxiang=$_POST["youxiang"];    $beizhu=$_POST["beizhu"];    
	
	
	
	ischongfu("select id from xueshengxinxi where  yonghuming='$yonghuming' or xingming='$xingming'");
	
	$sql="insert into xueshengxinxi(yonghuming,mima,xingming,xingbie,nianling,banji,lianxifangshi,youxiang,beizhu) values('$yonghuming','$mima','$xingming','$xingbie','$nianling','$banji','$lianxifangshi','$youxiang','$beizhu') ";
	mysql_query($sql);
	
	echo "<script>javascript:alert('�����ɹ�!');history.back();</script>";



}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ѧ����Ϣ</title>

<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
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
<p>���ѧ����Ϣ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.yonghuming.value==""){alert("�������û���");document.form1.yonghuming.focus();return false;}    if(document.form1.mima.value==""){alert("����������");document.form1.mima.focus();return false;}    if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}    if(document.form1.nianling.value==""){alert("����������");document.form1.nianling.focus();return false;}    if(document.form1.banji.value==""){alert("������༶");document.form1.banji.focus();return false;}    if(!(/^1[3|4|5|6|7|8|9][0-9]\d{8,8}$/.test(document.form1.lianxifangshi.value))){alert("��ϵ��ʽ�����ֻ���ʽ");document.form1.lianxifangshi.focus();return false;}    if(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/.test(document.form1.youxiang.value)){}else{alert("������������ʽ");document.form1.youxiang.focus();return false;}    
}
	function gow()
	{
		location.href='xueshengxinxi_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
	function hsgxia2shxurxu(nstr,nwbk)
{
	if (eval("form1."+nwbk).value.indexOf(nstr)>=0)
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value.replace(nstr+"��", "");
	}
	else
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value+nstr+"��";
	}
}
</script>



<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>�û�����</td><td><input name='yonghuming' type='text' id='yonghuming' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>���룺</td><td><input name='mima' type='text' id='mima' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>������</td><td><input name='xingming' type='text' id='xingming' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>�Ա�</td><td><select name='xingbie' id='xingbie'><option value="��">��</option><option value="Ů">Ů</option></select></td></tr>    <tr><td>���䣺</td><td><input name='nianling' type='text' id='nianling' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>�༶��</td><td><input name='banji' type='text' id='banji' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>��ϵ��ʽ��</td><td><input name='lianxifangshi' type='text' id='lianxifangshi' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;�����ֻ���ʽ</td></tr>    <tr><td>���䣺</td><td><input name='youxiang' type='text' id='youxiang' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;���������ʽ</td></tr>    <tr><td>��ע��</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>    

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
			echo "<script>javascript:alert('�Բ�����������û����������Ѿ����ڣ�������!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

