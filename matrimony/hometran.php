<!DOCTYPE html>
<?php
ob_start(); 

$page="hometran.php";
// 461085
include('config.php');
session_start();
if(!session_is_registered('myusername')){
header("location:index.php");
}
?>

<html lang="en">
<head>
<meta name="description" content="Free carnatic class" />
<meta name="keywords" content="music, baisc practices,Tamil Isai,Samanmandilam, Sarali, jandavarisai,thattu, vakkra, melakartha, heaerie,carnatic,ragam" />
<meta name="author" content="duraimurugan g" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

	<title>Heaerie-Carnatic</title>


<!--link rel="stylesheet" href="../theme/jquery.ui.all.css"-->


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
		<script language="javascript" src="../javascript/field_02.js"> </script>
		<script language="javascript" src="../javascript/field_03.js"> </script>
		<script language="javascript" src="../javascript/dates.js"> </script>
		<script language="javascript" src="../javascript/xml.js"> </script>
		<script language="javascript" src="javascript/sarali.js"> </script>
		<script language="javascript" src="javascript/keetham.js"> </script>
		<script language="javascript" src="../javascript/validate.js"> </script>
		<script language="javascript" src="javascript/map.js"> </script>
		<script language="javascript" src="javascript/hometran_cust.js"> </script>

	<link rel="stylesheet" href="../javascript/themes/base/jquery.ui.all.css">
	<script src="../javascript/jquery-1.7.2.js"></script>
	<script src="../javascript/ui/jquery.ui.core.js"></script>
	<script src="../javascript/ui/jquery.ui.widget.js"></script>
	<script src="../javascript/ui/jquery.ui.position.js"></script>
	<script src="../javascript/ui/jquery.ui.autocomplete.js"></script>
	<script src="../javascript/ui/jquery.ui.tabs.js"></script>
	<script src="../javascript/jquery-1.7.2.js"></script>
	<script src="../javascript/ui/jquery.ui.core.js"></script>
	<script src="../javascript/ui/jquery.ui.widget.js"></script>
	<script src="../javascript/ui/jquery.ui.progressbar.js"></script>

	<link rel="stylesheet" href="../css/demos.css">
	<script>

	function onPostReq(url,json,id,type)
	{
	     var rtVal="";
             $.post( 
             url,
             json,
             function(data) 
		{
		if(type == 'DIV')
		{
		$("#"+id).html(data);
		document.getElementById('StmtMonth' ).value=glStmtMonth ;
		}
		else if( type == 'OBJ')
		{
		document.getElementById(id).value= data;

		}

		}
          )
	}
	




	var lang="<?php echo $nameLangName ?>";
	langGet="<?php echo $_GET['nameLangName'] ?>";



	</script>




<style>
	.ui-progressbar .ui-progressbar-value { background-image: url(../img/pbar-ani.gif); }
	</style>

</head>
<body  class="cbody" onload="javascript:onLoadPage();" >
	
<div class="demo">

<div class="ui-widget">
	<label for="tags"></label>
	<input id="tags" type=hidden />
</div>

</div><!-- End demo -->
<?php

//echo("<pre>\n");
//print_r($_POST);
//echo("</pre>\n");

$FuncCode    =$_POST['homespace_FuncCode'    ] ;
$GroupId     =$_SESSION['GroupId'] ;
$mkrUserId   =$_SESSION['UserId'           ] ;
$BillDate    =$_POST['homespace_BillDate'  ];
$Sno         =$_POST['homespace_Sno'       ];
$SpndAmt     =$_POST['homespace_SpndAmt'   ];
$CrbTtl	     =$_POST['homespace_CrbTtl'    ];
$PayMode     =$_POST['homespace_PayMode'   ];
$Vendor      =$_POST['homespace_Vendor'    ];
$Descr        =$_POST['homespace_Descr'      ];
$ShrCnt        =$_POST['homespace_ShrCnt'      ];
$CardNum        =$_POST['homespace_CardNum'      ];
$Bank        =$_POST['homespace_Bank'      ];
$StmtMonth        =$_POST['homespace_StmtMonth'      ];

/*[

  GRP_ID      | int(11)      | YES  |     | NULL    |       |
| GTXN_TXN_ID | int(11)      | YES  |     | NULL    |       |
| TRAN_ST     | varchar(1)   | YES  |     | NULL    |       |
| DR_AMT      | float        | YES  |     | NULL    |       |
| CR_AMT      | float        | YES  |     | NULL    |       |
| PND_CR_AMT  | float        | YES  |     | NULL    |       |
| PND_DR_AMT  | float        | YES  |     | NULL    |       |
| CREATED_DT  | date         | YES  |     | NULL    |       |
| MAKER_ID    | int(11)      | YES  |     | NULL    |       |
| MODIFIED_DT | float        | YES  |     | NULL    |       |
| AUTH_ID     | int(11)      | YES  |     | NULL    |       |
| DESCR       | varchar(300) | YES  |     | NULL    |       |
| BILL_AMT    | float        | YES  |     | NULL    |       |
| BILL_DT     | date         | YES  |     | NULL    |       |
| CARD_NUM    | int(11)      | YES  |     | NULL    |       |
| SHARE_CNT   | float        | YES  |     | NULL    |       |
| BILL_REF    | varchar(300) | YES  |     | NULL    |       |
| BANK        | varchar(300) | YES  |     | NULL    |       |
| PAY_MD      | varchar(300) | YES  |     | NULL    |       |
+-------------+--------------+------+-----+---------+-------+

]*/

?>
<script>




