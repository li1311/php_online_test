<?php
//���ݿ������ļ�
$host='127.0.0.1';//���ݿ������
$user='***';//���ݿ��û���
$password='***';//���ݿ�����
$database='phpzxksxthsg5208';//���ݿ���
$conn=@mysql_connect($host,$user,$password) or die('���ݿ�����ʧ�ܣ�');

@mysql_select_db($database) or die('û���ҵ����ݿ⣡');
mysql_query("set names 'gb2312'");


function getoption($ntable,$nzd)
{
		$sql="select ".$nzd." from ".$ntable." order by id desc";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			for ($fi=0;$fi<$rowscount;$fi++)
			{
				?>
				<option value="<?php echo mysql_result($query,$fi,0);?>"><?php echo mysql_result($query,$fi,0);?></option>
				<?php
			}
		}
}
function getoption2($ntable,$nzd)
{
	?>
	<option value="">��ѡ��</option>
	<?php
		$sql="select ".$nzd." from ".$ntable." order by id desc";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			for ($fi=0;$fi<$rowscount;$fi++)
			{
				?>
				<option value="<?php echo mysql_result($query,$fi,0);?>" <?php 
				
				if($_GET[$nzd]==mysql_result($query,$fi,0))
				{
					echo "selected";
				}
				?>><?php echo mysql_result($query,$fi,0);?></option>
				<?php
			}
		}
}
function getitem($ntable,$nzd,$tjzd,$ntj)
{
	if($_GET[$tjzd]!="")
	{
		$sql="select ".$nzd." from ".$ntable." where ".$tjzd."='".$ntj."'";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			
				echo "value='".mysql_result($query,0,0)."'";
			
		}
	}
}
function makefilename2(){ 
   $i=1; 
   $str = "0123456789";   //   ����ַ���
	$n = 4;   //   ���������
	$len = strlen($str)-1;
	for($i=0 ; $i<$n; $i++){
	$s .=  $str[rand(0,$len)];
	}
	$timestamp=time(); 
   return $timestamp.$s; 
} 
?>