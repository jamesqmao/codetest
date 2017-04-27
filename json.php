<?php
/*
API service page for new feed test
params: security, category, search, page
return: json data
*/

include("dbcon.php");
	

// set per page number
$per_page = 3;

$sqlc = "show columns from news";

$rsdc = mysql_query($sqlc);
$cols = mysql_num_rows($rsdc);

$total = '';

if(isset($_REQUEST['total']))
		$total = $_REQUEST['total'];

$security = '';
if(isset($_REQUEST['security']))
$security = $_REQUEST['security'];

$cat = 'hot';
if(isset($_REQUEST['cat']))
$cat = $_REQUEST['cat']; 

$page = 1;
if(isset($_REQUEST['page']))
$page = $_REQUEST['page']; 
  
$search = " WHERE type='$cat' ";
 
if(isset($_REQUEST['search'])){
	if(!isset($_SESSION['search'])) 
		$_SESSION['search'] = $_REQUEST['search'];
	$search = $search. " AND (title like '%".$_REQUEST['search']."%' OR content like '%".$_REQUEST['search']."%' ) ";
}

// make sure of that related security code is set up
if($security != '')
{
	$start = ($page-1)*$per_page;
	$limit = '';
	if($total != 'true')
		$limit = " limit $start,$per_page";
	$sql = "select * from news $search order by id $limit";
	
	$rsd = mysql_query($sql);
	$num_rows = mysql_num_rows($rsd);
	?>

	<?php
	$data = array();
	while ($rows = mysql_fetch_assoc($rsd))
	{ 
			$data[] = $rows;
	}
	
	$d = '{ "per_page":"'.$per_page.'","error":"","sql":"{'.$sql.'}","total":"'.$num_rows.'","data":'. json_encode($data) .'}';
	echo $d;
}
else
	echo '{"error": "you are not authorized to access this page."}';
?>
 