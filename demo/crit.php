<html>
  <head>
     <title>base64 Encoding/Decoding</title>

<html lang="en">
<head>
<meta name="description" content="Free carnatic class" />
<meta name="keywords" content="music, baisc practices,Tamil Isai,Samanmandilam, Sarali, jandavarisai,thattu, vakkra, melakartha, heaerie,carnatic,ragam" />
<meta name="author" content="duraimurugan g" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

	<title>Heaerie-Carnatic</title>

		<link rel="stylesheet" href="../css/main.1.css">
		<LINK title=heaerie  href="../css/content.css" type=text/css rel="STYLESHEET" >
		<LINK title=heaerie  href="../css/content-fonts.css" type=text/css rel="STYLESHEET" >
		<LINK title=heaerie  href="../css/content-ie6.css" type=text/css rel="STYLESHEET" >
		<LINK href="css/pro.css" type="text/css" rel=stylesheet>
		<LINK title=heaerie href="../css/services.css" type=text/css rel="STYLESHEET" >
		<link rel="stylesheet" href="../css/theme/jquery.ui.all.css">

		<?php
				$nameLangName="ENG";
				if(  $_POST['nameLangName']  == ""  )
				{
						if(  $_GET['lang'] == ""  )
						{
								$nameLangName="";
						}
						else
						{
								$nameLangName=$_GET['lang'] ;
						}
				}
				else
				{
								$nameLangName= $_POST['nameLangName']   ;
				}


		?>
		<script language="javascript" src="../javascript/<?php echo $nameLangName ?>/Resource.js"> </script>
		<script>
				var docSource="";
		</script>  

        <script src="../jquery-1.7.2.js"></script>
	<script src="../external/jquery.bgiframe-2.1.2.js"></script>
	<script src="../ui/jquery.ui.core.js"></script>
	<script src="../ui/jquery.ui.widget.js"></script>
	<script src="../ui/jquery.ui.mouse.js"></script>
	<script src="../ui/jquery.ui.button.js"></script>
	<script src="../ui/jquery.ui.draggable.js"></script>
	<script src="../ui/jquery.ui.position.js"></script>
	<script src="../ui/jquery.ui.resizable.js"></script>
	<script src="../ui/jquery.ui.dialog.js"></script>
	<script src="../ui/jquery.effects.core.js"></script>
	<link rel="stylesheet" href="../demos.css">

		<script language="javascript" src="../javascript/field_02.js" > </script>
		<script language="javascript" src="../javascript/field_03.js" > </script>
		<script language="javascript" src="../javascript/dates.js"    > </script>
		<script language="javascript" src="../javascript/xml.js"      > </script>
		<script language="javascript" src="javascript/sarali.js"      > </script>
		<script language="javascript" src="javascript/keetham.js"     > </script>
		<script language="javascript" src="../javascript/validate.js" > </script>
		<script language="javascript" src="javascript/map.js"         > </script>
		<script language="javascript" src="javascript/cust.js"        > </script>

	<link rel="stylesheet" href="../javascript/themes/base/jquery.ui.all.css">
	<script src="../javascript/jquery-1.7.2.js"                    ></script>
	<script src="../javascript/ui/jquery.ui.core.js"               ></script>
	<script src="../javascript/ui/jquery.ui.widget.js"             ></script>
	<script src="../javascript/ui/jquery.ui.position.js"           ></script>
	<script src="../javascript/ui/jquery.ui.autocomplete.js"       ></script>
	<script src="../javascript/ui/jquery.ui.tabs.js"               ></script>

	<link rel="stylesheet" href="../css/demos.css"/>



<link rel="stylesheet" href="theme/jquery.ui.all.css">
	<script src="jquery-1.7.2.js"        ></script>
	<script src="ui/jquery.ui.core.js"   ></script>
	<script src="ui/jquery.ui.widget.js" ></script>
	<script src="ui/jquery.ui.tabs.js"   ></script>
	<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
	</script>



<script>



   function onPostReqDecode64(url,json,id,type)
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
		document.getElementById(id).value= decode64(data);
		}

		}
          )

	}
/*--

function cust_post_onChange(obj)
{

	nameid   =obj.getAttribute('name');
	if (nameid == "")
	{
	;
	}
	else
	{
		alert("nameid<" + nameid + ">");
		

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
*/

