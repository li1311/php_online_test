<?php
session_start();
include_once 'conn.php';
$lb=$_GET["lb"];
if($lb=="")
{
	$lb=$_POST["lb"];
}
$biaoti=$_POST["biaoti"];
?>
<html>
<head>
<title><?php echo $lb;?></title>
<LINK href="css.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE1 {
	color: #0066FF;
	font-weight: bold;
}
.STYLE2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="98%" height="230" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
  <tr>
    <td width="100%" height="44" background="qtimages/1_02_01_02_01.gif"><table width="100%" height="26" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="20%" align="center" valign="bottom"><span class="STYLE1"><?php echo $lb;?></span></td>
        <td width="80%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table id="__01" width="100%" height="177" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="100%" height="718" valign="top" ><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
          <?php 
    $sql="select * from xinwentongzhi where 1=1";
  
if ($biaoti!=""){$sql=$sql." and biaoti like '%$biaoti%'";}
if($lb!=""){$sql=$sql." and leibie='$lb'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=20;//ÿҳ������
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
          <tr height="25">
            <td width="2%" align="center" class="newsline"><img src="images/1.jpg"></td>
            <td width="58%" class="newsline"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"biaoti");?></a></td>
            <td width="10%" class="newsline">�����<?php echo mysql_result($query,$i,"dianjilv");?>��</td>
            <td width="14%" class="newsline"><?php
		if(mysql_result($query,$i,shouyetupian)=="")
		{}
		else
		{
	?>
              <a href="<?php echo mysql_result($query,$i,shouyetupian);?>">�������</a>
              <?php
		}
	?></td>
            <td width="16%" class="newsline"><?php echo mysql_result($query,$i,"addtime");?></td>
          </tr>
          <?php
						}
					  }
					  ?>
        </table>
              <p align="center"><a href="news.php?pagecurrent=1&lb=<?php echo $lb;?>">��ҳ</a>, <a href="news.php?pagecurrent=<?php echo $pagecurrent-1;?>&lb=<?php echo $lb;?>">ǰһҳ</a> ,<a href="news.php?pagecurrent=<?php echo $pagecurrent+1;?>&lb=<?php echo $lb;?>">��һҳ</a>, <a href="news.php?pagecurrent=<?php echo $pagecount;?>&lb=<?php echo $lb;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ �������ݹ�
                <?php
		echo $rowscount;
	?>
                ��,
                <input type="button" name="Submit22" onClick="javascript:window.print();" value="��ӡ��ҳ" style=" height:19px; border:solid 1px #000000; color:#666666" />
            </p></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="qtimages/1_02_01_02_03.gif" width="747" height="9" alt=""></td>
  </tr>
</table>
</body>
</html>