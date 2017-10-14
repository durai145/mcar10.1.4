<HTML>
<HEAD>
<title>Key Board
</title>
 <!--base href="C:\heaerie\cust"-->
<META http-equiv=Content-Type content="text/html;charset=windows-1252">
<LINK href="../css/pro.css" type=text/css rel=stylesheet>
<LINK title=heaerie href="../css/services.css" type=text/css rel=STYLESHEET >

<!--[if gt IE 5.0]><![if lt IE 7]>
<style type="text/css">
/* that IE 5+ conditional comment makes this only visible in IE 5+ */
ul.makeMenu li {  /* the behaviour to mimic the li:hover rules in IE 5+ */
 behavior: url( IEmen.htc );
}
ul.makeMenu ul {  /* copy of above declaration without the > selector,
except left position is wrong */
 display: none; position: absolute; top: 2px; left: 78px;
}
</style>
<![endif]><![endif]-->
<script language="javascript" src="javascript\head.js"> </script>

<script type="text/javascript">
//alert("1");
var st='<table class="ctable" >';
var sr ='<tr class="ctable">';
var sd ='<td class="ctext">';
var sc ='<td class="ccaption">';
var dy = st;
var et='</table>';
var er ='</tr>';
var ed ='</td>';
//alert("2");
var  offsetArry =new Array('3','66','7','77','56','57','28','65','8','47|56','47','31|64','31|63','75','10','9','41|65','41','40','40|65','21','21|65','42','42|65','62','72','16','36|65','36','46|65','46','31|65','31','5','6','71','70','74','76','52','52|65','64','63','30','25','26','','51','51|65','53|65','53','48','48|66','48|65','15','14','49|65','49','19','18','20','50','50|65','35','35|65');
var chaArr=new Array('`','^','\',',';',']','}','#','%','<','A','a','B','b','','C','c','D','d','e','E','f','F','g','G','h','i','I','J','j','K','k','L','l','m','M','N','n','n+g','n+s','o','O','P','p','Q','q','r','R','s','S','T','t','u','&','U','V','v','W','w','X','x','Xs','y','Y','z','Z');
var chaArrId = new Array('id_shift_delta','id_caps','id_cama','id_semicolon','id_rectangle_close_bracle','id_shift_rectangle_close_bracle','id_ambasant','id_hash','id_percentage','id_lesserthan','id_A','id_a','id_B','id_b','id_c','id_C','id_d','id_D','id_E','id_e','id_F','id_f','id_G','id_g','id_h','id_I','id_i','id_j','id_J','id_k','id_K','id_l','id_L','id_M','id_m','id_n','id_N','id_n+g','id_n+s','id_O','id_o','id_p','id_P','id_q','id_Q','id_R','id_r','id_S','id_s','id_t','id_T','id_U','id_u','id_v','id_V','id_w','id_W','id_x','id_X','id_Xs','id_Y','id_y','id_Z','id_z');
//alert("2");
chaArr[2] = '\\';
/*--
function rollOver(element) {
 //change the colour       element.className += (element.className?' ':'') + 'CSStoHighlight';
 //change display of child
 for( var x = 0; element.childNodes[x]; x++ ){
   if( element.childNodes[x].tagName == 'UL' ) {
element.childNodes[x].className += (element.childNodes[x].className?' ':'')+ 'CSStoShow'; }
   if( element.childNodes[x].tagName == 'A' ) {
element.childNodes[x].className += (element.childNodes[x].className?' ':'')+ 'CSStoHighLink'; }
 }
}

function rollOff(element) {
 //change the colour
 element.className = element.className.replace(/ ?CSStoHighlight$/,'');
 //change display of child
 //alert('am calling');
 for( var x = 0; element.childNodes[x]; x++ ){
   if( element.childNodes[x].tagName == 'UL' ) {
		element.childNodes[x].className = element.childNodes[x].className.replace(/?CSStoShow$/,''); }
   if( element.childNodes[x].tagName == 'A' ) {
		element.childNodes[x].className = element.childNodes[x].className.replace(/?CSStoHighLink$/,''); 
}
 }
}
--*/

function fnClick(obj)
{
 //alert("fnChange"+obj.value);
 //baseReplace(obj.value);
 //alert("fnClick" +obj.value);
document.getElementById("pad").value=document.getElementById("pad").value+obj.value;
//alert(document.getElementById("pad").value);
 }
var keyCombSets="";