function cust_post_onClick(obj)
{

	nameid   =obj.getAttribute('nameid');
	if (nameid == "")
	{
	;
	}
	else
	{

		if(obj.id == "save")
		{
		//	alert("save<" + obj.id + ">");

			try
		{
		//alert("ON");
		var div= "rslt";
	//	var url= $("#url");
		var url= "setKeethamValue.php";
		var json= { DEBUG : 0, NAME: "KeerId", GROUP : "name", SAK:   encode64( $("#theText").val()), ID: $("#KeerId").val()  };


		alert ( "SAK:" + $("#theText").val() + " ID " + $("#KeerId").val()  );

		//alert("url =<" + url.val() +">" );

//var  json = JSON.parse(jsonstr.val());
		
	//var json={seqname:"GROUPID"};
		onPostReq(url,  json ,div,'DIV');

		}
		catch(e)
		{
			alert("Error:"+e);
		}

		}
	}


}

		try
		{
		//alert("ON");
		var div= "KeerthaiIdDiv";
	//	var url= $("#url");
		var url= "getKeethamIdCombo.php";
		var json= { DEBUG : 0, NAME: "KeerId", GROUP : "name" };

		//alert("url =<" + url.val() +">" );

//var  json = JSON.parse(jsonstr.val());
		
	//var json={seqname:"GROUPID"};
		onPostReqDecode64(url,  json ,div,'DIV');

		}
		catch(e)
		{
			alert("Error:"+e);
		}


		
</script>


</head>

 
  <body class="cbody">

     <form name="base64Form">


<audio id="C3"  role="application" src="../audio/C3.m4a" preload="auto"></audio>
<audio id="C_3" role="application" src="../audio/C_3.m4a" preload="auto"></audio>
<audio id="D3"  role="application" src="../audio/D3.m4a" preload="auto"></audio>
<audio id="D_3" role="application"  src="../audio/D_3.m4a" preload="auto"></audio>
<audio id="E3"  role="application"  src="../audio/E3.m4a" preload="auto"></audio>
<audio id="F3"  role="application"  src="../audio/F3.m4a" preload="auto"></audio>
<audio id="F_3" role="application"  src="../audio/F_3.m4a" preload="auto"></audio>
<audio id="G3"  role="application" src="../audio/G3.m4a" preload="auto"></audio>
<audio id="G_3" role="application"  src="../audio/G_3.m4a" preload="auto"></audio>
<audio id="A3"  role="application"  src="../audio/A3.m4a" preload="auto"></audio>
<audio id="A_3" role="application"  src="../audio/A_3.m4a" preload="auto"></audio>
<audio id="B3"  role="application" src="../audio/B3.m4a" preload="auto"></audio>
<audio id="C4"  role="application" src="../audio/C4.m4a" preload="auto"></audio>
<audio id="C_4" role="application"  src="../audio/C_4.m4a" preload="auto"></audio>
<audio id="D4"  role="application" src="../audio/D4.m4a" preload="auto"></audio>
<audio id="D_4" role="application"  src="../audio/D_4.m4a" preload="auto"></audio>
<audio id="E4"  role="application"  src="../audio/E4.m4a" preload="auto"></audio>
<audio id="F4"  role="application" src="../audio/F4.m4a" preload="auto"></audio>
<audio id="F_4" role="application"  src="../audio/F_4.m4a" preload="auto"></audio>
<audio id="G4"  role="application"  src="../audio/G4.m4a" preload="auto"></audio>
<audio id="G_2" role="application"  src="../audio/G_2.m4a" preload="auto"></audio>
<audio id="A2"  role="application" src="../audio/A2.m4a" preload="auto"></audio>
<audio id="A_2" role="application"  src="../audio/A_2.m4a" preload="auto"></audio>
<audio id="B2"  role="application"  src="../audio/B2.m4a" preload="auto"></audio>
<audio id="G2"  role="application"  src="../audio/G2.m4a" preload="auto"></audio>


		<div id="KeerthaiId"> <img src="../img/loading.gif"></img>


		</div>
			

        <!--textarea name="theText" id="theText" cols="40" rows="6"></textarea-->
<br>
		<!--div id="rslt"><img src="../img/loading.gif"></img></div-->
</br>



<select datatype="LIST" name="name_lang" xmlname="lang" id="lang" nameid="name" xml="N" parent="name" class="ctext" value="C" mndf="Y" label="Statement" onchange="javascript:onChange(this);" onkeydown="javascript:onKeyDown(this);" onkeypress="javascript:onKeyPress(this);" onkeyup="javascript:onKeyUp(this);">
<option value="ENG">ENG</option>
<option value="TAM">TAM</option>
</select>

 <input type="button" name="name_save" value="Save" id="save" nameid="name" task="SAVE" onClick="javascript:onClick(this)">



        <input type="button" name="encode" value="Encode to base64"
           onClick="document.base64Form.theText.value=encode64(document.base64Form.theText.value);">

        <input type="button" name="decode" value="Decode from base64"
           onClick="document.base64Form.theText.value=decode64(document.base64Form.theText.value);">

     



	<?php
				$nameLangName="ENG";
				if(  $_POST['nameLangName']  == ""  )
				{
						if(  $_GET['lang'] == ""  )
						{
								$nameLangName="";
						}
						else
						{
								$nameLangName=$_GET['lang'] ;
						}
				}
				else
				{
								$nameLangName= $_POST['nameLangName']   ;
				}


		?>
		<script language="javascript" src="../javascript/<?php echo $nameLangName ?>/Resource.js"> </script>
		<script>
				var docSource="";
		</script>  


 <table border="0" cellpadding="0" cellspacing="0" width="100%">
                 <tbody>
                    <tr>
                        <td class="sectionheading" colspan=10>Melakartha Ragas</td>
                        <script>
                            try
                            {
                                                               
                            }
                            catch(e)
                            {
                                alert('PHP:call melRagaNameList '+e);
                            }
                            
                            </script>
                        
                    </tr>
                    <tr>
                        <td>
                        </td>
                    </tr>


