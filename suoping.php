<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
<title>��ʱ�뿪</title> 
<style type="text/css">
<!--
body {
	background-color: #999999;
}
-->
</style></head> 
<body> 



	
<script language="javascript"> 


function sAlert() 
{ 

document.onkeydown = function(){
          if(event.keyCode==116) {
          event.keyCode=0;
          event.returnValue = false;
          }
     }
    
document.oncontextmenu = function() {event.returnValue = false;}
var msgw,msgh,bordercolor; 
msgw=400;//��ʾ���ڵĿ�� 
msgh=100;//��ʾ���ڵĸ߶� 
titleheight=25 //��ʾ���ڱ���߶� 
bordercolor="#336699";//��ʾ���ڵı߿���ɫ 
titlecolor="#99CCFF";//��ʾ���ڵı�����ɫ 
var sWidth,sHeight; 
sWidth=document.body.offsetWidth;//��ȡ���ڿ�� 
sHeight=screen.height;//��ȡ��Ļ�߶� 
var bgObj=document.createElement("div");//�ؼ������ԭ����body�д���һ��div������������߶�����Ϊ�����������壬���һ�����޷�����������ʱ�в��� 
bgObj.setAttribute('id','bgDiv'); 
bgObj.style.position="absolute"; 
bgObj.style.top="0"; 
bgObj.style.background="#777"; 
bgObj.style.filter="progid:DXImageTransform.Microsoft.Alpha(style=3,opacity=25,finishOpacity=75"; 
bgObj.style.opacity="0.6"; 
bgObj.style.left="0"; 
bgObj.style.width=sWidth + "px"; 
bgObj.style.height=sHeight + "px"; 
bgObj.style.zIndex = "10000"; 
document.body.appendChild(bgObj);//�������div������ʾ���� 
var msgObj=document.createElement('div');//����һ����Ϣ���� 
msgObj.setAttribute("id","msgDiv"); 
msgObj.setAttribute("align","center"); 
msgObj.style.background="white"; 
msgObj.style.border="1px solid " + bordercolor; 
msgObj.style.position = "absolute"; 
msgObj.style.left = "50%"; 
msgObj.style.top = "50%"; 
msgObj.style.font="12px/1.6em Verdana, Geneva, Arial, Helvetica, sans-serif"; 
msgObj.style.marginLeft = "-225px" ; 
msgObj.style.marginTop = -75+document.documentElement.scrollTop+"px"; 
msgObj.style.width = msgw+"px"; 
msgObj.style.height = msgh+"px"; 
msgObj.style.textAlign = "center"; 
msgObj.style.lineHeight ="25px"; 
msgObj.style.zIndex = "10001"; 
var title=document.createElement("h4"); //����һ�����⣬�Ա���������Ϣ�� 
title.setAttribute("id","msgTitle"); 
title.setAttribute("align","right"); 
title.style.margin="0"; 
title.style.padding="3px"; 
title.style.background=bordercolor; 
title.style.filter="progid:DXImageTransform.Microsoft.Alpha(startX=20, startY=20, finishX=100, finishY=100,style=1,opacity=75,finishOpacity=100);"; 
title.style.opacity="0.75"; 
title.style.border="1px solid " + bordercolor; 
title.style.height="18px"; 
title.style.font="12px Verdana, Geneva, Arial, Helvetica, sans-serif"; 
title.style.color="white"; 
title.style.cursor="pointer"; 
title.innerHTML=""; 
//title.onclick=function() 
//{ 
//document.body.removeChild(bgObj);//�Ƴ������������ڵ�div�� 
//document.getElementById("msgDiv").removeChild(title);//�Ƴ����� 
//document.body.removeChild(msgObj);//�Ƴ���Ϣ�� 
//} 
document.body.appendChild(msgObj); 
document.getElementById("msgDiv").appendChild(title); 
var txt=document.createElement("p"); 
txt.style.margin="1em 0" 
txt.setAttribute("id","msgTxt"); 
txt.innerHTML="<form action='jiesuo.php' method='post'><table><tr><td align=center>�������������룺<input type='text' name='suopinmima'><input type='submit' name'Submit' value='����' /></td></tr></table></form>"; 
document.getElementById("msgDiv").appendChild(txt); 
} 
</script> 
<?php
if($_GET["js"]=="1")
{
	?>
		<script language="javascript"> 
		location.href='main.php';
	</script>
	<?php
	}
else
{
?>
	<script language="javascript"> 
sAlert();
	</script>
	<?php
}
	?>
</body> 
</html> 
