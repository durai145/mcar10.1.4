<?php

ob_start(); 

function logerr($USRID,$page,$err_code, $err_desc, $error_text)
{

//	$sql="INSERT INTO db_errors (paerror_page,error_text,err_code,err_desc) VALUES ( '" . $page . " ','" .escape_data($error_text). "', '" . $err_code . " ', ' " . $err_desc ."')" ; 

$sql ="INSERT INTO db_errors (error_page,err_code,error_text,err_desc,maker_id,MODIFIED_DT) VALUES ( \"" . $page . "\",\"" . $err_code  . "\",\"" . $error_text . "\" , \"" . $err_desc . "\" , " . $USRID ." , sysdate())" ;

	echo "<br> $sql </br>";

	mysql_query($sql);

	mysql_error();
	if (mysql_errno()) 
	{ 
		$error = "$sql"; 
		echo $error;
	} 


return 0;

}


function getCount($USRID,$sql,$page,$err_desc)
{


	$result=mysql_query($sql);
	if (mysql_errno()) 
	{ 

		logerr($USRID,$page, mysql_errno(),  mysql_error(), $sql);
		return -1;
	} 
	else
	{

		$row = mysql_fetch_row($result);
		$record=count($row);
		$count=$row[0];


	}



return $count;
}




function insertQry($USRID,$sql,$page,$err_desc)
{

	$rtCount=0;
	
	$result=mysql_query($sql);
	if (mysql_errno()) 
	{ 

		logerr($USRID,$page, mysql_errno(),  mysql_error(), $sql);
		return -1;
	} 
	else
	{

	$rtCount=0;

	}




return 0;

}

function getSelectArray($USRID,$sql,$page,$err_desc)
{
	$result=mysql_query($sql);
		if (mysql_errno()) 
	{ 

		logerr($USRID,$page, mysql_errno(),  mysql_error(), $sql);
		return -1;
	} 
	else
	{

	//$row = mysql_fetch_row($result);
	//$record=count($row);
	//echo "Record:$record  $row[0]\n";
	//$count=$row[0];

	return $result;


	}


	
}

function getUsrIds($USRID,$sql,$page,$err_desc,$STMTID)
{

//	echo "get Desc";

echo "";

$sql="select GRP_ID  GRPID , USR_ID from STMT001MB st , GID001TB gid where  st.GRP_ID = gid.GRP_ID and st.STMTID= '$STMTID' ";
$result=mysql_query($sql);

echo "";
for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
{ 
// print "<option selected='' value='C'> C-Card</option><option value='O'> O-ONLINE</option>";

while ($row = mysql_fetch_row($result)) 
{ //Table body


echo "<option value='$row[0]' >$row[1] </option> ";

}


}
echo "</select>";
echo "</tdf>";
}


function getDesc($GROUPID)
{

//	echo "get Desc";

echo "";

$sql="select stmt_id , descr from STMT001MB where status = 'A' and GRP_ID= '$GROUPID' ";
$result=mysql_query($sql);

echo "<select datatype='LIST' name='homespace_StmtMonth' xmlname='StmtMonth' id='StmtMonth' xml='N' parent='homespace' class='ctext' value='C' mndf='Y' label='Statement' onchange='javascript:onChange(this);' onkeydown='javascript:onKeyDown(this);' onkeypress='javascript:onKeyPress(this);' onkeyup='javascript:onKeyUp(this);'>";
for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
{ 
// print "<option selected='' value='C'> C-Card</option><option value='O'> O-ONLINE</option>";

while ($row = mysql_fetch_row($result)) 
{ //Table body


echo "<option value='$row[0]' >$row[1] </option> ";

}


}
echo "</select>";
echo "</td>";
}

if ($DEBUG == 1)
{
	echo "<br>DEBUG is started";


}

?>
