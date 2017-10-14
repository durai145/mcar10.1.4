<!--
* TITLE           : jan1.html
*
*
* COPYRIGHT       :  Copyright(c) 2008, heaerie.              *
*
*
* Module          :  janya Raga                                           *
*
*
* DATE            :  10-oct-2008                                        *
*
*
* Authour         :Sakthiya Selan G                                     *
*
*
* ver :0.1                 modification required                         *
-->
<html>
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<LINK href="css/pro.css" type=text/css rel=stylesheet>
<LINK title=heaerie href="css/services.css" type=text/css rel=STYLESHEET >

<script language="javascript" src="javascript/head.js"> </script>

<script type="text/javascript">
//var xmlDoc = new ActiveXObject("Microsoft.XMLDOM");
//////////////////////////////////////////
var perPageCount=2;
var startJanyaNo=1;
var endJanyaNo=startJanyaNo + perPageCount;
var rn=new Array("","kanakAngi","rathnAngi","gAnamUrthi","vanaspathi","mAnavathi","thAnarUpi","sEnAvathi","HanumathOdi","DhEnukA","nAtakapriya","kOkilapriya","rUpavathi","gAyakapriya","vakulAbharaNam","mAyAmALavagowLA","chakravAkam","sUryakAntam","HAtakAmbari","JankAradhvani","naTabhairavi","kIravANi","KaraHarapriya","gowrimanOHari","varuNapriya","mAraranjani","chArukeshi","sarasAngi","HarikAmbhOji","DhIrashankarAbharaNam","nAgAnandhini","yAgapriya","rAgavarDhani","gAngeyabhushani","vAgaDhIsvari","shUlini","chalanAta","sAlagam","jalArnavam","JAlavarALi","navanItham","pAvani","raGupriya","gavAmbodhi","bhavapriya","shubhapanthuvarALi","shadhvidhamArgiNi","suvarNAngi","dhivyAmaNi","dhavalAmbari","nAmanArAyaNi","kAmavardhini(Pantuvarali)","rAmapriya","gamanashrama","vishvAmbhari","shyAmaLAngi","shanmuKapriya","simHendramadhyamam","HemAvathi","DharmAvathi","nIthimathi","kAnthAmaNi","rishabhapriya","lathAngi","vAchaspathi","mEchakalyANi","chithrAmbari","sucharithra","jyothisvarUpiNi","dhAtuvardhani","nAsikabhUshaNi","kosalam","rasikapriya");


function createCookie(name,value,days) 
{
   if (days) {
       var date = new Date();
       date.setTime(date.getTime()+(days*24*60*60*1000));
       var expires = "; expires="+date.toGMTString();
   }
   else var expires = "";
 //  alert(name+"="+value+expires+" ; path=/" );
   document.cookie = name+"="+value+expires+"; path=/";
}


function readCookie(name) {
   var nameEQ = name + "=";
   var ca = document.cookie.split(';');
   for(var i=0;i < ca.length;i++) {
       var c = ca[i];
       while (c.charAt(0)==' ') c = c.substring(1,c.length);
       if (c.indexOf(nameEQ) == 0) return
c.substring(nameEQ.length,c.length);
   }
   return null;
}

function eraseCookie(name) {
   createCookie(name,"",-1);
}


/////////////////////////////////////////////
/*[
function loadXML(xmlFile)
{
 xmlDoc.async="false";
 xmlDoc.onreadystatechange=verify;
 xmlDoc.load(xmlFile);
 xmlObj=xmlDoc.documentElement;
 sideMenuDisp(xmlObj);
}

]*/

var st='<table class="ctable" BORDER="1">';
var sr ='<tr  class="ctable">';
var sd ='<td class="ctext">';
var sc ='<td class="ccaption">';
var dy = st;
var et ='</table>';
var er ='</tr>';
var ed ='</td>';
 function ceil(i)
{
 var t1=0;
 var t2=0;
 var mod=0;
 var lv_i=parseInt(i);
 t1=i*100000;
 t2=lv_i*100000;
 if( t1>t2)
 return t2/100000 +1;
 else
 return t2/100000;


}

function mod(n,m)
{
if((n%m)==0)
return m;
else
return n%m;
}

