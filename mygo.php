<?php
session_start();

	//echo $_SESSION['cx'];
	if($_SESSION['cx']=="ѧ��")
	{
		echo "<script>javascript:location.href='left2.php';</script>";
	}
	else if($_SESSION['cx']=="��ʦ")
	{
		echo "<script>javascript:location.href='left3.php';</script>";
	}
	else
	{
			echo "<script>javascript:location.href='left.php';</script>";
	}
	

?>