var glGroupId    ="<?php echo $_SESSION['GroupId'] ?> "; 
var glUserId     ="<?php echo $_SESSION['UserId'] ?> "; 
var glEmailId    ="<?php echo $_SESSION['myusername'] ?> "; 
var glGroupName  ="<?php echo $_SESSION['GroupName'  ] ?> "; 
var glSno        ="<?php echo $_POST['homespace_Sno'    ] ?>"; 
var glBank       ="<?php echo $_POST['homespace_Bank'  ] ?>";
var glCardNum    ="<?php echo $_POST['homespace_CardNum'  ] ?>";
var glBillDate   ="<?php echo $_POST['homespace_BillDate'  ] ?>";
//var glBillDate   ="<?php echo $_POST['homespace_BillDate'  ] ?>";
var glCrbPer_1  ="<?php echo $_POST['homespace_CrbPer_1'  ] ?>";
var glSpndAmt="<?php echo $_POST['homespace_SpndAmt'] ?>";
var glShrCnt ="<?php echo $_POST['homespace_ShrCnt' ] ?>";
var glShrAmt ="<?php echo $_POST['homespace_ShrAmt' ] ?>";
var glCrbTtl ="<?php echo $_POST['homespace_CrbTtl' ] ?>";
var glBalDiff ="<?php echo $_POST['homespace_BalDiff' ] ?>";
var glBalTtl ="<?php echo $_POST['homespace_BalTtl' ] ?>";
var glVendor ="<?php echo $_POST['homespace_Vendor' ] ?>";
var glPayMode ="<?php echo $_POST['homespace_PayMode' ] ?>";
var glStmtMonth ="<?php echo $_POST['homespace_StmtMonth' ] ?>";
var glDescr    ="<?php echo $_POST['homespace_Descr' ] ?>";
var glCardNum   ="<?php echo $_POST['homespace_CardNum' ] ?>";
var glIsSettlmnt ="<?php echo $_POST['homespace_IsSettlmnt' ] ?>";
var glrlt    ="<?php echo $_POST['homespace_rlt'    ] ?>";
var glFuncCode    ="<?php echo  $_POST['homespace_FuncCode'    ]  ?>";




<?php

function insertQry($sql,$page,$err_desc)
{

$rtCount=0;
	$result=mysql_query($sql);
	if (mysql_errno()) 
	{ 

		$error_text = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>When executing:<br>\n$sql\n<br>"; 
		echo $error_text;
	//	log($page,1, $err_desc, $error_text);

		return -1;
	} 
	else
	{

	//$row = mysql_fetch_row($result);
	//$record=count($row);
	//echo "Record:$record  $row[0]\n";
	//$count=$row[0];
	$rtCount=0;

	}




return 0;

}

if ( $FuncCode  == "C"  )
{

/*--
+-------------+--------------+------+-----+---------+-------+
| Field       | Type         | Null | Key | Default | Extra |
+-------------+--------------+------+-----+---------+-------+
| GRP_ID      | int(11)      | YES  |     | NULL    |       |
| GTXN_TXN_ID | int(11)      | YES  |     | NULL    |       |
| TRAN_ST     | varchar(1)   | YES  |     | NULL    |       |
| DR_AMT      | float        | YES  |     | NULL    |       |
| CR_AMT      | float        | YES  |     | NULL    |       |
| PND_CR_AMT  | float        | YES  |     | NULL    |       |
| PND_DR_AMT  | float        | YES  |     | NULL    |       |
| CREATED_DT  | date         | YES  |     | NULL    |       |
| MAKER_ID    | int(11)      | YES  |     | NULL    |       |
| MODIFIED_DT | float        | YES  |     | NULL    |       |
| AUTH_ID     | int(11)      | YES  |     | NULL    |       |
| DESCR       | varchar(300) | YES  |     | NULL    |       |
| BILL_AMT    | float        | YES  |     | NULL    |       |
| BILL_DT     | date         | YES  |     | NULL    |       |
| CARD_NUM    | int(11)      | YES  |     | NULL    |       |
| SHARE_CNT   | float        | YES  |     | NULL    |       |
| BILL_REF    | varchar(300) | YES  |     | NULL    |       |
| BANK        | varchar(300) | YES  |     | NULL    |       |
| PAY_MD      | varchar(300) | YES  |     | NULL    |       |
+-------------+--------------+------+-----+---------+-------+
--*/






$shrQuery.="insert into GTRN002MB ";
$shrQuery.="( ";
$shrQuery.="GRP_ID     ,";
$shrQuery.="STMT_ID,";
$shrQuery.="GTXN_TXN_ID,";
$shrQuery.="TRAN_ST    ,";
$shrQuery.="DR_AMT     ,";
$shrQuery.="CR_AMT     ,";
$shrQuery.="PND_CR_AMT ,";
$shrQuery.="PND_DR_AMT ,";
$shrQuery.="CREATED_DT ,";
$shrQuery.="MAKER_ID   ,";
$shrQuery.="MODIFIED_DT,";
$shrQuery.="AUTH_ID    ,";
$shrQuery.="DESCR      ,";
$shrQuery.="BILL_AMT   ,";
$shrQuery.="BILL_DT    ,";
$shrQuery.="CARD_NUM   ,";
$shrQuery.="SHARE_CNT  ,";
$shrQuery.="BILL_REF   ,";
$shrQuery.="BANK       ,";
$shrQuery.="PAY_MD     ";
$shrQuery.=" )";
$shrQuery.="values";
$shrQuery.="(";
$shrQuery.= $GroupId .     ",";                                  
$shrQuery.= $StmtMonth .     ",";                                  
$shrQuery.= $Sno   .     ",";
$shrQuery.=           "'C',";
$shrQuery.= $SpndAmt .  ",";
$shrQuery.= $CrbTtl  .  ",";
$shrQuery.= " 0 ,";
$shrQuery.= " 0 ,";
$shrQuery.="sysdate(),"            ;
$shrQuery.=" " . $mkrUserId . " ," ;
$shrQuery.="sysdate(),"            ;
$shrQuery.=" " . $mkrUserId . " ," ;
$shrQuery.=" '" . $Descr . "' ,"    ;
$shrQuery.=" " . $SpndAmt . " ,"   ;
$shrQuery.=" STR_TO_DATE( '". $BillDate ."', '%d-%b-%Y' ) ,";
$shrQuery.=" '" . $CardNum  . "' ,"  ;
$shrQuery.="  " . $ShrCnt   . " ,"   ;
$shrQuery.=" '" . $Vendor  . "' ,"   ;
$shrQuery.=" '" . $Bank . "' ,"      ;
$shrQuery.=" '" . $PayMode . "' "    ;
$shrQuery.=");";

echo  "//B:Qry:<" . $shrQuery . ">\n";

$result=mysql_query($shrQuery);
if($result)
{
echo "//alert('Success B:001' );";
}
else
{
echo "/*[ alert('Error   B:001  " . mysql_error() . "  ' ]*/  );";
}

}
?>


