<?php 
include('dbconnect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<title>Photo Gallery</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./myscript/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./myscript/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./myscript/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="./myscript/style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Photo ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; - &nbsp; ' + title : '') + '</span>';
				}
			});

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various2").fancybox();

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script>
</head>

<body>

<p align="right"><input type="button" value="Close Window" onClick="javascript:window.close()" style="font-size: 14pt; font-family: Verdana; color: #000000"></p>
	
	<div id="content">
		<h1 style="border-bottom: 1px dotted green;padding-bottom: 15px;width: 400px;">Photo Gallery / ফটো গ্যালারী</h1>
		<p>
			<?php
				$result= mysql_query("select * from gallary_tbl order by gal_id desc" ) or die (mysql_error());
				while ($row = mysql_fetch_array ($result)){
			?>
			<a rel="example_group" href="backend/upload/<?php echo $row['gal_photo']; ?>" title="<?php echo $row['gal_cap'];?>"><img style="height: 100px;width: 100px;"alt="" src="backend/upload/<?php echo $row['gal_photo']; ?>" /></a>
			<?php } ?>
		</p>
	</div>

</body>
</html>