<html>
  <head>
     <title>Keetam Master Maintenance</title>

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
	
			<script language="javascript" src="../javascript/<?php echo $nameLangName ?>/Resource.js"> </script>
		<script>
				var docSource="";
		</script>  

      
		<script language="javascript" src="../javascript/field_02.js" > </script>
		<script language="javascript" src="../javascript/field_03.js" > </script>
		<script language="javascript" src="../javascript/dates.js"    > </script>
		<script language="javascript" src="../javascript/xml.js"      > </script>
		<script language="javascript" src="../javascript/validate.js" > </script>
		<script language="javascript" src="javascript/maint_map.js"         > </script>
		<script language="javascript" src="javascript/maint_dtil_cust.js"        > </script>
		<script language="javascript" src="javascript/field_02.js"        > </script>

	<link rel="stylesheet" href="../javascript/themes/base/jquery.ui.all.css">
	<script src="../javascript/jquery-1.7.2.js"                    ></script>
	<script src="../javascript/ui/jquery.ui.core.js"               ></script>
	<script src="../javascript/ui/jquery.ui.widget.js"             ></script>
	<script src="../javascript/ui/jquery.ui.position.js"           ></script>
	<script src="../javascript/ui/jquery.ui.autocomplete.js"       ></script>
	<script src="../javascript/ui/jquery.ui.tabs.js"               ></script>

	<link rel="stylesheet" href="../css/demos.css"/>



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
/*[

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


]*/


		
<!--script-->

<?php

$FuncCode=$_POST["maint_FuncCode"];
$Sno=$_POST["maint_SNo"];

    $maint_FuncCode 		=$_POST ["maint_FuncCode"] 		;
    $maint_SNo 			=$_POST ["maint_SNo"] 			;
    $maint_rlt 			=$_POST ["maint_rlt"] 			;
    $maint_Author 		=$_POST ["maint_Author"] 		;
    $maint_Name 		=$_POST ["maint_Name"] 			;
    $maint_JenId 		=$_POST ["maint_JenId"] 		;
    $maint_MelId 		=$_POST ["maint_MelId"] 		;
    $maint_Place 		=$_POST ["maint_Place"] 		;
    $maint_SongType 		=$_POST ["maint_SongType"] 		;
    $maintMelNoName 		=$_POST ["maintMelNoName"] 		;
    $maintMelNameName 		=$_POST ["maintMelNameName"] 		;
    $maintSName 		=$_POST ["maintSName"] 			;
    $maintRName 		=$_POST ["maintRName"] 			;
    $maintGName 		=$_POST ["maintGName"] 			;
    $maintMName 		=$_POST ["maintMName"] 			;
    $maintPName 		=$_POST ["maintPName"] 			;
    $maintDName 		=$_POST ["maintDName"] 			;
    $maintNName 		=$_POST ["maintNName"] 			;
    $maintJathiName 		=$_POST ["maintJathiName"] 		;
    $maintTakaName 		=$_POST ["maintTakaName"] 		;
    $maintAcharamName 		=$_POST ["maintAcharamName"] 		;
    $maint_PallaviFlg 		=$_POST ["maint_PallaviFlg"] 		;
    $maint_PallaviLang 		=$_POST ["maint_PallaviLang"] 		;
    $maint_PallaviSwaram 	=$_POST ["maint_PallaviSwaram"] 	;
    $maint_Pallavi 		=$_POST ["maint_Pallavi"] 		;
    $maint_AnupallaviFlg 	=$_POST ["maint_AnupallaviFlg"] 	;
    $maint_AnupallaviLang 	=$_POST ["maint_AnupallaviLang"] 	;
    $maint_AnupallaviSwaram 	=$_POST ["maint_AnupallaviSwaram"] 	;
    $maint_Anupallavi 		=$_POST ["maint_Anupallavi"] 		;
    $maint_SaranamFlg 		=$_POST ["maint_SaranamFlg"] 		;
    $maint_SaranamLang 		=$_POST ["maint_SaranamLang"] 		;
    $maint_SaranamSwaram 	=$_POST ["maint_SaranamSwaram"] 	;
    $maint_Saranam 		=$_POST ["maint_Saranam"] 		;
    $maint_SwaraAvro 		=$_POST ["maint_SwaraAvro"] 		;
    $maint_AroRagaClass 	=$_POST ["maint_AroRagaClass"] 		;
    $maint_AvroRagaClass 	=$_POST ["maint_AvroRagaClass"] 		;



