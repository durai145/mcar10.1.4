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
		<script language="javascript" src="javascript/maint_crit_cust.js"        > </script>

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
                        </td>
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



	fld.name="rlt"
	fld.label="rlt"
	fld.dataType="HIDDEN"
	fld.parent="homespace"
	fld.mndf="N";
	fld.xml="N"

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