/*
 72+
 1584+
 2016
 4608
 11088
 12168
 18648
 34848
 */

 function wrMalJanTblRow(in_rNo)
{
var lrg =0;
var v_rNo = parseInt(in_rNo);
var sa;
var ri=1;
var ga=1;
var ma=1;
var pa=1;
var da=1;
var nee=1;
var st='<table class="ctable" >';
var sr ='<tr>';
var sd ='<td class="ctext">';
var sc ='<td class="ccaption">';
var dy = st;
var et ='</table>';
var er ='</tr>'
var ed ='</td>'
var  malTblRow="";
if(v_rNo == 0)
{
//alert("Invalid malno");
return malTblRow;
}
else if(v_rNo >72)
 {
 // alert("improper mal no");
 return false;
 }
 else
 {
 if(v_rNo > 36)
 {
  ma=2;
  v_rNo = v_rNo-36;
 }
 else
 {
     ma=1;
 }


  lrg= parseInt(v_rNo );
  if((lrg>=7 )&& ( lrg<=12))
  {
     ri=1;
     ga=2;
  }
  else if(lrg>=13 &&  lrg<=18)
  {
   ri=1;
     ga=3;
  }
  else if(lrg>=19 &&  lrg<=24)
  {
     ri=2;
     ga=2;
  }
  else if(lrg>=25 &&  lrg<=30)
  {
     ri=2;
     ga=3;
  }
  else if(lrg>=31 &&  lrg<=36)
  {
     ri=3;
     ga=3;
  }
  else if(lrg>=1 &&  lrg<=6)
  {
     ri=1;
     ga=1;
  }
  lrg=0;
  lrg= v_rNo %6;
 if(lrg ==1)
 {
 da=1;
 nee=1;
 }
 else if(lrg ==2)
 {
       da=1;
       nee=2;
 }
 else if(lrg ==3)
 {
       da=1;
       nee=3;

 }
 else if(lrg == 4 )
 {
       da=2;
       nee=2;
 }
 else if(lrg == 5 )
 {
       da=2;
       nee=3;
 }
 else if(lrg == 0 )
 {
       da=3;
       nee=3;
 }
 }
//document.write("S"+"R"+ri"G"+ga+"M"+ma+"P"+"D"+da+"N"+nee);
//alert("SR"+ri+"G"+ga+"M"+ma+"PD"+da+"N"+nee);
//malTblRow = sr+sd+rn[in_rNo]+ed+sd+ in_rNo+ed +sd+"S"+ed+sd+"R"+ri+ed+sd+"G"+ga+ed+sd+"M"+ma+ed+sd+"P"+ed+sd+"D"+da+ed+sd+"N"+nee+ed+sd+"S"+ed+sd+"S"+ed+sd+"N"+nee+ed+sd+"D"+da+ed+sd+"P"+ed+sd+"M"+ma+ed+sd+"G"+ga+ed+sd+"R"+ri+ed+sd+"S"+ed;
malTblRow = "|"+ri+"|"+ga+"|"+ma+"||"+da+"|"+nee+"||";
//alert(malTblRow);
return malTblRow;
}

