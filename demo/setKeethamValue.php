<?php

ob_start(); 


$ID=$_POST['ID'];
$DEBUG=$_POST['DEBUG'];
$SAK=$_POST['SAK'];
$LANG=$_POST['LANG'];

$page="setKeethamValue.php";

include('config.php');
include('mysqlcommon.php');



#echo "TEST";
// table nam





/*[


	if ($DEBUG == 1)
	{
		echo "<br>V:002: {$sql}";
	}
	$count=getCount($USRID,$sql,$page,"Validate STMTID");
	if ($DEBUG == 1)
	{
		echo "<br>V:003: {$sql}";
		echo "count=[" . $count . "]";
	}

	if ( $count != 0 )
	{

		$sql="select usr_id from GID001TB where grp_id=" .  $GROUPID ;
		if ($DEBUG == 1)
		{
			echo "V:004: {$sql}";
		}
		$groupList=getSelectArray($USRID,$sql,$page,$err_desc);



		//for ($i=0; $i < mysql_num_fields($groupList); $i++) //Table Header
		{ 

		//	while ($row = mysql_fetch_row($groupList)) 
			{ 

				if ($DEBUG == 1)
				{
					echo "row [0]=[". $row[0] . "]";

	
				}
				$fusrid= $row[0];

				$sql="SELECT COUNT(1)  FROM STMT002MB WHERE STMT_ID = " . $STMTID . " and USR_ID = ". $fusrid ;


				if ($DEBUG == 1)
				{
				echo "<br>V:005: {$i }#{$sql}";
				}
				$count=getCount($USRID,$sql,$page,"Validate STMTID");
				if ($DEBUG == 1)
				{
				echo "<br>count=[" . $count . "]";
				}

				if ( $count == 0 )
				{

					$sql="INSERT INTO STMT002MB (grp_id,stmt_id,usr_id,mon_bal,mon_spnd,descr, CREATED_DT, MAKER_ID , MODIFIED_DT, AUTH_ID)VALUES('$GROUPID'," . $STMTID . " ,". $fusrid ." ,0,0,upper(DATE_FORMAT(sysdate(),'%b_%Y')),  sysdate(), $USRID, sysdate(),$USRID)";

						if ($DEBUG == 1)
						{
							echo "<br>V:007:{$i }# {$sql}";
						}

						if(insertQry($USRID,$sql,$page,"Insert Monthly Bal")!= 0)	
						{
							echo "System Error :STMTMONBAL0001";

						}

				}

				$sql=" update  STMT002MB gid set gid.mon_bal = (  select sum( (  case DR_CR_FLG  When  'C' then   tran_amt        else   tran_amt* -1 end  ) ) 
from TRN003MB t,  GTRN002MB  gt  where t.usr_id=  gid.usr_id  and gt.GTXN_TXN_ID = t.TBKT_TXN_ID  and t.usr_id = gid.usr_id  and gid.stmt_id = gt.stmt_id ) where gid.grp_id= ".$GROUPID . " ";
			if ( insertQry($USRID,$sql,$page,"Update Cur Bal")  != 0 )
			{
				echo "System Error :STMTMONBAL0002";
			}


			

			}


		}


		
	
	}
	else
	{
	
}

}
]*/

//$DEBUG=1;

echo "$ID"; 
echo "$SAK"; 

//if ($ID != "" && $SAK != "")
{
				//$sql="SELECT swram  FROM NOTE001MB WHERE ID = " . $ID;

				
				$sql=" select count(1) from NOTE001MB  WHERE swarm_id = '" . $ID . "' " ;


				if ($DEBUG == 1)
				{
				echo "<br>V:005: {$i }#{$sql}";
				}
				$count=getCount($USRID,$sql,$page,"get Geetham");
				if ($DEBUG == 1)
				{
				echo "" . $count . "]";
				}

				if ($count > 0 )
				{
				$sql=" update NOTE001MB set swaram= '" . $SAK . "' WHERE swarm_id= '" . $ID . "' " ;
				}
				else
				{
				$sql=" inset into NOTE001MB ( swarm_id, swaram)  values ( '" . $ID . "' , '" . $SAK . "'" ;
				}
				
				echo $count;

}
/*
else
{
	echo "Required fields are missing";
}

*/

?>