if ( glFuncCode.length == 0 )
{
	
	glFuncCode ="E";
}
//alert( "<" + glFuncCode + ">");


	$(function() {
		$( "#progressbar" ).progressbar({

			 
			value: (glFuncCode == "C")? 100:(glFuncCode == "V")? 66.66 : 33.33

		});
	});


//alert(("m/dd/yy"));
var date = new Date();
//alert(date.getMonth().toString() + '/' + date.getDate().toString() + '/' +  date.getFullYear().toString());
Stamp=new Date();
//alert(( Stamp.getDate()+"/"+(Stamp.getMonth() + 1)+"/"+(Stamp.getYear()) ););

prcDate=date.getDate() + '/' + ( ( date.getMonth()  )+1)  + '/' +  date.getFullYear();
bizDate=date.getDate() + '/' + ( ( date.getMonth()  )+1)  + '/' +  date.getFullYear();
sysDate=date.getDate() + '/' + ( ( date.getMonth()  )+1)  + '/' +  date.getFullYear();

//alert(prcDate);

</script>

<form name="form1" xmlname="homespace" method="POST">


<div class="cform">


	
<div id="progressbar"></div>
<div id="monthlyBalDiv"></div>
 	<script language="javascript"	>
		
	var fld=new fieldClass();
	creatNewTbl();

	if (glFuncCode== 'E' )
	{
	fnCreateCaption("Initiate Transfer");
	}
	else if (glFuncCode== 'V' )
	{
		fnCreateCaption("Verify Transfer");
	}
	else if (glFuncCode== 'C' )
	{
		fnCreateCaption("Confirm Transfer");
	}
	fld.name="FuncCode"
	fld.label="Function"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="N";
//	fld.dataType="NUMBER"
	fld.dataType="LIST"
	fld.dflt="E"
	fld.listVal="||E|E-Entry|V|V-Verify|C|C-Confirm"
//	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"
	createRow();
	fnCreateField(fld);
	createRow();

	fnCreateCaption("Login Details");
	fld.name="GroupId"
	fld.label="Group ID"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="N";
//	fld.dataType="NUMBER"
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"
	createRow();
	fnCreateField(fld);


	fld.name="UserId"
	fld.label="UserId"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="N";
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"
	fnCreateField(fld);
	createRow();

	fld.name="EmailId"
	fld.label="Login Id"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="Y";
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"
	fnCreateField(fld);


	fld.name="GroupName"
	fld.label="Group Name"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="N";
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"
//	createRow();
	fnCreateField(fld);

	createRow();

	fnCreateCaption("Bill Details");

	fld.name="Sno"
	fld.label="Txn. Ref. No"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="Y";
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"
	createRow();
	fnCreateField(fld);


	fld.name="SpndAmt"
	fld.label="Spend Amount"
	fld.dataType=(glFuncCode== 'E' ) ? "AMOUNT"  : "LABEL";


	fld.desc="N"
	fld.parent="homespace"
	fld.xml="N"
	fld.mndf="Y";

	fnCreateField(fld);



	fld.name="StmtMonth"
	fld.label="Settlement Month"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="Y";
	fld.dflt="";
	fld.dataType=(glFuncCode== 'E' ) ? "DIV" : "DIV";
//	fld.listVal="||C|C-Card|O|O-ONLINE";
	fld.parent="homespace";
	fld.xml="N";
createRow();
	fnCreateField(fld);

	fld.name="BillDate"
	fld.label="Date Of Purchase"
	fld.desc="Y"
	fld.group="homespace"
	fld.mndf="Y";
	fld.dataType= (glFuncCode== 'E' ) ? "DATE" : "LABEL";
	fld.parent="homespace";
	fld.xml="N";
//	createRow();
	fnCreateField(fld);


	fld.name="Descr"
	fld.label="Descr"
	fld.desc="N"
	fld.mndf="Y";
	fld.dataType=(glFuncCode== 'E' ) ? "VARCHAR" : "LABEL";
	fld.parent="homespace"
	fld.xml="N"
	createRow()
	fnCreateField(fld);


	fld.name="Vendor"
	fld.label="Vendor"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="Y";
	fld.dflt="";
	fld.dataType=(glFuncCode== 'E' ) ? "VARCHAR" : "LABEL";
//	fld.listVal="||C|C-Card|O|O-ONLINE";
	fld.parent="homespace";
	fld.xml="N";
//	createRow();
	fnCreateField(fld);


	fld.name="PayMode"
	fld.label="Payment Mode"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="Y";
	fld.dflt="C";
	fld.dataType=(glFuncCode== 'E' ) ? "LIST" : "LABEL";
	fld.listVal="||C|C-Card|O|O-ONLINE|A|A-Account	";
	fld.parent="homespace";
	fld.xml="N";
	createRow();
	fnCreateField(fld);






	fld.name="CardNum"
	fld.label="Card Last 4 digit /Ac. No"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="N";
	fld.dflt="";
	fld.dataType=(glFuncCode== 'E' ) ? "VARCHAR" : "LABEL";
//	fld.listVal="||C|C-Card|O|O-ONLINE";
	fld.parent="homespace";
	fld.xml="N";
//	createRow();
	fnCreateField(fld);





createRow();


	fld.name="Bank"
	fld.label="Bank"
	fld.dataType=(glFuncCode== 'E' ) ? "VARCHAR" : "LABEL";

	fld.desc="N"
	fld.mndf="N";
	fld.parent="homespace"
	fld.xml="N"
//	createRow()
	fnCreateField(fld);


	
//	createRow()

	//	createRow()

	fld.name="ShrCnt"
	fld.label="Share Count"
	fld.mndf="N";
	fld.desc="N"
	fld.dataType="LABEL"

	fld.parent="homespace"
	fld.xml="N"
