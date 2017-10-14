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
		<script language="javascript" src="javascript/field_02.js" > </script>
		<script language="javascript" src="javascript/xml.js"      > </script>

		<script language="javascript" src="javascript/cal_map.js"         > </script>
		<script language="javascript" src="javascript/cal_cust.js"        > </script>

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
			 <img src="http://chart.apis.google.com/chart?chs=200x200&cht=qr&chld=|1&chl=http%3A%2F%2Fwww.heaerie.com"> </img>                        </td>
                    </tr>


</table> 

<script>

var fld=new fieldClass();



	creatNewTbl();
	fnCreateCaption("Keetham Master Maintenace");

	fld.name="FuncCode"
	fld.label="Function"
	fld.desc="N"
	fld.group="maint"
	fld.mndf="Y";
//	fld.dataType="NUMBER"
	fld.dataType="LIST"
	fld.dflt=""
	fld.listVal="||A|A-ADD|M|M-MODIFY|I|I-INQUERY|V|V-VERIFY|C|C-CONFIRMED"
//	fld.dataType="LABEL"
	fld.parent="name"
	fld.xml="N"
	createRow();


	fnCreateField(fld);


//	createRow();
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


	fld.name="rlt"
	fld.label="rlt"
	fld.dataType="HIDDEN"
	fld.parent="maint"
	fld.mndf="N";
	fld.xml="N"

	fnCreateField(fld);
	createRow();

	fld.name    ="S"
	fld.label   ="S"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);

	createRow();


	fld.name    ="R1"
	fld.label   ="R1"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);


	fld.name    ="R2"
	fld.label   ="R2"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);

	fld.name    ="R3"
	fld.label   ="R3"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);



	createRow();

	fld.name    ="G1"
	fld.label   ="G1"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);


	fld.name    ="G2"
	fld.label   ="G2"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);


	fld.name    ="G3"
	fld.label   ="G3"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);

	createRow();

	fld.name    ="M1"
	fld.label   ="M1"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);


	fld.name    ="M2"
	fld.label   ="M2"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);

	createRow();


	fld.name    ="P"
	fld.label   ="P"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);
	createRow();


	fld.name    ="D1"
	fld.label   ="D1"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);

	fld.name    ="D2"
	fld.label   ="D2"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);

	fld.name    ="D3"
	fld.label   ="D3"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);


	createRow();


	fld.name    ="N1"
	fld.label   ="N1"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);

	fld.name    ="N2"
	fld.label   ="N2"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);


	fld.name    ="N3"
	fld.label   ="N3"
	fld.desc    ="N"
	fld.group   ="maint"
	fld.mndf    ="N";
	fld.dataType="NUMBER"
	fld.parent  ="name"
	fld.xml     ="N"
	fnCreateField(fld);





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
//	fld.dflt    =glAroRagaClass;
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
//	fld.dflt    =glAvroRagaClass;
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
//	fld.dflt    =glSwaraAro;
	fnCreateField(fld);



		fld.name ="SwaraAvro"
	fld.label=""
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="DIVROW"
	fld.parent="name"
	fld.xml="N"
//	fld.dflt    =glSwaraAvro;
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
//	fld.dflt    =glSwaraAro;
	fnCreateField(fld);



		fld.name ="SwaraAvroComb"
	fld.label=""
	fld.desc="N"
	fld.group="maint"
	fld.mndf="N";
	fld.dataType="DIVROW"
	fld.parent="name"
	fld.xml="N"
//	fld.dflt    =glSwaraAvro;
	fnCreateField(fld);












	
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

