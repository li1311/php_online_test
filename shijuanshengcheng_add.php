<?php 
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$bianhao=$_POST["bianhao"];$kemu=$_POST["kemu"];$danxuantishu=$_POST["danxuantishu"];$danxuanfenzhi=$_POST["danxuanfenzhi"];
	$tiankongtishu=$_POST["tiankongtishu"];$tiankongfenzhi=$_POST["tiankongfenzhi"];
	$panduantishu=$_POST["panduantishu"];$panduanfenzhi=$_POST["panduanfenzhi"];
	$sql="select count(id) as ss from danxuanti where kemu='$kemu'";
	 $query=mysql_query($sql);
	
	 $ts1=mysql_result($query,0,"ss");
	
	 if($ts1<$danxuantishu)
	 {
		echo "<script>javascript:alert('�Բ���ϵͳѡ�������ݲ��㣬����ʧ��!');history.back();</script>";
		die;
	 }
	 
	 
	 $sql="select count(id) as ss from tiankongti where kemu='$kemu'";
	 $query=mysql_query($sql);
	
	 $ts1=mysql_result($query,0,"ss");
	
	 if($ts1<$tiankongtishu)
	 {
		echo "<script>javascript:alert('�Բ���ϵͳ��������ݲ��㣬����ʧ��!');history.back();</script>";
		die;
	 }
	 
	 
	 $sql="select count(id) as ss from panduanti where kemu='$kemu'";
	 $query=mysql_query($sql);
	
	 $ts1=mysql_result($query,0,"ss");
	
	 if($ts1<$panduantishu)
	 {
		echo "<script>javascript:alert('�Բ���ϵͳ�ж������ݲ��㣬����ʧ��!');history.back();</script>";
		die;
	 }
	 
	 
	$sql="select id from danxuanti where kemu='$kemu' order by rand() limit ".$danxuantishu." ";
	$query=mysql_query($sql);
	  $rowscount=mysql_num_rows($query);
	 for($i=0;$i<$rowscount;$i++)
	 {
	 	$danxuanti=$danxuanti.mysql_result($query,$i,"id").",";
	 }
	 $danxuanti=substr($danxuanti,0,strlen($danxuanti)-1);
	 
	 $sql="select id from tiankongti where kemu='$kemu' order by rand() limit ".$tiankongtishu." ";
	$query=mysql_query($sql);
	  $rowscount=mysql_num_rows($query);
	 for($i=0;$i<$rowscount;$i++)
	 {
	 	$tiankongti=$tiankongti.mysql_result($query,$i,"id").",";
	 }
	 $tiankongti=substr($tiankongti,0,strlen($tiankongti)-1);
	 
	 
	 $sql="select id from panduanti where kemu='$kemu' order by rand() limit ".$panduantishu." ";
	$query=mysql_query($sql);
	  $rowscount=mysql_num_rows($query);
	 for($i=0;$i<$rowscount;$i++)
	 {
	 	$panduanti=$panduanti.mysql_result($query,$i,"id").",";
	 }
	 $panduanti=substr($panduanti,0,strlen($panduanti)-1);
	 
	 
	$sql="insert into shijuanshengcheng(bianhao,kemu,danxuantishu,danxuanfenzhi,tiankongtishu,tiankongfenzhi,panduantishu,panduanfenzhi,danxuanti,tiankongti,panduanti) values('$bianhao','$kemu','$danxuantishu','$danxuanfenzhi','$tiankongtishu','$tiankongfenzhi','$panduantishu','$panduanfenzhi','$danxuanti','$tiankongti','$panduanti') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='shijuanshengcheng_add.php';</script>";
	
	 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�Ծ�����</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>����Ծ����ɣ� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.bianhao.value==""){alert("��������");document.form1.bianhao.focus();return false;}if(document.form1.danxuantishu.value==""){alert("�����뵥ѡ����");document.form1.danxuantishu.focus();return false;}if(document.form1.danxuanfenzhi.value==""){alert("�����뵥ѡ��ֵ");document.form1.danxuanfenzhi.focus();return false;}if(document.form1.tiankongtishu.value==""){alert("�������ѡ����");document.form1.tiankongtishu.focus();return false;}if(document.form1.tiankongfenzhi.value==""){alert("�������ѡ��ֵ");document.form1.tiankongfenzhi.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>��ţ�</td><td><input name='bianhao' type='text' id='bianhao' value='' />&nbsp;*</td></tr>
	
	<tr>
	  <td>�γ̣�</td>
	  <td><select name='kemu' id='kemu' >
	    <?php getoption("kechengxinxi","kechengmingcheng")?>
      </select></td>
    </tr>
	<tr><td>��ѡ������</td><td><input name='danxuantishu' type='text' id='danxuantishu' value='' />
	  &nbsp;* �� </td>
	</tr><tr><td>��ѡ��ֵ��</td><td><input name='danxuanfenzhi' type='text' id='danxuanfenzhi' value='' />
	  &nbsp;* ��/��</td>
	</tr><tr>
	  <td>���������</td>
	  <td><input name='tiankongtishu' type='text' id='tiankongtishu' value='' />
	    &nbsp;* �� </td>
	</tr><tr>
	    <td>��շ�ֵ��</td>
	    <td><input name='tiankongfenzhi' type='text' id='tiankongfenzhi' value='' />
	      &nbsp;* ��/��</td>
	  </tr>

      <tr>
        <td>�ж�������</td>
        <td><input name='panduantishu' type='text' id='panduantishu' value='' />
          &nbsp;* �� </td>
      </tr>
      <tr>
        <td>�жϷ�ֵ��</td>
        <td><input name='panduanfenzhi' type='text' id='panduanfenzhi' value='' />
          &nbsp;* ��/��</td>
      </tr>
      
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="���" onclick="return check();" />
      <input type="reset" name="Submit2" value="����" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