//	createRow()

	fnCreateField(fld);
	createRow()

	fld.name="ShrAmt"
	fld.label="Share Amount Per Person"
	fld.desc="N"
	fld.dataType="LABEL"

	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	//createRow()


	fld.name="CrbTtl"
	fld.label="Contribution Total"
	fld.desc="N"
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();



//	endNewTbl();	
//	creatNewTbl();

	fld.name="BalTtl"
	fld.label="Balance Total"
	fld.desc="N"
//	fld.dataType="AMOUNT"

	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();

	fld.name="BalDiff"
	fld.label="Difference"
	fld.desc="N"
//	fld.dataType="AMOUNT"

	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);

	fld.name="IsSettlmnt"
	fld.label="Is It Settelment?"
	fld.desc="N"
	fld.dflt="N"
	fld.mndf="Y";

//	fld.dataType="AMOUNT"

	fld.dataType="LIST"
	fld.listVal="||N|N-No|Y|Y-Yes"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	fld.mndf="N";

	createRow();



	fld.name="rlt"
	fld.label="rlt"
	fld.dataType="HIDDEN"
	fld.parent="homespace"
	fld.mndf="N";
	fld.xml="N"

	fnCreateField(fld);

<?php


#echo "TEST";
// table nam
//$usrid=$_POST['seqname']; 
//$usrid=$USRID;
$usrid=$mkrUserId;
$myusername = stripslashes($usrid);
$myusername = mysql_real_escape_string($myusername);
$sql="select f_name, l_name , g.grp_id , i.usr_id , i.cur_bal,i.Food_type from GID001TB i, GRP001TB g where g.grp_id  = i.grp_id and  i.grp_id in (  select si.grp_id from GID001TB si  where si.usr_id = " . $usrid ." )";

$logic_1="";
$logic_2="document.getElementById('ShrCnt').value= ( 0 ";
$logic_3="document.getElementById('BalTtl').value=(Math.round(( 0";
$logic_4="";
$logic_5="document.getElementById('CrbTtl').value=( 0";
$logic_6="";
 $logon ="//logon";




//echo $sql;
$result=mysql_query($sql);

$rtCntrb="createRow();fnCreateCaption('Contribution Details'); ";
$rtShare="createRow();fnCreateCaption('Share Details'); ";
$balDtl="createRow();fnCreateCaption('Balance Details'); ";

function mysql_fetch_all($res) {
   while($row=mysql_fetch_array($res)) {
       $return[] = $row;
   }
   return $return;
}

function create_logic_3($dataArr) 
{
$logic_1 =  "parseFloat( document.getElementById('shr_" . $dataArr[3] .  "').value)";
return $logic_1 ;
}

function create_logic_5($dataArr) 
{
return "parseFloat( document.getElementById('CrbPer_" . $dataArr[3] .  "').value ) " ;
}




function create_logic_2($dataArr) 
{
$logic_2 =  "((document.getElementById('shr_" . $dataArr[3] .  "Flg').value  == 'Y')?1 :0)";
return $logic_2 ;
}


function create_logic_1($dataArr) 
{
$logic_1 =  " if( document.getElementById('CrbPer_" . $dataArr[3] .  "').value.length  ==  0)\n document.getElementById('CrbPer_" . $dataArr[3] .  "').value = 0;\n";
return $logic_1 ;
}

function create_logic_4($dataArr) 
{

$logic_1 = " if( document.getElementById('shr_" . $dataArr[3] .  "Flg').value  == 'Y') \n ";
$logic_1 .= " { \n"; 
$logic_1 .= "  document.getElementById('shr_" . $dataArr[3] .  "').disabled = false;\n ";
$logic_1 .= "  document.getElementById('shr_" . $dataArr[3] .  "').value = document.getElementById('ShrAmt').value;\n ";
$logic_1 .= "  document.getElementById('bal_" . $dataArr[3] .  "').value = parseFloat( document.getElementById('CrbPer_" . $dataArr[3] .  "').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$logic_1 .= " } \n"; 
$logic_1 .= " else \n ";
$logic_1 .= " {\n ";
$logic_1 .= "  document.getElementById('shr_" . $dataArr[3] .  "').disabled = true;\n ";
$logic_1 .= "  document.getElementById('shr_" . $dataArr[3] .  "').value = 0;\n ";
$logic_1 .= "  document.getElementById('bal_" . $dataArr[3] .  "').value=  0;\n ";
$logic_1 .= " }\n ";

$logic_1 .= " if( document.getElementById('CrbPer_" . $dataArr[3] .  "Flg').value  == 'Y') \n ";
$logic_1 .= " { \n"; 
$logic_1 .= "  document.getElementById('CrbPer_" . $dataArr[3] .  "').disabled = false;\n ";
//$logic_1 .= " document.getElementById('shr_" . $dataArr[3] .  "').value= parseFloat( document.getElementById('CrbPer_" . $dataArr[3] .  "').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$logic_1 .= " } \n"; 
$logic_1 .= " else \n ";
$logic_1 .= " {\n ";
$logic_1 .= "  document.getElementById('CrbPer_" . $dataArr[3] .  "').disabled = true;\n ";
$logic_1 .= "  document.getElementById('CrbPer_" . $dataArr[3] .  "').value = 0;\n ";
$logic_1 .= " }\n ";

/*[
$logic_1 .= " if( document.getElementById('CrbPer_" . $dataArr[3] .  "Flg').value  == 'Y') \n ";
$logic_1 .= " { \n"; 
$logic_1 .= "  document.getElementById('CrbPer_" . $dataArr[3] .  "').disabled = false;\n ";
//$logic_1 .= " document.getElementById('shr_" . $dataArr[3] .  "').value= parseFloat( document.getElementById('CrbPer_" . $dataArr[3] .  "').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$logic_1 .= " } \n"; 
$logic_1 .= " else \n ";
$logic_1 .= " {\n ";
$logic_1 .= "  document.getElementById('CrbPer_" . $dataArr[3] .  "').disabled = true;\n ";
$logic_1 .= "  document.getElementById('CrbPer_" . $dataArr[3] .  "').value = 0;\n ";
$logic_1 .= " }\n ";
]*/


return $logic_1 ;
}



