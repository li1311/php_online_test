<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$gonghao=$_POST["gonghao"];    $xingming=$_POST["xingming"];    $mima=$_POST["mima"];    $xingbie=$_POST["xingbie"];    $zhujiaokecheng=$_POST["zhujiaokecheng"];    $zhaopian=$_POST["zhaopian"];    $zhicheng=$_POST["zhicheng"];    $lianxidianhua=$_POST["lianxidianhua"];    $beizhu=$_POST["beizhu"];    
	
	
	
	
	
	$sql="insert into jiaoshixinxi(gonghao,xingming,mima,xingbie,zhujiaokecheng,zhaopian,zhicheng,lianxidianhua,beizhu) values('$gonghao','$xingming','$mima','$xingbie','$zhujiaokecheng','$zhaopian','$zhicheng','$lianxidianhua','$beizhu') ";
	mysql_query($sql);
	
	echo "<script>javascript:alert('�����ɹ�!');history.back();</script>";



}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ʦ��Ϣ</title>

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
<p>��ӽ�ʦ��Ϣ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.gonghao.value==""){alert("�����빤��");document.form1.gonghao.focus();return false;}    if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}    if(document.form1.mima.value==""){alert("����������");document.form1.mima.focus();return false;}    if(document.form1.lianxidianhua.value==""){alert("��������ϵ�绰");document.form1.lianxidianhua.focus();return false;}    
}
	function gow()
	{
		location.href='jiaoshixinxi_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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
	<tr><td>���ţ�</td><td><input name='gonghao' type='text' id='gonghao' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>������</td><td><input name='xingming' type='text' id='xingming' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>���룺</td><td><input name='mima' type='text' id='mima' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>�Ա�</td><td><select name='xingbie' id='xingbie'><option value="��">��</option><option value="Ů">Ů</option></select></td></tr>    <tr><td>���̿γ̣�</td><td><input name='zhujiaokecheng' type='text' id='zhujiaokecheng' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>    <tr><td>��Ƭ��</td><td><input name='zhaopian' type='text' id='zhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>    <tr><td>ְ�ƣ�</td><td><input name='zhicheng' type='text' id='zhicheng' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>    <tr><td>��ϵ�绰��</td><td><input name='lianxidianhua' type='text' id='lianxidianhua' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>��ע��</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>    

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="���" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="����" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>

</body>
</html>

