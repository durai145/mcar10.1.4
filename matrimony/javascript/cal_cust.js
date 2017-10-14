//alert('import cust.js');
var sarali="";


var objSwarasName= new SwarasName();

	var st ='<table class="ctable" border=1 >';
	var stc ='<table bgcolor="red"   >';
	var sr ='<tr>';
	var src ='<tr>';
	var sd ='<td class="ctext">';
	var sc ='<td class="ccaption">';
	var scg ='<td  bgcolor="red" >';
	var dy = st;
	var et ='</table>';
	var er ='</tr>';
	var ed ='</td>';



   function onPostReq(url,json,id,type)
	{
		var rtVal="";
             $.post( 
             url,
             json,
             function(data) 
		{
		if(type == 'DIV')
		$("#"+id).html(data);
		else if( type == 'OBJ')
		{
		document.getElementById(id).value= data;
		}

		}
          )

	}


function onPhpLoadPage()
{
	alert("Php cust");
}
//alert('C:001:@@@');
function  onLoadPage()
{
    //document.forms[0].rlt.value =docSource;
	//alert('On Load');
	try
	{
var		nameid = 'name';

	onPhpLoadPage();

	
	//	document.getElementById(melChakraId).disabled = true;
	//	document.getElementById(melChakraNameId).disabled = true;
	//	document.getElementById(melMelamNoId).disabled = true;
	}
	catch(e)
	{
		alert('ONLException: ' + e);
	}
}
//alert('C:002:@@@');

function   cust_pre_onChange(obj)
{
   // alert("this is cust preOnchange");
}
//alert('C:004:@@@');


//alert('C:005:@@@');
function cust_option_remove_lsr(selectbox,value)
{
var i;
for(i=1;i<selectbox.options.length;i++)
{

if(selectbox.options[i].value<value)
selectbox.remove(i);
}

}

function cust_option_remove_gtr(selectbox,value)
{
var i;
for(i=selectbox.options.length-1;i>=0;i--)
{
if(selectbox.options[i].value>value)
selectbox.remove(i);
}
}

function cust_option_remove(selectbox)
{
var i;
for( i=selectbox.options.length;i>=0;i--)
{
	//alert(i + "remove=" +selectbox.options.text);
selectbox.remove(i);
}
}
/*--
function cust_option_remove(selectbox)
{
var i;
for(i=selectbox.options.length-1;i>=0;i--)
{
if(selectbox.options[i].selected)
selectbox.remove(i);
}
}
*/

function   cust_pre_onKeyDown(obj)
{
   //  alert("this is cust preOnKeyPresse");
}
//alert('C:006:@@@');


function   cust_post_onKeyDown(obj)
{
    //alert("this is cust postOnKeyPress");
}

//alert('C:007:@@@');

function   cust_pre_onKeyUp(obj)
{
   //  alert("this is cust preOnKeyUp");
}
//alert('C:010:@@@');


function   cust_post_onKeyUp(obj)
{
    //alert("this is cust postOnKeyUp");
}


function   cust_pre_onKeyPress(obj)
{
   //  alert("this is cust preOnKeyPresse");
}


function   cust_post_onKeyPress(obj)
{
    //alert("this is cust postOnKeyPress");
}



//alert('C:011:@@@');
function onClickLink(objId,Link,title)
{
	alert("onClickLink");
	
	try
	{
		var url="../helpWin/";
		url+=Link; 
		url+="?helpWin.sysDate=" +document.getElementById(objId).value;
		
			window.showModalDialog(url,title); 
	}
	catch(e)
	{
			alert("OCLExceprion:"+e);
	}
		
}
//alert('C:012:@@@');
//alert('C:013:@@@');
function mod(n,m)
{
if((n%m)==0)
return m;
else
return n%m;
}

function ceil(	inp)
{
	var rtVal=0;
	var intVal=parseInt(inp)*1000000000000; // it will remove the decimel point
	var floatVal=inp*1000000000000; // it has the decimel point

      //  alert("intVal " +intVal);
        //alert("floatVal" +floatVal);
	if( intVal  <floatVal)
	{
		rtVal=parseInt(inp)+1;
	}
	else
	{
		rtVal=parseInt(inp);	
	}
	

	return rtVal;
}




function cust_pre_onClick(obj)
{
	var FuncCode=$("#FuncCode").val();

	if ( FuncCode == 'A' )
	{
		$("#SNo").attr("mndf", "N");
	}
	else
	{
		$("#SNo").attr("mndf", "Y");

	}
	//form action

	if(obj.getAttribute("task") ==  "BACK")
	{
	document.form1.action="maint_crit.php";
	document.form1.submit();
	}
	else
	document.form1.action="maint_dtil.php";
	
}
//setTimeout("process()",60);







//need to check Can we pass function name as well ####

 var keyStr = "ABCDEFGHIJKLMNOP" +
               "QRSTUVWXYZabcdef" +
               "ghijklmnopqrstuv" +
               "wxyz0123456789+/" +
               "=";

  function encode64(input) {
     input = escape(input);
     var output = "";
     var chr1, chr2, chr3 = "";
     var enc1, enc2, enc3, enc4 = "";
     var i = 0;

     do {
        chr1 = input.charCodeAt(i++);
        chr2 = input.charCodeAt(i++);
        chr3 = input.charCodeAt(i++);

        enc1 = chr1 >> 2;
        enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
        enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
        enc4 = chr3 & 63;

        if (isNaN(chr2)) {
           enc3 = enc4 = 64;
        } else if (isNaN(chr3)) {
           enc4 = 64;
        }

        output = output +
           keyStr.charAt(enc1) +
           keyStr.charAt(enc2) +
           keyStr.charAt(enc3) +
           keyStr.charAt(enc4);
        chr1 = chr2 = chr3 = "";
        enc1 = enc2 = enc3 = enc4 = "";
     } while (i < input.length);


output=output.replace(/[^A-Za-z0-9\+\/\=]/g, "");

     return output;
  }

  function decode64(input) {
     var output = "";
     var chr1, chr2, chr3 = "";
     var enc1, enc2, enc3, enc4 = "";
     var i = 0;

     // remove all characters that are not A-Z, a-z, 0-9, +, /, or =
     var base64test = /[^A-Za-z0-9\+\/\=]/g;

     if (base64test.exec(input)) {
      // alert("There were invalid base64 characters in the input text.\n" + "Valid base64 characters are A-Z, a-z, 0-9, '+', '/',and '='\n" + "Expect errors in decoding.");
	;
     }
     input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

     do {
        enc1 = keyStr.indexOf(input.charAt(i++));
        enc2 = keyStr.indexOf(input.charAt(i++));
        enc3 = keyStr.indexOf(input.charAt(i++));
        enc4 = keyStr.indexOf(input.charAt(i++));

        chr1 = (enc1 << 2) | (enc2 >> 4);
        chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
        chr3 = ((enc3 & 3) << 6) | enc4;

        output = output + String.fromCharCode(chr1);

        if (enc3 != 64) {
           output = output + String.fromCharCode(chr2);
        }
        if (enc4 != 64) {
           output = output + String.fromCharCode(chr3);
        }

        chr1 = chr2 = chr3 = "";
        enc1 = enc2 = enc3 = enc4 = "";

     } while (i < input.length);

     return unescape(output);
  }


//alert('end cust.js');


function janRagaMelamNoList(name)
{

	
//	alert('In janRagaMelamNoList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaMelamList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}

}
	catch(e)
	{
		alert("JRNException:"+e);
	}

								
		return melRagaMelamNoList(name+"Aro") +  melRagaMelamNoList(name+"Avro") ;

}


function janRagaNoList(name)
{

	
//	alert('In janRagaMelamNoList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaMelamList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}

}
	catch(e)
	{
		alert("MRNException:"+e);
	}

								
		return melRagaNoList(name+"Aro") +  melRagaNoList(name+"Avro") ;

}

function janRagaMelamNameList(name)
{

	
//	alert('In janRagaMelamNoList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaMelamList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}

}
	catch(e)
	{
		alert("JRNException:"+e);
	}

								
		return melRagaMelamNameList(name+"Aro") +  melRagaMelamNameList(name+"Avro") ;

}



//melRagaChakraList

function janRagaChakraList(name)
{

	
//	alert('In janRagaMelamNoList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaMelamList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}

}
	catch(e)
	{
		alert("JRNException:"+e);
	}

								
		return melRagaChakraList(name+"Aro") +  melRagaChakraList(name+"Avro") ;

}


function janRagaChakraNameList(name)
{

	
//	alert('In janRagaMelamNoList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaMelamList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}

}
	catch(e)
	{
		alert("JRNException:"+e);
	}

								
		return melRagaChakraNameList(name+"Aro") +  melRagaChakraNameList(name+"Avro") ;

}



function janRagaNameList(name)
{

	
//	alert('In janRagaMelamNoList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaMelamList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}

}
	catch(e)
	{
		alert("MRNException:"+e);
	}

								
		return melRagaNameList(name+"Aro") +  melRagaNameList(name+"Avro") ;

}



function janSwaraGanam(name)
{

	
//	alert('In janRagaMelamNoList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaMelamList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}

}
	catch(e)
	{
		alert("MRNException:"+e);
	}

								
		return swaraGanam(name+"Aro") +  swaraGanam(name+"Avro") ;

}
function melRagaMelamNoList(name)
{

	
//	alert('In melRagaMelamNoList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaMelamList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var melam = new Array(0,1,2,3,4,5,6);
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
//	dynStr+='Melam';
	dynStr+=HMELCARNAMET4;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	dynStr+='<select id="'+name+'MelMelamNoId" disabled=true class="clabel"  readonly nameid="'+name+'"  name="'+name+'MelMelamNoName" dataType="OPTION"  onchange="javascript:onChange(this)" >';


	for(var i=0; i<melam.length; i++)
	{

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value='+i+'>' +   melam[i]  + '</option>';
	//dynStr+='<option value='+i+'>' +   eval('chakaras.melams'+i ) + '</option>';
	
	}
	dynStr+='</select>';
	dynStr+='</td>';
	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;

}



function melRagaMelamNameList(name)
{

	
//	alert('In melRagaMelammList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaMelamList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var chakaras = new Melams();
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET5;
//	dynStr+='ChakaraNo';
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	dynStr+='<select id="'+name+'MelMelamNameId"  disabled=true   nameid="'+name+'"  name="'+name+'MelMelamNameName" dataType="OPTION"  onchange="javascript:onChange(this)" >';


	for(var i=0; i<7; i++)
	{

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value='+i+'>' +  i +'-'+ eval('chakaras.melams'+i ) + '</option>';
	//dynStr+='<option value='+i+'>' +   eval('chakaras.melams'+i ) + '</option>';
	
	}
	dynStr+='</select>';
	dynStr+='</td>';
	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;

}
function melRagaChakraNameList(name)
{

	
//	alert('In melRagaChakramList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaChakraList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var chakaras = new Chakras();
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET3;
//	dynStr+='ChakaraNo';
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	dynStr+='<select id="'+name+'MelChakraNameId" disabled=true  readonly nameid="'+name+'"  name="'+name+'MelChakraNameName" dataType="OPTION"  onchange="javascript:onChange(this)" >';


	for(var i=0; i<13; i++)
	{

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value='+i+' >' +  i+'-'+ eval('chakaras.chakara'+i ) + '</option>';
	
	}
	dynStr+='</select>';
	dynStr+='</td>';
	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;

}
function melRagaChakraList(name)
{

	
//	alert('In melRagaChakramList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaChakraList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var mel = new Mela();
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET2;
//	dynStr+='ChakaraNo';
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	dynStr+='<select id="'+name+'MelChakraNoId" disabled=true readonly nameid="'+name+'"  name="'+name+'MelChakraNoName" dataType="OPTION"  onchange="javascript:onChange(this)" >';


	for(var i=0; i<13; i++)
	{

	//	document.write(''+ i +'=' + eval('mel.raga'+i ) );
	dynStr+='<option value='+i+'>' + i  + '</option>';
	
	}
	dynStr+='</select>';
	dynStr+='</td>';
	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;

}
function melRagaNoList(name)
{
	
//	alert('In melRagaNoList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaNoList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var mel = new Mela();
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET1;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	dynStr+='<select id="'+name+'MelNoId" nameid="'+name+'"  name="'+name+'MelNoName" dataType="OPTION"  onchange="javascript:onChange(this)" >';


	for(var i=0; i<73; i++)
	{

	//	document.write(''+ i +'=' + eval('mel.raga'+i ) );
	dynStr+='<option value='+i+'>' + i  + '</option>';
	
	}
	dynStr+='</select>';
	dynStr+='</td>';
	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;

}
//alert('C:014:@@@');
function melRagaNameList( name)
{

	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaNameList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var mel = new Mela();
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET0;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	dynStr+='<select id="'+name+'MelNameId" nameid="'+name+'"  name="'+name+'MelNameName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

	for(var i=0; i<73; i++)
	{

	//	document.write(''+ i +'=' + eval('mel.raga'+i ) );
	dynStr+='<option value='+i+'>'+i +'-'+ eval('mel.raga'+i ) + '</option>'; /*@@@*/
/*[@@@@
	dynStr+='<option value='+i+'>'+i +'-'+ eval('mel.raga'+i ) + '</option>'; 
@@@]*/
	
	}
	dynStr+='</select>';
	dynStr+='</td>';



	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;
}