function melJanyaCal(i_jnNo)
{

 var aroRagaClass=1;
 var avrRagaClass=1;
 var aroSwraCom=1;
 var avrSwraCom=1;
 var lc_limNo=0;
 var  malNo=1;
 var lcNoRg=1;
 var fnlRtStr= "";
 var jnNo=parseInt(i_jnNo);
 var janyaNo= parseInt(jnNo)-72;
 if(janyaNo <  0)
 {
 janyaNo=0;
 }
if( jnNo > 0 && jnNo <=72)
{
     aroRagaClass=1;
     avrRagaClass=1;
     malNo= mod(jnNo,72);
}
else if(jnNo > 72 && jnNo <=504)
{
     aroRagaClass=1;
     avrRagaClass=2;
     lc_limNo= jnNo-72;
     aroSwraCom=1;
     avrSwraCom=ceil(lc_limNo/72);
     malNo= mod(lc_limNo,72);
}
else if(jnNo > 504 && jnNo <=1584)
{
     aroRagaClass=1;
     avrRagaClass=3;
     lc_limNo= jnNo-504;
     aroSwraCom=1;
     avrSwraCom=ceil(lc_limNo/72);
     malNo= mod(lc_limNo,72);
}
else if(jnNo >1584 && jnNo <=2016)
{
     aroRagaClass=2;
     avrRagaClass=1;
     lc_limNo= jnNo-1584;
     avrSwraCom=1;
     aroSwraCom=ceil(lc_limNo/72);
     malNo= mod(lc_limNo,72);
}
else if(jnNo > 2016 && jnNo <=4608)
{
     aroRagaClass=2;
     avrRagaClass=2;
     lc_limNo= jnNo-2016;
     lcNoRg=ceil(lc_limNo/72);
     aroSwraCom=ceil(lc_limNo/6);
     avrSwraCom=mod(lc_limNo,6);
     malNo= mod(lc_limNo,72);
}
else if(jnNo > 4608 && jnNo <=11088)
{
     aroRagaClass=2;
     avrRagaClass=3;
     lc_limNo= jnNo-4608;
     //lcNoRg=ceil(lc_limNo/72);
     aroSwraCom=ceil(lcNoRg/6);
     avrSwraCom=mod(lcNoRg,15);
     malNo= mod(lc_limNo,72);
}
else if(jnNo > 11088 && jnNo <=12168)
{
     aroRagaClass=3;
     avrRagaClass=1;
     lc_limNo= jnNo-11088;
     aroSwraCom=ceil(lc_limNo/15);
     avrSwraCom=1;
     malNo= mod(lc_limNo,72);
}
else if(jnNo > 12168 && jnNo <=18648)
{
     aroRagaClass=3;
     avrRagaClass=2;
     lc_limNo= jnNo-12168;
     lcNoRg=ceil(lc_limNo/72);
     //aroSwraCom=ceil(lc_limNo/15);
     aroSwraCom=ceil(lcNoRg/6);
     avrSwraCom=mod(lc_limNo,6);;
     malNo= mod(lc_limNo,72);
}
else if(jnNo >18648 && jnNo <=34848)
{
     //alert("ovdava,ovdava");
     aroRagaClass=3;
     avrRagaClass=3;
     lc_limNo= jnNo-18648;
     lcNoRg=ceil(lc_limNo/72);
     aroSwraCom=ceil(lcNoRg/15);
     avrSwraCom=mod(lc_limNo,15);;
     malNo= mod(lc_limNo,72);
}
else
{
     //alert("not under the limit");
     return "";
}
//alert("malNo "+malNo);
//alert(":avrRagaClass:"+rtRagaClassDesc(avrRagaClass)+":aroRagaClass:"+rtRagaClassDesc(aroRagaClass)+":avrSwraCom:"+revString(rtSwraCom(avrSwraCom,avrRagaClass,malNo))+":aroSwraCom:"+rtSwraCom(aroSwraCom,aroRagaClass,malNo)+":malNo:"+malNo+":lcNoRg"+lcNoRg);
//var fnlRtStr= ":avrRagaClassDesc:"+rtRagaClassDesc(avrRagaClass)+":aroRagaClassDesc:"+rtRagaClassDesc(aroRagaClass)+":avrSwraCom:"+revString(rtSwraCom(avrSwraCom,avrRagaClass,malNo))+":aroSwraCom:"+rtSwraCom(aroSwraCom,aroRagaClass,malNo)+":malNo:"+malNo+":lcNoRg";
//fnlRtStr= ":avrRagaClassDesc:"+rtRagaClassDesc(avrRagaClass)+":aroRagaClassDesc:"+rtRagaClassDesc(aroRagaClass)+":avrSwraCom:"+revString(rtSwraCom(avrSwraCom,avrRagaClass,malNo))+":aroSwraCom:"+rtSwraCom(aroSwraCom,aroRagaClass,malNo)+":malNo:"+malNo;
//fnlRtStr=":"+rn[malNo]+":malNo:"+malNo+":janyaNo:"+janyaNo+":aroRagaClassDesc:"+rtRagaClassDesc(aroRagaClass)+ ":avrRagaClassDesc:"+":aroSwraCom:"+rtSwraCom(aroSwraCom,aroRagaClass,malNo)+rtRagaClassDesc(avrRagaClass)+":avrSwraCom:"+revString(rtSwraCom(avrSwraCom,avrRagaClass,malNo));
var header="";
if( jnNo == startJanyaNo)
{
header= sr+sc+"Raga No:melakartha ragam:malNo:janyaNo:aroRagaClass </td><td class='ctable' colspan=9> arohanam :avrRagaClass</td><td class='ctable' colspan=9> avroganam "+ ed+er;
header=header.replace(/:/g,'</td><td class="ctable">');
header=rmDoller(header);
}

//fnlRtStr=":"+rn[malNo]+":"+malNo+":"+janyaNo+":"+rtRagaClassDesc(aroRagaClass)+ ":"+rtSwraCom(aroSwraCom,aroRagaClass,malNo)+":"+rtRagaClassDesc(avrRagaClass)+":"+revString(rtSwraCom(avrSwraCom,avrRagaClass,malNo)); fnlRtStr=":"+rn[malNo]+":"+malNo+":"+janyaNo+":"+rtRagaClassDesc(aroRagaClass)+ ":"+rtSwraCom(aroSwraCom,aroRagaClass,malNo)+":"+rtRagaClassDesc(avrRagaClass)+":"+revString(rtSwraCom(avrSwraCom,avrRagaClass,malNo));
fnlRtStr=fnlRtStr.replace(/:/g,'</td><td class="ctable">');
fnlRtStr=rmDoller(fnlRtStr);
return    header + sr+sc+jnNo+fnlRtStr +ed+er;
//alert(":avrRagaClass:"+rtRagaClassDesc(avrRagaClass)+":aroRagaClass:"+rtRagaClassDesc(aroRagaClass)+":avrSwraCom:"+revString(rtSwraCom(avrSwraCom,avrRagaClass,malNo))+":aroSwraCom:"+rtSwraCom(aroSwraCom,aroRagaClass,malNo)+":malNo:"+malNo+":lcNoRg"+lcNoRg);


}