function create_cntribdtl($dataArr) 
{


$cntribHtml=  "createRow(); \n;";
$cntribHtml.=  "fld.name='CrbPer_" . $dataArr[3] . "';\n";
$cntribHtml.=  "fld.label='Contrib " . $dataArr[0] . "';\n" ;
$cntribHtml.=  "fld.dataType=(glFuncCode== 'E' ) ? 'AMOUNT' : 'LABEL';\n";
$cntribHtml.=  "fld.dflt='0';\n";
$cntribHtml.=  "fld.desc='N';\n";
$cntribHtml.=  "fld.parent='homespace';\n";
$cntribHtml.=  "fld.mndf='N';\n";
$cntribHtml.=  "fld.xml='N';\n";
$cntribHtml.=  "fnCreateField(fld);\n";
$cntribHtml.=  "fld.name='CrbPer_".  $dataArr[3] . "Flg';\n";
$cntribHtml.=  "fld.label='Is ".  $dataArr[0] . " Contributor?';\n";
$cntribHtml.=  "fld.desc='N';\n";
$cntribHtml.=  "fld.mndf='Y';\n";
$cntribHtml.=  "fld.dflt='N';\n";
$cntribHtml.=  "fld.listVal=' | |Y|Y-Contributer|N|N-Noncontributer';\n";
$cntribHtml.=  "fld.dataType='LIST';\n";
$cntribHtml.=  "fld.parent='homespace';\n";
$cntribHtml.=  "fnCreateField(fld);\n ";

return $cntribHtml;
}

function create_onload($dataArr) 
{
	
//	echo   $_POST["homespace_CrbPer_" . $dataArr   ];




$CrpPer       = "CrbPer_" . $dataArr[3];
$CrpPerFlg    = "CrbPer_" . $dataArr[3] .  "Flg";
$Shr          = "shr_"    . $dataArr[3];
$ShrFlg       = "shr_"    . $dataArr[3] . "Flg";
$Bal          = "bal_"    . $dataArr[3];

$nameCrpPer       = "homespace_CrbPer_" . $dataArr[3];
$nameCrpPerFlg    = "homespace_CrbPer_" . $dataArr[3] .  "Flg";
$nameShr          = "homespace_shr_" . $dataArr[3];
$nameShrFlg       = "homespace_shr_" . $dataArr[3] . "Flg";
$nameBal          = "homespace_bal_" . $dataArr[3];




$valCrpPer         =  $_POST[$nameCrpPer   ] ;
$valCrpPerFlg      =  $_POST[$nameCrpPerFlg] ;
$valShr            =  $_POST[$nameShr      ] ;
$valShrFlg         =  $_POST[$nameShrFlg   ] ;
$valBal            =  $_POST[$nameBal      ] ;


if( $valCrpPer == "" )
$valCrpPer = 0;

if( $valShrFlg == "" )
$valShrFlg = "Y";

if( $valCrpPerFlg == "" )
$valCrpPerFlg = "N";

if( $valShr == "" )
$valShr = "0";

if( $valBal == "" )
$valBal = 0;




$rtval= "// <$nameCrpPer>  = $valCrpPer \n // <$nameCrpPerFlg> =   $valCrpPerFlg \n// <$nameShr>  = <$valShr> \n // <$nameShrFlg>  = <$valShrFlg> \n  //<$Bal>  = <$valBal>  \n";

$rtval.= " document.getElementById('" . $CrpPer    . "').value        = '".  $valCrpPer     ."' ;\n";
$rtval.= " document.getElementById('" . $CrpPerFlg . "').value        = '".  $valCrpPerFlg  ."' ;\n";
$rtval.= " document.getElementById('" . $Shr       . "').value        = '".  $valShr        ."' ;\n";
$rtval.= " document.getElementById('" . $ShrFlg    . "').value        = '".  $valShrFlg        ."' ;\n";
$rtval.= " document.getElementById('" . $Bal       . "').value        = '".  $valBal        ."' ;\n";




//$rtval.= " document.getElementById('" . $CrpPerFlg . "').disabled  = true ;\n";
//$rtval.= " document.getElementById('" . $ShrFlg    . "').disabled  = true ;\n";
	return $rtval;
}

function create_baldtl($dataArr) 
{


$cntribHtml=  "createRow(); \n;";
$cntribHtml.=  "fld.name='bal_" . $dataArr[3] . "';\n";
$cntribHtml.=  "fld.label='Contrib " . $dataArr[0] . "';\n" ;
$cntribHtml.= "fld.dataType=(glFuncCode== 'E' ) ? 'AMOUNT' : 'LABEL';\n";
$cntribHtml.=  "fld.dflt='0';\n";
$cntribHtml.=  "fld.desc='N';\n";
$cntribHtml.=  "fld.parent='homespace';\n";
$cntribHtml.=  "fld.mndf='N';\n";
$cntribHtml.=  "fld.xml='N';\n";
$cntribHtml.=  "fnCreateField(fld);\n";
/*
$cntribHtml.=  "fld.name='CrbPer_".  $dataArr[3] . "Flg';\n";
$cntribHtml.=  "fld.label='Is ".  $dataArr[0] . " Contributor?';\n";
$cntribHtml.=  "fld.desc='N';\n";
$cntribHtml.=  "fld.mndf='Y';\n";
$cntribHtml.=  "fld.dflt='Y';\n";
$cntribHtml.=  "fld.listVal=' | |Y|Y-Contributer|N|N-Noncontributer';\n";
$cntribHtml.=  "fld.dataType='LIST';\n";
$cntribHtml.=  "fld.parent='homespace';\n";
$cntribHtml.=  "fnCreateField(fld);\n ";
*/
return $cntribHtml;
}