</table> 

<script>

var fld=new fieldClass();



	creatNewTbl();
	fnCreateCaption("Keetham/Keerthanai Master Maintenace");

	fld.name="FuncCode"
	fld.label="Function"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
//	fld.dataType="NUMBER"
	fld.dataType="LIST"
	fld.dflt=""
	fld.listVal="||E|E-Entry|V|V-Verify|C|C-Confirm"
//	fld.dataType="LABEL"
	fld.parent="name"
	fld.xml="N"
	createRow();


	fnCreateField(fld);


	createRow();
	fld.name    ="SNo"
	fld.label   ="S.No"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="VARCHAR"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);



	createRow();
	fld.name    ="Author"
	fld.label   ="Author"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="VARCHAR"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);




	fld.name ="Name"
	fld.label="Name"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="VARCHAR"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);
	createRow();


	fld.name="JenId"
	fld.label="Jen ID"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="NUMBER"
//	fld.dataType="LABEL"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);


	fld.name="MelId"
	fld.label="Mel ID"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="NUMBER"
//	fld.dataType="LABEL"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);



	createRow();	
	fld.name ="Place"
	fld.label="Place"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="VARCHAR"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);




//	createRow();	
	fld.name ="Type"
	fld.label="Type"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="VARCHAR"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);


	createRow();	
	fld.name ="KeerthaiId"
	fld.label="Swram"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="DIV"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);





	createRow();	
	fnCreateCaption("Melakartha ");


				document.write( rtCreateRow());
                                document.write( melRagaMelamNoList('maint'));
                                document.write( rtCreateRow());
                                document.write( melRagaMelamNameList('maint'));
                                document.write( rtCreateRow());
                                document.write( melRagaChakraList('maint'));
                                document.write( rtCreateRow());
                                document.write( melRagaChakraNameList('maint'));
                                document.write( rtCreateRow());
                                document.write( melRagaNoList('maint'));
                                document.write( rtCreateRow());
                                document.write( melRagaNameList('maint'));
                                document.write( rtCreateRow());
                                document.write( swaraGanam('maint'));
	createRow();		
	fnCreateCaption("Talam ");
	createRow();	


				document.write( rtCreateRow());
				document.write( ThalaJathiList('maint'));
				document.write( rtCreateRow());
				document.write( ThalaList('maint'));
				document.write( rtCreateRow());
				document.write( AcharamList('maint'));



/*--
	createRow();	
	fld.name ="Swaram"
	fld.label="Swaram"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);

	
//	createRow();	
	fld.name ="Sakithyam"
	fld.label="Sakithyam"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);

*/

	createRow();	
	fnCreateCaption("Songs");


	createRow();	
//	fnCreateCaption("Place and Type ");


	fld.name ="PallaviFlg"
	fld.label="Pallavi Flg"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="LIST"
	fld.listVal="||Y|Y-YES|N|N-No"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);



	fld.name ="PallaviSwaram"
	fld.label="Pallavi Swaram"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);


	fld.name ="Pallavi"
	fld.label="Pallavi"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);
createRow();

	fld.name ="AnupallaviFlg"
	fld.label="Anupallavi Flg"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="LIST"
	fld.listVal="||Y|Y-YES|N|N-No"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);




	fld.name ="AnupallaviSwaram"
	fld.label="Anupallavi Swaram"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);


	fld.name ="Anupallavi"
	fld.label="Anupallavi"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);


	createRow();	


	fld.name ="SaranamFlg"
	fld.label="Saranam Flg"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="LIST"
	fld.listVal="||Y|Y-YES|N|N-No"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);



fld.name ="SaranamSwaram"
	fld.label="Saranam Swaram"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);


	fld.name ="Saranam"
	fld.label="Saranam"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);


	createRow();	







	
</script>

</td>
</tr>
</table>
</form>



  </body>
</html>