function rtRagaClassDesc(i)
{
var rtStr="";
     switch(i)
     {
           case 1:
                 rtStr="Samburanam";
           break;
           case 2:
                 rtStr="Shadavam";
           break;
           case 3:
           rtStr="Ovdavam";
           break;
           default:
           rtStr="";
     }
     return rtStr;

}
function rtSwraCom(swraCombination,i_RagaClass,i_malNo)
{
//alert(" swraCombination"+swraCombination+"swraCombination"+swraCombination+"i_malNo"+i_malNo);
var rtStr="s|r|g|m|p|d|n|S";
var swramNo=wrMalJanTblRow(i_malNo);


/*
var swramNo =wrMalJanTblRow(i_malNo);
swramNo= swramNo.split("|");
var i=0;*/
if( i_RagaClass ==2 )
{


     switch(parseInt(swraCombination))
     {
           case 1:
                 rtStr=rtStr.replace(/n/g,'~');
           //    document.getElementById("n"+name).disabled = true;
           break;
           case 2:
                       rtStr=rtStr.replace(/d/g,'~');
                 //    document.getElementById("d"+name).disabled = true;
           break;
           case 3:
                       rtStr=rtStr.replace(/p/g,'~');
                       //document.getElementById("p"+name).disabled = true;
           break;
           case 4:
                       rtStr=rtStr.replace(/m/g,'~');
                       //document.getElementById("m"+name).disabled = true;
           break;
           case 5:
                       rtStr=rtStr.replace(/g/g,'~');
                       //document.getElementById("g"+name).disabled = true;
           break;
           case 6:
                       rtStr=rtStr.replace(/r/g,'~');
                       //document.getElementById("r"+name).disabled = true;
           break;


     }
}
else if( i_RagaClass ==3 )
{
     var i_sc =parseInt(swraCombination);
     if( i_sc >= 1 && i_sc <=5)
     {
     rtStr=rtStr.replace(/n/g,'~');
     //document.getElementById("n"+name).disabled = true;
     }
     if (( i_sc >= 6 && i_sc <=9) || (i_sc == 1) )
     {
           rtStr=rtStr.replace(/d/g,'~');
           //document.getElementById("d"+name).disabled = true;
     }
     if (( i_sc >= 10 && i_sc <=12) || (i_sc == 2) || (i_sc == 6))
     {
           rtStr=rtStr.replace(/p/g,'~');
           //document.getElementById("p"+name).disabled = true;
     }
     if (( i_sc >= 13 && i_sc <=14) || (i_sc == 3) || (i_sc == 7)|| (i_sc == 10))
     {
               rtStr=rtStr.replace(/m/g,'~');
                 //document.getElementById("m"+name).disabled = true;
     }
     if ( (i_sc == 5) || (i_sc == 9)|| (i_sc == 12)|| (i_sc == 14)|| (i_sc == 15))
     {
                 rtStr=rtStr.replace(/r/g,'~');
                       //document.getElementById("r"+name).disabled = true;
     }
     if ( (i_sc ==4) || (i_sc == 8)|| (i_sc == 11)|| (i_sc == 13)|| (i_sc == 15))
     {
                       rtStr=rtStr.replace(/g/g,'~');
                             //document.getElementById("g"+name).disabled = true;
     }
}

var swramArr =rtStr.split('|');
var fnlRtStr="";
var swramNoArr=swramNo.split('|');

for(var  i=0;i<swramArr.length;i++)
{
     if(swramArr[i] == '~')
     {
     //fnlRtStr=fnlRtStr+tmp[i]+swramNoArr[i];
     fnlRtStr=fnlRtStr+"~:";
           continue;
     }
     fnlRtStr=fnlRtStr+"~:"+swramArr[i]+swramNoArr[i];
}
return fnlRtStr;
}

function wrJanTbl(obj)
{
var dy=st;
var i=0;
var currJanNxtLastCount = parseInt(readCookie("JanNxtLastCount"));
var nextJanNxtLastCount=0;

//alert("currJanNxtLastCount" +currJanNxtLastCount);
//alert(perPageCount);
 document.forms[0].perPageCount.value=perPageCount;

if( isNaN(currJanNxtLastCount))
{
     createCookie("JanNxtLastCount",perPageCount,1);
     currJanNxtLastCount= parseInt(readCookie("JanNxtLastCount")) ;
     alert("currJanNxtLastCount" +currJanNxtLastCount +"perPageCount"+perPageCount);
}
else if( currJanNxtLastCount > 34848)
{
     createCookie("JanNxtLastCount",0,1);
}
else
{

if( obj.id=="next")
nextJanNxtLastCount=currJanNxtLastCount+perPageCount;
else
nextJanNxtLastCount=currJanNxtLastCount-perPageCount;

createCookie("JanNxtLastCount",nextJanNxtLastCount,1);

}

//try
//{

startJanyaNo=currJanNxtLastCount - perPageCount+1;
endJanyaNo = currJanNxtLastCount;
document.forms[0].startJanyaNo.value=startJanyaNo;
document.forms[0].endJanyaNo.value=endJanyaNo;

for(i=startJanyaNo;i<=endJanyaNo;i++)
dy = dy+melJanyaCal(i);
dy = dy+et;
dyJanTbl.innerHTML=dy;
document.forms[0].dyJanTblSrc.value=dy;
//}
//catch(e)
//{
//alert("wrMalTbl:"+e);
//}
return dy;
}
function revString(a)
{
     var b;
     //b=a.split('');
           b=a.split('~');
     var rtStr="";
     //alert(" b="+ b);
     var i=b.length;
     //alert("b.length"+b.length);
     while(i)
     {
           //alert(b[i]);
           rtStr=rtStr+'~'+b[--i];
     }
     //rtStr=rtStr+''+b[i];
     return rtStr;
}
function rmDoller(a)
{
var rtStr =a.replace(/~/g,'');
return rtStr;
}
</script>
<BODY class=cbody >
<form>
<span class="cform">
<script>
 //whead();
</script>

<script language="javascript">


