<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Code Test</title>
<link rel="stylesheet" type="text/css" media="screen" href="css.css" />

</head>
<body>
<?php
 
include("dbcon.php");
$sql = "select * from news where id=".$_GET['id'];
$rsd = mysql_query($sql); 
$row = mysql_fetch_assoc($rsd);
?>
<div align="center">

	<div id="container">
	
		<div id="title">
		<h1><?php echo $row['title'];?>&nbsp;</h1>
		</div> 
		<div id="content" style="margin-top:40px">
		<?php echo $row['content'];?>&nbsp;
		</div>
		<div style="margin:30px;">
				<form name="feedback">
						Current avg rate: 3.77
						<br>
						Rate: <select name="rate">
								<option>1</option>
								<option>2</option>
								<option>3</option>
 								<option>4</option>
								<option>5</option>
							</select>
						<br>
						Comments:
						<br>		
							<br>
						Add Comment:<textarea name="comment"></textarea>
 						<br>
						<input type="submit" name="submit" value="Submit">			
				</form>
		</div>
	</div>
	 
</div>
</body>
</html>