function OnPress()
{
//alert("OnPress");
     var keycode=event.keyCode?event.keyCode : event.charCode;
     var charcode="";
     keyCombSets= event.keyCode;
     try
     {
		charcode=String.fromCharCode(keycode);
     }
     catch(e)
     {
		window.status= "OnDowb :"+e;
     }
     //alert("OnPress:key code:"+keycode+"|charcode:"+charcode);
     window.status="OnPress";
     try
     {
     window.status=" click id <"+chaArrId[offsetReplace(charcode)]+">";
     document.getElementById(chaArrId[offsetReplace(charcode)]).onclick();
     document.getElementById(chaArrId[offsetReplace(charcode)]).focus();
	 document.getElementById(chaArrId[offsetReplace(charcode)]).className="button";
     }
     catch(e)
     {
		window.status="Please Key Board enable";
     }
     //event.keyCode=113;
}
function OnDown()
{
//alert("OnDown");
var keycode=event.keyCode?event.keyCode : event.charCode;
var charcode="";
keyCombSets+= event.keyCode;
try
{
	charcode=String.fromCharCode(keycode);
}
catch(e)
{
window.status= "OnDowb :"+e;
}
//alert("OnDown:key code:"+keycode+"|charcode:"+charcode);
window.status="OnDown|"+keycode;

}
function OnUp()
{
     var keycode=event.keyCode?event.keyCode : event.charCode;
     var charcode="";
     keyCombSets+= event.keyCode;
     try
     {
           charcode=String.fromCharCode(keycode);
     }
     catch(e)
     {
           window.status= "OnDowb :"+e;
     }
    // alert("OnUp:key code:"+keycode+"charcode:"+charcode);
     //window.status="OnUp";
}
function keyBoard()
{

//alert("keyBoard:01");
     //var keys="`1234567890-=|QWERTYUIOP[]\|ASDFGHJKL;'|ZXCVBNM,./";
   //var keys="QWERTYUIOP|ASDFGJKL|XCVBNM";
     var keys="1234567890-=|qwertyuiop|asdfgjkl|xcvbnm|QWERTYUIOP|ASDFGJKL|XCVBNM";
     var keyRows=keys.split('|');
     var keyChars="";
     var keyBoardStr=st;
     //alert("call offsetReplace");

     //alert("keyBoard:keyRows.length="+keyRows.length);
     for (var i=0;i<keyRows.length;i++)
     {
           //alert(" keyRows ");
           keyBoardStr=keyBoardStr+sr;
           //alert(" keyRows["+i+"]"+ keyRows[i]);
           keyChars=keyRows[i].split('');

           for(var j=0;j<keyChars.length;j++)
           {
                 ////alert(" keyChars["+j+"]"+keyChars[j]);
                 ////alert(" keyRows ");
                 keyBoardStr=keyBoardStr+sc;
                 keyBoardStr=keyBoardStr+ chaArrId[offsetReplace(keyChars[j])] + "<span id=i>"+offsetReplace(keyChars[j])+ "</span>"+"<input type='button' class='' id='"+chaArrId[offsetReplace(keyChars[j])]+"' value='"+ change(offsetReplace(keyChars[j]))+"'   onclick='javascript:fnClick(this);' onfocus='javascript:fnFocus(this);'>";
                 keyBoardStr=keyBoardStr+ed;
           }
           keyBoardStr=keyBoardStr+er;
           //keyBoardStr=keyBoardStr+er;
     }

     keyBoardStr=keyBoardStr+et;
     document.forms[0].scrCode.value=keyBoardStr;
     //alert(keyBoardStr);
     test.innerHTML=keyBoardStr;
     //test.innerHTML="test";
     }


function convUniCode(code)
{
////alert("code ="+code);
     //code=parseInt(code)+2944;
     if(parseInt(document.forms[0].lang.value) >0 )
     {
     code=parseInt(code)+ parseInt(document.forms[0].lang.value);
////alert("code ="+code);
     var icode=code;
     code=d2h(code);
     code=code.toUpperCase();
     var ucode='"\\u0' + code+'"';
////alert(" uni code ="+ucode);
     if((icode >  1 ) && (icode < 10000))
     {
           //alert("Code=" + code +" hexaDecimal="+d2h(code).toUpperCase());
           //setValeById("uniCode",eval(ucode));
           return eval(ucode);
           //alert(eval(ucode));
     }
     else
     {
           //alert("unicode out of the limite ");
     }
     }
     return code;
}
function change(inp)
{
//alert("change:"+inp);

var offArry=offsetArry[inp];
var out=offArry.split('|');
var i=0;
var rtStr="";
for(var i=0;i <out.length;i++)
{
     //rtStr=rtStr+"$" + out[i]+"="+convUniCode(parseInt(out[i]));
     //rtStr=rtStr+"$" + out[i]+"="+convUniCode(parseInt(out[i]));
     if(parseInt(document.forms[0].lang.value) >0 )
     {
     rtStr=rtStr+convUniCode(parseInt(out[i]));
     }
     else
     {
           rtStr=chaArr[inp];
     }
}


return rtStr;
}
function d2h(d) {return d.toString(16);}
function h2d(h) {return parseInt(h,16);}