//echo $FuncCode;

echo "var glFuncCode             ='$FuncCode';\n";
echo "var glSno                  ='$Sno';\n";
echo "var glrlt                  ='$maint_rlt';\n";
echo "var glAuthor               ='$maint_Author';\n";
echo "var glName                 ='$maint_Name';\n";
echo "var glJenId                ='$maint_JenId';\n";
echo "var glMelId                ='$maint_MelId';\n";
echo "var glPlace                ='$maint_Place';\n";
echo "var glSongType             ='$maint_SongType';\n";
echo "var glMelNoName            ='$maintMelNoName';\n";
echo "var glMelNameName          ='$maintMelNameName ';\n";
echo "var glSName                ='$maintSName';\n";
echo "var glRName                ='$maintRName';\n";
echo "var glGName                ='$maintGName';\n";
echo "var glMName                ='$maintMName';\n";
echo "var glPName                ='$maintPName';\n";
echo "var glDName                ='$maintDName';\n";
echo "var glNName                ='$maintNName';\n";
echo "var glJathiName            ='$maintJathiName';\n";
echo "var glTakaName             ='$maintTakaName';\n";
echo "var glAcharamName          ='$maintAcharamName';\n";
echo "var glPallaviFlg           ='$maint_PallaviFlg';\n";
echo "var glPallaviLang          ='$maint_PallaviLang';\n";
echo "var glPallaviSwaram        ='$maint_PallaviSwaram';\n";
echo "var glPallavi              ='$maint_Pallavi';\n";
echo "var glAnupallaviFlg        ='$maint_AnupallaviFlg';\n";
echo "var glAnupallaviLang       ='$maint_AnupallaviLang';\n";
echo "var glAnupallaviSwaram     ='$maint_AnupallaviSwaram';\n";
echo "var glAnupallavi           ='$maint_Anupallavi';\n";
echo "var glSaranamFlg           ='$maint_SaranamFlg';\n";
echo "var glSaranamLang          ='$maint_SaranamLang';\n";
echo "var glSaranamSwaram        ='$maint_SaranamSwaram';\n";
echo "var glSaranam              ='$maint_Saranam';\n";
echo "var glSwaraAro             ='$maint_SwaraAro';\n";
echo "var glSwaraAvro            ='$maint_SwaraAvro';\n";
echo "var glAroRagaClass         ='$maint_AroRagaClass';\n";
echo "var glAvroRagaClass        ='$maint_AvroRagaClass';\n";



//$jsfunc .= "<script>\n";
$jsfunc .= "function  onPhpLoadPage()\n";
$jsfunc .= "{\n";
//$jsfunc .= "	alert('On Load php');\n";
$jsfunc .= "\n";
$jsfunc .= "	var div='SNo';\n";
$jsfunc .= "	var url='getSeqVal.php';\n";
$jsfunc .= "	var json={seqname:'TRANID'};\n";


$jsfunc .= "   if(glFuncCode== 'A' ) \n";
$jsfunc .= "	onPostReq(url,json,div,'OBJ');\n";
$jsfunc .= "}\n";

echo $jsfunc ;

?>
</script>

<?php
echo("<pre>\n");
print_r($_POST);
echo("</pre>\n");

?>
</head>



 
  <body class="cbody" onload="onLoadPage()">

     <form name="form1" method="POST">


     



		<script language="javascript" src="../javascript/<?php echo $nameLangName ?>/Resource.js"> </script>
		<script>
				var docSource="";
		</script>  


 <table border="0" cellpadding="0" cellspacing="0" width="100%">
                 <tbody>
                    <tr>
                        <td class="sectionheading" colspan=10> <center>Master Song Maintenance</center> </td>
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
	fnCreateCaption("Keetham Master Maintenace");

	fld.name  ="FuncCode"
	fld.label ="Function"
	fld.desc  ="N"
	fld.group ="maint"
	fld.mndf  ="Y";
	