var lv_i=0;
function dyCombo(name)
{


var rn= new Array("","kanakAngi","rathnAngi","gAnamUrthi","vanaspathi","mAnavathi","thAnarUpi","sEnAvathi","HanumathOdi","DhEnukA","nAtakapriya","kOkilapriya","rUpavathi","gAyakapriya","vakulAbharaNam","mAyAmALavagowLA","chakravAkam","sUryakAntam","HAtakAmbari","JankAradhvani","naTabhairavi","kIravANi","KaraHarapriya","gowrimanOHari","varuNapriya","mAraranjani","chArukeshi","sarasAngi","HarikAmbhOji","DhIrashankarAbharaNam","nAgAnandhini","yAgapriya","rAgavarDhani","gAngeyabhushani","vAgaDhIsvari","shUlini","chalanAta","sAlagam","jalArnavam","JAlavarALi","navanItham","pAvani","raGupriya","gavAmbodhi","bhavapriya","shubhapanthuvarALi","shadhvidhamArgiNi","suvarNAngi","dhivyAmaNi","dhavalAmbari","nAmanArAyaNi","kAmavardhini(Pantuvarali)","rAmapriya","gamanashrama","vishvAmbhari","shyAmaLAngi","shanmuKapriya","simHendramadhyamam","HemAvathi","DharmAvathi","nIthimathi","kAnthAmaNi","rishabhapriya","lathAngi","vAchaspathi","mEchakalyANi","chithrAmbari","sucharithra","jyothisvarUpiNi","dhAtuvardhani","nAsikabhUshaNi","kosalam","rasikapriya");


////alert(name);
 with (document)
 {
  write('<td class="ctext">');
  write('Raga Name');
  write('</td>');
  write('<td class="ctext">');
  write('<select id= "rName'+name+'"  name="rName" nameid="'+name+'" onchange="javascript:rNo.value=rName.value; val1(this);">');
  for(lv_i=1;lv_i<rn.length;lv_i++)
  write('<option value='+ lv_i+'>'+rn[lv_i]+'</option>');
  write('</select>');
  write('</td>');
  write('<td class="ctext">');
  write('Melakartha No ');
  write('</td>');
  write('<td class="ctext">');
  write('<select id="rNo'+name+'"  name="rNo" nameid="'+name+'" onchange="javascript:rName.value=rNo.value; val1(this);" >');
  for(lv_i=1;lv_i<rn.length;lv_i++)
  write('<option value='+ lv_i+'>'+lv_i+'</option>');
  write('</select>');
  write('</td>');
 }
}



function val1(obj)
{
 var lrg =0;
 var name=obj.nameid;
if(obj.name=="rName")
{
document.getElementById("rNo"+name).value = obj.value;

}
else
{
document.getElementById("rName"+name).value = obj.value;
}


var v_rNo= parseInt(document.getElementById("rNo"+name).value);

 if(v_rNo ==0)
 {
 alert("plese Chose Raga Or Mela No!");
 return false;
 }
 else
 {
 if(v_rNo > 36)
 {

 document.getElementById("m"+name).value =36;

  v_rNo = v_rNo-36;
 }
 else
 {
   document.getElementById("m"+name).value=0;
 }


  lrg= parseInt(v_rNo );
  if(lrg>=7 &&  lrg<=12)
  {
   document.getElementById("r"+name).value=0;
     document.getElementById("g"+name).value=6;
  }

  else if(lrg>=13 &&  lrg<=18)
  {
   document.getElementById("r"+name).value=0;
   document.getElementById("g"+name).value=12;
  }
  else if(lrg>=19 &&  lrg<=24)
  {
   document.getElementById("r"+name).value=12;
   document.getElementById("g"+name).value=6;
  }
  else if(lrg>=25 &&  lrg<=30)
  {
   document.getElementById("r"+name).value=12;
   document.getElementById("g"+name).value=12;
  }
  else if(lrg>=31 &&  lrg<=36)
  {
   document.getElementById("r"+name).value=18;
   document.getElementById("g"+name).value=12;
  }
  else if(lrg>=1 &&  lrg<=6)
  {
   document.getElementById("r"+name).value=0;
   document.getElementById("g"+name).value=0;
  }


 lrg=0;

 lrg= v_rNo %6;
 if(lrg ==1)
 {
  document.getElementById("d"+name).value=0;
  document.getElementById("n"+name).value=1;
 }
 else if(lrg ==2)
 {
  document.getElementById("d"+name).value=0;
  document.getElementById("n"+name).value=2;
 }
 else if(lrg ==3)
 {

  document.getElementById("d"+name).value=0;
  document.getElementById("n"+name).value= 3;
 }
 else if(lrg == 4 )
 {
  document.getElementById("d"+name).value=2;
  document.getElementById("n"+name).value=2;
 }
 else if(lrg == 5 )
 {
  document.getElementById("d"+name).value=2;
  document.getElementById("n"+name).value=3;
 }
 else if(lrg == 0 )
 {
  document.getElementById("d"+name).value=3;
  document.getElementById("n"+name).value=3;
 }
 }
}

function valfmtrg(b,name)
{
var r =document.getElementById("r"+name);
var g =document.getElementById("g"+name);
if( r.sra   < g.sra )
;
else
{
alert("this isn't a proper raga");
b.value=0;
return 0;
}
return 1;
}


function valfmtdn(b,name)
{

///alert(b.id+"name="+name);
var d =document.getElementById("d"+name);
var n =document.getElementById("n"+name);
var cmp=b.name
if( d.sra   < n.sra )
;
else
{
alert("This isn't a proper Raga");

//if(b.id=='n')
if(b.name== 'n' )
{
b.value=1;
}
else
b.value=0;
return 0;
}
return 1;
}