function mod(n,m)
{
if((n%m)==0)
return m;
else
return n%m;
}

function ceil(	inp)
{
	var rtVal=0;
	var intVal=parseInt(inp)*1000000000000; // it will remove the decimel point
	var floatVal=inp*1000000000000; // it has the decimel point

      //  alert("intVal " +intVal);
        //alert("floatVal" +floatVal);
	if( intVal  <floatVal)
	{
		rtVal=parseInt(inp)+1;
	}
	else
	{
		rtVal=parseInt(inp);	
	}
	

	return rtVal;
}
function swaraGanam(name)
{
	

	
//	alert('In melRagaMelammList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaMelamList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET6;
//	dynStr+='svara Format';
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	dynStr+='<select id="'+name+'SId"  readonly nameid="'+name+'"  name="'+name+'SName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );

			//S-0
			//R-0,12,18
			//G-0,6,12
			//M-0,36,
			//P-0
			//D-0,2,3
			//N-1,2,3

	dynStr+='<option value="0" >' +   eval('objSwarasName.S' ) + '</option>';
	
	dynStr+='</select>';
	dynStr+='<select id="'+name+'RId"  readonly nameid="'+name+'"  name="'+name+'RName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value="-1" > </option>';
	dynStr+='<option value="0" >' +   eval('objSwarasName.R1' ) + '</option>';
	dynStr+='<option value="12" >' +   eval('objSwarasName.R2' ) + '</option>';
	dynStr+='<option value="18" >' +   eval('objSwarasName.R3' ) + '</option>';
/*[
	dynStr+='<option value="1" >' +   eval('objSwarasName.R1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.R2' ) + '</option>';
	dynStr+='<option value="3" >' +   eval('objSwarasName.R3' ) + '</option>';
]*/
	
	dynStr+='</select>';
	dynStr+='<select id="'+name+'GId"  readonly nameid="'+name+'"  name="'+name+'GName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value="-1" >' +   ' '  + '</option>';
	dynStr+='<option value="0" >' +   eval('objSwarasName.G1' ) + '</option>';
	dynStr+='<option value="6" >' +   eval('objSwarasName.G2' ) + '</option>';
	dynStr+='<option value="12" >' +   eval('objSwarasName.G3' ) + '</option>';
/*[--
	dynStr+='<option value="1" >' +   eval('objSwarasName.G1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.G2' ) + '</option>';
	dynStr+='<option value="3" >' +   eval('objSwarasName.G3' ) + '</option>';
--]*/
	
	dynStr+='</select>';
	dynStr+='<select id="'+name+'MId"  readonly nameid="'+name+'"  name="'+name+'MName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value="-1" >' +   ' '  + '</option>';
	dynStr+='<option value="0" >' +   eval('objSwarasName.M1' ) + '</option>';
	dynStr+='<option value="36" >' +   eval('objSwarasName.M2' ) + '</option>';
/*[
	dynStr+='<option value="1" >' +   eval('objSwarasName.M1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.M2' ) + '</option>';
]*/
	
	dynStr+='</select>';
	dynStr+='<select id="'+name+'PId"  readonly nameid="'+name+'"  name="'+name+'PName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value="0" >' +   eval('objSwarasName.P' ) + '</option>';
	
	dynStr+='</select>';
	dynStr+='<select id="'+name+'DId"  readonly nameid="'+name+'"  name="'+name+'DName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value="-1" >' +   ' '  + '</option>';
	dynStr+='<option value="0" >' +   eval('objSwarasName.D1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.D2' ) + '</option>';
	dynStr+='<option value="3" >' +   eval('objSwarasName.D3' ) + '</option>';
/*[
	dynStr+='<option value="1" >' +   eval('objSwarasName.D1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.D2' ) + '</option>';
	dynStr+='<option value="3" >' +   eval('objSwarasName.D3' ) + '</option>';
]*/

	
	dynStr+='</select>';
	dynStr+='<select id="'+name+'NId"  readonly nameid="'+name+'"  name="'+name+'NName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value="1" >' +   eval('objSwarasName.N1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.N2' ) + '</option>';
	dynStr+='<option value="3" >' +   eval('objSwarasName.N3' ) + '</option>';
/*[
	dynStr+='<option value="1" >' +   eval('objSwarasName.N1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.N2' ) + '</option>';
	dynStr+='<option value="3" >' +   eval('objSwarasName.N3' ) + '</option>';
]*/
	
	dynStr+='</select>';
	dynStr+='</td>';
	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;

}

function ThalaJathiList( name)
{

	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:ThalaJathiList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		alert ('SYS:Name is Mandatory');
		return false;
	}
	var jathiName = new JathiName();
	var jathiArry = new Array(0,4,3,7,5,9);
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET7;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	dynStr+='<select id="'+name+'JathiId" nameid="'+name+'"  name="'+name+'JathiName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

	for(var i=0; i<6; i++)
	{

	//	document.write(''+ i +'=' + eval('mel.raga'+i ) );
	dynStr+='<option value='+jathiArry[i]+'>'+jathiArry[i]+'-'+ eval('jathiName.jathi'+i ) + '</option>'; /*@@@*/
/*[@@@@
	dynStr+='<option value='+i+'>'+i +'-'+ eval('mel.raga'+i ) + '</option>'; 
@@@]*/
	
	}
	dynStr+='</select>';
	dynStr+='</td>';



	
	}
	catch(e)
	{
		alert("TJLException:"+e);
	}
	return dynStr;
}

function ThalaList( name)
{

	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:ThalaList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var talaName = new TalaName();
	var talaArry = new Array("","IOII", "IOI" , "OI"  , "IUO" , "IOO" , "IIOO","I");
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET8;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	dynStr+='<select id="'+name+'TalaId" nameid="'+name+'"  name="'+name+'TakaName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

	for(var i=0; i<8; i++)
	{

	//	document.write(''+ i +'=' + eval('mel.raga'+i ) );
	dynStr+='<option value='+talaArry[i]+'>'+talaArry[i]+'-'+ eval('talaName.tala'+i ) + '</option>'; /*@@@*/
/*[@@@@
	dynStr+='<option value='+i+'>'+i +'-'+ eval('mel.raga'+i ) + '</option>'; 
@@@]*/
	
	}
	dynStr+='</select>';
	dynStr+='</td>';



	
	}
	catch(e)
	{
		alert("TJLException:"+e);
	}
	return dynStr;
}

function GovaiList( name)
{

	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:GovaiList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		alert ('SYS:Name is Mandatory');
		return false;
	}
//	alert("G:001: <"+name +">");
	if ( name == 'name')
	{
	var govaiName = new GovaiName();
	var govaiArry = new Array("","SAMANMANDILAM", "VALIVIMANDALAM" , "MELIVUMANDILAM"  , "IRATTAIGOVAI" );
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET9;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	dynStr+='<select id="'+name+'GovaiId" nameid="'+name+'"  name="'+name+'GovaiName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

	for(var i=0; i<5; i++)
	{

	//	document.write(''+ i +'=' + eval('mel.raga'+i ) );
	dynStr+='<option value="'+govaiArry[i] +'">'+govaiArry[i]+'-'+ eval('govaiName.govai'+i ) + '</option>'; /*@@@*/
/*[@@@@
	dynStr+='<option value='+i+'>'+i +'-'+ eval('mel.raga'+i ) + '</option>'; 
@@@]*/
	
	}
	dynStr+='</select>';
	dynStr+='</td>';
	}	
	else if (name == 'keetham')
	{
		var govaiName = new keethamName();
		var govaiArry = new Array("","k1", "k2" , "k3"  , "k4" );
		dynStr+='<td class="ctext">';
		dynStr+='<label>';
		dynStr+=HMELCARNAMET12;
		dynStr+='</label>';
		dynStr+='</td>';
		dynStr+='<td>';
		//dynStr+='<select '+name+'>';
		dynStr+='<select id="'+name+'GovaiId" nameid="'+name+'"  name="'+name+'GovaiName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

		for(var i=0; i<5; i++)
		{

		//	document.write(''+ i +'=' + eval('mel.raga'+i ) );
		dynStr+='<option value="'+govaiArry[i] +'">'+govaiArry[i]+'-'+ eval('govaiName.govai'+i ) + '</option>'; /*@@@*/
	/*[@@@@
		dynStr+='<option value='+i+'>'+i +'-'+ eval('mel.raga'+i ) + '</option>'; 
	@@@]*/
		
		}
		dynStr+='</select>';
		dynStr+='</td>';
	}

	}
	catch(e)
	{
		alert("GVLException:"+e);
	}
	return dynStr;
}


function ShowBasicClass( name)
{

	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:GovaiList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var govaiName = new GovaiName();
	var govaiArry = new Array("","SAMANMANDILAM", "VALIVIMANDALAM" , "MELIVUMANDILAM"  , "IRATTAIGOVAI" );
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
//	dynStr+=HMELCARNAMET9;
	dynStr+='<input type="button" class="cbutton"  id="'+name+'BasicClassId" nameid="'+name+'"  name="'+name+'BasicClassId"   value="Show">';
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	
	}
	catch(e)
	{
		alert("GVLException:"+e);
	}
	return dynStr;
}
function getJathiFormat(jathi,thala)
{
	var rtSt="";
	var thlformat="";
	var  spThala=thala.split(''); 
	for ( j=0;j<spThala.length;j++)
						{

							switch (spThala[j])
								{
									case 'I':
									thlformat =parseInt(jathi);
									break;
									case 'O':
									thlformat = 2;
									break;
									case 'U':
									thlformat = 1;
									break;
									default:
									thlformat="";
									break;

								}
						//	difAkah = difAkah + '|'+  thlfmt;
							rtSt	= rtSt +thlformat ;

						}

return rtSt;	
}

function getJathiFormatLength(jathi,thala)
{
	var rtSt=0;
	var thlformat=0;
	var  spThala=thala.split(''); 
	for ( j=0;j<spThala.length;j++)
						{

							switch (spThala[j])
								{
									case 'I':
									thlformat =parseInt(jathi);
									break;
									case 'O':
									thlformat = 2;
									break;
									case 'U':
									thlformat = 1;
									break;
									default:
									thlformat="";
									break;

								}
						//	difAkah = difAkah + '|'+  thlfmt;
							rtSt	= rtSt +thlformat ;

						}

return rtSt;	
}

function check(inp, val)
{
var i=0;
var str= inp.split('');
var ch1= -1;
var ch2= -1;
var ch3= -1;
var ch4= -1;
try
{

//	alert("str " +str);
if( str.length  <5 )
{
		if(str.length > 1)
		ch1= parseInt(str[0] );
		if(str.length > 2)
		ch2= parseInt(str[0] ) +  parseInt(str[1] );
		if(str.length > 3)
		ch3= parseInt(str[0] ) +  parseInt(str[1] ) +  parseInt(str[2] );
		if(str.length > 4)
		ch4= parseInt(str[0] ) +  parseInt(str[1] ) +  parseInt(str[2] )+  parseInt(str[3] );

//			alert("inp =" +inp+ "ch1 =" +ch1 + "ch2 =" +ch2 + "ch3 =" +ch3 + "ch4 =" +ch4 );

        if (ch1 == val || ch2 == val || ch3 == val || ch4 == val )
        return 1
}
}
catch(e)
{
        alert('check' +e);
}

        return 0;
}
/*[
function check(inp, val)
{
var i=0;
var str= inp.split('');
val = val;
if( val == 0 )
{
return 0;
}

	for ( i=0;i<str.length;i++)
	{
		if( str[i] == val)
		{	return 1;
		}
	}
	return 0;
}
]*/

