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


//alert('C:001:@@@');
function  onLoadPage()
{
    //document.forms[0].rlt.value =docSource;
//	alert('On Load');
	try
	{
var		nameid = 'name';
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


function   cust_post_onChange(obj)
{

	try
	{
    //alert("this is cust postOnchange");

var 	nameid   =obj.getAttribute('nameid');
	if (nameid == "")
	{
	;
	}
	else
	{
		//alert("nameid= <"+nameid +">");	

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


		
	}

}
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




function cust_post_onClick(obj)
{

	nameid   =obj.getAttribute('nameid');
	if (nameid == "")
	{
	;
	}




	var statusId=nameid+"statusId";
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
