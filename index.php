<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Code Test</title>
<link rel="stylesheet" type="text/css" media="screen" href="css.css" />
<script type="text/javascript" src="jquery-1.3.2.js"></script>
<script type="text/javascript">
 

$(document).ready(function(){
	 
	function load(p){ 
		// security code for api call
		var security = '54321';
		var cat = location.search.split('cat=')[1];
		if( cat == 'undefined')
			cat = 'hot';

		var s = $('#search').val();
		if(p == '')
				p = '1';
		$.ajax({
		    url: "json.php?security="+security+"&cat="+cat+"&search="+s+"&page=" + p, 
		    dataType: "json",
		    success: function(data) { 
		    	 
		    	if(data.error != '')
		    		alert(data.error);
		    	else
		    	{
			    	// set content empty
			        $('#content').empty(); 
			        for (var i=0;i<data.data.length;++i)
			        { 
			            $('#content').append('<div><a href="detail.php?id='+data.data[i].id+'" target="_blank"><h2>'+data.data[i].title+'</h2></a></>');
			        }
			    }
 
		    }
		});  
	}

	$('#search').keyup(function() {
		load(''); 
	});

	$("#paging_button li").click(function(){
		  
		$("#paging_button li").css({'background-color' : ''});
		$(this).css({'background-color' : '#006699'});
 		load(this.id);
 
	});
 
 	// init load
	load(''); 
}); 
</script>
</head>
<body>
 <div class="topnav" id="myTopnav">
  <a href="index.php?cat=hot" id="hot">Hot</a>
  <a href="index.php?cat=new" id="new">New</a> 
</div> 

<div><h1>News Feed</h1></div>
<div align="center">

	<div id="container">
	
		<div class="search-background">
			<label><img src="loader.gif" alt="" /></label>
		</div>
	
		<div id="content">
		&nbsp;
		</div>
		
	</div>
	<div>
			Search: <input type="text" id="search" value="">
	</div>
	<div id="paging_button" align="center">
		<ul> 
		<script>
		var security = '54321';
		// get category info
		var cat = location.search.split('cat=')[1];
		if( cat == 'undefined')
			cat = 'hot';

		// set selected category bg color
		if(cat == 'hot')
				$("#hot").css({"background-color":"#4CAF50"});	
		if(cat == 'new')
				$("#new").css({"background-color":"#4CAF50"});	

		// get total and set pagination
 		var per_page = 1;  
 		var total = 1;  
 		var s = $('#search').val(); 
 		var p = '1';

		$.ajax({
		    'async': false, 
		    url: "json.php?total=true&security="+security+"&cat="+cat+"&search="+s+"&page=" + p, 
		    dataType: "json",
		    success: function(data) { 
		    	per_page = data.per_page;  
		        total = data.total;  
		    }
		}); 
		var pages = Math.ceil(total/per_page);
		for (var i=1;i<=pages;++i)
		{ 
		    $('#paging_button ul').append('<li id="'+i+'">'+i+'</li>');
		} 
		</script>
		</ul>
	</div>
</div>
</body>
</html>