function getOneKeetham(inpSwras,jathiTalam,jathiThalamLen,acharam,nameid)
{

var rtDyn=" Keetham on Develop";
arrSwrasOrg=inpSwras.split('`');
inpSwras=inpSwras.replace(/[+]/g,'');
inpSwras=inpSwras.replace(/[-]/g,'');
inpSwras=inpSwras.replace(/[|]/g,'');
inpSwras=inpSwras.replace(/[*]/g,'');
inpSwras=inpSwras.replace(/[~]/g,'');


arrSwras=inpSwras.split('`');
acharam =parseInt(acharam);



//	getReqTimeToConcat(8, jathiThalamLen);
	var srlNo="";
	var rows="";
	rtDyn+= "<table border=2 class='wtable' border=2> " 

	for (var j=0; j<	arrSwras.length; j+=1)
	{
		var line=arrSwras[j]
		line=line.split('!');

		var lineOrg=arrSwrasOrg[j];
		lineOrg=lineOrg.split('!');
	//<tr> <td class='ctext'> <center>Lesson :"+srlNo + "</center></td> </tr> </table>";

	//	alert('line len'+line.length);
	for (var i=0; i<line.length; i+=2)
	{


	//	alert(line);
		//rtDyn=line;
		
		srlNo = line[i];
		rows  = line[i+1];
		rowsOrg  = lineOrg[i+1];

//rowsOrgPly=rowsOrg.replace(/[|]/g,'');
rowsOrgPly=rowsOrg;
		//alert("D:010:" +rows);

		arryRows = rows.split('');
	
//		alert("srlNo" +srlNo);
//		alert("rows" +rows);
	//	alert("doConcat:"+	doConcat(rows,getReqTimeToConcat(arryRows, jathiThalamLen)));

//		alert("dyn = <"+ framTable(doConcat(rows,getReqTimeToConcat(arryRows, jathiThalamLen)),1,jathiTalam,jathiThalamLen));

	//	rtDyn+= framTable(doConcat(rows,getReqTimeToConcat(arryRows, jathiThalamLen)),1,jathiTalam,jathiThalamLen) ;
		//rtDyn+= doConcat(rows,getReqTimeToConcat(arryRows, jathiThalamLen)) ;
//		rtDyn+= doConcat(rows,1) ;
		//rtDyn+= getReqTimeToConcat(arryRows.length, jathiThalamLen)  + " len= " +jathiThalamLen; 

//		rtDyn+= "<table class='wtable'> <tr> <td class='ctext'> <center>Lesson :"+srlNo + "</center></td> </tr> </table>";
		//rtDyn+= "<tr><td class='ctext' colspan='64'> <center>Lesson :"+srlNo + "</center> </td> <td> <input type='text' id='Lesson "+srlNo +"' value="+ doConcat(rows,getReqTimeToConcat(parseInt(arryRows.length/acharam), jathiThalamLen)) +" > </td></tr> ";
		rtDyn+= "<tr><td class='ctext' colspan='64'> <table class='ctable'> <tr> <td> <center>Lesson :"+srlNo + "</center> </td> <td width=30%> <input type='hidden' id='"+nameid+"Lesson"+srlNo +"' value="+rowsOrgPly +" >  	<input type='button' nameid='"+nameid +"' id='" + nameid+"play' task='play' lesson='"+srlNo+"' value='play' onclick='javascript:onClick(this)'> <input type='button' nameid="+nameid+" id='"+nameid+"pause' task='pause' lesson='"+srlNo+"' value='pause' onclick='javascript:onClick(this)'> <input type='button' nameid="+nameid+" id='"+nameid+"stop' task='stop' value='stop' lesson='"+srlNo+"' onclick='javascript:onClick(this)'> </td></tr> </table> </td> </tr> ";

		if(acharam != 0)
		rtDyn+= framTableKeetham((doConcat(rows,getReqTimeToConcat(parseInt(arryRows.length/acharam), jathiThalamLen))),rowsOrg,acharam,jathiTalam,jathiThalamLen) ;
		else
		rtDyn+= framTableKeetham((doConcat(rows,getReqTimeToConcat(arryRows.length, jathiThalamLen))),rowsOrg,1,jathiTalam,jathiThalamLen) ;

	}
	}
	rtDyn+= "</table>"

return rtDyn;
	
}



function getOnePara(inpSwras,jathiTalam,jathiThalamLen,acharam,nameid)
{

var rtDyn="";
inpSwras=inpSwras.replace(/-/g,'');
inpSwras=inpSwras.replace(/|/g,'');
arrSwras=inpSwras.split('`');
acharam =parseInt(acharam);

//	getReqTimeToConcat(8, jathiThalamLen);

	var srlNo="";
	var rows="";
	rtDyn+= "<table border=2 class='wtable' border=2> " 

	for (var j=0; j<	arrSwras.length; j+=1)
	{
		var line=arrSwras[j]
		line=line.split('!');
	//<tr> <td class='ctext'> <center>Lesson :"+srlNo + "</center></td> </tr> </table>";

	//	alert('line len'+line.length);
	for (var i=0; i<line.length; i+=2)
	{
	//	alert(line);
		srlNo = line[i];
		rows  = line[i+1];
				arryRows = rows.split('');
	
	//	alert("srlNo" +srlNo);
	//	alert("rows" +rows);
//		alert(	doConcat(rows,getReqTimeToConcat(arryRows, jathiThalamLen)));

//		alert("dyn = <"+ framTable(doConcat(rows,getReqTimeToConcat(arryRows, jathiThalamLen)),1,jathiTalam,jathiThalamLen));

//		rtDyn+= framTable(doConcat(rows,getReqTimeToConcat(arryRows, jathiThalamLen)),1,jathiTalam,jathiThalamLen) ;
		//rtDyn+= doConcat(rows,getReqTimeToConcat(arryRows, jathiThalamLen)) ;
//		rtDyn+= doConcat(rows,1) ;
		//rtDyn+= getReqTimeToConcat(arryRows.length, jathiThalamLen)  + " len= " +jathiThalamLen; 

//		rtDyn+= "<table class='wtable'> <tr> <td class='ctext'> <center>Lesson :"+srlNo + "</center></td> </tr> </table>";
		//rtDyn+= "<tr><td class='ctext' colspan='64'> <center>Lesson :"+srlNo + "</center> </td> <td> <input type='text' id='Lesson "+srlNo +"' value="+ doConcat(rows,getReqTimeToConcat(parseInt(arryRows.length/acharam), jathiThalamLen)) +" > </td></tr> ";
		rtDyn+= "<tr><td class='ctext' colspan='64'> <table class='ctable'> <tr> <td> <center>Lesson :"+srlNo + "</center> </td> <td width=30%> <input type='hidden' id='"+nameid+"Lesson"+srlNo +"' value="+ doConcat(rows,getReqTimeToConcat(parseInt(arryRows.length/acharam), jathiThalamLen)) +" >  	<input type='button' nameid='"+nameid +"' id='" + nameid+"play' task='play' lesson='"+srlNo+"' value='play' onclick='javascript:onClick(this)'> <input type='button' nameid="+nameid+" id='"+nameid+"pause' task='pause' lesson='"+srlNo+"' value='pause' onclick='javascript:onClick(this)'> <input type='button' nameid="+nameid+" id='"+nameid+"stop' task='stop' value='stop' lesson='"+srlNo+"' onclick='javascript:onClick(this)'> </td></tr> </table> </td> </tr> ";

		if(acharam != 0)
		rtDyn+= framTable(doConcat(rows,getReqTimeToConcat(parseInt(arryRows.length/acharam), jathiThalamLen)),acharam,jathiTalam,jathiThalamLen) ;
		else
		rtDyn+= framTable(doConcat(rows,getReqTimeToConcat(arryRows.length, jathiThalamLen)),1,jathiTalam,jathiThalamLen) ;


	}
	}
	rtDyn+= "</table>"

return rtDyn;
	
}

function getReqTimeToConcat(n,d)
{
	var rtCount=0;
	var v=n;
//		alert("rtCount= "+rtCount + "n="+n +" d="+ d);

	while(v%d!= 0)
	{
		rtCount+=1;
		v = v +n;	
			if( rtCount > 64 )
			{
				alert("We can't end up with thalam properly");
				rtCount =0;
				break;

			}
//		alert("rtCount= "+rtCount + "n="+n  +" d="+ d +" n%d= " + n%d);
	}
	return rtCount;
}
function doConcat(inp,count)
{
	var rtVal=inp;
	for(var i=0; i<count; i++)	
	{
	rtVal+=inp;	
	}
	return rtVal;
}

function framTableKeetham(tblStr,rowsOrg,vack,difAkah,thlfmt)
{
//var dy=st;
var dy=st;
var dyS="";

endVal=thlfmt-1;

//alert("rowsOrg=<" +rowsOrg   + ">");
//rowsOrg= "1234+1234+1234-12-123456781234+1234+1234-12-12345678";
//rowsOrg= "|S,|S,|sNN,+|NSNR|S|ND,|p,DNDpM,-|p,,,,,+|Mpmd|pmg,-|r|g|mp|DN|S,|SN+SNSRGRS,|N,,,|D|pm,-|p,DNDpm,|p,,,,,+|mPmD|pmg,|r|g|mp";
//rowsOrg= "12345678+1234567812345678";
//rowsOrg= "12341234";
vack = parseInt(vack);
ackOffset =0;

arSplit=s1.split('|');

//alert(arSplit.length);

//tblStr=tblStr.split('|');

var s=0;
endVal=thlfmt-1;
var swaraObj = new swara();
var dynSwr="";
var dynSak="";
var dynSwrRow="";
var dynSak="";
//	alert('tblStr .length ' +tblStr.length + 'vack=' +vack  + "difAkah ="+difAkah + "thlfmt" +thlfmt) ;
saki=s1;
if( thlfmt != 0)
{


var thCount =0;


//tblStr=rowsOrg;
strCnt=0;
vack=1/vack;
signal=0;
ackOffset=1;

//ackCunt=1;

signlCnt=-1;

ackVal=0;

dynSwr ="";
dynSwrRow ="";
dynSakRow ="";
j=0;
l=0;
thCount=0;
dynSakCnt= -1;

colSpanCunt=0;


for ( i=0;i<rowsOrg.length;i++ )
{

				ackCunt= vack/ackOffset   ;




			if(rowsOrg[i+l+j] == ','    )
			{
					ackVal += ackCunt;
				//	dynSwr = dynSwr +  " <tr><td  bgcolor= " +retBg(ackOffset)+ "  > [" + rowsOrg[i+l+j] + " ]  [ (vack  +  ackOffset )] = " +  (vack  +  ackOffset ) +"  </td> </tr>";
					dynSwr = dynSwr +  " <td  bgcolor= " +retBg(ackOffset)+ "> "+ rowsOrg[i]+ "</td>";

				colSpanCunt++;

					if ( signlCnt == 1)
					{
													//dynSak = dynSak +  " <td  bgcolor= " +retBg(ackOffset)+ "> "+  "[" + signlCnt + "]["+ dynSakCnt +"]"  +arSplit[dynSakCnt]+" </td>";
													//dynSak = dynSak +  " <td  bgcolor= " +retBg(ackOffset)+ "> "+  arSplit[dynSakCnt]+" </td>";
													dynSak = dynSak +  " <td> "+  arSplit[dynSakCnt]+" </td>";
													signlCnt=0;
					}
				else
					{
													//dynSak = dynSak +  " <td  bgcolor= " +retBg(ackOffset)+ "> . </td>";
													dynSak = dynSak +  "<td> . </td>";

					}

			}
			else if(rowsOrg[i]     == '-'    )
			{
				ackOffset=ackOffset/2;
			

				
			}
			else if(rowsOrg[i] == '+'    )
			{
				ackOffset*=2;

			//	ackCunt= (  1/( vack   - ackOffset  ) ) ;
				//alert('+' +ackCunt);
				
			}
			else if(rowsOrg[i] == '|'    )
			{
												//	dynSak = dynSak +  " <td  bgcolor= " +retBg(ackOffset)+ "> "+ arSplit[dynSakCnt++] + "</td>";

			dynSakCnt++;
				
			signlCnt=1;
			}
			else
			{			
							ackVal += ackCunt;
				dynSwr = dynSwr +  " <td  bgcolor= " +retBg(ackOffset)+ " >  " +eval('swaraObj.'+ rowsOrg[i+l])+  " </td> ";
				if ( signlCnt == 1)
					{
//													dynSak = dynSak +  " <td  bgcolor= " +retBg(ackOffset)+ "> "+  "[" + signlCnt + "]["+ dynSakCnt +"]"  +arSplit[dynSakCnt]+" </td>";
//													dynSak = dynSak +  " <td  bgcolor= " +retBg(ackOffset)+ "> "+  arSplit[dynSakCnt]+" </td>";
													dynSak = dynSak +  " <td>"+  arSplit[dynSakCnt]+"</td>";
													signlCnt=0;
					}
				else
					{
													//dynSak = dynSak +  " <td  bgcolor= " +retBg(ackOffset)+ ">. </td>";
													dynSak = dynSak +  " <td>.</td>";

					}
			}



	if ((  ( ackVal %vack )==0   ) && ( dynSwr.length != 0) )
	{
 		thCount= ackVal  ;

	



		

		//dy = dy +   sd+ st+  sr +  "<td>" + thCount +  "|" +thCount+  "|"+ check(difAkah , (thCount%thlfmt) ) +"</td>"+ dynSwr +  er+ et +ed  ;
		dynSwrRow = dynSwrRow +   sd+ st+ "<tr>" + dynSwr +   er+ et +ed  ;
		dynSakRow = dynSakRow +  sd+ st+ "<tr>" + dynSak +   er+ et +ed  ;
 
	
	//	dy = dy +   sd+ stc+  src +   dynSwr +  er+ et +ed  ;
	//	dy = dy +   sd+ st+  sr +   dynSwr +  er+ et +ed  ;
	//	dy = dy +   sd+ st+ sr + dynSwr + er+ et +ed  ;


	if( check(difAkah , (thCount%thlfmt) ))
		{
			dynSwrRow =dynSwrRow+ sc;
			dynSwrRow =dynSwrRow + '|';
			dynSwrRow =dynSwrRow+ ed;
			dynSakRow =dynSakRow+ sc;
			dynSakRow =dynSakRow + '|';
			dynSakRow =dynSakRow+ ed;
		}
	else
	if ( (thCount-1)%thlfmt ==  endVal)
		{
			dynSwrRow =dynSwrRow + sc;
			dynSwrRow =dynSwrRow + '||';
			dynSwrRow =dynSwrRow + ed;
			dynSwrRow = dynSwrRow + er;

//			  dy= dy +dynSwrRow;

			dynSakRow =dynSakRow + sc;
			dynSakRow =dynSakRow + '||';
			dynSakRow =dynSakRow + ed;
			dysSakRow =dynSakRow + er;
			  dy= dy +dynSwrRow + dysSakRow;


			dynSakRow = sr;
			dynSwrRow =sr;

		}
/*[	else(  (thCount%thlfmt)  != 0)
	{
			dy =dy+ scg;
			dy =dy + thCount +'|' + (thCount%thlfmt);
			dy =dy+ ed;
		
	}

]*/

//	dy=dy + dyS;

		dynSwr="";
		dynSak="";


		
	//	ackVal=0.0;

	}


	//i= i +signlCnt;
{	
//dy = dy +  "<td>";
//dy = dy +  dynSwr;
//dy = dy +  "</td>";
}


}


/*[
if (ackVal != 0.0 )
{

dy = dy +   sd + dynSwr + ed;

}
]*/
/*[
for ( i=0;i<rowsOrg.length;i+=vack)
{

var dynSak="";
var dynSwr="";
//	alert('tblStr['+i+'] ' + tblStr[i] );

	//dy =dy+ sd;
	dyS = dyS + '<td class="ctext" colspan="#" >'; 


	dynSwr = dynSwr + sd;
var spanCnt=0;

var skipRecord=0;
	for ( l=0;l<vack + ackOffset ;l++)
	{
	skipRecord=0;
		if( i+l < rowsOrg.length )
		{
			//alert(eval('swaraObj.'+ tblStr[i+l]));
			spanCnt++;
			//dy =dy + tblStr[i+l];
			if(rowsOrg[i+l] == ','    )
			{
					//dy =dy + rowsOrg[i+l] + "[" + ackOffset + "][" + thCount + "]";

					dynSwr = dynSwr +  rowsOrg[i+l] + "[" + ackOffset + "][" + thCount + "]";

					

			}
			else if (  rowsOrg[i+l] == '-' )
			{
				ackOffset--;	
				//thCount= thCount -1;

			}
			else if (  rowsOrg[i+l].charCodeAt(0) == 43 )
			{

			//	alert("+");
			//	thCount= thCount -1;
				ackOffset++;				
			}
			else if (  rowsOrg[i+l] == '|' )
			{
					//thCount= thCount -1;
					dyS =dyS + arSplit[s++] ;

					skipRecord = 1;
				
				//	dyS =dyS.replace('#',spanCnt);
					spanCnt=0;
					//dy =dy + arSplit[s++];
			}
			else 
			{
				//	dy =dy +eval('swaraObj.'+ rowsOrg[i+l])  + "[" + ackOffset + "]";
					try
					{
				
//					dy =dy +eval('swaraObj.'+ rowsOrg[i+l])  + "[" + ackOffset + "][" + thCount + "]" ;
					dynSwr = dynSwr  +eval('swaraObj.'+ rowsOrg[i+l])  + "[" + ackOffset + "][" + thCount + "]" ;
					

				//	thCount = thCount + 1/(ackOffset+1);
					}
					catch(e)
					{
						dy =dy +rowsOrg[i+l].charCodeAt(0)  + "[" + ackOffset + "] ERROR";

						
					}
			}
			
		}
	}

	if ( skipRecord ==  0 )
	{



		if ( thCount%thlfmt == 0 )
	{

	dy = dy + sr;
	dyS = dyS + sr;
	}

	if( check(difAkah , (thCount%thlfmt) ))
	{

		dyS =  dyS  + sc;
		dy =dy+ sc;
		dyS =  dyS + '|';
		dy =dy + '|';
		dyS =  dyS + ed;
		dy =dy+ ed;
	}


		thCount++;
	        dy= dy + dynSwr;
		dy =dy+ sc;
		dy =dy +  '||';
		dy =dy+ ed;
		dy = dy + er;



//			dy =dy+ ed;

				dyS =dyS+ ed;


	if ( thCount%thlfmt ==  endVal)
	{
		dyS =dyS + sc;
		dyS =dyS + '||';
		dyS = dyS + er;


		}
	}

}
//dy = dy + et;
]*/

}


document.getElementById("debug").value = dy;
return dy ;
//return dy;

}