function val3(name)
{

var r=document.getElementById("r"+name);
var g=document.getElementById("g"+name);
var d=document.getElementById("d"+name);
var n=document.getElementById("n"+name);
if(r.value==0)r.sra=1;
if(r.value==12)r.sra=2;
if(r.value==18)r.sra=3;
if(g.value==0)g.sra=2;
if(g.value==6)g.sra=3;
if(g.value==12)g.sra=4;
if(d.value==0)d.sra=1;
if(d.value==2)d.sra=2;
if(d.value==3)d.sra=3;
if(n.value==1)n.sra=2;
if(n.value==2)n.sra=3;
if(n.value==3)n.sra=4;
return true;
}


function val2( name)
{
 var i= 0;
 var r= 0;
val3(name);
document.getElementById("g"+name).onchange();
document.getElementById("n"+name).onchange();
var s=0;
var s =document.getElementById("s"+name).value;
var r=document.getElementById("r"+name).value;
var g=document.getElementById("g"+name).value;
var m=document.getElementById("m"+name).value;
var p=document.getElementById("p"+name).value;
var d=document.getElementById("d"+name).value;
var n=document.getElementById("n"+name).value;
s=parseInt(s);
r=parseInt(r);
g=parseInt(g);
m=parseInt(m);
p=parseInt(p);
d=parseInt(d);
n=parseInt(n);
document.getElementById("rName"+name).value = s+r+g+m+p+d+n;
document.getElementById("rNo"+name).value = s+r+g+m+p+d+n;
}

function cl(obj)
{

var swraCombination = obj.value;
var i_RagaClass=1;
var name="";

if(obj.id=="avan")
{
     i_RagaClass=parseInt(document.getElementById("ava").value );
           name="avr1";


}
else
{
     i_RagaClass=parseInt(document.getElementById("aro").value );
name="aro1";

}
////alert(" i_RagaClass "+i_RagaClass);
ebabledAll(name);
if( i_RagaClass ==2 )
{


     switch(parseInt(swraCombination))
     {
           case 1:

                 document.getElementById("n"+name).disabled = true;
           break;
           case 2:

                       document.getElementById("d"+name).disabled = true;
           break;
           case 3:
                       document.getElementById("p"+name).disabled = true;
           break;
           case 4:

                       document.getElementById("m"+name).disabled = true;
           break;
           case 5:

                       document.getElementById("g"+name).disabled = true;
           break;
           case 6:
                       document.getElementById("r"+name).disabled = true;
           break;


     }
}
else if( i_RagaClass ==3 )
{
     var i_sc =parseInt(swraCombination);
     if( i_sc >= 1 && i_sc <=5)
     {
     document.getElementById("n"+name).disabled = true;
     }
     if (( i_sc >= 6 && i_sc <=9) || (i_sc == 1) )
     {
           document.getElementById("d"+name).disabled = true;
     }
     if (( i_sc >= 10 && i_sc <=12) || (i_sc == 2) || (i_sc == 6))
     {
           document.getElementById("p"+name).disabled = true;
     }
     if (( i_sc >= 13 && i_sc <=14) || (i_sc == 3) || (i_sc == 7)|| (i_sc == 10))
           {
                 document.getElementById("m"+name).disabled = true;
     }
     if ( (i_sc == 5) || (i_sc == 9)|| (i_sc == 12)|| (i_sc == 14)|| (i_sc == 15))
     {
                       document.getElementById("r"+name).disabled = true;
     }
     if ( (i_sc ==4) || (i_sc == 8)|| (i_sc == 11)|| (i_sc == 13)|| (i_sc == 15))
           {
                             document.getElementById("g"+name).disabled = true;
     }
}


}




function ebabledAll(name)
{
document.getElementById("n"+name).disabled = false;
document.getElementById("d"+name).disabled = false;
document.getElementById("p"+name).disabled = false;
document.getElementById("m"+name).disabled = false;
document.getElementById("g"+name).disabled = false;
document.getElementById("r"+name).disabled = false;
}
function chgsubclss(obj)
{

var comb=0;
var idn=obj.id ;
var idn=idn+'n';
var dycm='<select name= "sc" id='+idn+' onchange="javascript:cl(this)">';
switch(obj.value)
{
case '1': comb=1;break;
case '2': comb=6;break;
case '3': comb=15;break;
default:comb=1;
}
for(var k=1;k <=comb;k++)
{
dycm += '<option  value='+k+'> '+k+' </option>'
}

dycm += '</select>'
if(obj.id =="aro")
{
     drsc1.innerHTML="Swra Combination(aroganam)  " + comb;
     rsc1.innerHTML=dycm;
}
else
{
drsc2.innerHTML="Swra Combination (avraganam) " + comb;
rsc2.innerHTML=dycm;
}
document.getElementById(idn).onchange();

}
function fnDisArAv(b)
{
if( b.value ==1 )
{
document.forms[0].aro.disabled = true;
document.forms[0].ava.disabled = true;
document.forms[0].aro.value =1;
document.forms[0].ava.value =1;

chgsubclss(document.forms[0].aro);
chgsubclss(document.forms[0].ava);
}
else
{
document.forms[0].aro.disabled = false;
document.forms[0].ava.disabled = false;
}
}