function createTran($dataArr) 
{
$BillDate= $_POST['homespace_BillDate'  ];
$mkrUserId =$_SESSION['UserId'] ;
$Sno= $_POST['homespace_Sno'   ];
$GrpId= $dataArr[2];
$UsrId= $dataArr[3];

echo "//A:100:CreateTran\n";

$CrpPer       = "CrbPer_" . $dataArr[3];
$CrpPerFlg    = "CrbPer_" . $dataArr[3] .  "Flg";
$Shr          = "shr_"    . $dataArr[3];
$ShrFlg       = "shr_"    . $dataArr[3] . "Flg";
$Bal          = "bal_"    . $dataArr[3];

$nameCrpPer       = "homespace_CrbPer_" . $dataArr[3];
$nameCrpPerFlg    = "homespace_CrbPer_" . $dataArr[3] .  "Flg";
$nameShr          = "homespace_shr_"    . $dataArr[3];
$nameShrFlg       = "homespace_shr_"    . $dataArr[3] . "Flg";
$nameBal          = "homespace_bal_"    . $dataArr[3];




$valCrpPer         =  $_POST[$nameCrpPer   ] ;
$valCrpPerFlg      =  $_POST[$nameCrpPerFlg] ;
$valShr            =  $_POST[$nameShr      ] ;
$valShrFlg         =  $_POST[$nameShrFlg   ] ;
$valBal            =  $_POST[$nameBal      ] ;

$rtval= "//A:101 <$nameCrpPer>  = $valCrpPer \n // <$nameCrpPerFlg> =   $valCrpPerFlg \n// <$nameShr>  = <$valShr> \n // <$nameShrFlg>  = <$valShrFlg> \n  //<$Bal>  = <$valBal>  \n";
echo $rtval;

$shrQuery=" ";

if ( $valCrpPerFlg  == "Y"    )
{

$shrQuery.="insert into TRN003MB";
$shrQuery.="( ";
$shrQuery.="GRP_ID      ,";
$shrQuery.="GBKT_TXN_ID ,";
$shrQuery.="TBKT_TXN_ID ,";
$shrQuery.="USR_ID      ,";
$shrQuery.="TRAN_AMT    ,";
$shrQuery.="DR_CR_FLG   ,";
$shrQuery.="VALUE_DT    ,";
$shrQuery.="CRETED_DT   ,";
$shrQuery.="MAKER_ID    ,";
$shrQuery.="MODIFIED_DT ,";
$shrQuery.="AUTH_ID     ,";
$shrQuery.="BUS_DT      )";
$shrQuery.="values";
$shrQuery.="(";
$shrQuery.= $GrpId .",";
$shrQuery.="getNextSeq('TBKT_TXN_ID'),";
$shrQuery.= $Sno . ",";
$shrQuery.= $UsrId. ",";
$shrQuery.= $valCrpPer. ",";
$shrQuery.="'C',";
$shrQuery.=" STR_TO_DATE( '". $BillDate ."', '%d-%b-%Y' ) ,";
$shrQuery.="sysdate(),";
$shrQuery.=" " . $mkrUserId . " ,";
$shrQuery.="sysdate(),";
$shrQuery.=" " . $mkrUserId . " ,";
$shrQuery.="STR_TO_DATE( '". $BillDate ."', '%d-%b-%Y' ));";

$result=mysql_query($shrQuery);


if($result)
{
echo "//alert('Success 001');";

}
else
{
echo "//alert('Error 001');";

}
}


$shrQuery="";

if ( $valShrFlg  == "Y"  )
{



$shrQuery.="insert into TRN003MB";
$shrQuery.="( ";
$shrQuery.="GRP_ID      ,";
$shrQuery.="GBKT_TXN_ID ,";
$shrQuery.="TBKT_TXN_ID ,";
$shrQuery.="USR_ID      ,";
$shrQuery.="TRAN_AMT    ,";
$shrQuery.="DR_CR_FLG   ,";
$shrQuery.="VALUE_DT    ,";
$shrQuery.="CRETED_DT   ,";
$shrQuery.="MAKER_ID    ,";
$shrQuery.="MODIFIED_DT ,";
$shrQuery.="AUTH_ID     ,";
$shrQuery.="BUS_DT      )";
$shrQuery.="values";
$shrQuery.="(";
$shrQuery.= $GrpId .",";
$shrQuery.="getNextSeq('TBKT_TXN_ID'),";
$shrQuery.= $Sno . ",";
$shrQuery.= $UsrId . ",";
$shrQuery.= $valShr . ",";
$shrQuery.="'D',";
$shrQuery.=" STR_TO_DATE( '". $BillDate ."', '%d-%b-%Y' ) ,";
$shrQuery.="sysdate(),";
$shrQuery.=" " . $mkrUserId . " ,";
$shrQuery.="sysdate(),";
$shrQuery.=" " . $mkrUserId . " ,";
$shrQuery.=" STR_TO_DATE( '". $BillDate ."', '%d-%b-%Y' ));";

$result=mysql_query($shrQuery);

if($result)
{
echo "//alert('Success 001');";

}
else
{
echo "//alert('Error 001');";

}

}

echo  "//A:002:" . $shrQuery;
}
function create_share($dataArr1) 
{

echo "//$dataArr1[0];\n";
$balancHtml=  "createRow(); \n";
$balancHtml.=  "fld.name='shr_" . $dataArr1[3] . "';\n";
$balancHtml.=  "fld.label='" . $dataArr1[0] . "';\n" ;
$balancHtml.=  "fld.dataType=(glFuncCode== 'E' ) ? 'AMOUNT' : 'LABEL';\n";
$balancHtml.=  "fld.dflt='0';\n";
$balancHtml.=  "fld.desc='N';\n";
$balancHtml.=  "fld.parent='homespace';\n";
$balancHtml.=  "fld.mndf='N';\n";
$balancHtml.=  "fld.xml='N';\n";
$balancHtml.=  "fld.name='shr_".  $dataArr1[3] . "';\n";
$balancHtml.=  "fnCreateField(fld);\n";
$balancHtml.=  "fld.name='shr_".  $dataArr1[3] . "Flg';\n";
$balancHtml.=  "fld.label='Is ".  $dataArr1[0] . " Shared ?';\n";
$balancHtml.=  "fld.desc='N';\n";
$balancHtml.=  "fld.mndf='Y';\n";
$balancHtml.=  "fld.dflt='Y';\n";
$balancHtml.=  "fld.listVal='||Y|Y-Contributer|N|N-Noncontributer';\n";
$balancHtml.=  "fld.dataType='LIST';\n";
$balancHtml.=  "fld.parent='homespace';\n";
$balancHtml.=  "fnCreateField(fld);\n ";
return $balancHtml;

}