//	fld.dataType="NUMBER"
//	fld.dataType="LIST"
	
	fld.dflt    =glFuncCode;
	fld.listVal ="||A|A-ADD|M|M-MODIFY|I|I-INQUERY|V|V-VERIFY|C|C-CONFIRMED"
	fld.dataType="LABEL"
	fld.parent  ="name"
	fld.xml     ="N"
	createRow();


	fnCreateField(fld);


//	createRow();
	fld.name    ="SNo"
	fld.label   ="S.No"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="LABEL"
	fld.parent  ="name"
	fld.xml     ="N"
	fld.dflt    =glSno;
	fnCreateField(fld);


	createRow();

	fnCreateCaption("Raga Details");
	createRow();


	fld.name    ="rlt"
	fld.label   ="rlt"
	fld.dataType="HIDDEN"
	fld.parent  ="homespace"
	fld.mndf    ="N";
	fld.dflt    ="";
	fnCreateField(fld);
	fld.xml     ="N"

	fnCreateField(fld);



	createRow();
	fld.name    ="Author"
	fld.dflt    =glAuthor;
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
	fld.dflt    =glName;
	fnCreateField(fld);
	createRow();








	createRow();
	fld.name="ClassofRaga"
	fld.label="Classification of Raga"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
//	fld.dataType="NUMBER"
	fld.dataType="LIST"
	fld.listVal="||M|M-Melakartha|J|J-Janyam"

//	fld.dataType="LABEL"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glMelId;
	fnCreateField(fld);


	fld.name="JenId"
	fld.label="Uniqe Janya Id"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="NUMBER"
//	fld.dataType="LABEL"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glJenId;
	fnCreateField(fld);



	createRow();	
	fld.name ="RagaType"
	fld.label="Raga Type"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	//fld.dataType="VARCHAR"
	fld.dataType="LIST"
	fld.listVal="||U|U-Upangam|P|P-Pasangam"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glPlace;
	fnCreateField(fld);


//	createRow();	
	fld.name ="RagaSubType"
	fld.label="Raga Sub Type"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
//	fld.dataType="VARCHAR"
	fld.dataType="LIST"
	fld.listVal="||V|V-Vikra|N|N-Nonvakkra"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glPlace;
	fnCreateField(fld);


	createRow();	
	fld.name ="RagaName"
	fld.label="Raga Name"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="VARCHAR"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glPlace;
	fnCreateField(fld);




//	createRow();	
	fld.name ="SongType"
	fld.label="Song Type"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="LIST"
	fld.listVal="||G|G-Keetham|K|K-Keerthanai"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glSongType;
	fnCreateField(fld);

/*--
	createRow();	
	fld.name ="KeerthaiId"
	fld.label="Swram"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="DIV"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glKeerthaiId;
	fnCreateField(fld);
*/




	createRow();	
	fnCreateCaption("Melakartha ");


	createRow();	
	fld.name ="AroRagaClass"
	fld.label="Aro Raga Class"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.listVal="||1|1-Sampurana|2|2-Sadava|3|3-Ovdava"
	fld.dataType="LIST"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glAroRagaClass;
	fnCreateField(fld);




//	createRow();	
	fld.name ="AvroRagaClass"
	fld.label="Avro Raga Class"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
	fld.dataType="LIST"
	fld.listVal="||1|1-Sampurana|2|2-Sadava|3|3-Ovdava"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glAvroRagaClass;
	fnCreateField(fld);

			createRow();	
	fld.name ="SwaraAro"
	fld.label=""
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="DIVROW"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glSwaraAro;
	fnCreateField(fld);



		fld.name ="SwaraAvro"
	fld.label=""
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="DIVROW"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glSwaraAvro;
	fnCreateField(fld);


		createRow();	
	fld.name ="SwaraAroComb"
	fld.label=""
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="DIVROW"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glSwaraAro;
	fnCreateField(fld);



		fld.name ="SwaraAvroComb"
	fld.label=""
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="DIVROW"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glSwaraAvro;
	fnCreateField(fld);



				document.write( rtCreateRow());
                                document.write( janRagaMelamNoList('maint'));
				document.write( rtCreateRow());
                                document.write( janRagaMelamNameList('maint'));
				document.write( rtCreateRow());
                                document.write( janRagaChakraList('maint'));
				document.write( rtCreateRow());
                                document.write( janRagaChakraNameList('maint'));
				document.write( rtCreateRow());
                                document.write( janRagaNoList('maint'));
				document.write( rtCreateRow());
                                document.write( janRagaNameList('maint'));
				document.write( rtCreateRow());
                                document.write( janSwaraGanam('maint'));
				document.write( rtCreateRow());


		
