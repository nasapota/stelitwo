<?php

$QUERY_STRING="".$_SERVER['SCRIPT_NAME']."?".$_SERVER['QUERY_STRING']."";

error_reporting(0);
$serv = "park.gkit.ru";
$fp = fsockopen ($serv, 80, $errno, $errstr, 10);

if ($fp) {

	$xres = file_get_contents(
		"http://". $serv."/links.php?host=".urlencode($_SERVER['HTTP_HOST']).
		"&self=". urlencode('/park.php?xxx=yyy') .
		"&qstr=".urlencode($QUERY_STRING).
		(isset($_GET['xxx']) ? '&xxx='.$_GET['xxx'] : '')
        );

	if ($xres =="404") {
		header("HTTP/1.0 404 Not Found");
		echo "<h1>404: Not Found</h1>";
		exit (0);
	}
}
else {
	echo "<h2>��������� ������. ���������� ������� �����</h2>";
    exit;
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
   <head>
   <title></title>
   <meta name="description" content="������������ � ������  �������� �������� � ����� � �������. �����������, �������� �������� �������. ��������� �������� ������� � �����. ������������ �������� ��������. ��������.  �����������. �����������. ���������� ����. �������� �������� �������.">
   <meta name="keywords" content="�������� ������� ��� ����, �������� �������� �������, ��������� �������� �������, ���� �������� �������, ���� ��������� �������, �������� ������� ������, �������� ������� �����, �������� ������� sidus, �������� ������� ����, ����� �� �������� �������, �������� ������� ���������, �������� ������� �����, ��������� �������� ��������, �������� ������� ���� ����, �������� ������� ��������, ���������� ��������� ��������� �������, �������� ������� �����������, ����������� �������� ��������, sidus �������� �������, �������� ������� clipso ����, ����������� �������� �������">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script language="javascript">
<!--
function ChangeImg() {
 if(document.images) {
  eval("document."+ChangeImg.arguments[0]+
  ".src=('"+ChangeImg.arguments[1]+"')");
 }
}

function preload() {
  if (document.images) {
    var imgsrc = preload.arguments;
    arr=new Array(imgsrc.length);
    for (var j=0; j<imgsrc.length; j++) {
      arr[j] = new Image;
      arr[j].src = imgsrc[j];
    }
  }
}
//-->
</script>

   </head>

<!-- �������� ������ ������ � ����� ���������))) -->
<body bgcolor="#ffffcc" onLoad="preload('m1on.jpg','m2on.jpg','m3on.jpg','m4on.jpg','m5on.jpg','m6on.jpg')" MARGINHEIGHT="0" TOPMARGIN="0" MARGINWIDTH="0" LEFTMARGIN="0">
<!-- ������� ������� -->
<DIV ALIGN="center"><table CELLPADDING="2" width="784" bgcolor="#ffcc66"><tr><td>
<DIV ALIGN="center"><table CELLPADDING="0" CELLSPACING="0" width="780" bgcolor="#ffffff">
<!-- ��������� �������� -->
<tr valign="top">
<td colspan="2" valign="top"><img src="header.jpg"></td>
</tr>
<!-- ������ ���� -->
<tr valign="top">
<td colspan="2" background="bg1.jpg">
<table CELLPADDING="0" CELLSPACING="0" align="center" width="780" height="23">
	<tr>
		<td height="23"><a href="index.htm" 
 onMouseOver="ChangeImg('ImgName1','m1on.jpg')"
 onMouseOut="ChangeImg('ImgName1','m1off.jpg')">

 <img name="ImgName1" border="0" 
 height="23" width="81"
 src="m1off.jpg" alt="�������"></a><img src="m.jpg" width="30" height="23"></td>
		<td height="23"><a href="np.htm" 
 onMouseOver="ChangeImg('ImgName2','m2on.jpg')"
 onMouseOut="ChangeImg('ImgName2','m2off.jpg')">
 <img name="ImgName2" border="0" 
 height="23" width="188"
 src="m2off.jpg" alt="�������� �������"></a><img src="m.jpg" width="30" height="23"></td>
		<td height="23"><a href="clipso.htm" 
 onMouseOver="ChangeImg('ImgName3','m3on.jpg')"
 onMouseOut="ChangeImg('ImgName3','m3off.jpg')">
 <img name="ImgName3" border="0" 
 height="23" width="163"
 src="m3off.jpg" alt="������� CLIPSO"></a><img src="m.jpg" width="30" height="23"></td>
		<td height="23"><a href="gallery.htm" 
 onMouseOver="ChangeImg('ImgName4','m4on.jpg')"
 onMouseOut="ChangeImg('ImgName4','m4off.jpg')">
 <img name="ImgName4" border="0" 
 height="23" width="126"
 src="m4off.jpg" alt="�����������"></a><img src="m.jpg" width="30" height="23"></td>
 		 <td height="23"><a href="prices.htm" 
 onMouseOver="ChangeImg('ImgName5','m5on.jpg')"
 onMouseOut="ChangeImg('ImgName5','m5off.jpg')">
 <img name="ImgName5" border="0" 
 height="23" width="55"
 src="m5off.jpg" alt="����"></a><img src="m.jpg" width="30" height="23"></td>

 		<td height="23"><a href="contact.htm" 
 onMouseOver="ChangeImg('ImgName6','m6on.jpg')"
 onMouseOut="ChangeImg('ImgName6','m6off.jpg')">
 <img name="ImgName6" border="0" 
 height="23" width="96"
 src="m6off.jpg" alt="��������"></a></td>
	</tr>