function rtRagaClassl()
{

var swraCombination = obj.value;
var i_RagaClass=1;
var name="";

if(obj.id=="avan")
{
     i_RagaClass=parseInt(document.getElementById("ava").value );
           name="avr1";


}
else
{
     i_RagaClass=parseInt(document.getElementById("aro").value );
name="aro1";

}
////alert(" i_RagaClass "+i_RagaClass);
ebabledAll(name);
if( i_RagaClass ==2 )
{


     switch(parseInt(swraCombination))
     {
           case 1:

                 document.getElementById("n"+name).disabled = true;
           break;
           case 2:

                       document.getElementById("d"+name).disabled = true;
           break;
           case 3:
                       document.getElementById("p"+name).disabled = true;
           break;
           case 4:

                       document.getElementById("m"+name).disabled = true;
           break;
           case 5:

                       document.getElementById("g"+name).disabled = true;
           break;
           case 6:
                       document.getElementById("r"+name).disabled = true;
           break;


     }
}
else if( i_RagaClass ==3 )
{
     var i_sc =parseInt(swraCombination);
     if( i_sc >= 1 && i_sc <=5)
     {
     document.getElementById("n"+name).disabled = true;
     }
     if (( i_sc >= 6 && i_sc <=9) || (i_sc == 1) )
     {
           document.getElementById("d"+name).disabled = true;
     }
     if (( i_sc >= 10 && i_sc <=12) || (i_sc == 2) || (i_sc == 6))
     {
           document.getElementById("p"+name).disabled = true;
     }
     if (( i_sc >= 13 && i_sc <=14) || (i_sc == 3) || (i_sc == 7)|| (i_sc == 10))
           {
                 document.getElementById("m"+name).disabled = true;
     }
     if ( (i_sc == 5) || (i_sc == 9)|| (i_sc == 12)|| (i_sc == 14)|| (i_sc == 15))
     {
                       document.getElementById("r"+name).disabled = true;
     }
     if ( (i_sc ==4) || (i_sc == 8)|| (i_sc == 11)|| (i_sc == 13)|| (i_sc == 15))
           {
                             document.getElementById("g"+name).disabled = true;
     }
}


}


function wrtMel(name,caption)
{




document.write('<tr>');
document.write('<td class="ccaption" colspan=10>');
document.write('<span id="srafmt'+name+'" >'+caption+'  </span>');
document.write('</td>');
document.write('</tr>');
document.write(' <TR>');
document.write('<tr>');
dyCombo(name);
document.write('</tr>');
document.write('<TD class="ctext">');
document.write('vara Format: </TD>');
document.write('<TD colspan=2>');

document.write('<SELECT id=s'+name+'   name=s> <OPTION value=0 selected>S</OPTION>');
document.write('</SELECT>');

document.write('<SELECT id=r'+name+'  nameid="'+name+'" onchange=javascript:if(this.value==0)this.sra=1;if(this.value==12)this.sra=2;if(this.value==18)this.sra=3; name=r sra="1">'); 
document.write(' <OPTION value=0 selected>R1</OPTION>');
document.write(' <OPTION     value=12>R2</OPTION> <OPTION value=18>R3</OPTION>');
document.write(' </SELECT>');
document.write(' <SELECT  id=g'+name+' nameid="'+name+'" rval="r'+name+'" onchange="javascript:if(this.value==0)this.sra=2;if(this.value==6)this.sra=3;if(this.value==12) this.sra=4; valfmtrg(this,this.nameid); valfmtrg(document.getElementById(this.rval),document.getElementById(this.rval).nameid); "             name=g sra="2">');
document.write(' <OPTION value=0 selected>G1</OPTION>');
document.write(' <OPTION  value=6>G2</OPTION> <OPTION value=12>G3</OPTION>');
document.write(' </SELECT>');

document.write(' <SELECT          id=m'+name+'   name=m>');
document.write(' <OPTION value=0 selected>M1</OPTION>');
document.write(' <OPTION   value=36>M2</OPTION>');
document.write(' </SELECT> <SELECT id=p'+name+'  name=p>');
document.write(' <OPTION value=0   selected>P</OPTION>');
document.write(' </SELECT> <SELECT id=d'+name+' nameid="'+name+'" onchange=javascript:if(this.value==0)this.sra=1;if(this.value==2)this.sra=2;if(this.value==3)this.sra=3; name=d sra="1">');
document.write(' <OPTION value=0 selected>D1</OPTION>');
document.write(' <OPTION  value=2>D2</OPTION>');
document.write(' <OPTION value=3>D3</OPTION>');
document.write(' </SELECT>');

document.write(' <SELECT  id=n'+name+'  nameid="'+name+'" rval="d'+name+'" onchange="javascript:if(this.value==1)this.sra=2;if(this.value==2)this.sra=3;if(this.value==3) this.sra=4; valfmtdn(this,this.nameid); valfmtdn(document.getElementById(this.rval),document.getElementById(this.rval).nameid);obj=this; "             name=n sra="2">');
document.write(' <OPTION value=1 selected>N1</OPTION>');
document.write(' <OPTION     value=2>N2</OPTION> <OPTION value=3>N3</OPTION>');
document.write(' </SELECT>');

document.write(' </TD>');

document.write(' <TD class="ctext">&nbsp;<LABEL id=h onclick=javascript:newwindow()> help       </LABEL>');
document.write(' </TD>');
document.write(' <TD class="ctext" >');

document.write(' <INPUT class="button1" id='+name+' onclick="javascript:val2(this.id);" type="button" value="'+caption+' Validate"  name="Validate" >');
document.write(' </TD>');
document.write(' </TR>');
return 0;

}

