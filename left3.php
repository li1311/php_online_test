<?php
session_start();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���߿���ϵͳ - ��̨�������</title>
<link rel="StyleSheet" href="dtree.css" type="text/css" />
	<script type="text/javascript" src="dtree.js"></script>

<link href="css_admin/admin_skin.css" rel="stylesheet" type="text/css" />
<link href="css_admin/alogin_skin.css" rel="stylesheet" type="text/css" />
<link href="css_admin/topleft_skin.css" rel="stylesheet" type="text/css" />
<link href="css_admin/manage_menu.css" rel="stylesheet" type="text/css" />
<link href="css_admin/newdiv_window.css" rel="stylesheet" type="text/css" />

</head>



<body class="menu_body" >

<base target="frame_main" />
<div class="amanagemenu_div">
  <div class="Left_NavTop"></div>
  <span class="mmenu_title2">��վ��Ŀ</span>
  
  
  
  <div class="dtree">

	<script type="text/javascript">
		d = new dTree('d');

		d.add(0,-1,'');
		d.add(1,0,'authority','','�������Ϲ��� ',"","","","","","","","open");
		d.add(2,0,'authority','','ѧ��������� ');
		//d.add(3,0,'authority','','�γ���Ϣ���� ');
		d.add(4,0,'authority','','�������� ');
		d.add(5,0,'authority','','�Ծ���� ');
		d.add(6,0,'authority','','�ɼ����� ');

		d.add(12,1,'authority','','�޸����� ',"","","jiaoshixinxi_updt2.php");
		
		
		d.add(12,2,'authority','','Ⱥ����Ϣ��� ',"","","qunzuxinxi_add.php");
		d.add(13,2,'authority','','Ⱥ����Ϣ��ѯ ',"","","qunzuxinxi_list2.php");
				
		d.add(12,3,'authority','','�γ���Ϣ��� ',"","","kechengxinxi_add.php");
		d.add(13,3,'authority','','�γ���Ϣ��ѯ ',"","","kechengxinxi_list.php");
		
		d.add(12,4,'authority','','ѡ������� ',"","","danxuanti_add.php");
		d.add(13,4,'authority','','ѡ�����ѯ ',"","","danxuanti_list.php");
		d.add(14,4,'authority','','�ж������ ',"","","panduanti_add.php");
		d.add(15,4,'authority','','�ж����ѯ ',"","","panduanti_list.php");
		d.add(16,4,'authority','','�������� ',"","","tiankongti_add.php");
		d.add(17,4,'authority','','������ѯ ',"","","tiankongti_list.php");
		
		d.add(12,5,'authority','','�Ծ����� ',"","","shijuanshengcheng_add.php");
		d.add(13,5,'authority','','�Ծ�鿴 ',"","","shijuanshengcheng_list.php");
		
		d.add(12,6,'authority','','�ɼ��鿴 ',"","","chengji.php");

		document.write(d);
		
	</script>

</div>
  <span class="mmenu_title2">��Ȩ����</span>
  <p style="padding-left:10px;">���߿���ϵͳ <br />�������ڣ�<?php echo date("Y-m-d")?><br />��ϵ�绰��xxxxxxx</p>
</div>
</body>
</html>