</table>
</td>
</tr>
<tr valign="top">
<td colspan="2" height="29" background="bg.jpg">
</td>
</tr>
<!-- ����� ������ ���� -->
<tr>
<td colspan="2">
<font size="-1"><a href="http://steli.kiev.ua/">Steli.kiev.ua</a></font><font size="-3">></font><a href="index.htm"><font size="-1">�������</font></a><font size="-3">>></font><font size="-1">����</font>

</td>
</tr>
<tr valign="top">
<!-- ���� -->
<td>
<table CELLPADDING="10" CELLSPACING="0" width="217">
<tr>
<td>
<br>
<font size="+1">
������ � ��������:<br>
<font size="-1">
<ul type="circle">
      <li><a href="articles/compare.htm">��������� � ������������� ��������� �������</a></li>

		<li><a href="articles/conditions.htm">����������� ������� ��� ��������� � ��������� ���������</a></li>
		<li><a href="articles/installation.htm">������ �������� ��������</a></li>				
</ul>
</font>
<a href="faq.htm">�������</a><br>
<a href="calc.htm">�����������</a><br>
</font>
<br>
<br>
<br>
<br>

<div style="text-align: center"><font size="+2" color="#ff6600"><font size="+2"><b>�����:</b></font></font><br>
  <a href="actia.htm">����� � 8 �����</a><br>c <strong><font color="#FF0000">08.02.11</font></strong> �� <strong><font color="#FF0000">08.04.11</font></strong><br><br>
<font color="#FF6600"><font size="+1"><b>������������� ������:</b></font></font><br>
�������������� ����������� ����� ���������<br>
<br>
<br>
<font color="#FF6600"><font size="+2"><b>��������:</b></font></font><br>

����������� �����<br>
������ 2-3 ������� � ����<br>
<br>
<br>
<font color="#FF6600"><font size="+2"><b>��������:</b></font></font><br>
������ ������<br>
�������� <font size="-0"><i>�� �������</i></font>- <font color="#ff0000">12</font> ���<br>

</div>
</td>
</tr>
</table>
</td>
<!-- ������� -->
<td valign="top" align="center">