function retBg(inp)
{
rtVal="blue";
	if  ( inp == 1 )
	{
		rtVal="#E6E6E6";	
	}
	else
	if  ( inp == 2 )
	{
		rtVal="#CC99FF";	
	}
	else
	if  ( inp == 4 )
	{

		rtVal="#FF66FF";	
	}
	else
	{
		rtVal="#9999FF";	
	}
return rtVal;
}



function framTable(tblStr,vack,difAkah,thlfmt)
{

var dy="";
vack = parseInt(vack);
//alert('tblStr '+ tblStr)
tblStr=tblStr.split('');
endVal=thlfmt-1;
var swaraObj = new swara();
//	alert('tblStr .length ' +tblStr.length + 'vack=' +vack  + "difAkah ="+difAkah + "thlfmt" +thlfmt) ;
if( thlfmt != 0)
{
var thCount =0;
for ( i=0;i<tblStr.length;i+=vack, thCount ++)
{
//	alert('tblStr['+i+'] ' + tblStr[i] );

	if ( thCount%thlfmt == 0 )
	{

	dy = dy + sr;
	}

	if( check(difAkah , (thCount%thlfmt) ))
	{
		dy =dy+ sc;
		dy =dy + '|';
		dy =dy+ ed;
	}


	dy =dy+ sd;
	for ( l=0;l<vack;l++)
	{
		if( i+l < tblStr.length )
		{
			//alert(eval('swaraObj.'+ tblStr[i+l]));
			//dy =dy + tblStr[i+l];

			if(tblStr[i+l] == ','   ||  tblStr[i+l] == '|'  ||  tblStr[i+l] == '*'  ||   tblStr[i+l] == '~'  ||  tblStr[i+l] == '-'  ||  tblStr[i+l] == '+'  )
			dy =dy + tblStr[i+l];
			else
			dy =dy +eval('swaraObj.'+ tblStr[i+l]);
			
		}
	}

	dy =dy+ ed;
	if ( thCount%thlfmt ==  endVal)
	{
		dy =dy+ sc;
		dy =dy +  '||';
		dy =dy+ ed;
		dy = dy + er;
	}

}
//dy = dy + et;
}
return dy;

}


function replaceSigns(inp)
{

//	alert("inp" + inp);

	rtVal=  inp.replace(/[-]/g,'');
	rtVal=rtVal.replace(/[+]/g,'');
	rtVal=rtVal.replace(/[|]/g,'');
	rtVal=rtVal.replace(/[*]/g,'');
	rtVal=rtVal.replace(/[~]/g,'');

	alert("rtVal=<" + rtVal + ">"); 

	return rtVal;

}

function AcharamList( name)
{

	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:ThalaJathiList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		alert ('SYS:Name is Mandatory');
		return false;
	}
//	var acharamName = new Acharam();
	var acharamArray = new Array(0,1,2,4,8,16);
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET10;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	dynStr+='<select id="'+name+'AcharamId" nameid="'+name+'"  name="'+name+'AcharamName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

	for(var i=0; i<acharamArray.length; i++)
	{

	dynStr+='<option value='+acharamArray[i]+'>'+acharamArray[i]+ '</option>'; /*@@@*/
	
	}
	dynStr+='</select>';
	dynStr+='</td>';



	
	}
	catch(e)
	{
		alert("TJLException:"+e);
	}
	return dynStr;
}
function LangList(name)
{
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:ThalaJathiList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		alert ('SYS:Name is Mandatory');
		return false;
	}
//	var langName = new Array('','ENGLISH','TAMIL','TELEGU','KANADA','MALAYALAM','HINDI');
	//var langArray = new Array('','ENG','TAM','TEL','KAN','MAL','HIN');
//	var langName = new Array('','ENGLISH');
	var langName = new Array('','ENGLISH','TAMIL');
	var langArray = new Array('','ENG','TAM');

//	var langArray = new Array('','ENG');
//	dynStr+='<td class="ctext">';
	dynStr+='<span>';
//	dynStr+='<label>';
	dynStr+=HMELCARNAMET11;
//	dynStr+='</label>';
//	dynStr+='</td>';
//	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	dynStr+='<select id="'+name+'LangId" nameid="'+name+'"  name="'+name+'LangName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

	for(var i=0; i<langArray.length; i++)
	{

	dynStr+='<option value='+langArray[i]+'>'+langName[i]+ '</option>'; /*@@@*/
	
	}
	dynStr+='</select>';
//	dynStr+='</td>';
	dynStr+='</span>';



	
	}
	catch(e)
	{
		alert("TJLException:"+e);
	}
	return dynStr;
	
}

function cust_post_onClick(obj)
{

	nameid   =obj.getAttribute('nameid');
	if (nameid == "")
	{
	;
	}

	var statusId=nameid+"statusId";
	var clockId=nameid+"clockId";
	var lessonId=nameid+"lessonId";//id="lesson"
	var nameAcharamId=nameid+"AcharamId";
	var nameTempoId = nameid+"TempoId";
	var offsetId=nameid+"offsetId";

//	alert("postOnclick id=<" +obj.id  +"> " );	
	if (obj.getAttribute('task') == "play")
	{
//	alert("postOnclick");	
		var lesson= obj.getAttribute('lesson');
//		var valNId=document.getElementById(NId).value ;
//	alert("play=<" + lessonId +">");
		document.getElementById(lessonId).value	= lesson;
//	alert("play 2" + statusId);
		if ( document.getElementById(statusId).value != "play" ) 
		{
		document.getElementById(statusId).value	= "play";
		
	//	for( var i =0 ; i < parseInt(document.getElementById(nameAcharamId).value); i++ )
//		{
	//	alert( " i= " + i+ " time " +parseInt(document.getElementById(nameAcharamId).value));
//		alert( " i= " + i+ " time " +parseInt(document.getElementById(nameAcharamId).value));
//		alert( " i= " + i+ " nameTempoId " +parseInt(document.getElementById(nameTempoId).value) );
	//	alert( " i= " + i+ " next " +i* ( parseInt(document.getElementById(nameTempoId).value/parseInt(document.getElementById(nameAcharamId).value)) ));

//		setTimeout("process()", (i/parseInt(document.getElementById(nameAcharamId).value)== 0)? 1:i/parseInt(document.getElementById(nameAcharamId).value) );
	//	setTimeout("process()", i* ( parseInt(document.getElementById(nameTempoId).value * 60/parseInt(document.getElementById(nameAcharamId).value)) ));
	//	}
//		alert("call process");
		process(nameid);
		}
	
	}
	else if  (obj.getAttribute('task') == "pause")
	{
		document.getElementById(statusId).value	= "pause";
		//process();
	}
	else if  (obj.getAttribute('task') == "stop")
	{
		document.getElementById(statusId).value	= "stop";
		document.getElementById(offsetId).value =  0;
		document.getElementById(clockId).value  =-1;

	//	process();
	}
}
//setTimeout("process()",60);
function process(nameid)
{
	var clockId=nameid+"clockId";
	var statusId=nameid+"statusId";
	var offsetId=nameid+"offsetId";
	var lessonId=nameid+"lesson";//id="lesson"
	var nameAcharamId=nameid+"AcharamId";
	var nameTempoId = nameid+"TempoId";
	var nameScaleId = nameid+"ScaleId";
	var nameAkmId =nameid+"AkmId";
	var nameAkmValueId =nameid+"AkmValueId";
	var nameSakId =nameid+"SakId";
	var nameSakValueId =nameid+"SakValueId";

		
		var SId=nameid+"SId";
		var RId=nameid+"RId";
		var GId=nameid+"GId";
		var MId=nameid+"MId";
		var PId=nameid+"PId";
		var DId=nameid+"DId";
		var NId=nameid+"NId";
		 var nameidTmp=nameid+"Lesson";
			var lessonId= nameid+"lessonId";//id="lesson"

	var PlayNotes="";
	//alert("P:001 lessonId=<" +lessonId +">");
	var valLessonId=document.getElementById(lessonId).value ;

	//alert( " In process  valLessonId" + valLessonId);
	//alert( "nameidTmp+valLessonId =<" + nameidTmp+" > <"+valLessonId + ">" );
	if(valLessonId.length != 0 )
	{	
	 document.getElementById(nameid+"playNoteId").value=document.getElementById(nameidTmp+valLessonId).value ;

	}
	 PlayNotes=document.getElementById(nameid+"playNoteId").value ;

	var valSId=document.getElementById(SId).value ;
	var valRId=document.getElementById(RId).value ;
	var valGId=document.getElementById(GId).value ;
	var valMId=document.getElementById(MId).value ;
	var valPId=document.getElementById(PId).value ;
	var valDId=document.getElementById(DId).value ;
	var valNId=document.getElementById(NId).value ;

//	alert("test");
	if(	document.getElementById(statusId).value == 'play' )
	{
		document.getElementById(clockId).value = parseInt(document.getElementById(clockId).value) +1;

				
		var PlatNotesArry=PlayNotes.split('');	
		var swaraObj = new swara();
			document.getElementById(offsetId).value = parseInt(document.getElementById(clockId).value)% PlatNotesArry.length;
//	alert("test01");
		document.getElementById(nameid+"noteId").value = PlatNotesArry[  parseInt(document.getElementById(offsetId).value)% PlatNotesArry.length ];
//	alert("test02");

		if (document.getElementById(nameid+"noteId").value  == ','  )
		{
//alert("test03");


	}
	else if  (document.getElementById(nameid+"noteId").value  == '+'  )
	{



	document.getElementById(nameAkmId).value = parseInt(document.getElementById(nameAkmId).value)*2;
	 		setTimeout("process('"+nameid+"')",0);
				return;
		}
	else if  (document.getElementById(nameid+"noteId").value  == '-'  )
	{
	document.getElementById(nameAkmId).value = parseInt(document.getElementById(nameAkmId).value)/2;
	 		setTimeout("process('"+nameid+"')",0);
				return;

		}
	else if  (document.getElementById(nameid+"noteId").value  == '|'  )
	{
	 sak= s1 ;
  sakValue=sak.split('|');

document.getElementById(nameSakValueId).value = parseInt (document.getElementById(nameSakValueId).value) + 1; 
document.getElementById(nameSakId).value = sakValue[ parseInt(document.getElementById(nameSakValueId).value%sakValue.length )];
	 		setTimeout("process('"+nameid+"')",0);
				return;

		}
	else
	{
			//document.getElementById(offsetId).value = parseInt(document.getElementById(clockId).value)% PlatNotesArry.length;
//	alert("test04");
			try
			{
		//	alert( eval('swaraObj.' +  PlatNotesArry[  parseInt(document.getElementById(clockId).value)% PlatNotesArry.length ]));
		//document.getElementById("noteDescId").value = eval('swaraObj.' +  PlatNotesArry[ document.getElementById(offsetId).value  ]);
		document.getElementById(nameid+"noteDescId").value = eval('swaraObj.' +   PlatNotesArry[  parseInt(document.getElementById(clockId).value)% PlatNotesArry.length ]);
//	alert("test05");
			}
			catch(e)	
			{
			}
//play_multi_sound(PlatNotesArry[  parseInt(document.getElementById(clockId).value)% PlatNotesArry.length ] );
//	alert("test06");
		var id =  mapSwaraToNote(document.getElementById(nameid+"noteId").value+document.getElementById(eval(document.getElementById(nameid+"noteId").value.toUpperCase()+"Id")).value,parseInt(document.getElementById(nameScaleId).value));
//	alert("test07");


		document.getElementById(nameid+"noteCodeId").value= id;
//	alert("test08");
		document.getElementById(nameid+"noteWesternId").value= id.replace('_','#');
		play_multi_sound(	document.getElementById(nameid+"noteCodeId").value);
		}


	///	document.getElementById(clockId).value = parseInt(document.getElementById(clockId).value) +1;  start from tmrw

//		setTimeout("process()",60*20);
	//	alert("in process" + parseInt(document.getElementById(nameAcharamId).value) + "> < " +parseInt(document.getElementById(nameTempoId).value) + ">");
//		alert(parseInt(document.getElementById(nameTempoId).value)/parseInt(document.getElementById(nameAcharamId).value) );
	//	alert(" call process('"+nameid+"')");  /*###:GOTO*/
		document.getElementById(nameAkmValueId).value =(parseInt(document.getElementById(nameTempoId).value)*100/parseInt(document.getElementById(nameAcharamId).value) ) / document.getElementById(nameAkmId).value ;

	//alert("nameAkmId=<" +nameAkmId +">"); 
		setTimeout("process('"+nameid+"')",  ( parseInt(document.getElementById(nameTempoId).value)*100/parseInt(document.getElementById(nameAcharamId).value) ) / document.getElementById(nameAkmId).value );
	}
	else if (	document.getElementById(statusId).value == 'stop' )
	{
		document.getElementById(offsetId).value =  0;
		document.getElementById(clockId).value  =-1;
	}


}