function offsetReplaceComb()
{

offsetArry
chaArr
chaArrId


	//alert("offsetReplaceComb");
     var ofsetCombo= 'Letter';
     //alert(" offsetReplace:A");
     ofsetCombo=ofsetCombo+'<table class="ctable" >  <tr><td>';
	 ofsetCombo=ofsetCombo+'<td class="ctext">';
     ofsetCombo=ofsetCombo+'<select name= "rSno" id="rSno" onchange="javascript:rChaArr.value=rSno.value;rOffsetArry.value=rChaArr.value; ">';
     for(lv_i=0;lv_i<chaArr.length;lv_i++)
     ofsetCombo=ofsetCombo+'<option value='+lv_i+'>'+lv_i+'</option>';
     ofsetCombo=ofsetCombo+'</select>';
     ofsetCombo=ofsetCombo+'</td>';
	 //alert(" offsetReplace:A.1");
     ofsetCombo=ofsetCombo+'<td class="ctext">';
     ofsetCombo=ofsetCombo+'<select name= "rchaArr" id="rChaArr" onchange="javascript:rOffsetArry.value=rChaArr.value; rSno.value=rChaArr.value">';
     for(lv_i=0;lv_i<chaArr.length;lv_i++)
     ofsetCombo=ofsetCombo+'<option value='+lv_i+'>'+chaArr[lv_i]+'</option>';
     ofsetCombo=ofsetCombo+'</select>';
     ofsetCombo=ofsetCombo+'</td>';
    //alert(" offsetReplace:B");
     ofsetCombo=ofsetCombo+'<td class="ctext">';
     ofsetCombo=ofsetCombo+'offset';
     ofsetCombo=ofsetCombo+'</td>';
     ofsetCombo=ofsetCombo+'<td class="ctext">';
     ofsetCombo=ofsetCombo+'<select name= "rOffsetArry" id="rOffsetArry" onchange="javascript:rChaArr.value=rOffsetArry.value;" >';
     for(lv_i=0;lv_i<chaArr.length;lv_i++)
     ofsetCombo=ofsetCombo+'<option value='+lv_i+'>'+offsetArry[lv_i]+'</option>';
     ofsetCombo=ofsetCombo+'</select>';
     ofsetCombo=ofsetCombo+'</td> </tr> </table>';
     //alert(" offsetReplace:C");
     test.innerHTML=ofsetCombo;

 return  0;
}

function offsetReplace(inp)
{

     //alert(" inp"+inp);
     for(var i=0;i<chaArr.length;i++)
     {

           if(chaArr[i]==inp)
           {
                 //alert('count:'+i+':cahr:'+chaArr[i]+':baseArrySplt:'+offsetArry[i]);
                 return i;
           }
     }
 return 1;
}



</script>
</head>


<body class="cbody" onkeypress="javascript:OnPress()" onkeydown="javascript:OnPress()" onkeyup="javascript:OnUp()">
<form class="cform" >
<span id="test">id</span>
<table class="ctable">
<tr class="ctable">
<td>
<input type="button" class="cbutton" onclick="javascript:keyBoard();">
</td>
<td>
<tr class="ctable">
<td>
<script>
offsetReplaceComb();
</script>
</td>
<td>

<input type="text"  class="ctext"id="scrCode" name="scrCode">
</td>
<TD class=ctext>
     <select id="lang">
<option value=0>ENGLISH</option>
<option value=2944>TAMIL </option>
<option value=3328>MALAYALAM</option>
<option value=3072>TELUGU</option>
<option value=3200>KANADA</option>
<option value=2304>HINDI</option>
</select>
</TD>
</tr>
<textarea id="pad" width="300" height="20" Readonly></textarea>
</form>
</body>
</html>