$all = mysql_fetch_all($result);


for($i = 0; $i < count($all); $i++)
{
     $rtCntrb.=create_cntribdtl($all[$i]);
     $rtShare.=create_share($all[$i]);
     $balDtl.=create_baldtl($all[$i]);
     $logic_1.=create_logic_1($all[$i]);
     $logic_2= $logic_2 .  "+"  . create_logic_2($all[$i]);
     $logic_3= $logic_3 .  "+"  . create_logic_3($all[$i]);
     $logic_4.=create_logic_4($all[$i]);
     $logic_5= $logic_5 . "+" . create_logic_5($all[$i]);
     $logon .= create_onload($all[$i]);

    if ( $FuncCode == 'C' )
	{
		$MakeTran=createTran($all[$i]);


//update  GID001TB gid set gid.cur_bal = (  select sum( (  case DR_CR_FLG  When  'C' then   tran_amt        else   tran_amt* -1 end  ) ) 
//from TRN003MB t,  GTRN002MB  gt  where t.usr_id=  gid.usr_id  and gt.GTXN_TXN_ID = t.TBKT_TXN_ID  and t.usr_id = gid.usr_id ) where gid.grp_id=47 

//	$sql=" update  GID001TB gid set gid.cur_bal =   (select  sum( (  case DR_CR_FLG  When  'C' then   tran_amt        else   tran_amt* -1 end  ) ) eff_amt  from TRN003MB  trn where trn.usr_id = gid.usr_id) where gid.grp_id  = ".$GroupId . " ";
	$sql=" update  GID001TB gid set gid.cur_bal = (  select sum( (  case DR_CR_FLG  When  'C' then   tran_amt        else   tran_amt* -1 end  ) ) 
from TRN003MB t,  GTRN002MB  gt  where t.usr_id=  gid.usr_id  and gt.GTXN_TXN_ID = t.TBKT_TXN_ID  and t.usr_id = gid.usr_id ) where gid.grp_id= ".$GroupId . " ";
			if ( insertQry($sql,$page,"Update Cur Bal")  != 0 )
			{
			echo "//alert('error')";
			}

	}

}
$logic_2= $logic_2 . ");";
$logic_3= $logic_3 . ") ) *100)/100;\n";
$logic_5= $logic_5 . ");\n";
echo $rtCntrb;
echo $rtShare;
echo $balDtl;
//echo $logic_1;
//echo $logic_2;
//echo $logic_3;



$jsfunc = "function homepace_onCrbChange( obj)\n";
$jsfunc .= "{\n";

//$jsfunc .= "	if(  obj.id != 'SpndAmt' )\n";
$jsfunc .= "\n";
/*[
$jsfunc .= "	if( document.getElementById('CrbPer1').value.length  ==  0)\n";
$jsfunc .= "	document.getElementById('CrbPer1').value = 0;\n";
$jsfunc .= "	if( document.getElementById('CrbPer2').value.length  ==  0)\n";
$jsfunc .= "	document.getElementById('CrbPer2').value = 0;\n";
$jsfunc .= "	if( document.getElementById('CrbPer3').value.length  ==  0)\n";
$jsfunc .= "	document.getElementById('CrbPer3').value = 0;\n";
$jsfunc .= "	if( document.getElementById('CrbPer4').value.length  ==  0)\n";
$jsfunc .= "	document.getElementById('CrbPer4').value = 0;\n";
$jsfunc .= "	if( document.getElementById('CrbPer5').value.length  ==  0)\n";
$jsfunc .= "	document.getElementById('CrbPer5').value = 0;\n";
//]*/
$jsfunc .= $logic_1;
$jsfunc .= "\n";
/*[ static ]*/
$jsfunc .= "\n";
$jsfunc .= "//logic 2\n";
$jsfunc .= $logic_2;

$jsfunc .= "\n";
//$jsfunc .= "	 document.getElementById('ShrCnt').value =( (document.getElementById('CrbPer1Flg').value  == 'Y')?1 :0)  + ( (document.getElementById('CrbPer2Flg').value  == 'Y')?1 :0)  + ( (document.getElementById('CrbPer3Flg').value  == 'Y')?1 :0)  + ( (document.getElementById('CrbPer4Flg').value  == 'Y')?1 :0)  + ( (document.getElementById('CrbPer5Flg').value  == 'Y')?1 :0)  ;\n";
$jsfunc .= "\n";
//[ static
$jsfunc .= "\n";
$jsfunc .= "	if (document.getElementById('SpndAmt').value.length!=0)	\n";
$jsfunc .= "	{\n";
$jsfunc .= "		document.getElementById('ShrAmt').value= Math.round(parseFloat( document.getElementById('SpndAmt').value)/parseFloat( document.getElementById('ShrCnt').value) * 100 )/100;\n";
$jsfunc .= "	}\n";
//]

 // document.getElementById('shr_3').value= parseFloat( document.getElementById('CrbPer_3').value) -parseFloat( document.getElementById('ShrAmt').value);

$jsfunc .= "//logic_4\n";
$jsfunc .= $logic_4;

$jsfunc .= "\n";
$jsfunc .= "//logic_3";
$jsfunc .= $logic_3;

$jsfunc .= "//logic_5\n";
$jsfunc .= $logic_5;