function getSwarasAudio(swaram)
{
	var rtInt=0;
	var lv_swaram=      new Array(
"s"  ,
"r1" ,
"r2" ,
"g1" ,
"r3" ,
"g2" ,
"g3" ,
"m1" ,
"m2" ,
"p"  ,
"D1" ,
"D2" ,
"N1" ,
"N2" ,
"D3" ,
"N3" ,
"S"  ,
"R1" ,
"R2" ,
"G1" ,
"R3" ,
"G2" ,
"G3" ,
"M1" ,
"M2" ,
"P"  ,
"d1" ,
"d2" ,
"n1" ,
"n2" ,
"d3" ,
"n3" ,
"b"  );

	var lv_swaramThanam=new Array(    
"C3",
"C_3",
"D3",
"D3",
"D_3",
"D_3",
"E3",
"F3",
"F_3",
"G3",
"G_3",
"A3",
"A3",
"A_3",
"A_3",
"B3",
"C4",
"C_4",
"D4",
"D4",
"D_4",
"D_4",
"E4",
"F4",
"F_4",
"G4",
"G_2",
"A2",
"A2",
"A_2",
"A_2",
"B2",
"G2");

	
	for(var i=0;i<lv_swaram.length;i++)
	{
	//	alert(" lv_swaram["+i+"]= " +lv_swaram[i] ); 
		if(lv_swaram[i] == swaram)
		{
			rtInt=lv_swaramThanam[i];
			break;
		}
	}
	
	return rtInt;
}


function mapSwaraToNote(sra,pich)
{
	
var note = new Array( "G2","G_2", "A2", "A_2", "B2","C3", "C_3", "D3", "D_3", "E3", "F3", "F_3", "G3", "G_3", "A3", "A_3", "B3", "C4", "C_4", "D4", "D4", "D_4", "E4", "F4", "F_4", "G4")
//	alert(sra);
	rtStr=note[getSwarasThanam(sra)+5+pich]
	return	rtStr;
}

function getSwarasThanam(swaram)
{
	var rtInt=0;
	var lv_swaram=      new Array("b0","d0","d2","n1","d3","n2","n3", "s0","r0","r12","g0","r18","g6","g12","m0","m36","p0","D0","D2","N1","D3","N2","N3","S0", "R0","R12","G0","R18","G6","G12","M0","M36","P0");
	var lv_swaramThanam=new Array(   -5,   -4,   -3,   -3,  -2,  -2,  -1,    0,   1,    2,   2,    3,   3,    4,   5,    6,   7,   8,   9,   9,  10,  10,  11,  12, 13  , 14  , 14 , 15  ,15  , 16  , 17 , 18  ,19  );
	
	for(var i=0;i<lv_swaram.length;i++)
	{
	//	alert(" lv_swaram["+i+"]= " +lv_swaram[i] ); 
		if(lv_swaram[i] == swaram)
		{
			rtInt=lv_swaramThanam[i];
			break;
		}
	}
	
	return rtInt;
}
function playMusicBox(name)
{

//	alert("in play box");

	var rtStr="";

rtStr+='<input type="hidden" id="'+name+'clockId" value=-1 name="clockId">';
rtStr+='<input type="hidden" id="'+name +'lessonId">';
rtStr+='<input type="hidden" id="'+name+'playNoteId">';
rtStr+='<input type="hidden" id="'+name+'noteCodeId">';

rtStr+='<input type="hidden" id="'+name+'offsetId"  value=0 >';
//alert('pb0');
rtStr+='<input type="hidden" readonly id="'+name+'noteId">';
//alert('pb1');
rtStr+='<table  border="0" class="ctable"> <tr class="ccaption"> <td colspan=10> Play Box</td></tr> ';
rtStr+='<tr>';
rtStr+='<td>' +NCARPMBLBL001;
rtStr+='</td>';
rtStr+='<td>' +NCARPMBLBL002;
rtStr+='</td>';
rtStr+='<td>' +NCARPMBLBL003;
rtStr+='</td>';
rtStr+='<td>' +NCARMELTEMPO;
rtStr+='</td>';
rtStr+='<td>' +NCARPMBLBL004;
rtStr+='</td>';
rtStr+='</tr>';
rtStr+='<tr class="ctext">';
rtStr+='<td>';
rtStr+='<input type="text"  size="3"  id="'+name+'SakValueId" value=-1 >';
rtStr+='</td>';
rtStr+='<td>';
rtStr+='<input type="text"  size="3"  id="'+name+'SakId" value=1 >';
rtStr+='</td>';
rtStr+='<td>';
rtStr+='<input type="text"  size="3"  id="'+name+'AkmValueId" value=1 >';
rtStr+='</td>';
rtStr+='<td>';
rtStr+='<input type="text"  size="3"  id="'+name+'AkmId"  value=1 >';
rtStr+='</td>';
rtStr+='<td>';
rtStr+='<input type="text"  size="3" readonly id="'+name+'noteDescId">';
rtStr+='</td>';
rtStr+='<td>';
rtStr+='<input type="text" readonly id="'+name+'noteWesternId" size="3">';
rtStr+='</td>';
rtStr+='<td>';
rtStr+='<input type="text" size="5"readonly id="'+name+'statusId">';
rtStr+='</td>';
rtStr+='<td>';
rtStr+='<select id="'+name+'TempoId" nameid="'+name+'" name="'+name+'TempoName" datatype="OPTION" onchange="javascript:onChange(this)">';
rtStr+='<option value="0">-</option>';
rtStr+='<option value="20">20</option>';
rtStr+='<option value="21">21</option>';
rtStr+='<option value="22">22</option>';
rtStr+='<option value="23">23</option>';
rtStr+='<option value="24">24</option>';
rtStr+='<option value="25">25</option>';
rtStr+='<option value="26">26</option>';
rtStr+='<option value="27">27</option>';
rtStr+='<option value="28">28</option>';
rtStr+='<option value="29">29</option>';
rtStr+='<option value="30">30</option>';
rtStr+='<option value="31">31</option>';
rtStr+='<option value="32">32</option>';
rtStr+='<option value="33">33</option>';
rtStr+='<option value="34">34</option>';
rtStr+='<option value="35">35</option>';
rtStr+='<option value="36">36</option>';
rtStr+='<option value="37">37</option>';
rtStr+='<option value="38">38</option>';
rtStr+='<option value="39">39</option>';
rtStr+='<option value="40">40</option>';
rtStr+='<option value="41">41</option>';
rtStr+='<option value="42">42</option>';
rtStr+='<option value="43">43</option>';
rtStr+='<option value="44">44</option>';
rtStr+='<option value="45">45</option>';
rtStr+='<option value="46">46</option>';
rtStr+='<option value="47">47</option>';
rtStr+='<option value="48">48</option>';
rtStr+='<option value="49">49</option>';
rtStr+='<option value="50">50</option>';
rtStr+='<option value="51">51</option>';
rtStr+='<option value="52">52</option>';
rtStr+='<option value="53">53</option>';
rtStr+='<option value="54">54</option>';
rtStr+='<option value="55">55</option>';
rtStr+='<option value="56">56</option>';
rtStr+='<option value="57">57</option>';
rtStr+='<option value="58">58</option>';
rtStr+='<option value="59">59</option>';
rtStr+='<option value="60">60</option>';
rtStr+='<option value="61">61</option>';
rtStr+='<option value="62">62</option>';
rtStr+='<option value="63">63</option>';
rtStr+='<option value="64">64</option>';
rtStr+='<option value="65">65</option>';
rtStr+='<option value="66">66</option>';
rtStr+='<option value="67">67</option>';
rtStr+='<option value="68">68</option>';
rtStr+='<option value="69">69</option>';
rtStr+='<option value="70">70</option>';
rtStr+='<option value="71">71</option>';
rtStr+='<option value="72">72</option>';
rtStr+='<option value="73">73</option>';
rtStr+='<option value="74">74</option>';
rtStr+='<option value="75">75</option>';
rtStr+='<option value="76">76</option>';
rtStr+='<option value="77">77</option>';
rtStr+='<option value="78">78</option>';
rtStr+='<option value="79">79</option>';
rtStr+='<option value="80">80</option>';
rtStr+='</select>';
rtStr+='</td>';
rtStr+='<td>';
rtStr+='<select id="'+name+'ScaleId" nameid="'+name+'" name="'+name+'ScaleName" datatype="OPTION" onchange="javascript:onChange(this)">';
rtStr+='<option value=""></option>';
rtStr+='<option value="11">B</option>';
rtStr+='<option value="10">A#</option>';
rtStr+='<option value="9">A</option>';
rtStr+='<option value="8">G#</option>';
rtStr+='<option value="7">G</option>';
rtStr+='<option value="6">F</option>';
rtStr+='<option value="5">F#</option>';
rtStr+='<option value="4">E</option>';
rtStr+='<option value="3">C#</option>';
rtStr+='<option value="2">D</option>';
rtStr+='<option value="1">C#</option>';
rtStr+='<option value="0" selected>C</option>';
rtStr+='<option value="-1">B</option>';
rtStr+='<option value="-2">A#</option>';
rtStr+='<option value="-3">A</option>';
rtStr+='<option value="-4">G#</option>';
rtStr+='<option value="-5">G</option>';
rtStr+='</select>';
rtStr+='</td>';
rtStr+='</tr>';
rtStr+='</table>';

//alert('pb2'+rtStr );

return rtStr;

/*--
rtStr='<table class="ctable">	';

rtStr='<tr>';
rtStr='<td>';
rtStr='Note';
rtStr='</td>';
rtStr='<td>';
rtStr='Western ';
rtStr='</td>';
rtStr='<td>';
rtStr='Status';
rtStr='</td>';
rtStr='<td>';
rtStr='Tempo/note';
rtStr='</td>';
rtStr='<td>';
rtStr='Scale';
rtStr='</td>';
rtStr='</tr>';
rtStr='';
rtStr='<tr>';
rtStr='<td>';
rtStr='<input type="text"  size="3" readonly id="noteDescId">';
rtStr='';
rtStr='</td>';
rtStr='<td>';
rtStr='<input type="text" readonly id="noteWesternId" size="3">';
rtStr='</td>';
rtStr='<td>';
rtStr='<input type="text" size="5"readonly id="statusId">';``/
rtStr='</td>';
rtStr='<td>';
rtStr='<select id="nameTempoId" nameid="name" name="nameTempoName" datatype="OPTION" onchange="javascript:onChange(this)">';
rtStr='<option value="0">-</option>';
rtStr='<option value="20">20</option>';
rtStr='<option value="21">21</option>';
rtStr='<option value="22">22</option>';
rtStr='<option value="23">23</option>';
rtStr='<option value="24">24</option>';
rtStr='<option value="25">25</option>';
rtStr='<option value="26">26</option>';
rtStr='<option value="27">27</option>';
rtStr='<option value="28">28</option>';
rtStr='<option value="29">29</option>';
rtStr='<option value="30">30</option>';
rtStr='<option value="31">31</option>';
rtStr='<option value="32">32</option>';
rtStr='<option value="33">33</option>';
rtStr='<option value="34">34</option>';
rtStr='<option value="35">35</option>';
rtStr='<option value="36">36</option>';
rtStr='<option value="37">37</option>';
rtStr='<option value="38">38</option>';
rtStr='<option value="39">39</option>';
rtStr='<option value="40">40</option>';
rtStr='<option value="41">41</option>';
rtStr='<option value="42">42</option>';
rtStr='<option value="43">43</option>';
rtStr='<option value="44">44</option>';
rtStr='<option value="45">45</option>';
rtStr='<option value="46">46</option>';
rtStr='<option value="47">47</option>';
rtStr='<option value="48">48</option>';
rtStr='<option value="49">49</option>';
rtStr='<option value="50">50</option>';
rtStr='<option value="51">51</option>';
rtStr='<option value="52">52</option>';
rtStr='<option value="53">53</option>';
rtStr='<option value="54">54</option>';
rtStr='<option value="55">55</option>';
rtStr='<option value="56">56</option>';
rtStr='<option value="57">57</option>';
rtStr='<option value="58">58</option>';
rtStr='<option value="59">59</option>';
rtStr='<option value="60">60</option>';
rtStr='<option value="61">61</option>';
rtStr='<option value="62">62</option>';
rtStr='<option value="63">63</option>';
rtStr='<option value="64">64</option>';
rtStr='<option value="65">65</option>';
rtStr='<option value="66">66</option>';
rtStr='<option value="67">67</option>';
rtStr='<option value="68">68</option>';
rtStr='<option value="69">69</option>';
rtStr='<option value="70">70</option>';
rtStr='<option value="71">71</option>';
rtStr='<option value="72">72</option>';
rtStr='<option value="73">73</option>';
rtStr='<option value="74">74</option>';
rtStr='<option value="75">75</option>';
rtStr='<option value="76">76</option>';
rtStr='<option value="77">77</option>';
rtStr='<option value="78">78</option>';
rtStr='<option value="79">79</option>';
rtStr='<option value="80">80</option>';
rtStr='</select>';
rtStr='</td>';
rtStr='<td>';
rtStr='<select id="nameScaleId" nameid="name" name="nameScaleName" datatype="OPTION" onchange="javascript:onChange(this)">';
rtStr='<option value=""></option>';
rtStr='<option value="0" selected>0</option>';
rtStr='<option value="1">1</option>';
rtStr='<option value="2">2</option>';
rtStr='<option value="3">3</option>';
rtStr='<option value="4">4</option>';
rtStr='<option value="5">5</option>';
rtStr='<option value="6">6</option>';
rtStr='<option value="7">7</option>';
rtStr='<option value="8">8</option>';
rtStr='</select>';
rtStr='</td>';
rtStr='</tr>';
rtStr='</table>';
*/

}