function onPerPageCount(obj)
{
if(isNaN(parseInt(obj.value)))
{
obj.value=0;
return false;
}

perPageCount=parseInt(obj.value);
document.forms[0].next.onclick();
}

function onStartJanyaNo(obj)
{
if(isNaN(parseInt(obj.value)))
{
obj.value=0;
return false;
}
startJanyaNo=parseInt(obj.value);
createCookie("JanNxtLastCount",startJanyaNo,1);
document.forms[0].next.onclick();
}

function onEndJanyaNo(obj)
{
if(isNaN(parseInt(obj.value)))
{
obj.value=0;
return false;
}

endJanyaNo=parseInt(obj.value);
if( endJanyaNo < startJanyaNo  )
{
alert("pls enter endJanyaNo greater than the startJanyaNo:"+startJanyaNo);
obj.value=startJanyaNo+perPageCount;
return false;
}
if(isNaN(endJanyaNo))
{
endJanyaNo=0;
}
perPageCount = parseInt(endJanyaNo) - parseInt(startJanyaNo);

document.forms[0].perPageCount.value=perPageCount;
document.forms[0].next.onclick();
//createCookie("JanNxtLastCount",startJanyaNo,1);
}
</script>
</head>
<form>
<table  border="0" class="ctable"  >
<TR>
   <TD class=ccaption colSpan=8><SPAN id=i>CARNATIC </span>&copy<SPAN
class=h>he</SPAN><SPAN class=ha>aerie</SPAN>
   <TD>
 <TR>
 <TR>

<tr>
<td class="ccaption" colspan="10">
<label class="lable" > Carnatic Raga Classification - (hierarchy) </label>
</td>
</td>
<tr>
<td class="ctext">
<label class="lable" > Raaga type(janyaraga II)</label>
</td>
<td>
<select name= "rty" >
<option value="1">upanga raga</option>
<option value="2">pashanga raga</option>
<option value="3">vakra raga</option>
</select>
</td>
</tr>
<tr>
<td>

<label class="lable" > Raga set (Malakartha ,Janya Raga I)</label>
</td>
<td>

<select name="rmdl" onchange="fnDisArAv(this)">
<option value="1">Malakartha raga</option>
<option value="2">Janya raga</option>
</select>
</td>
</tr>
<tr>

<td>

<label class="lable" >Raga class  </label>
</td>
<td>


<select name="aro" id="aro"onchange="chgsubclss(this)" disabled=true
value=1>
<option value="1">Sampurana</option>
<option      value="2">Sadava</option>
<option value="3">Ovdava</option>
</select>

<label class="lable" > </label>
</td>
<td>
<select name="ava" id="ava"onchange="chgsubclss(this)" disabled=true
value=1>
<option value="1">Sampurana</option>
<option value="2">Sadava</option>
<option value="3">Ovdava</option>
</select>
</td>
</tr>
<tr>
<td>
<span id="drsc1">Swra Combination(aroganam) 1 </span>
</td>
<td>
<span id="rsc1"><select name= "sc" id="aron" onchange="javascript:cl(this)">  <option value=1> 1</option></select>
</span>
</td>
<td>
<span id="drsc2"> Swra Combination (avraganam) 1 </span>
</td>
<td>
<span id="rsc2"> <select name= "sc" id="avan" onchange="javascript:cl(this)">  <option value=1> 1</option></select></span>
</td>
</tr>


<script>
wrtMel('aro1','arohanam');
wrtMel('avr1','avroganam');
</script>


<tr>
           <TD class=ctext colspan=4>
<INPUT class=cbutton onclick="javascript:wrJanTbl(this);" type=button id="prev" value="prev" name=submit >
        </TD>


            <TD class=ctext colspan=4>
<INPUT class=cbutton onclick="javascript:wrJanTbl(this);" type=button id="next" value="next" name=submit>
        </TD>
<!--
           <TD class=ctext><input type="text"
onchange="javascript:melJanyaCal(this.value)">
         </TD>
             -->

<tr>
             <TD class="ctext"> startJanyaNo
         </TD>
             <TD class=ctext><input type="text"  id="startJanyaNo" value=1 onchange="javascript:onStartJanyaNo(this)" > </TD>
             <TD class="ctext"> lines Per Page
         </TD>
             <TD class=ctext><input type="text"  id="perPageCount"  value=10 onchange="javascript:onPerPageCount(this)" >
         </TD>
             <TD class="ctext"> end Janya No
         </TD>
             <TD class=ctext><input type="text"  id="endJanyaNo" value=10 onchange="javascript:onEndJanyaNo(this)" >
         </TD>
</tr>
     </tr>
     <tr >
           <TD class=ctext  colspan="100">
                 <SPAN id=dyJanTbl></SPAN>
           </td>
     </tr>
     <tr>
            <TD class=ctext>
            <input type="hidden" id="bug" onchange="javascript:this.value=revString(this.value)">
         </TD>
             <TD class=ctext><input type="hidden" readonly id="dyJanTblSrc"  >
         </TD>

     </tr>



</table>
</form>

</HTML>