<table width="730" CELLPADDING="0" CELLSPACING="0"><tr><td>
<h2>
<?php echo $xres; ?>
</h2>



</td></tr></table><br><br>
</td>
</tr>
<tr><td colspan="2" align="center">
	��������: <b>(044) 360-16-37</b>, <b>(050) 356-16-37</b>, <b>(096) 505-808-9;</b> <br>����������� �����: <a href="mailto:info@steli.kiev.ua ">info@steli.kiev.ua </a> <br><a href="http://www.icq.com/whitepages/cmd.php?uin=433316249&amp;action=message" style="text-decoration:none"><script type="text/javascript">
	<!--
	document.write('<img src="http://status.icq.com/online.gif?icq=433316249&amp;img=5&amp;rnd='+Math.random()+'" style="border:none;vertical-align:middle;" alt="433316249" />')
	//-->
	</script>

	<noscript><div style="display:inline"><img src="http://status.icq.com/online.gif?icq=433316249&amp;img=5" alt="433316249" style="border:none;vertical-align:middle;" /></div></noscript>433316249
</td></tr>
<tr><td align="right" colspan="2">

<!--bigmir)net TOP 100-->
<script type="text/javascript" language="javascript"><!--
function BM_Draw(oBM_STAT){
document.write('<table cellpadding="0" cellspacing="0" border="0" style="display:inline;margin-right:4px;"><tr><td><div style="margin:0;padding:0;font:10px Tahoma;width:100px;height:70px;background:url(\'http://i.bigmir.net/cnt/samples/curl/b51.gif\');background-repeat:no-repeat;"><!--bigmir)net TOP 100--><a href="http://www.bigmir.net/" target="_blank" onClick=\'img=new Image();img.src="http://www.bigmir.net/?cl=16866687";\'><img src="http://i.bigmir.net/clear.gif" width="100" height="70" border="0" alt="bigmir)net TOP 100" title="bigmir)net TOP 100"></a><!--bigmir)net TOP 100--></div></td></tr></table>');
}
//-->
</script>
<script type="text/javascript" language="javascript"><!--
bmN=navigator,bmD=document,bmD.cookie='b=b',i=0,bs=[],bm={o:1,v:16866687,s:16866687,t:0,c:bmD.cookie?1:0,n:Math.round((Math.random()* 1000000)),w:0};
for(var f=self;f!=f.parent;f=f.parent)bm.w++;
try{if(bmN.plugins&&bmN.mimeTypes.length&&(x=bmN.plugins['Shockwave Flash']))bm.m=parseInt(x.description.replace(/([a-zA-Z]|\s)+/,''));
else for(var f=3;f<20;f++)if(eval('new ActiveXObject("ShockwaveFlash.ShockwaveFlash.'+f+'")'))bm.m=f}catch(e){;}
try{bm.y=bmN.javaEnabled()?1:0}catch(e){;}
try{bmS=screen;bm.v^=bm.d=bmS.colorDepth||bmS.pixelDepth;bm.v^=bm.r=bmS.width}catch(e){;}
r=bmD.referrer.slice(7);if(r&&r.split('/')[0]!=window.location.host){bm.f=escape(r);bm.v^=r.length}
bm.v^=window.location.href.length;for(var x in bm) if(/^[ovstcnwmydrf]$/.test(x)) bs[i++]=x+bm[x];
bmD.write('<sc'+'ript type="text/javascript" language="javascript" src="http://c.bigmir.net/?'+bs.join('&')+'"></sc'+'ript>');
//-->
</script>
<noscript>
<a href="http://www.bigmir.net/" target="_blank"><img src="http://c.bigmir.net/?v16866687&s16866687&t2" width="88" height="31" alt="bigmir)net TOP 100" title="bigmir)net TOP 100" border="0" /></a>
</noscript>
<!--bigmir)net TOP 100-->
</td></tr>

</table></DIV></td></tr>

</table></div>
</body>
</html>