//document.getElementById('BalTtl').value=Math.round((( 0+parseFloat( document.getElementById('shr_1Flg').value)+parseFloat( document.getElementById('shr_3Flg').value)) ) *100)/100;
/*[
$jsfunc .= "	if( document.getElementById('CrbPer1Flg').value  == 'Y')\n";
$jsfunc .= "	document.getElementById('BalPer1').value= parseFloat( document.getElementById('CrbPer1').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$jsfunc .= "	if( document.getElementById('CrbPer2Flg').value  == 'Y')\n";
$jsfunc .= "	document.getElementById('BalPer2').value= parseFloat( document.getElementById('CrbPer2').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$jsfunc .= "	if( document.getElementById('CrbPer3Flg').value  == 'Y')\n";
$jsfunc .= "	document.getElementById('BalPer3').value= parseFloat( document.getElementById('CrbPer3').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$jsfunc .= "	if( document.getElementById('CrbPer4Flg').value  == 'Y')\n";
$jsfunc .= "	document.getElementById('BalPer4').value= parseFloat( document.getElementById('CrbPer4').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$jsfunc .= "	if( document.getElementById('CrbPer5Flg').value  == 'Y')\n";
$jsfunc .= "	document.getElementById('BalPer5').value= parseFloat( document.getElementById('CrbPer5').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$jsfunc .= "\n";
]*/

//$jsfunc .= "	document.getElementById('BalTtl').value= Math.round( ( parseFloat( document.getElementById('BalPer1').value) +parseFloat( document.getElementById('BalPer2').value) +parseFloat( document.getElementById('BalPer3').value) +parseFloat( document.getElementById('BalPer4').value) +parseFloat( document.getElementById('BalPer5').value) ) *100)/100;\n";

//$jsfunc .= "	document.getElementById('CrbTtl').value= parseFloat( document.getElementById('CrbPer1').value) +parseFloat( document.getElementById('CrbPer2').value) +parseFloat( document.getElementById('CrbPer3').value) +parseFloat( document.getElementById('CrbPer4').value) +parseFloat( document.getElementById('CrbPer5').value);\n";
$jsfunc .= "	document.getElementById('BalDiff').value= parseFloat( document.getElementById('CrbTtl').value) - parseFloat( document.getElementById('SpndAmt').value);\n";


$jsfunc .= "\n";
$jsfunc .= "}\n";


$jsfunc .= "function  onLoadPage()\n";
$jsfunc .= "{\n";
//$jsfunc .= "	alert('On Load php');\n";
$jsfunc .= "\n";
$jsfunc .= "	var div='Sno';\n";
$jsfunc .= "	var url='grpid.php';\n";
$jsfunc .= "	var json={seqname:'TRANID'};\n";
$jsfunc .= "   if(glFuncCode== 'E' ) \n";
$jsfunc .= "	onPostReq(url,json,div,'OBJ');\n";

$jsfunc .= "	 div='StmtMonthDiv'; \n";
$jsfunc .= "	 url='getStmtDesc.php'; \n";
$jsfunc .= "	 json={USRID:glUserId, GROUPID:glGroupId }; \n";
$jsfunc .= "	onPostReq(url,json,div,'DIV'); \n";

$jsfunc .= "	if (glFuncCode== 'C' ) { \n";
$jsfunc .= "	 div='monthlyBalDiv'; \n";
$jsfunc .= "	 url='getUsrMonBal.php'; \n";
$jsfunc .= "	 json={USRID:glUserId, GROUPID: glGroupId,  STMTID:glStmtMonth   };  \n";
$jsfunc .= "	onPostReq(url,json,div,'DIV'); }\n";


		
$jsfunc .= "\n";
$jsfunc .= "	try\n";
$jsfunc .= "	{\n";
$jsfunc .= "\n";
$jsfunc .= "		document.getElementById('GroupId').value= glGroupId ;\n";
$jsfunc .= "		document.getElementById('UserId').value= glUserId ;\n";
$jsfunc .= "		document.getElementById('EmailId').value= glEmailId ;\n";
$jsfunc .= "		document.getElementById('GroupName').value= glGroupName ;\n";
$jsfunc .= "		document.getElementById('Sno').value=glSno;\n";
$jsfunc .= "		document.getElementById('Bank'  ).value=glBank;\n";
$jsfunc .= "		document.getElementById('CardNum'  ).value=glCardNum;\n";
$jsfunc .= "		document.getElementById('BillDate'  ).value=glBillDate;\n";
$jsfunc .= "		document.getElementById('Descr'  ).value=glDescr ;\n";
//$jsfunc .= "		document.getElementById('CrbPer_1'  ).value=glCrbPer_1 ;\n";
$jsfunc .= "		document.getElementById('SpndAmt').value=glSpndAmt;\n";
$jsfunc .= "		document.getElementById('ShrCnt' ).value=glShrCnt ;\n";
$jsfunc .= "		document.getElementById('ShrAmt' ).value=glShrAmt ;\n";
$jsfunc .= "		document.getElementById('CrbTtl' ).value=glCrbTtl ;\n";
$jsfunc .= "		document.getElementById('BalTtl' ).value=glBalTtl ;\n";
$jsfunc .= "		document.getElementById('BalDiff' ).value=glBalDiff ;\n";
$jsfunc .= "		document.getElementById('Vendor' ).value=glVendor ;\n";
$jsfunc .= "		document.getElementById('PayMode' ).value=glPayMode ;\n";
//$jsfunc .= "		document.getElementById('StmtMonth' ).value=glStmtMonth ;\n";
$jsfunc .= "		document.getElementById('IsSettlmnt' ).value=glIsSettlmnt ;\n";
$jsfunc .= "		document.getElementById('rlt'    ).value=glrlt;\n";
$jsfunc .= "		document.getElementById('FuncCode'    ).value=glFuncCode;\n";
$jsfunc .=  $logon ;
$jsfunc .= "\n";
$jsfunc .= "	}\n";
$jsfunc .= "	catch(e)\n";
$jsfunc .= "	{\n";
$jsfunc .= "		alert('ONLException: ' + e);\n";
$jsfunc .= "	}\n";
$jsfunc .= "}\n";



echo $jsfunc;


?>


	createRow();


	endNewTbl();	



	


	</script>

	<table>
		<tr>
			<td>	
				<center>
				<input type="button" class="button" parent="hometran"  task="BACK" value="BACK" onclick="javascript:onClick(this)" >
				<input type="button" class="button" parent="hometran"  task="VALIDATE" value="validate" onclick="javascript:onClick(this)" >
				<input type="button" class="button" parent="hometran"  task="SUBMIT"   value="submit"   onclick="javascript:onClick(this)" >
				</center>
			</td>
		</tr>
	</table>
</div>
</form>
</body>
</html>