//	createRow();	

			//	document.write( melRagasSwraCom('maint'));

/*[
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

]*/
	createRow();		
	fnCreateCaption("Talam ");
	createRow();	


				document.write( rtCreateRow());
				document.write( ThalaJathiList('maint'));
				document.write( rtCreateRow());
				document.write( ThalaList('maint'));
				document.write( rtCreateRow());
				document.write( AcharamList('maint'));




	createRow();	
	fnCreateCaption("Pallavi");


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
	fld.dflt    =glPallaviFlg;
	fnCreateField(fld);


	fld.name ="PallaviLang"
	fld.label="Pallavi Flg"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="LIST"
	fld.listVal="||ENG|ENG|TAM|TAM"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glPallaviLang;
	fnCreateField(fld);


createRow();


	fld.name ="PallaviSwaram"
	fld.label="Pallavi Swaram"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glPallaviSwaram;
	fnCreateField(fld);


	fld.name ="Pallavi"
	fld.label="Pallavi"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glPallavi;
	fnCreateField(fld);
createRow();

	fnCreateCaption("Anu Pallavi");

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
	fld.dflt    =glAnupallaviFlg;
	fnCreateField(fld);

	fld.name ="AnupallaviLang"
	fld.label="Anupallavi Lang"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="LIST"
	fld.listVal="||ENG|ENG|TAM|TAM"
//	fld.listVal="||Y|Y-YES|N|N-No"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glAnupallaviLang;
	fnCreateField(fld);


createRow();



	fld.name ="AnupallaviSwaram"
	fld.label="Anupallavi Swaram"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glAnupallaviSwaram;

	fnCreateField(fld);


	fld.name ="Anupallavi"
	fld.label="Anupallavi"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
		fld.dflt    =glAnupallavi;
	fnCreateField(fld);


	createRow();	

	fnCreateCaption("Saranam");
createRow();	

	fld.name ="SaranamFlg"
	fld.label="Saranam Flg"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="LIST"
	fld.listVal="||Y|Y-YES|N|N-No"
	fld.parent="name"
	fld.xml="N"

	fld.dflt   =glSaranamFlg;
	fnCreateField(fld);
	fld.name ="SaranamLang"
	fld.label="Saranam Lang"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="LIST"
	fld.listVal="||ENG|ENG|TAM|TAM"
	//fld.listVal="||Y|Y-YES|N|N-No"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glAnupallavi;

	fnCreateField(fld);

	createRow();	


fld.name ="SaranamSwaram"
	fld.label="Saranam Swaram"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
	fld.dflt    =glSaranamSwaram
	fnCreateField(fld);


	fld.name ="Saranam"
	fld.label="Saranam"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="LOB"
	fld.parent="name"
	fld.xml="N"
	fnCreateField(fld);


	createRow();	






	
</script>

</td>
</tr>
</table>


	<table>
		<tr>
			<td>	
				<center>
				<input type="button" class="button" parent="maint"  task="BACK"     value="BACK"     onclick="javascript:onClick(this)" >
				<input type="button" class="button" parent="maint"  task="VALIDATE" value="validate" onclick="javascript:onClick(this)" >
				<input type="button" class="button" parent="maint"  task="SUBMIT"   value="submit"   onclick="javascript:onClick(this)" >
				</center>
			</td>
		</tr>
	</table>

</form>



  </body>
</html>