//need to check Can we pass function name as well ####


//melRagasSwraCom()

  

function   cust_post_onChange(obj)
{

	try
	{
   // alert("this is cust postOnchange<" + obj.id +">");

var 	nameid   =obj.getAttribute('nameid');
	if (nameid == null)
	{
	   //  alert('nameid is null');
		nameid=obj.getAttribute('parent');
	}

	if (nameid == null)
	{
	;
	    
	}
	else
	{
		//alert("nameid= <"+nameid +">");	
		var melNameId=nameid+"MelNameId";
		var melNoId=nameid+"MelNoId";
		var melChakraId=nameid+"MelChakraNoId";
		var melChakraNameId=nameid+"MelChakraNameId";
		var melMelamNoId=nameid+"MelMelamNoId";
		var melMelamNameId=nameid+"MelMelamNameId";
		var nameViewId= nameid+"ViewId";



		var govaiId =nameid+"GovaiId";
		var talaId  =nameid+"TalaId";
		var jathiId =nameid+"JathiId";
		var langId  =nameid+"LangId";
		var acharamId=nameid+"AcharamId";
		var SId=nameid+"SId";
		var RId=nameid+"RId";
		var GId=nameid+"GId";
		var MId=nameid+"MId";
		var PId=nameid+"PId";
		var DId=nameid+"DId";
		var NId=nameid+"NId";
	    				//MelChakraNoId
			var rdArry = new Array(1,1,1,2,2,3);
			var gnArry = new Array(1,2,3,2,3,3);
 			var rArr=new Array(0,12,18);
 			var gArr=new Array(0,6,12);
 			var dArr=new Array(0,2,3);
 			var nArr=new Array(1,2,3);
 			var mArr=new Array(0,36);

			SObj=document.getElementById(SId); 
			RObj=document.getElementById(RId); 
			GObj=document.getElementById(GId); 
			MObj=document.getElementById(MId); 
			PObj=document.getElementById(PId); 
			DObj=document.getElementById(DId); 
			NObj=document.getElementById(NId); 
			melNoObj=document.getElementById(melNoId);


			/*----field 02 version---*/
			var AroRagaClassId= nameid+"_AroRagaClass";
			var AvroRagaClassId= nameid+"_AvroRagaClass";
			var RagaTypeId= nameid+"_RagaType";
			var ClassofRagaId= nameid+"_ClassofRaga";
			var RagaSubTypeId= nameid+"_RagaSubType";
			var AroSwaraCombId= nameid+"_AroSwaraComb";
			var AvroSwaraCombId= nameid+"_AvroSwaraComb";



	    if(obj.id == melNameId )
		{
			//S-0
			//R-0,12,18 :=(int)ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]
			//G-0,6,12
			//M-0,36,
			//P-0
			//D-0,2,3
			//N-1,2,3
					
			//alert('To do nameId');

		

			var i=obj.value;

			if(document.getElementById(melNoId).value       != i )
			document.getElementById(melNoId).value       = i;
			
			if(document.getElementById(melChakraId).value   != ceil(i/6) )
			document.getElementById(melChakraId).value     = ceil(i/6);

			if(document.getElementById(melChakraNameId).value != ceil(i/6) )
			document.getElementById(melChakraNameId).value = ceil(i/6);
/*
			document.getElementById(melMelamNoId).value    = (obj.value%6 == 0)?6 :obj.value%6;
			document.getElementById(melMelamNameId).value  = (obj.value%6 == 0)?6 :obj.value%6;
*/ 
			if(document.getElementById(melMelamNoId).value    != mod(i,6) )
			document.getElementById(melMelamNoId).value    = mod(i,6);
			
			if(document.getElementById(melMelamNameId).value  != mod(i,6) )
			document.getElementById(melMelamNameId).value  = mod(i,6);


//			alert(ceil(((i%36== 0)?36:(i%36))*1.00/6.0));
			document.getElementById(SId).value    = 0;

			if(document.getElementById(RId).value    != rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] )
			document.getElementById(RId).value    = rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] ;

			cust_option_remove(GObj);
			GObj.options[GObj.options.length]= new Option(' ' ,'-1');
			if (RObj.value == 0 )
			{
					GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G1' ) ,0);
					GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G2' ) ,6);
					GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G3' ) ,12);
			}
			else if ( RObj.value == 12 )
			{
					GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G2' ) ,6);
					GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G3' ) ,12);
			}
			else if ( RObj.value==18 )
			{
					GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G3' ) ,12);
			}


			if(document.getElementById(GId).value    != gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] )
			document.getElementById(GId).value    = gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1];

			if(document.getElementById(DId).value    != dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1])
			document.getElementById(DId).value    = dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1] ;



			cust_option_remove(NObj);
			NObj.options[NObj.options.length]= new Option(' ' ,'-1');
			if (DObj.value == 0 )
			{
					NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N1' ) ,1);
					NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N2' ) ,2);
					NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N3' ) ,3);
			}
			else if ( DObj.value == 2 )
			{
					NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N2' ) ,2);
					NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N3' ) ,3);
			}
			else if ( DObj.value==3 )
			{
					NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N3' ) ,3);
			}

			if (document.getElementById(NId).value    != nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1] )
			document.getElementById(NId).value    = nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1];

			if(document.getElementById(MId).value   != mArr[ceil(i/36)-1] )
			document.getElementById(MId).value    = mArr[ceil(i/36)-1];

		}
		else if(obj.id == melNoId )
		{
		//	alert('To do noId' + obj.value);
			var i=obj.value;


			document.getElementById(melNameId).value       = i;
			document.getElementById(melChakraId).value     = ceil(i/6);
			document.getElementById(melChakraNameId).value = ceil(i/6);
			document.getElementById(melMelamNoId).value    = mod(i,6);
			document.getElementById(melMelamNameId).value  = mod(i,6);
//			alert(ceil(((i%36== 0)?36:(i%36))*1.00/6.0));
			document.getElementById(SId).value    = 0;


			if(document.getElementById(RId).value    != rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] )
			document.getElementById(RId).value    = rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] ;

			cust_option_remove(GObj);
			GObj.options[GObj.options.length]= new Option(' ' ,'-1');
			if (RObj.value == 0 )
			{
					GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G1' ) ,0);
					GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G2' ) ,6);
					GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G3' ) ,12);
			}
			else if ( RObj.value == 12 )
			{
					GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G2' ) ,6);
					GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G3' ) ,12);
			}
			else if ( RObj.value==18 )
			{
			GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G3' ) ,12);
			}


			if(document.getElementById(GId).value    != gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1])
			document.getElementById(GId).value    =  parseInt(gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1]);



			if(document.getElementById(DId).value    != dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1]  )
			document.getElementById(DId).value    = dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1] ;

			cust_option_remove(NObj);
			NObj.options[NObj.options.length]= new Option(' ' ,'-1');
			if (DObj.value == 0 )
			{
					NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N1' ) ,1);
					NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N2' ) ,2);
					NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N3' ) ,3);
			}
			else if ( DObj.value == 2 )
			{
					NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N2' ) ,2);
					NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N3' ) ,3);
			}
			else if ( DObj.value==3 )
			{
					NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N3' ) ,3);
			}

			if(document.getElementById(NId).value    != nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1]   )
			document.getElementById(NId).value    = nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1];


			if(document.getElementById(MId).value    != mArr[ceil(i/36)-1] )
			document.getElementById(MId).value    = mArr[ceil(i/36)-1];
		}
		else if(obj.id == govaiId || obj.id ==jathiId || obj.id == talaId ||  obj.id == acharamId)
		{
		//	alert('Test<' + obj.id+'> value' + obj.value);
		//	alert(document.getElementById(talaId).value );
		//	alert(document.getElementById(jathiId).value );
			var jathiThala=getJathiFormat(document.getElementById(jathiId).value,document.getElementById(talaId).value);
			var jathiThalaLen=getJathiFormatLength(document.getElementById(jathiId).value,document.getElementById(talaId).value);

			try
			{
						var acharam=document.getElementById(acharamId).value ;

			//	alert("govaiId =<"+govaiId+">");	
				if ( nameid == "name" )
				{
					if( 	document.getElementById(govaiId).value == 'VALIVIMANDALAM' )
					{
						document.getElementById(nameViewId).innerHTML = getOnePara(valivi,jathiThala,jathiThalaLen,acharam,nameid);
					}
					else if( 	document.getElementById(govaiId).value == 'IRATTAIGOVAI' )
					{
						document.getElementById(nameViewId).innerHTML = getOnePara(irrattai,jathiThala,jathiThalaLen,acharam,nameid);
					}
					else if( 	document.getElementById(govaiId).value == 'MELIVUMANDILAM' )
					{
						document.getElementById(nameViewId).innerHTML = getOnePara(melivu,jathiThala,jathiThalaLen,acharam,nameid);
					}
					else if( 	document.getElementById(govaiId).value == 'SAMANMANDILAM' )
					{
							//alert ("S:001 sarali=<" +suravali + ">")
						document.getElementById(nameViewId).innerHTML = getOnePara(suravali,jathiThala,jathiThalaLen,acharam,nameid);
					}
					else if( 	document.getElementById(govaiId).value == 'KEETHAM' )
					{
						document.getElementById(nameViewId).innerHTML = getOnePara(sarali,jathiThala,jathiThalaLen,acharam,nameid);
					}
					else
					{
						document.getElementById(nameViewId).innerHTML = "Under Construction..." ;
					}
				}
				else if ( nameid == "keetham" )
				{

					if( 	document.getElementById(govaiId).value == 'k1' )
					{
					//	alert("k1<"+k1+">");
						document.getElementById(nameViewId).innerHTML = getOneKeetham(k1,jathiThala,jathiThalaLen,acharam,nameid);
					}
					else
					{
						document.getElementById(nameViewId).innerHTML = "Under Construction..." ;
					}

					//alert(" other than name" );	
				}
				}
				catch(e)
				{
					alert('EXPPostTran:'+govaiId+':'+e);
				}
		}
		else if( obj.id ==RId )
		{
		
				//S-0
			//R-0,12,18
			//G-0,6,12
			//M-0,36,
			//P-0
			//D-0,2,3
			//N-1,2,3

			cust_option_remove(GObj);
			GObj.options[GObj.options.length]= new Option(' ' ,'-1');
			if (RObj.value == 0 )
			{
			GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G1' ) ,0);
			GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G2' ) ,6);
			GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G3' ) ,12);
			GObj.value=0;
			}
			else if ( RObj.value == 12 )
			{
			GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G2' ) ,6);
			GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G3' ) ,12);
			GObj.value=6;
			}
			else if ( RObj.value==18 )
			{
			GObj.options[GObj.options.length]= new Option(eval('objSwarasName.G3' ) ,12);
			GObj.value=12;
			}
		//	alert ( SObj.value+ RObj.value+ GObj.value+ MObj.value+ PObj.value+ DObj.value + NObj.value);
				
		melNoObj.value= parseInt(SObj.value ) + 
						parseInt(RObj.value )+ 
						parseInt(GObj.value )+ 
						parseInt(MObj.value)+ 
						parseInt(PObj.value)+ 
						parseInt(DObj.value)+ 
						parseInt(NObj.value );
			//	alert('To do noId' + obj.value);
			var i=melNoObj.value;
			if ( 	document.getElementById(melNameId).value       != i )
			document.getElementById(melNameId).value       = i;

			if( document.getElementById(melChakraId).value     != ceil(i/6))
			document.getElementById(melChakraId).value     = ceil(i/6);

			if(document.getElementById(melChakraNameId).value != ceil(i/6))
			document.getElementById(melChakraNameId).value = ceil(i/6);

			if(document.getElementById(melMelamNoId).value    != mod(i,6))
			document.getElementById(melMelamNoId).value    = mod(i,6);

			if(document.getElementById(melMelamNameId).value  != mod(i,6))
			document.getElementById(melMelamNameId).value  = mod(i,6);

//			alert(ceil(((i%36== 0)?36:(i%36))*1.00/6.0));
			document.getElementById(SId).value    = 0;
			if (document.getElementById(RId).value    != rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] )
			document.getElementById(RId).value    = rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] ;

			if(document.getElementById(GId).value    != gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1]);
			document.getElementById(GId).value    = gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1];

			if(document.getElementById(DId).value    != dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1] )
			document.getElementById(DId).value    = dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1] ;


			if(document.getElementById(NId).value    != nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1] )
			document.getElementById(NId).value    = nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1];

			if(document.getElementById(MId).value    != mArr[ceil(i/36)-1])
			document.getElementById(MId).value    = mArr[ceil(i/36)-1];


		}
		else if( obj.id ==DId )
		{
		//	NObj=document.getElementById(NId); 
		//	DObj=document.getElementById(DId); 
			SObj=document.getElementById(SId); 
			RObj=document.getElementById(RId); 
			GObj=document.getElementById(GId); 
			MObj=document.getElementById(MId); 
			PObj=document.getElementById(PId); 
			DObj=document.getElementById(DId); 
			NObj=document.getElementById(NId); 
			melNoObj=document.getElementById(melNoId); 


				//S-0
			//R-0,12,18
			//G-0,6,12
			//M-0,36,
			//P-0
			//D-0,2,3
			//N-1,2,3

			cust_option_remove(NObj);
			NObj.options[NObj.options.length]= new Option(' ' ,'-1');
			if (DObj.value == 0 )
			{
			NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N1' ) ,1);
			NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N2' ) ,2);
			NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N3' ) ,3);
			NObj.value = 1;
			}
			else if ( DObj.value == 2 )
			{
			NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N2' ) ,2);
			NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N3' ) ,3);
			NObj.value = 2;
			}
			else if ( DObj.value==3 )
			{
			NObj.options[NObj.options.length]= new Option(eval('objSwarasName.N3' ) ,3);
			NObj.value = 3;
			}

		melNoObj.value= parseInt(SObj.value ) + 
						parseInt(RObj.value )+ 
						parseInt(GObj.value )+ 
						parseInt(MObj.value)+ 
						parseInt(PObj.value)+ 
						parseInt(DObj.value)+ 
						parseInt(NObj.value );
			//	alert('To do noId' + obj.value);
			var i=melNoObj.value;
			if ( 	document.getElementById(melNameId).value       != i )
			document.getElementById(melNameId).value       = i;

			if( document.getElementById(melChakraId).value     != ceil(i/6))
			document.getElementById(melChakraId).value     = ceil(i/6);

			if(document.getElementById(melChakraNameId).value != ceil(i/6))
			document.getElementById(melChakraNameId).value = ceil(i/6);

			if(document.getElementById(melMelamNoId).value    != mod(i,6))
			document.getElementById(melMelamNoId).value    = mod(i,6);

			if(document.getElementById(melMelamNameId).value  != mod(i,6))
			document.getElementById(melMelamNameId).value  = mod(i,6);

//			alert(ceil(((i%36== 0)?36:(i%36))*1.00/6.0));
			document.getElementById(SId).value    = 0;
			if (document.getElementById(RId).value    != rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] )
			document.getElementById(RId).value    = rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] ;

			if(document.getElementById(GId).value    != gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1]);
			document.getElementById(GId).value    = gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1];

			if(document.getElementById(DId).value    != dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1] )
			document.getElementById(DId).value    = dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1] ;


			if(document.getElementById(NId).value    != nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1] )
			document.getElementById(NId).value    = nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1];

			if(document.getElementById(MId).value    != mArr[ceil(i/36)-1])
			document.getElementById(MId).value    = mArr[ceil(i/36)-1];


			

		}
		else if( obj.id ==MId )
		{
		//	NObj=document.getElementById(NId); 
		//	DObj=document.getElementById(DId); 
			SObj=document.getElementById(SId); 
			RObj=document.getElementById(RId); 
			GObj=document.getElementById(GId); 
			MObj=document.getElementById(MId); 
			PObj=document.getElementById(PId); 
			DObj=document.getElementById(DId); 
			NObj=document.getElementById(NId); 
			melNoObj=document.getElementById(melNoId); 


				//S-0
			//R-0,12,18
			//G-0,6,12
			//M-0,36,
			//P-0
			//D-0,2,3
			//N-1,2,3

		melNoObj.value= parseInt(SObj.value ) + 
						parseInt(RObj.value )+ 
						parseInt(GObj.value )+ 
						parseInt(MObj.value)+ 
						parseInt(PObj.value)+ 
						parseInt(DObj.value)+ 
						parseInt(NObj.value );
			//	alert('To do noId' + obj.value);
			var i=melNoObj.value;
			if ( 	document.getElementById(melNameId).value       != i )
			document.getElementById(melNameId).value       = i;

			if( document.getElementById(melChakraId).value     != ceil(i/6))
			document.getElementById(melChakraId).value     = ceil(i/6);

			if(document.getElementById(melChakraNameId).value != ceil(i/6))
			document.getElementById(melChakraNameId).value = ceil(i/6);

			if(document.getElementById(melMelamNoId).value    != mod(i,6))
			document.getElementById(melMelamNoId).value    = mod(i,6);

			if(document.getElementById(melMelamNameId).value  != mod(i,6))
			document.getElementById(melMelamNameId).value  = mod(i,6);

//			alert(ceil(((i%36== 0)?36:(i%36))*1.00/6.0));
			document.getElementById(SId).value    = 0;
			if (document.getElementById(RId).value    != rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] )
			document.getElementById(RId).value    = rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] ;

			if(document.getElementById(GId).value    != gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1]);
			document.getElementById(GId).value    = gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1];

			if(document.getElementById(DId).value    != dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1] )
			document.getElementById(DId).value    = dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1] ;


			if(document.getElementById(NId).value    != nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1] )
			document.getElementById(NId).value    = nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1];

			if(document.getElementById(MId).value    != mArr[ceil(i/36)-1])
			document.getElementById(MId).value    = mArr[ceil(i/36)-1];


			

		}
			else if( obj.id ==GId || obj.id ==NId   )
		{
		//	NObj=document.getElementById(NId); 
		//	DObj=document.getElementById(DId); 
			SObj=document.getElementById(SId); 
			RObj=document.getElementById(RId); 
			GObj=document.getElementById(GId); 
			MObj=document.getElementById(MId); 
			PObj=document.getElementById(PId); 
			DObj=document.getElementById(DId); 
			NObj=document.getElementById(NId); 
			melNoObj=document.getElementById(melNoId); 


				//S-0
			//R-0,12,18
			//G-0,6,12
			//M-0,36,
			//P-0
			//D-0,2,3
			//N-1,2,3

		melNoObj.value= parseInt(SObj.value ) + 
						parseInt(RObj.value )+ 
						parseInt(GObj.value )+ 
						parseInt(MObj.value)+ 
						parseInt(PObj.value)+ 
						parseInt(DObj.value)+ 
						parseInt(NObj.value );
			//	alert('To do noId' + obj.value);
			var i=melNoObj.value;
			if ( 	document.getElementById(melNameId).value       != i )
			document.getElementById(melNameId).value       = i;

			if( document.getElementById(melChakraId).value     != ceil(i/6))
			document.getElementById(melChakraId).value     = ceil(i/6);

			if(document.getElementById(melChakraNameId).value != ceil(i/6))
			document.getElementById(melChakraNameId).value = ceil(i/6);

			if(document.getElementById(melMelamNoId).value    != mod(i,6))
			document.getElementById(melMelamNoId).value    = mod(i,6);

			if(document.getElementById(melMelamNameId).value  != mod(i,6))
			document.getElementById(melMelamNameId).value  = mod(i,6);

//			alert(ceil(((i%36== 0)?36:(i%36))*1.00/6.0));
/*[
			document.getElementById(SId).value    = 0;
			if (document.getElementById(RId).value    != rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] )
			document.getElementById(RId).value    = rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] ;

			if(document.getElementById(GId).value    != gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1]);
			document.getElementById(GId).value    = gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1];

			if(document.getElementById(DId).value    != dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1] )
			document.getElementById(DId).value    = dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1] ;


			if(document.getElementById(NId).value    != nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1] )
			document.getElementById(NId).value    = nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1];

			if(document.getElementById(MId).value    != mArr[ceil(i/36)-1])
			document.getElementById(MId).value    = mArr[ceil(i/36)-1];


		]*/	

		}
		else if ( obj.id == AroRagaClassId )
		{



var comb=0;
var dycm="|";
switch(obj.value)
{
case '1': comb=1;break;
case '2': comb=6;break;
case '3': comb=15;break;
default:comb=1;
}


for(var k=1;k <=comb;k++)
{
dycm += "|" +k+'|'+k;
}

	var fld=new fieldClass();
	fld.name  ="AroSwaraComb"
	//fld.label ="Swra Combination " + comb;
	fld.label ="";
	fld.desc  ="N"
	fld.group ="maint"
	fld.mndf  ="N";
	fld.dflt    =1;
	fld.listVal =dycm;
	fld.dataType="LIST"
	fld.parent  ="name"
	fld.xml     ="N"
		$("#"+ nameid +"_SwaraAroLDiv").html( "Swra Combination [" + comb + "]");
		$("#"+ nameid +"_SwaraAroDiv").html( rtCreateField(fld));
		$("#"+ nameid +"_AroSwaraComb").change();





	 // alert(' rstt = ' + rtCreateField(fld));
			
			}	
	else if ( obj.id == AvroRagaClassId )
	{



		var comb=0;
		var dycm="|";
		switch(obj.value)
		{
		case '1': comb=1;break;
		case '2': comb=6;break;
		case '3': comb=15;break;
		default:comb=1;
		}


		for(var k=1;k <=comb;k++)
		{
		dycm += "|" +k+'|'+k;
		}

		var fld=new fieldClass();
		fld.name  ="AvroSwaraComb"
		//fld.label ="Swra Combination " + comb;
		fld.label ="";
		fld.desc  ="N"
		fld.group ="maint"
		fld.mndf  ="N";
		fld.dflt    =1;
		fld.listVal =dycm;
		fld.dataType="LIST"
		fld.parent  ="name"
		fld.xml     ="N"
		$("#"+ nameid +"_SwaraAvroLDiv").html(  "<label class='clabel'>Swra Combination [" + comb + "] </label>");
		$("#"+ nameid +"_SwaraAvroDiv").html( rtCreateField(fld));

		$("#"+ nameid +"_AvroSwaraComb").change();


	}
	else if( obj.id ==RagaTypeId )
	{
		//alert('RagaType<' + obj.value +">" ) ;
		//document.forms[0].submit();
		if ( obj.value == 'U' )	
		{
			 //$("#"+AvroRagaClassId).attr("disabled",true);
			 // $("#"+ AroRagaClassId).attr("disabled",true);
			// $("#"+ AvroRagaClassId).val(1);
		//	 $("#"+ AroRagaClassId).val(1);
		}
		else
		{
			 $("#"+AvroRagaClassId).attr("disabled",false);
			 $("#"+ AroRagaClassId).attr("disabled",false);
		}
			 $("#"+ AroRagaClassId).change();
			 $("#"+ AvroRagaClassId).change();

	}
	else if( obj.id ==ClassofRagaId )
	{
		

	

		if ( obj.value == 'M' )	
		{
		//	alert('obj.value'||obj.value);
			
			 $("#"+ RagaTypeId).attr("disabled",true);
			 $("#"+ RagaTypeId).attr("disabled",true);

			 $("#"+ RagaTypeId).val('U');
			 $("#"+ RagaSubTypeId).val('N');
			 $("#"+ RagaTypeId).change();
			 $("#"+ RagaSubTypeId).change();
		}
		else
		{
			 $("#"+RagaTypeId).attr("disabled",false);
			 $("#"+ RagaTypeId).attr("disabled",false);
		}

	}
	else if( obj.id ==RagaSubTypeId )
	{
			if ( obj.value == 'V' )	
		{
			/*[
			 $("#"+RagaTypeId).attr("disabled",true);
			 $("#"+ RagaTypeId).attr("disabled",true);
			 $("#"+ RagaTypeId).val('U');
			 $("#"+ RagaTypeId).val('U');
			 $("#"+ RagaTypeId).change();
			 $("#"+ RagaTypeId).change();
			*/
			;
		}
		else
		{
		//	 $("#"+RagaTypeId).attr("disabled",false);
		//	 $("#"+ RagaTypeId).attr("disabled",false);
			;
		}

	}	
	else if( obj.id ==AvroSwaraCombId )
	{
	
//	alert("AvroSwaraCombId" + AroSwaraCombId);
		
	var govaiId =nameid+"GovaiId";
		var talaId  =nameid+"TalaId";
		var jathiId =nameid+"JathiId";
		var langId  =nameid+"LangId";
		var acharamId=nameid+"AcharamId";
		var SId=nameid+"AvroSId";
		var RId=nameid+"AvroRId";
		var GId=nameid+"AvroGId";
		var MId=nameid+"AvroMId";
		var PId=nameid+"AvroPId";
		var DId=nameid+"AvroDId";
		var NId=nameid+"AvroNId";


	lvSc=	$("#"+ nameid  + "_AvroRagaClass" ).val();


$("#"+ NId).show();
$("#"+ DId).show();
$("#"+ PId).show();
$("#"+ MId).show();
$("#"+ GId).show();
$("#"+ RId).show();



			var comb=0;
		var dycm="|";

		if( lvSc ==1 )
		{
			switch(obj.value)
			{
			case '1': comb=72;break;
				default:comb=72;
			}
		}

		if( lvSc ==2 )
		{
			switch(obj.value)
			{
			case '1': comb=36;$("#"+ NId).val(1);$("#"+ NId).hide();break;
			case '2': comb=36;$("#"+ DId).val(0);$("#"+ DId).hide();break;
			case '3': comb=36;$("#"+ PId).val(0);$("#"+ PId).hide();break;
			case '4': comb=72;$("#"+ MId).val(0);$("#"+ MId).hide();break;
			case '5': comb=36;$("#"+ GId).val(0);$("#"+ GId).hide();break;
			case '6': comb=36;$("#"+ RId).val(0);$("#"+ RId).hide();break;
			default:comb=1;
			}
		}
		if( lvSc ==3 )
		{



$("#"+DId).show();$("#"+NId).show();
$("#"+PId).show();$("#"+NId).show();
$("#"+MId).show();$("#"+NId).show();
$("#"+GId).show();$("#"+NId).show();
$("#"+RId).show();$("#"+NId).show();
$("#"+PId).show();$("#"+DId).show();
$("#"+MId).show();$("#"+DId).show();
$("#"+GId).show();$("#"+DId).show();
$("#"+RId).show();$("#"+DId).show();
$("#"+MId).show();$("#"+PId).show();
$("#"+GId).show();$("#"+PId).show();
$("#"+RId).show();$("#"+PId).show();
$("#"+GId).show();$("#"+MId).show();
$("#"+RId).show();$("#"+MId).show();
$("#"+RId).show();$("#"+GId).show();

			switch(obj.value)
			{
			case '1':  comb=12 ;$("#"+DId).hide();$("#"+NId).hide();break;
			case '2':  comb=36 ;$("#"+PId).hide();$("#"+NId).hide();break;
			case '3':  comb=18 ;$("#"+MId).hide();$("#"+NId).hide();break;
			case '4':  comb=18 ;$("#"+GId).hide();$("#"+NId).hide();break;
			case '5':  comb=18 ;$("#"+RId).hide();$("#"+NId).hide();break;
			case '6':  comb=36 ;$("#"+PId).hide();$("#"+DId).hide();break;
			case '7':  comb=18 ;$("#"+MId).hide();$("#"+DId).hide();break;
			case '8':  comb=18 ;$("#"+GId).hide();$("#"+DId).hide();break;
			case '9':  comb=18 ;$("#"+RId).hide();$("#"+DId).hide();break;
			case '10': comb=36 ;$("#"+MId).hide();$("#"+PId).hide();break;
			case '11': comb=36 ;$("#"+GId).hide();$("#"+PId).hide();break;
			case '12': comb=36 ;$("#"+RId).hide();$("#"+PId).hide();break;
			case '13': comb=18 ;$("#"+GId).hide();$("#"+MId).hide();break;
			case '14': comb=18 ;$("#"+RId).hide();$("#"+MId).hide();break;
			case '15': comb=12 ;$("#"+RId).hide();$("#"+GId).hide();break;
			default:comb=1;
			}
		}



		for(var k=1;k <=comb;k++)
		{
		dycm += "|" +k+'|'+k;
		}

		var fld=new fieldClass();
		fld.name  ="AvroSwaraCombNo"
	//	fld.label ="Swra Combination " + comb;
		fld.label ="";
		fld.desc  ="N"
		fld.group ="maint"
		fld.mndf  ="N";
		fld.dflt    =1;
		fld.listVal =dycm;
		fld.dataType="LIST"
		fld.parent  ="name"
		fld.xml     ="N"
		$("#"+ nameid +"_SwaraAvroCombLDiv").html(  "<label class='clabel'>Swra Combination [" + comb + "] </label>");
		$("#"+ nameid +"_SwaraAvroCombDiv").html( rtCreateField(fld));

/*[
		if($("#" + AroRagaClassId ).val() == 2 )
		{	

			alert("Shanmugam");
		}
*/
		
	}

	else if( obj.id ==AroSwaraCombId )
	{
	
//	alert("AroSwaraCombId" + AroSwaraCombId);
		


	lvSc=	$("#"+ nameid  + "_AroRagaClass" ).val();

			var comb=0;
		var dycm="|";



		var govaiId =nameid+"GovaiId";
		var talaId  =nameid+"TalaId";
		var jathiId =nameid+"JathiId";
		var langId  =nameid+"LangId";
		var acharamId=nameid+"AcharamId";
		var SId=nameid+"AroSId";
		var RId=nameid+"AroRId";
		var GId=nameid+"AroGId";
		var MId=nameid+"AroMId";
		var PId=nameid+"AroPId";
		var DId=nameid+"AroDId";
		var NId=nameid+"AroNId";


		$("#"+ NId).show();
		$("#"+ DId).show();
		$("#"+ PId).show();
		$("#"+ MId).show();
		$("#"+ GId).show();
		$("#"+ RId).show();
		$("#"+ SId).show();
	
		if( lvSc ==1 )
		{
			switch(obj.value)
			{
			case '1': comb=72;break;
				default:comb=72;
			}
		}

		if( lvSc ==2 )
		{
			switch(obj.value)
			{
			case '1': comb=36;$("#"+ NId).val(1); $("#"+ NId).hide(); break;
			case '2': comb=36;$("#"+ DId).val(0); $("#"+ DId).hide();break;
			case '3': comb=36;$("#"+ PId).val(0); $("#"+ PId).hide();break;
			case '4': comb=72;$("#"+ MId).val(0); $("#"+ MId).hide();break;
			case '5': comb=36;$("#"+ GId).val(0); $("#"+ GId).hide();break;
			case '6': comb=36;$("#"+ RId).val(0); $("#"+ RId).hide();break;

			
			default:comb=1;
			}
		}
		if( lvSc ==3 )
		{
		$("#"+DId).show();$("#"+NId).show();
$("#"+PId).show();$("#"+NId).show();
$("#"+MId).show();$("#"+NId).show();
$("#"+GId).show();$("#"+NId).show();
$("#"+RId).show();$("#"+NId).show();
$("#"+PId).show();$("#"+DId).show();
$("#"+MId).show();$("#"+DId).show();
$("#"+GId).show();$("#"+DId).show();
$("#"+RId).show();$("#"+DId).show();
$("#"+MId).show();$("#"+PId).show();
$("#"+GId).show();$("#"+PId).show();
$("#"+RId).show();$("#"+PId).show();
$("#"+GId).show();$("#"+MId).show();
$("#"+RId).show();$("#"+MId).show();
$("#"+RId).show();$("#"+GId).show();

			switch(obj.value)
			{
			case '1':  comb=12 ;$("#"+DId).hide();$("#"+NId).hide();break;
			case '2':  comb=36 ;$("#"+PId).hide();$("#"+NId).hide();break;
			case '3':  comb=18 ;$("#"+MId).hide();$("#"+NId).hide();break;
			case '4':  comb=18 ;$("#"+GId).hide();$("#"+NId).hide();break;
			case '5':  comb=18 ;$("#"+RId).hide();$("#"+NId).hide();break;
			case '6':  comb=36 ;$("#"+PId).hide();$("#"+DId).hide();break;
			case '7':  comb=18 ;$("#"+MId).hide();$("#"+DId).hide();break;
			case '8':  comb=18 ;$("#"+GId).hide();$("#"+DId).hide();break;
			case '9':  comb=18 ;$("#"+RId).hide();$("#"+DId).hide();break;
			case '10': comb=36 ;$("#"+MId).hide();$("#"+PId).hide();break;
			case '11': comb=36 ;$("#"+GId).hide();$("#"+PId).hide();break;
			case '12': comb=36 ;$("#"+RId).hide();$("#"+PId).hide();break;
			case '13': comb=18 ;$("#"+GId).hide();$("#"+MId).hide();break;
			case '14': comb=18 ;$("#"+RId).hide();$("#"+MId).hide();break;
			case '15': comb=12 ;$("#"+RId).hide();$("#"+GId).hide();break;
			default:comb=1;
			}
		}



		for(var k=1;k <=comb;k++)
		{
		dycm += "|" +k+'|'+k;
		}

		var fld=new fieldClass();
		fld.name  ="AroSwaraCombNo"
		//fld.label ="Swra Combination " + comb;
		fld.label ="";
		fld.desc  ="N"
		fld.group ="maint"
		fld.mndf  ="N";
		fld.dflt    =1;
		fld.listVal =dycm;
		fld.dataType="LIST"
		fld.parent  ="name"
		fld.xml     ="N"
		$("#"+ nameid +"_SwaraAroCombLDiv").html( "<label class='clabel'>Swra Combination [" + comb + "] </label>");
		$("#"+ nameid +"_SwaraAroCombDiv").html( rtCreateField(fld));

/*[
		if($("#" + AroRagaClassId ).val() == 2 )
		{	

			alert("Shanmugam");
		}
*/
		
	}

	else if( obj.id ==langId )
	{
		//	alert('Submit');
		document.forms[0].submit();	

	}



		}
			
				
	// ALert('post onchange');
	}
	catch(e)
	{
		alert('EXPPostTran'+e);
	}


		nameid   =obj.getAttribute('name');
	if (nameid == "")
	{
	;
	}
	else
	{
	//	alert("nameid<" + nameid + ">");
		

	if(nameid =="name_KeerId" )
	{
			var div= "theText";
	//	var url= $("#url");
		var url= "getKeethamIdValue.php";
		var json= { DEBUG : 0, NAME: "KeerId", GROUP : "name" , ID : obj.value  , LANG : $("#lang").val()};

		//alert("url =<" + url.val() +">" );

//var  json = JSON.parse(jsonstr.val());
		
	//var json={seqname:"GROUPID"};
		onPostReqDecode64(url,  json ,div,'OBJ');
	}


		
	}

}

